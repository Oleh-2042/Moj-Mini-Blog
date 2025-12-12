# 🎮 Mini-Blog GameDev: Projekt Zaliczeniowy

Prosta, dynamiczna aplikacja webowa typu Blog, stworzona w ramach projektu zaliczeniowego. Umożliwia publikowanie artykułów, komentowanie oraz prowadzenie dyskusji (zagnieżdżone odpowiedzi). Tematyka projektu skupia się wokół Game Developmentu.

## 🔗 Linki do projektu
* **Działająca aplikacja (Hosting): http://my-blog-project.atwebpages.com/index.html
* **Repozytorium GitHub: https://github.com/Oleh-2042/Moj-Mini-Blog
* **Prezentacja Wideo (YouTube):** [TUTAJ WKLEJ LINK DO NAGRANIA]
* **Prezentacja PDF: https://drive.google.com/file/d/1KF6DDm873F_HorOd4McwtcH-cyogELvA/view?usp=sharing

## 🚀 Główne funkcjonalności
1.  **Artykuły:**
    * Dodawanie nowych wpisów (tytuł, autor, treść).
    * Obsługa formatowania kodu w treści (tag `<pre>`).
    * Automatyczne obliczanie szacowanego czasu czytania (Reading Time).
    * Wyświetlanie daty publikacji.
2.  **System dyskusji:**
    * Dodawanie komentarzy pod artykułami.
    * **Unikalna funkcja:** Dodawanie odpowiedzi na komentarze (zagnieżdżanie/drzewko dyskusji).
    * Automatyczne generowanie awatarów (Pixel Art) na podstawie nazwy użytkownika.
3.  **UX/UI:**
    * Nowoczesny design w stylu "Cyberpunk/Dark Mode".
    * Animacje CSS (Scanline, Glow, Slide-in).
    * W pełni responsywny interfejs (RWD).

## 🛠 Technologie
Projekt został zrealizowany przy użyciu:
* **Frontend:** HTML5, CSS3 (Custom Animations), JavaScript (Vanilla ES6+).
* **Backend:** PHP (Native) – obsługa API REST.
* **Baza danych:** JSON (Flat-file database: `db.json`) – lekkie i szybkie rozwiązanie bez konieczności instalacji SQL.

## 💻 Instrukcja uruchomienia lokalnie
Aby uruchomić projekt na własnym komputerze:

1.  **Wymagania:** Zainstalowane środowisko PHP (np. XAMPP, WAMP lub wbudowany serwer PHP).
2.  **Klonowanie:** Pobierz repozytorium:
    ```bash
    git clone [LINK DO TWOJEGO REPOZYTORIUM]
    ```
3.  **Uruchomienie serwera:**
    * Skopiuj pliki do folderu `htdocs` (jeśli używasz XAMPP).
    * LUB otwórz terminal w folderze projektu i wpisz:
    ```bash
    php -S localhost:8000
    ```
4.  **Uprawnienia:** Upewnij się, że plik `db.json` ma prawa do zapisu.
5.  **Start:** Otwórz przeglądarkę pod adresem `http://localhost:8000`.

---
*Autor: Oleg [Twoje Nazwisko] | Grupa: [Twoja Grupa]*
