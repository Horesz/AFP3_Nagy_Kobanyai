# Tesztjegyzőkönyv

Teszteléseket végezte: Győrfi Bence Gábor

Operációs rendszer: Windows 11

## Alfa teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Regisztráció | 2024.11.17. | User adatait a táblában eltárolja | Nem működik még | - |
| Belépés | 2024.11.17. | Usernévvel ős megfelelő jelszővel belépünk az oldalra | Műkődik | - |
| Adatbázis | 2024.11.17. | Az adatbázis kapcsolat, migráció műkődik, egy-két módosítást igényelnek a táblák | Műkődik | Pizzák tábla nem megfelelően jelenik meg |
| Autentikáció | 2024.11.17. | Csak belépés után őrhetőek el a megfelelő funkciók | Műkődik | - |

Az Alfa tesztelés során a vizsgált elemek többnyire hibátlanul műkődtek.

Következõ tesztelésnél a többi funkció kerül vizsgálatra illetve elemzésre.

## Béta teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Navigációs menü | 2024.11.22. | A menüsorban a gombok a megfelelő oldalra irányítanak | Műkődik | - |
| Termékek kilistázása | 2024.11.22. | Az oldalon felsorolásként megjelennek az adatbázisban található termékek | Műkődik | - |
| Minden rendelés | 2024.11.22. | Adminok minden felhasználó rendelőseit látják. | Műkődik | - |
| Frontend | 2024.11.22. | A weboldal megjelenésének tesztelése | A weboldal design-ja elfogadható, átlátható. | Műkődik |
| Backend | 2024.11.22. | A backendben megírt kódok megfelelő műkődése | A backend eddig megírt kódjai tökéletesen műkődtek, a termék kosárba helyezése, majd onnan a rendelősek közé való felvétel megírásra szorul. | Műkődik |

A végleges tesztelés során az összes fent felsorolt vizsgálati elem újra ellenőrzésre kerül. Ezzel együtt az új funkciók is tesztelésre kerültek.

## Végleges teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Adatbázis | 2024.12.04. | Adatbázis műkődés ellenőrzése | A táblák a küldött adatokat sikeresen rögzítik, adatvesztés nincs. | Nem tapasztaltam hibát. |
| Regisztráció | 2024.12.04. | Regisztrálás a weboldalra | Fók regisztrálása sikeres. | Nem tapasztaltam hibát. |
| Belépés | 2024.12.04. | Belépés a weboldalra | Belépés a weboldalra sikeres. | Nem tapasztaltam hibát. |
| Autentikáció | 2024.12.04. | Felhasználó adatainak ellenőrzése | Megfelelő jogokkal rendelkező felhasználók belépés után több funkciót érnek el.| Nem tapasztaltam hibát.|
| Új termék | 2024.12.04. | Adminként új terméket lehet felvinni a táblába | Megfelelő jogosultsággal a felület megjelenik, a funkció működik. | Nem tapasztaltam hibát. | 
| Termékek listázása | 2024.12.04. | Az adatbázisban megtalálható termékek megjelennek a weboldalon | Bejelentkezett felhasználóként is megtekinthetőek a termékek. | Nem tapasztaltam hibát. |
| Szűrők | 2024.12.04. | A termékek oldalon lehet név szerint keresni, valamint rendezni a termékeket | A szűrők megfelelően működnek. | Nem tapasztaltam hibát. |
| Saját rendelések | 2024.12.04. | Minden felhasználó a saját rendelésit meg tudja nézni | Rendeléseim oldalon megjelennek a megfelelő adatok. | Nem tapasztaltam hibát. |
| Minden rendelés | 2024.12.04. | Adminként minden felhasználó rendeléseit meg lehet nézni | Az oldal megfelelően működik. | Nem tapasztaltam hibát.|
| Admin funkciók | 2024.12.04. | Új termék, minden rendelés felületek nem érhetőek el sima felhasználóknak | Csak admin jogosultsággal működnek a funkciók. | Nem tapasztaltam hibát. |
