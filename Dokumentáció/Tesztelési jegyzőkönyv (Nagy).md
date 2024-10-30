# Tesztjegyzőkönyv 

Teszteléseket végezte: Szilágyi Kristóf

Operációs rendszer: Windows 10

Ebben a dokumentumban lesz felsorolva az elvégzett tesztek elvárásai és eredményei, illetve időpontjai (Alfa, Béta és Végleges verzió).

## Alfa teszt

| Vizsgálat                                     | Tesztelés időpontja | Elvárás                                                                | Eredmény                   | Hibák                    |
| --------------------------------------------- | --------------------| ---------------------------------------------------------------------- | -------------------------- | ------------------------ |
| Pizza +/- (mennyiség) gomb működése           | 2024. október 19.   | Gomb megnyomásával a rendelt pizza számát megnöveli vagy csökkenti     | Hozzáadni tud, működik     | Kivonni még nem tud      |
| Feltét választás                              | 2024. október 19.   | Kiválasztott feltéteket hozzáadja a rendeléshez                        | Néhány feltét nem ad hozzá | Sajt feltét nem elérhető |
| --------------------------------------------- | ------------------- | ---------------------------------------------------------------------- | -------------------------- | ------------------------ |

Az Alfa tesztelés során a vizsgált elemek közül néhány nem megfelelően működött, ezek a későbbiek során javításra szorulnak.

Következő tesztelésnél a többi funkció kerül vizsgálatra, illetve elemzésre.

## Béta teszt

| Vizsgálat                              | Tesztelés időpontja | Elvárás                                                      | Eredmény                        | Hibák                                  |
| -------------------------------------- | ------------------- | ------------------------------------------------------------ | ---------------------------     | -------------------------------------- |
| Regisztráció és Bejelentkezés          | 2024. október 24.   | Regisztráció és belépés sikeres teljesítése                  | Regisztráció és belépés működik | Email visszaigazolás késik             |
| Fizetési folyamat - kártyás fizetés    | 2024. október 24.   | Kártyaadatok helyes megadása után a tranzakció sikeres       | Tranzakció sikeres              | Tranzakció megerősítő üzenet hiányzik  |
| Navigációs menü működése               | 2024. október 24.   | Minden menüpont megfelelő oldalra navigál                    | Működik, minden oldal elérhető  | Nincs                                  |
| -------------------------------------- | ------------------- | ------------------------------------------------------------ | ----------------------------    | -------------------------------------- | 

A Béta teszt során több kisebb hiba merült fel, melyek javításra szorulnak.

A végleges tesztelés során az összes fent felsorolt vizsgálati elem újra ellenőrzésre kerül. Ezzel együtt az új funkciók is tesztelésre kerülnek.

## Végleges teszt

| Vizsgálat                             | Tesztelés időpontja | Elvárás                                                               | Eredmény                     | Hibák                    |
| ------------------------------------- | --------------------| --------------------------------------------------------------------- | ---------------------------- | ------------------------ |
| Rendelési előzmények megjelenítése    | 2024. október 29.   | Felhasználó rendelési előzményeinek megjelenítése a profilban         | Előzmények megjelennek       | Nincs                    |
| Rendelt pizzák képi megjelenítése     | 2024. október 29.   | A kiválasztott pizzák képe megjelenik a rendelés oldalon              | Megfelelő megjelenítés       | Nincs                    |
| Szállítási cím megadása               | 2024. október 29.   | Felhasználó szállítási címének megadása és mentése                    | Cím mentve                   | Nincs                    |
| Kosár tartalmának mentése kijelentkezéskor | 2024. október 29.  | Felhasználó kilépése után a kosár tartalma megmarad a következő bejelentkezésig | Kosár tartalma megmarad      | Nincs      |                    |
| ------------------------------------- | ------------------- | --------------------------------------------------------------------- | ---------------------------- | ------------------------ |

A Végleges teszt során minden vizsgált elem sikeresen teljesített, és a rendszer minden funkciója megfelelően működik.

Átadásra készen áll a megrendelőnek.

Tesztelést végezte és írta: Szilágyi Kristóf

Befejezve: 2024. október 29.
