# ⚙️ Dokumentacja Techniczna

## 1. Architektura
Projekt oparty jest na architekturze **Klient-Serwer**.
* **Frontend (Klient):** Przeglądarka wysyła zapytania AJAX (Fetch API) do serwera.
* **Backend (Serwer):** Skrypt `api.php` przetwarza żądania i zarządza danymi w pliku `db.json`.
* **Dane:** Przechowywane w formacie JSON, co zapewnia łatwość migracji i odczytu.

## 2. Model Danych (db.json)
Struktura pliku bazy danych:

```json
{
  "articles": [
    {
      "id": 1702345678,         // Timestamp (używany jako ID i data)
      "title": "Tytuł",
      "content": "Treść...",
      "author": "Autor",
      "comments": [
        {
          "id": 1702345999,
          "author": "Komentujący",
          "text": "Treść komentarza",
          "replies": [          // Tablica odpowiedzi (zagnieżdżenie)
             {
               "id": 1702346111,
               "author": "Odpowiadający",
               "text": "Treść odpowiedzi"
             }
          ]
        }
      ]
    }
  ]
}
---

### 3. Файл `docs/functional.md` (Функціональна документація)
*В тій же папці `docs` створи файл `functional.md`.*

```markdown
# 📖 Dokumentacja Funkcjonalna

## 1. Opis Widoków
Aplikacja składa się z dwóch głównych widoków:
1.  **Strona Główna (`index.html`):**
    * Formularz dodawania nowego artykułu.
    * Lista wszystkich opublikowanych artykułów (kafelki).
    * Każdy kafelek zawiera: tytuł, fragment treści, autora, datę oraz czas czytania.
2.  **Widok Artykułu (`article.html`):**
    * Pełna treść artykułu.
    * Sekcja komentarzy.
    * Formularze do dodawania komentarzy oraz odpowiedzi (pojawiające się dynamicznie).

## 2. Scenariusze Użytkownika (User Stories)

### A. Dodawanie artykułu
1. Użytkownik wchodzi na stronę główną.
2. Wypełnia pola: Tytuł, Imię, Treść.
3. Klika przycisk "OPUBLIKUJ".
4. Artykuł pojawia się na górze listy z animacją, a formularz zostaje wyczyszczony.

### B. Przeglądanie artykułów
1. Użytkownik widzi listę artykułów.
2. Może odczytać szacowany czas czytania (np. "2 min").
3. Klika "CZYTAJ DALEJ", aby przejść do szczegółów.

### C. Dodanie komentarza
1. W widoku artykułu użytkownik przewija do sekcji "Komentarze".
2. Wpisuje swoje imię i treść.
3. Klika "WYŚLIJ".
4. Komentarz pojawia się natychmiast, a przy nim generowany jest unikalny Pixel-Art Avatar.

### D. Dodanie odpowiedzi (Reply)
1. Użytkownik chce odpowiedzieć na konkretny komentarz.
2. Klika przycisk "ODPOWIEDZ ⤵" pod wybranym wpisem.
3. Otwiera się ukryty formularz odpowiedzi.
4. Użytkownik wpisuje treść i zatwierdza.
5. Odpowiedź pojawia się z wcięciem (zagnieżdżenie), tworząc czytelną strukturę dyskusji.
