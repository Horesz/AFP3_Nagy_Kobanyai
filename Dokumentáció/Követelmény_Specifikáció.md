# Követelmény specifikáció

## 1. Áttekintés
A projekt célja egy pizzéria számára készült weboldal fejlesztése PHP és Laravel keretrendszer használatával, amely biztosítja az online rendelést, az étlap megjelenítését és az ügyfélinformációk kezelését. Az oldal célja, hogy gyors, felhasználóbarát és könnyen kezelhető legyen, valamint lehetőséget nyújtson a pizzéria ügyfelei számára a kényelmes online rendelésre. A rendszerhez szükséges adminisztrációs felület a phpMyAdmin segítségével kezelhető.

## 2. A jelenlegi helyzet leírása
Jelenleg a pizzéria rendeléseit telefonon vagy helyszíni rendelések során fogadja, ami jelentős mennyiségű munkaerőt és időráfordítást igényel. Az ügyfelek nem rendelkeznek lehetőséggel arra, hogy kényelmesen, online formában adjanak le rendeléseket, vagy megismerjék a pizzéria kínálatát és az aktuális akciókat. Az adatkezelés manuális, ami növeli a hibázás esélyét és lassítja a kiszolgálási folyamatot.

## 3. Vágyálomrendszer
A vágyálomrendszer egy olyan online pizzéria platform, amely:

- Lehetőséget biztosít az ügyfelek számára, hogy az étlap alapján online rendelést adjanak le.
- Lehetővé teszi az ételek egyedi paraméterek szerinti rendelését (pl. extra feltétek kiválasztása).
- Felhasználói profilkezelést és korábbi rendelések megtekintését kínálja.
- Valós időben értesítést küld a rendelési folyamat különböző lépéseiről (pl. rendelés beérkezett, készülőben, úton).
- Biztosít adminisztrációs felületet a rendelés- és menükezelésre.
- Lehetőséget nyújt a statisztikák megtekintésére az eladási adatok alapján.

## 4. Jelenlegi üzleti folyamatok modellje
A jelenlegi folyamatok során a rendeléseket főként telefonon keresztül fogadják. A beérkező rendeléseket az alkalmazottak manuálisan rögzítik, és a fizetést jellemzően készpénzzel rendezik. Az ételek készítése és kiszállítása ezután indul el. Az ügyfelek nem kapnak visszajelzést a rendelésük állapotáról, és nincs rendszer a korábbi rendelések követésére vagy a statisztikai elemzésekhez szükséges adatok összegyűjtésére.

## 5. Igényelt üzleti folyamatok modellje
Az igényelt folyamatok modellje alapján az ügyfelek az online rendelési rendszeren keresztül adhatják le rendeléseiket, amelyet a rendszer automatikusan rögzít és továbbít a konyhának. Az adminisztrációs felületen keresztül az alkalmazottak figyelemmel kísérhetik és kezelhetik a rendeléseket, amelyek állapotáról a rendszer automatikusan értesíti az ügyfeleket. Az adatbázisban tárolt adatok lehetővé teszik a korábbi rendelések visszakeresését és a statisztikai elemzések készítését.

## 6. Követelménylista
| Id  | Modul                      | Név                              | Leírás                                                                                      |
|-----|----------------------------|----------------------------------|---------------------------------------------------------------------------------------------|
| K1  | Felhasználói felület      | Online rendelés leadása         | Az ügyfelek az étlap alapján online rendelést adhatnak le, és választhatnak egyedi opciókat, például extra feltéteket. |
| K2  | Felhasználói felület      | Étellista megtekintése          | Az ügyfelek a pizzéria teljes étlapját megtekinthetik, képekkel és leírásokkal kiegészítve. |
| K3  | Felhasználói felület      | Regisztráció                    | Regisztráció az ügyfeleknek.                                                                |
| K4  | Felhasználói felület      | Bejelentkezés                   | Bejelentkezés az ügyfeleknek.                                                               |
| K5  | Regisztráció/Bejelentkezés| Felhasználói fiók létrehozása  | Az ügyfelek regisztrálhatnak, és fiókba bejelentkezve megtekinthetik rendeléseik előzményeit. |
| K6  | Adminisztrációs felület   | Rendeléskezelés                 | Az adminisztrációs felületen a személyzet megtekintheti és kezelheti a beérkezett rendeléseket. |
| K7  | Adminisztrációs felület   | Étlap szerkesztése              | Az adminisztrátorok szerkeszthetik a menüt, beleértve az árak, leírások és képek kezelését. |
| K8  | Értesítések               | Rendelési értesítések           | A rendszer értesítéseket küld az ügyfeleknek a rendelés állapotának változásairól.           |
| K9  | Fizetés                   | Online fizetés lehetősége       | Az ügyfelek bankkártyával vagy más online fizetési móddal kiegyenlíthetik a rendelés összegét. |
| K10 | Statisztika               | Eladási statisztikák            | Az adminisztrátorok megtekinthetik az eladási adatokat, pl. népszerű termékek, napi forgalom. |
| K11 | Adatkezelés               | phpMyAdmin adatbázis kezelés    | A phpMyAdmin segítségével az adminisztrátorok közvetlenül elérhetik és kezelhetik az adatokat. |

## 7. Fogalomtár
- **Ételfeltét**: Az étlap egyes elemeinek személyre szabható kiegészítései (pl. extra sajt).
- **Rendelés állapota**: Az aktuális státusz, amiben a rendelés található (pl. „Feldolgozás alatt”, „Készül”, „Kiszállítás alatt”).
- **Adminisztrátor**: Az a felhasználói szerepkör, amely hozzáfér az adminisztrációs felülethez és a phpMyAdmin-hoz.
- **phpMyAdmin**: A projekt adatbázisának kezelésére szolgáló eszköz, amely segítségével az adminisztrátor közvetlen adatbázis-módosításokat végezhet.
- **Statisztika**: A rendszer által automatikusan gyűjtött adatok elemzése, pl. napi, heti vagy havi eladások, népszerű ételek.
