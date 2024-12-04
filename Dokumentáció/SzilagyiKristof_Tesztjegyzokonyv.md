# Tesztjegyzőkönyv

Teszteléseket végezte: Szilágyi Kristóf

Operációs rendszer: Windows 10


## Alfa teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Regisztráció | 2024.11.24. | Az adatbázis elmenti a user adatait és be is lépjen vele együtt | Működik | - |
| Belépés | 2024.11.25. | A felhasználónév és jelszó beírásával beengedjen a rendszer | Működik | A bejelentkezés után volt egy külön dashboard gomb ami a main oldalra vitt, ami felesleges. |
| Profil | 2024.11.27. | Bejelentkezés után lehessen szerkeszteni a saját adatainkat. | Működik | - |
| Adatbázis | 2024.11.27. | Van kapcsolat és migráció is jól működjön.  | Működik | - |
| Autentikáció | 2024.11.28. | Egyes funkciók egyes belépés után működnek. | Működik | - |

Az Alfa tesztelés során a megvizsgált emelek müködtek hibák nélkül, javításra csak egy-két mellék elem szorult.

A többi jövőbeli tesztnél több funkcionális teszt lesz.

## Béta teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Navigációs menü | 2024.11.29. | A menüsorban a gombok megjelennek és jó helyre irányítanak | Részlegesen működik | a menük pont nem vitt sehova csak hibakódot adott ki. |
| Navigációs menü | 2024.11.29. | A menüsorban a gombok megjelennek és jó helyre irányítanak | Működik | - |
| Pizzák kilistázása | 2024.11.30. | A pizzák oldalon megjelennek a pizzák  | Működik | - |
| Pizzakészítő | 2024.11.30. | Saját pizzát készíteni és berakni a kosarába a felhasználó | Nem Működik | Nem rendsen tölti fel az adatbázisba, hibás a gombja. |
| Kosár | 2024.11.30. | A hozzáadott étel megjelenik a kosárban. | Működik | - |
| Frontend | 2024.11.30. | A weboldal megjelenésének tesztelése | A weboldal design-ja teljesen megfelelő, elfogadható és ízléses | Működik | A bejelentkezés után dashboard gomb mindig ott van, register résznél egy másik nagy logó lóg bele a képbe, de attól függetlenül működik. |
| Backend | 2024.11.30. | A backendben megírt kódok megfelelő működése | Az eddig megírt kódok működjenek, a termékek kosárba helyezése megfelelő, a pizzák megjelennek |  Működik | A menu pontban a kosár redirectel rossz helyre és rossz dolgokat ad hozzá a kosárhoz. |

A Béta teszt során voltak fennakadások működésben, a felület kinézetre 90%-ban kész van, a menu oldalon a design se a funckionalitás még nem tökéletes, de már közel van a készhez.

A végleges tesztnél az összes ilyen elemet újra fogom tekinteni.

## Végleges teszt
| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Adatbázis | 2024.12.03. | Adatbázis működés ellenőrzése | A táblák a küldött adatokat sikeresen rögzítik, adatvesztés nincs. | Nem tapasztaltam hibát. |
| Regisztráció | 2024.12.03. | Regisztrálás a weboldalra | Fiók regisztrálása sikeres. | Nem tapasztaltam hibát. |
| Belépés | 2024.12.03. | Bejelentkezés a weboldalra | Belépés a weboldalra sikeres. | Nem tapasztaltam hibát. |
| Pizzák kilistázása | 2024.12.03. | A pizzák felületen megjelennek a rendelhető pizzák | A pizzák igényesen megjelennek képekkel | Nem tapasztaltam hibát. | 
| Pizzakészítő | 2024.12.03. | A felhasználó tud saját pizzát készíteni és berakni a kosarába | A Pizzakészítő felület megjelenik elfogadhatóan, a küldés gomb müködik |Nem tapasztaltam hibát. |
| Keresés | 2024.12.13. | A pizzák oldalon lehet név szerint szűrni a termékek közt | A szűrők megfelelően működnek. | Nem tapasztaltam hibát. |
| Rendezés | 2024.12.13. | A pizzák oldalon lehet név szerint, ár szerint és feltételek szerint rendezni | A szűrők megfelelően működnek. | Nem tapasztaltam hibát. |
| Kosár | 2024.12.13. | Minden felhasználó a saját kosarát meg tudja nézni | A kosarok oldalon megjelennek a megfelelő adatok és müködik a méret állitás is. | Nem tapasztaltam hibát. |
| Rendelés leadása | 2024.12.13. | Minden felhasználó a rendelésre kattintva meg tudja adni az adatait és képes rendelni | Megjelenik a megfelelő form és a felhasználó képes beküldeni | Nem tapasztaltam hibát. |
| Frontend | 2024.11.30. | A weboldal megjelenésének tesztelése | A weboldal design-ja teljesen megfelelő, elfogadható és ízléses | Nem tapasztaltam hibát. |
| Backend | 2024.11.30. | A backendben megírt kódok megfelelő működése | A backend eddig megírt kódjai működtek, a termék kosárba helyezése megfelelő, a pizzák megjelennek | Nem tapasztaltam hibát. |

A Végleges teszt lezajlott és minden funkció rendesen működik, esztétikailag is megfelelő a program.

Átadásra készen áll a megrendelőnek.

Tesztelést végezte és írta: Szilágyi Kristóf

Befejezve: 2024.12.04.
