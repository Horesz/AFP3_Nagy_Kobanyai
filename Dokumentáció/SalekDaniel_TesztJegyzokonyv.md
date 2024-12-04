# Tesztjegyzőkönyv

Teszteléseket végezte: Sálek Dániel

Operációs rendszer: Windows 10

## Alfa teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Adatbázis felépítése | 2024.11.17. | Az adatbázis struktúrája megfelelően létrejön | Működik | - |
| Adatbázis importálás | 2024.11.17. | Az adatbázis adatok sikeresen importálódnak | Működik | - |
| Adatbázis migráció | 2024.11.17. | Az adatbázis migráció hibátlanul lefut | Az adatbázis migráció nem működik automatikusan | Az adatbázis nem jön létre a migráció során |
| Pizzák oldal elkészítése | 2024.11.17. | A pizzák oldala megfelelően jelenik meg | Működik | Dizájn hiányos |

Az Alfa tesztelés során a vizsgált elemek többnyire hibátlanul műkődtek.

Következõ tesztelésnél a többi funkció kerül vizsgálatra illetve elemzésre.

## Béta teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Navigációs menü | 2024.11.22. | A menüsorban a gombok a megfelelő oldalra irányítanak | Műkődik | - |
| Termékek kilistázása | 2024.11.22. | Az oldalon felsorolásként megjelennek az adatbázisban található termékek | Műkődik | - |
| Frontend | 2024.11.22. | A weboldal design-ja elfogadható, átlátható. | Műkődik | - |
| Backend | 2024.11.22. | A backendben megírt kódok megfelelő műkődése | Műkődik | - |
| Pizzák oldal elkészítése | 2024.11.22. | A pizzák oldala megfelelően jelenik meg | Működik | - |
| Pizzák leírása felugró ablakban | 2024.11.22. | A pizzák leírása felugró ablakban megjelenik | Működik | - |
| Nagy Pizza| 2024.11.22. | Nagy pizzák rendelése lehetséges | A kosárban nem megfelelő ár jelenik meg | Kosárban lévő ár |
| Kosár oldal | 2024.11.22. | A kosár oldal megfelelően működik | Működik | - |
| Kosárban lévő pizzák megjelenítése | 2024.11.22. | A kosárban lévő pizzák helyesen jelennek meg | Működik | Dizájn hiányos |
| Kosár elemeinek módosítása | 2024.11.22. | A kosár elemei módosíthatóak | Működik de nem minenhol jelenik meg megfelelően | Nem frissül dinamukisan a gombra kattintva |
| Header és footer | 2024.11.17. | A header és footer minden oldalon megjelenik | Nem minden oldalon működik és néz ki meglfelelően | Backend |
| Fizetés oldal | 2024.11.22. | A fizetés oldal megfelelően működik | Működik | - |
| Sikeres rendelés visszaigazolása | 2024.11.22. | A sikeres rendelés visszaigazolása megjelenik | Működik | - |
| Adatbázis migráció | 2024.11.22. | Az adatbázis migráció hibátlanul lefut | Működik | - |
| Pizzák slider | 2024.11.22. | A pizzák slider megfelelően működik | Működik | Néha akadozik |

A végleges tesztelés során az összes fent felsorolt vizsgálati elem újra ellenőrzésre kerül. Ezzel együtt az új funkciók is tesztelésre kerültek.

## Végleges teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Adatbázis | 2024.12.03. | Adatbázis műkődés ellenőrzése | A táblák a küldött adatokat sikeresen rögzítik, adatvesztés nincs. |  - |
| Termékek listázása | 2024.12.03. | Az adatbázisban megtalálható termékek megjelennek a weboldalon | Megfelelően megjelennek a pizzák | - |
| Főoldal dizájn | 2024.12.03. | A főoldal dizájnja megfelelően jelenik meg | Működik | - |
| Főoldal véletlenszerű pizzák megjelenítése | 2024.12.03. | A főoldalon véletlenszerű pizzák jelennek meg | Működik | - |
| Header és footer | 2024.12.03. | A header és footer megfelelően jelenik meg | Működik | - |
| Nagy Pizza| 2024.12.03. | Nagy pizzák rendelése lehetséges | Működik | - |
| Kosárban lévő pizzák megjelenítése | 2024.12.03. | A kosárban lévő pizzák helyesen jelennek meg | Működik | - |
| Kosár elemeinek módosítása | 2024.12.03. | A kosár elemei módosíthatóak | Működik | - |
