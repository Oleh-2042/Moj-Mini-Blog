
# 🎮 Mini-Blog GameDev: Projekt Zaliczeniowy

Prosta, dynamiczna aplikacja webowa typu Blog, stworzona w ramach projektu zaliczeniowego. Umożliwia publikowanie artykułów, komentowanie oraz prowadzenie dyskusji (zagnieżdżone odpowiedzi). Tematyka projektu skupia się wokół Game Developmentu.

## 🔗 Linki do projektu

* **Działająca aplikacja (Hosting):** [http://my-blog-project.atwebpages.com/index.html](http://my-blog-project.atwebpages.com/index.html)
* **Repozytorium GitHub:** [https://github.com/Oleh-2042/Moj-Mini-Blog](https://github.com/Oleh-2042/Moj-Mini-Blog)
* **Prezentacja Wideo (YouTube):** [TUTAJ WKLEJ LINK DO SWOJEGO NAGRANIA]
* **Prezentacja PDF:** [Zobacz prezentację PDF](https://drive.google.com/file/d/1nYGv46TJgjbcr0e6GkUr7OPfMI027P9-/view?usp=sharing)

## 🚀 Główne funkcjonalności

1.  **Artykuły:**
    * Dodawanie nowych wpisów (tytuł, autor, treść).
    * Obsługa formatowania kodu w treści (tag `<pre>`).
    * Automatyczne obliczanie szacowanego czasu czytania (Reading Time).
    * Wyświetlanie sformatowanej daty publikacji.

2.  **System dyskusji:**
    * Dodawanie komentarzy pod artykułami.
    * **Unikalna funkcja:** Dodawanie odpowiedzi na komentarze (zagnieżdżanie/drzewko dyskusji).
    * Automatyczne generowanie awatarów (Pixel Art) na podstawie nazwy użytkownika.

3.  **UX/UI:**
    * Nowoczesny design w stylu "Cyberpunk/Dark Mode".
    * Zaawansowane animacje CSS (Scanline, Glow, Slide-in).
    * W pełni responsywny interfejs (RWD).

## 🛠 Technologie

Projekt został zrealizowany przy użyciu:
* **Frontend:** HTML5, CSS3 (Custom Animations), JavaScript (Vanilla ES6+).
* **Backend:** PHP (Native) – obsługa API REST.
* **Baza danych:** JSON (Flat-file database: `db.json`) – lekkie i szybkie rozwiązanie bez konieczności instalacji SQL.

## 💻 Wdrożenie na serwer (Deployment)

Projekt został wdrożony i jest hostowany na platformie **AwardSpace**.

**Proces wdrożenia:**
1.  **Serwer:** Wykorzystano darmowy hosting PHP oferowany przez AwardSpace.
2.  **Pliki:** Pliki projektu (`index.html`, `api.php`, `style.css`, `db.json`) zostały wgrane do katalogu głównego domeny za pomocą Menedżera Plików (File Manager).
3.  **Konfiguracja uprawnień:**
    * Dla pliku `db.json` ustawiono uprawnienia **CHMOD 777** (pełny zapis/odczyt).
    * Jest to niezbędne, aby skrypt PHP mógł zapisywać nowe artykuły i komentarze w pliku JSON na serwerze.

**Uruchomienie lokalne (dla deweloperów):**
Jeśli ktoś chciałby uruchomić ten kod na własnym komputerze:
1.  Wymagane jest środowisko PHP (np. XAMPP lub PHP w terminalu).
2.  Należy uruchomić serwer w folderze projektu: `php -S localhost:8000`.
3.  Otworzyć w przeglądarce `http://localhost:8000`.
---
*Autor:  | Grupa: Marochkanych Oleh 66765 Daria Yaroshenko 66783, Grupa 3 *
