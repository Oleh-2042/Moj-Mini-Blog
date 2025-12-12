<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json; charset=UTF-8");

$dbFile = 'db.json';

// Створення БД, якщо немає
if (!file_exists($dbFile)) {
    file_put_contents($dbFile, json_encode(['articles' => []]));
}

$method = $_SERVER['REQUEST_METHOD'];
$action = isset($_GET['action']) ? $_GET['action'] : '';

// --- ЧИТАННЯ (GET) ---
if ($method === 'GET') {
    $data = json_decode(file_get_contents($dbFile), true);

    if ($action == 'get_articles') {
        echo json_encode($data['articles']);
    } 
    elseif ($action == 'get_article') {
        $id = $_GET['id'];
        $found = null;
        foreach ($data['articles'] as $article) {
            if ($article['id'] == $id) {
                $found = $article;
                break;
            }
        }
        echo json_encode($found ? $found : ['error' => 'Not found']);
    }
}

// --- ЗАПИС (POST) ---
if ($method === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    $data = json_decode(file_get_contents($dbFile), true);

    // Додавання статті
    if ($action == 'add_article') {
        $newArticle = [
            'id' => time(),
            'title' => $input['title'],
            'content' => $input['content'],
            'author' => $input['author'] ?? 'Anonim',
            'comments' => []
        ];
        array_unshift($data['articles'], $newArticle); 
        file_put_contents($dbFile, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        echo json_encode(['status' => 'success']);
    }

    // Додавання коментаря
    elseif ($action == 'add_comment') {
        $articleId = $_GET['article_id'];
        foreach ($data['articles'] as &$article) {
            if ($article['id'] == $articleId) {
                $newComment = [
                    'id' => time(),
                    'author' => $input['author'],
                    'text' => $input['text'],
                    'replies' => []
                ];
                array_push($article['comments'], $newComment);
                break;
            }
        }
        file_put_contents($dbFile, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        echo json_encode(['status' => 'success']);
    }

    // Додавання ВІДПОВІДІ (Reply)
    elseif ($action == 'add_reply') {
        $articleId = $_GET['article_id'];
        $commentId = $_GET['comment_id'];

        foreach ($data['articles'] as &$article) {
            if ($article['id'] == $articleId) {
                foreach ($article['comments'] as &$comment) {
                    if ($comment['id'] == $commentId) {
                        if (!isset($comment['replies'])) $comment['replies'] = [];
                        $newReply = [
                            'id' => time(),
                            'author' => $input['author'],
                            'text' => $input['text']
                        ];
                        array_push($comment['replies'], $newReply);
                        break 2;
                    }
                }
            }
        }
        file_put_contents($dbFile, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        echo json_encode(['status' => 'success']);
    }
}
?>