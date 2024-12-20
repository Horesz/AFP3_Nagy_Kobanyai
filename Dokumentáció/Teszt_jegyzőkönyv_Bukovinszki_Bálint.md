# Tesztjegyzőkönyv

Teszteléseket végezte: Bukovinszki Bálint

Operációs rendszer: Windows 11

## Alfa teszt

| Vizsgálat         | Tesztelés időpontja | Elvárás                                           | Eredmény  | Hibák |
| :---:             | ---                 | ---                                               | ---       | ---   |
| Regisztráció      | 2024.11.24.         | User adatait a táblában eltárolja                | Működik   | -     |
| Belépés           | 2024.11.25.         | Usernévvel és megfelelő jelszóval belépünk az oldalra | Működik | -     |
| Profil            | 2024.11.26.         | Bejelentkezett felhasználó a saját adatait meg tudja tekinteni, szerkeszteni | Működik | -     |
| Adatbázis         | 2024.11.27.         | Az adatbázis kapcsolat, migráció működik, egy-két módosítást igényelnek a táblák | Működik | -     |
| Autentikáció      | 2024.11.28.         | Csak belépés után érhetőek el a megfelelő funkciók | Működik   | -     |

Az Alfa tesztelés során a vizsgált elemek mind hibátlanul működtek mindenféle fennakadások nélkül.


Következő tesztelésnél a többi funkció kerül vizsgálatra illetve elemzésre.

## Béta teszt

| Vizsgálat           | Tesztelés időpontja | Elvárás                                                     | Eredmény  | Hibák |
| :---:               | ---                 | ---                                                         | ---       | ---   |
| Navigációs menü     | 2024.11.29.         | A menüsorban a gombok a megfelelő oldalra irányítanak       | Működik   | -     |
| Admin jogosultság   | 2024.11.29.         | Admin felhasználóknak több lehetősége van az oldalon.       | Működik   | -     |
| Új termék           | 2024.11.30.         | Az oldalon a megfelelő adatokat kitöltve új pizzát lehet hozzáadni az adatbázishoz. | Működik | - |
| Termékek kilistázása| 2024.11.30.         | Az oldalon felsorolásként megjelennek az adatbázisban található pizzák | Működik | -     |
| Rendeléseim         | 2024.11.30.         | Minden felhasználónak megjelennek az ő általa korábban rendelt pizzák. | Működik | - |
| Minden rendelés     | 2024.11.30.         | Adminok minden felhasználó rendelését látják.               | Működik   | -     |
| Frontend            | 2024.11.30.         | A weboldal megjelenésének tesztelése                        | A weboldal design-ja elfogadható, átlátható. | Működik |
| Backend             | 2024.11.30.         | A backendben megírt kódok megfelelő működése                | A backend eddig megírt kódjai tökéletesen működtek. A rendelés folyamata még fejlesztés alatt. | Működik |

A Béta teszt során a vizsgált elemek mind hibátlanul működtek mindenféle fennakadások nélkül.

A végleges tesztelés során az összes fent felsorolt vizsgálati elem újra ellenőrzésre kerül. Ezzel együtt az új funkciók is tesztelésre kerültek.

## Végleges teszt

| Vizsgálat           | Tesztelés időpontja | Elvárás                                                     | Eredmény  | Hibák |
| :---:               | ---                 | ---                                                         | ---       | ---   |
| Adatbázis           | 2024.12.02.         | Adatbázis működés ellenőrzése                               | A táblák a küldött adatokat sikeresen rögzítik, adatvesztés nincs. | Nem tapasztaltam hibát. |
| Regisztráció        | 2024.12.02.         | Regisztrálás a weboldalra                                   | Fiók regisztrálása sikeres. | Nem tapasztaltam hibát. |
| Belépés             | 2024.12.02.         | Bejelentkezés a weboldalra                                  | Belépés a weboldalra sikeres. | Nem tapasztaltam hibát. |
| Autentikáció        | 2024.12.02.         | Felhasználó adatainak ellenőrzése                           | Megfelelő jogokkal rendelkező felhasználók belépés után több funkciót érnek el. | Nem tapasztaltam hibát. |
| Profil              | 2024.12.02.         | Felhasználó szerkesztheti saját adatait                    | Saját adatok módosítása működik. | Nem tapasztaltam hibát. |
| Új termék           | 2024.12.03.         | Adminként új pizzát lehet felvinni a táblába               | Megfelelő jogosultsággal a felület megjelenik, a funkció működik. | Nem tapasztaltam hibát. |
| Termékek listázása  | 2024.12.03.         | Az adatbázisban megtalálható pizzák megjelennek a weboldalon | Bejelentkezett felhasználóként megtekinthetőek a termékek. | Nem tapasztaltam hibát. |
| Szűrők              | 2024.12.03.         | A pizzák oldalon lehet méret és ár szerint szűrni a pizzák között | A szűrők megfelelően működnek. | Nem tapasztaltam hibát. |
| Saját rendelések    | 2024.12.03.         | Minden felhasználó a saját rendeléseit meg tudja nézni      | Rendeléseim oldalon megjelennek a megfelelő adatok. | Nem tapasztaltam hibát. |
| Minden rendelés     | 2024.12.04.         | Adminként minden felhasználó rendeléseit meg lehet nézni    | Az oldal megfelelően működik. | Nem tapasztaltam hibát. |
| Admin funkciók      | 2024.12.04.         | Új termék, minden rendelés felületek nem érhetőek el sima felhasználóknak | Csak admin jogosultsággal működnek a funkciók. | Nem tapasztaltam hibát. |
| Frontend            | 2024.12.04.         | A weboldal megjelenésének tesztelése                        | A weboldal design-ja elfogadható, átlátható. | Működik |
| Backend             | 2024.12.04.         | A backendben megírt kódok megfelelő működése                | A backend eddig megírt kódjai tökéletesen működtek. A rendelés folyamata még fejlesztés alatt. | Működik |

A Végleges teszt lezajlott, és minden funkció rendesen működik. Esztétikailag is megfelelő a program.

Átadásra készen áll a megrendelőnek.

Tesztelést végezte és írta: Bukovinszki Bálint

Befejezve: 2024.12.04.