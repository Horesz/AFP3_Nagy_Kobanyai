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
| Frontend | 2024.11.30. | A weboldal megjelenésének tesztelése | A weboldal design-ja teljesen megfelelő, elfogadható és ízléses | Működik |
| Backend | 2024.11.30. | A backendben megírt kódok megfelelő működése | A backend eddig megírt kódjai működtek, a termék kosárba helyezése megfelelő, a pizzák megjelennek |  Működik | A pizzakészítő nem megfelelő |

A Béta teszt során a vizsgált elemek nem teljesen hibátlanul működtek. A felület jól néz ki, egyes pizzákhoz azonban nincsen kép, az nem ideális illetve a Pizzakészítő nem helyesen müködik.

A végleges tesztelés során az összes fent felsorolt vizsgálati elem újra ellenőrzésre kerül. Ezzel együtt az új funkciók is tesztelésre kerülnek majd, illetve a pizzakészítő is.