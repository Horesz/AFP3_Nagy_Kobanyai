# Tesztjegyzőkönyv

Teszteléseket végezte: Márton Gergely

Operációs rendszer: Windows 11


## Alfa teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Regisztráció | 2024.11.27. | Az adatbázison belül az user adatait a user táblában sikeresen eltárolja | Működik | - |
| Belépés | 2024.11.27. | A felhasználó email címével és a hozzátartozó és megfelelő jelszóval bejelentkezünk az adott felhasználóként | Működik | - |
| Profil | 2024.11.27. | Bejelentkezett felhasználó a saját adatait meg tudja tekinteni, szerkeszteni | Működik | - |
| Adatbázis | 2024.11.27. | Az adatbázis kapcsolat, migráció működik | Működik | - |
| Autentikáció | 2024.11.27. | Csak belépés után érhetőek el a megfelelő funkciók | Működik | - |

Az Alfa tesztelés során a megvizsgált emelek müködtek hibák nélkül, javításra nem szorultak.

A következő teszteknél a többi funkció is tesztelésre fog kerülni.

## Béta teszt

| Vizsgálat | Tesztelés időpontja | Elvárás | Eredmény | Hibák |
| :---: | --- | --- | --- | --- |
| Navigációs menü | 2024.11.30. | A menüsorban a gombok megjelennek és a megfelelő helyre irányítanak | Működik | - |
| Pizzák kilistázása | 2024.11.30. | A pizzák felületen megjelennek a rendelhető pizzák | Működik | - |
| Pizzakészítő | 2024.11.30. | A felhasználó tud saját pizzát készíteni és berakni a kosarába | Nem Működik | A felület félkész és nincs rendesen bekötve az adatbázisba, hibát ad a hozzáadás gomb |
| Kosár | 2024.11.30. | A felhasználó által a kosárba helyezett pizzák megfelelően megjelennek. | Működik | - |
| Frontend | 2024.11.30. | A weboldal megjelenésének tesztelése | A weboldal design-ja teljesen megfelelő, elfogadható és ízléses | Működik | A Pizzakészítő csiszolásra szorul |
| Backend | 2024.11.30. | A backendben megírt kódok megfelelő működése | A backend eddig megírt kódjai működtek, a termék kosárba helyezése megfelelő, a pizzák megjelennek |  Működik | A pizzakészítő nem megfelelő |

A Béta teszt során a vizsgált elemek nem teljesen hibátlanul működtek. A felület jól néz ki, egyes pizzákhoz azonban nincsen kép, az nem ideális illetve a Pizzakészítő nem helyesen müködik.

A végleges tesztelés során az összes fent felsorolt vizsgálati elem újra ellenőrzésre kerül. Ezzel együtt az új funkciók is tesztelésre kerülnek majd, illetve a pizzakészítő is.

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

Tesztelést végezte és írta: Márton Gergely

Befejezve: 2024.12.03.