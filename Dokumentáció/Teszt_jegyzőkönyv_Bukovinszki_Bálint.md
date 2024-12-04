# Tesztjegyzőkönyv

Teszteléseket végezte: Bukovinszki Bálint

Operációs rendszer: Windows 11

## Alfa teszt

| Vizsgálat         | Tesztelés időpontja | Elvárás                                           | Eredmény  | Hibák |
| :---:             | ---                 | ---                                               | ---       | ---   |
| Regisztráció      | 2024.12.03.         | User adatait a táblában eltárolja                | Működik   | -     |
| Belépés           | 2024.12.03.         | Usernévvel és megfelelő jelszóval belépünk az oldalra | Működik | -     |
| Profil            | 2024.12.03.         | Bejelentkezett felhasználó a saját adatait meg tudja tekinteni, szerkeszteni | Működik | -     |
| Adatbázis         | 2024.12.03.         | Az adatbázis kapcsolat, migráció működik, egy-két módosítást igényelnek a táblák | Működik | -     |
| Autentikáció      | 2024.12.03.         | Csak belépés után érhetőek el a megfelelő funkciók | Működik   | -     |

Az Alfa tesztelés során a vizsgált elemek mind hibátlanul működtek mindenféle fennakadások nélkül.


Következő tesztelésnél a többi funkció kerül vizsgálatra illetve elemzésre.

## Béta teszt

| Vizsgálat           | Tesztelés időpontja | Elvárás                                                     | Eredmény  | Hibák |
| :---:               | ---                 | ---                                                         | ---       | ---   |
| Navigációs menü     | 2024.12.09.         | A menüsorban a gombok a megfelelő oldalra irányítanak       | Működik   | -     |
| Admin jogosultság   | 2024.12.09.         | Admin felhasználóknak több lehetősége van az oldalon.       | Működik   | -     |
| Új termék           | 2024.12.09.         | Az oldalon a megfelelő adatokat kitöltve új pizzát lehet hozzáadni az adatbázishoz. | Működik | - |
| Termékek kilistázása| 2024.12.09.         | Az oldalon felsorolásként megjelennek az adatbázisban található pizzák | Működik | -     |
| Rendeléseim         | 2024.12.09.         | Minden felhasználónak megjelennek az ő általa korábban rendelt pizzák. | Működik | - |
| Minden rendelés     | 2024.12.09.         | Adminok minden felhasználó rendelését látják.               | Működik   | -     |
| Frontend            | 2024.12.09.         | A weboldal megjelenésének tesztelése                        | A weboldal design-ja elfogadható, átlátható. | Működik |
| Backend             | 2024.12.09.         | A backendben megírt kódok megfelelő működése                | A backend eddig megírt kódjai tökéletesen működtek. A rendelés folyamata még fejlesztés alatt. | Működik |

A Béta teszt során a vizsgált elemek mind hibátlanul működtek mindenféle fennakadások nélkül.

