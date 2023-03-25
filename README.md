# licenciat_fiszki
Wersja aplikacji z podzielonym panelem administracyjnym
1. Ta wersja obejmuje możliwość zarządzania wieloma zestawami i ich edycje poprzez dodanie nowych słówek, ich aktualizacje, lub usunięcie.
2. Panel nauki, który losuje słówka  i odtwarza fonetyczną wymowę słowa pobierając nagranie z serweru diki
3. Eksport nowych tabel z pliku csv
4. Grę, która polega na dopasowaniu fiszek do obrazka, odtwarza wymowę fonetyczną, tworzy bibliotekę plików audio i zdjęć 
aktualnie jest to plik przyklad.php

Instalowanie aplikacji:
1. Zainstalować serwer xampp
2. Wrzucić pliki do katalogu htdoc
3. Zaimportować za pomocą phpmyadmin bazę danych fiszki_nauka_slowek.sql
4. Zalogować się do bazy danych przy użyciu użytkownika root (bez hasła)

Domyślne dane do połączenia z bazą danych:
1. host: 127.0.0.1
2. user: podaje użytkownik (domyślnie root)
3. hasło: podaje użytkownik (domyślnie bez hasła)
4. nazwa bazy danych: fiszki_nauka_słówek formatowanie tekstu utf8
