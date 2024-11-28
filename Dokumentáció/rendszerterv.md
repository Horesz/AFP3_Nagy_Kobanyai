# Rendszerterv

## 1. A rendszer célja

A pizzarendelő weboldal célja, hogy a felhasználók egyszerűen rendeljenek pizzát online, áttekintsék a kínálatot, kosárba helyezzék a kívánt termékeket, majd véglegesítsék a rendelést. Az oldal Laravel keretrendszerrel készül, biztosítva a biztonságos adatkezelést, a felhasználóbarát felületet és a gyors működést.

### Fő célok:

1. **Pizzák megjelenítése**: A felhasználók böngészhetik az elérhető pizzák listáját különböző szűrők és kategóriák alapján.
2. **Kosár funkció**: A látogatók kosárba helyezhetik a pizzákat és egyéb termékeket, nyomon követhetik azok mennyiségét és árát.
3. **Rendelés leadása**: A kosár tartalma alapján a felhasználók leadhatják rendelésüket, megadva szállítási adatokat.
4. **Adminisztráció**: Az adminisztrátorok kezelhetik a termékkínálatot, nyomon követhetik a rendeléseket, és frissíthetik az elérhető pizzák adatait.

## 2. Projektterv

### 1. Projekt célja

A projekt célja egy Laravel alapú pizzarendelő weboldal fejlesztése, amely támogatja az online rendelést, a kosár kezelést, és az adminisztrációs funkciókat.

### 2. Ütemterv (6 hét)

#### 1. hét – Tervezés
- **Követelmények felmérése**: A rendszer szükséges funkcióinak meghatározása.
- **Felhasználói felület tervezése**: Böngészőalapú, mobil- és asztali eszközökre optimalizált felület tervezése.
- **Adatbázis struktúra megtervezése**: Termékek, kosár, rendelések és felhasználói adatok tárolása.

#### 2-4. hét – Fejlesztés
- **Pizzák megjelenítése**: Menüoldal kialakítása kategóriákkal és szűrőkkel.
- **Kosár funkciók implementálása**: Kosár frissítése, mennyiségek kezelése.
- **Rendelés kezelés**: Rendelés felvételi és szállítási folyamat kidolgozása.

#### 5-6. hét – Tesztelés és telepítés
- **Tesztelés**: Funkcionális tesztelés és hibajavítás.
- **Telepítés és karbantartási terv készítése**: Stabil verzió feltöltése a szerverre, telepítési útmutató.

### 3. Fő funkciók

1. **Pizzák böngészése és részletezés**: Különféle pizzák listázása és részletek megjelenítése.
2. **Kosár kezelés**: A kosárba helyezett pizzák, mennyiség és ár követése.
3. **Rendelés leadása és fizetés**: Online rendelés létrehozása és visszaigazolás.
4. **Adminisztrációs panel**: Termékek szerkesztése és rendeléskezelés.

## 3. Üzleti folyamatok modellje

### 1. Felhasználói folyamatok

#### Pizzák böngészése
- **Bemenet**: Felhasználó böngészi a kínálatot, és megnyit egy pizza részleteit.
- **Kimenet**: A pizza részletező oldalon információkat kap, például összetevőket, árat és méretválasztékot.

#### Kosár kezelése
- **Bemenet**: A felhasználó kiválasztja a kívánt pizzát és hozzáadja a kosárhoz.
- **Kimenet**: A kosárban megjelenik a kiválasztott termék, melyet további termékekkel egészíthet ki, vagy módosíthat.

#### Rendelés leadása
- **Bemenet**: Felhasználó kitölti a rendelési adatokat, majd véglegesíti a rendelést.
- **Kimenet**: A rendszer visszaigazolást küld, és az adminisztrátori felületen megjelenik az új rendelés.

#### Adminisztráció
- **Bemenet**: Adminisztrátor bejelentkezik, termékeket kezel vagy rendeléseket ellenőriz.
- **Kimenet**: Frissített pizzák vagy teljesített rendelés státusz.

## 4. Követelmények

### Funkcionális követelmények
1. Pizzák megjelenítése a főoldalon.
2. Különféle szűrési és rendezési opciók biztosítása.
3. Kosár hozzáadás, eltávolítás, mennyiségváltoztatás.
4. Felhasználók regisztrációja, bejelentkezése.
5. Fizetési módok kezelése.

### Nemfunkcionális követelmények
1. Gyors oldalbetöltési idő.
2. Reszponzív felhasználói felület.
3. Biztonságos adatkezelés.
4. Stabil működés nagyobb forgalom mellett.

## 5. Technológiai követelmények

1. Szerver oldali technológia

    - **Webszerver**
    - **Operációs rendszer:** Windows
    - **Backend keretrendszer:** Laravel
    - **Programozási nyelv:** A backendhez használt nyelv, pl. JavaScript (Node.js), Python, PHP, Ruby, stb.

2. Kliens oldali technológia

    - **Frontend keretrendszerek:**  HTML, CSS és JavaScript
    - **CSS keretrendszerek** és UI könyvtárak: Bootstrap vagy Tailwind CSS

3. Adatbázis és adattárolás

    - **Adatbázis-kezelő rendszerek:** MySQL<br>
    - **Adatstruktúra és sémák:** az adatbázis megfelelő eltervezése fontos lesz

4. Biztonság

    - **SSL tanúsítvány:** HTTPS biztosítása az adatok titkosításához.<br>
    - **Hitelesítés és jogosultságkezelés**

5. Teljesítmény és skálázhatóság

    - **Terheléselosztás:** Ha nagy látogatottságra van szükség, a terheléselosztás biztosítása
    - **Optimalizált kód és adatbázis:** Teljesítményoptimalizáció a gyorsabb működés érdekében

6. Fejlesztési és üzemeltetési eszközök

    - **Verziókezelés: Git, GitHub**
    - **Monitoring és logging eszközök:** Kanban

7. Felhasználói élmény és hozzáférhetőség

    - **Reszponzivitás és mobil optimalizáció:** Támogatás mobil eszközök számára, reszponzív tervezési technikákkal.

8. Adatvédelem és megfelelőség

    - **GDPR/CCPA kompatibilitás:** Adatvédelmi szabályoknak való megfelelés.
    - **Cookie kezelés és adatkezelési szabályzat:** Cookie-k használatának engedélyezése és beállítása, adatvédelmi irányelvek közlése.

## 6. Fizikai környezet

- **Szerver**: Linux alapú VPS vagy felhőalapú szolgáltatás
- **Sávszélesség**: Minimum 100 Mbps
- **Biztonsági követelmények**: HTTPS, SSL tanúsítvány

## 7. Tesztterv

### Tesztesetek

| Teszteset              | Elvárt eredmény                  |
|------------------------|----------------------------------|
| Pizzák listázása       | Minden pizza megjelenik         |
| Kosárba helyezés       | Kosár tartalma frissül          |
| Rendelés leadása       | Rendelés visszaigazolása sikeres|
| Admin termékkezelés    | Termékek módosítása sikeres     |

## 8. Telepítési terv

1. **Adatbázis létrehozása**: MySQL szerver telepítése és adatbázis struktúra beállítása.
2. **Laravel környezet beállítása**: Composer és Laravel telepítése a szerverre.
3. **Rendszer konfigurációk**: .env fájl beállítása az adatbázis elérési adatokkal.

## 9. Karbantartási terv

A weboldal karbantartásra fog szorulni hogy a jövőben is megfelelően ellássa a feladatát.
Ezt többféleképpen kellene elérni:

1. **Biztonsági mentések**: Az adatbázisról és a weboldalról biztonsági mentéseket kell készíteni egy esetelges technikai probléma miatt például egy megsérült merevlemez vagy egy félresikerült frissítés-
2. **Rendszer frissítés**: A folyamatos biztonságos müködés érdekében szükséges a lehető legújabb verziójú szofterre építeni a védelmi megoldások és future-proofing miatt. Ez többek között a Laravel frissítésével járhat. A frissítést természetesen jól meggondolva és a fentebb elmített biztonsági mentések mellet kell végrehajtani.
3. **Hibajavítás**: Valószínűleg a használatba vétel után megfognak jelenni kimaradt dolgok, nem megfelelően funkciónáló események vagy esetleg a felhasználók egy-két funkciót hiányolhatnak a kész rendszerből. Ebben az esetben a hibákat meg kell oldani és az extra funkciókat implementálni ha erre egy mód van.

## 10. A rendszer célja

A pizzarendelő weboldal célja, hogy a felhasználók egyszerűen rendeljenek pizzát online, áttekintsék a kínálatot, kosárba helyezzék a kívánt termékeket, majd véglegesítsék a rendelést. Az oldal Laravel keretrendszerrel készül, biztosítva a biztonságos adatkezelést, a felhasználóbarát felületet és a gyors működést.

## 11. Projektszerepkörök és felelőségek

- **Scrum Master**: Sinka Barnabás
- **Product Owner**: Győrfi Bence, Sálek Dániel, Szilágyi Kristóf, Márton Gergely, Bukovinszki Bálint
- **Üzleti szereplő**: Sinka Barnabás

## 12. Fizikai alrendszerek

A rendszer komponensei:
- **Webszerver**: Linux alapú VPS, amely támogatja a Laravel-t és a PHP-t.
- **Adatbázis-szerver**: MySQL adatbázis a megrendelések, felhasználói és termékadatok kezelésére.
- **Tűzfal és SSL tanúsítvány**: A biztonságos adatkezelés érdekében.

## 13. Vásárolt szoftverkomponensek és külső rendszerek

- **Laravel csomagok**: Autentikációs és jogosultságkezelés, Stripe fizetési modul.
- **Fizetési szolgáltatás**: Integráció Stripe rendszerrel az online fizetésekhez.
- **Hosting szolgáltatás**: VPS vagy felhőalapú tárhely (pl. DigitalOcean, AWS).

## 14. Üzleti szereplők

- **Felhasználók**: Akik a pizzarendelő oldalon rendeléseket adnak le.
- **Adminisztrátorok**: Akik felügyelik az oldal működését, kezelik a rendeléseket, és frissítik a kínálatot.

## 15. Mérföldkövek

1. Dokumentáció elkészítése
2. Funkciók kidolgozása
3. Prototípus készítése
4. Kész program publikálása

## 16. Adatbázis terv

### Táblák:

- **Pizzák (Pizzas)**: A pizzák neve, leírása, ára, és elérhető méretek.
- **Felhasználók (Users)**: A regisztrált felhasználók adatai.
- **Rendelések (Orders)**: A leadott rendelések adatai, státusza és időbélyege.
- **Kosár tételek (CartItems)**: A kosárban található tételek a rendelés véglegesítéséig.

### Táblakapcsolatok

- **Rendelések** és **Felhasználók** között: 1:N kapcsolat.
- **Rendelések** és **Kosár tételek** között: 1:N kapcsolat.

## 17. Funkcionális követelmények

1. Pizzák megjelenítése a főoldalon és kategóriák szerint.
2. Kosárkezelés: Termékek hozzáadása, eltávolítása, mennyiségváltoztatás.
3. Rendelés leadása és visszaigazolás küldése.
4. Felhasználói regisztráció és bejelentkezés.
5. Adminisztrációs funkciók: Termékek és rendeléskezelés.

## 18. Nemfunkcionális követelmények

1. Gyors oldalbetöltési idő, különösen mobil eszközön.
2. Reszponzív felhasználói felület, amely különböző eszközökön jól működik.
3. Biztonságos adatkezelés, beleértve az SSL titkosítást és jelszavas védelmet.
4. Stabil működés nagyobb felhasználói forgalom mellett.

## 19. Funkcionális terv

### Feladatkezelés
- **Pizza hozzáadása**: Új pizza létrehozása névvel, leírással, árral.
- **Pizza módosítása**: Meglévő pizzák szerkesztése az admin panelen.
- **Pizza törlése**: Nem elérhető pizzák eltávolítása.
  
### Kosárkezelés
- **Termékek hozzáadása a kosárhoz**: Termék kiválasztása és kosárba helyezése.
- **Kosár tartalmának megjelenítése**: A felhasználó által kiválasztott termékek.
  
### Rendelés kezelése
- **Rendelés leadása**: Felhasználó rendelésének elküldése.
- **Rendelési állapot frissítése**: Adminisztrátor frissítheti a rendelés státuszát.

### Felhasználói felület (UI)
- Intuitív és könnyen navigálható felület, különféle gombok és listák segítségével.
  
## 20. Rendszerszereplők

- **Felhasználó**: Az oldal használója, aki rendeléseket ad le.
- **Rendszer**: A rendeléseket kezeli, a felhasználói interakciókat feldolgozza.
- **Adatbázis/fájlrendszer**: A pizzák, felhasználói adatok és rendelések tárolásáért felel.

## 21. Menühierarchiák

- **Főmenü**
  - **Főoldal**: Kínálat áttekintése.
  - **Kosár**: Kosár tartalmának megtekintése és rendelés folytatása.
  - **Profil**: Regisztráció és bejelentkezés, valamint rendelés előzmények megtekintése.
  - **Admin panel**: Adminisztrációs felület a termékek és rendelések kezeléséhez (csak adminisztrátorok számára).

## 22. Hardver topológia

- **Internet**
  - Router → Szerver (Linux alapú) → Felhasználói eszközök (PC, mobiltelefon, tablet)
  - VPS tárhely vagy felhőalapú infrastruktúra (pl. DigitalOcean, AWS) biztosítja a megfelelő hozzáférést és adatkezelést.

## 23. Fejlesztő eszközök

- **Visual Studio Code**: Laravel projektek fejlesztése.
- **GitHub/GitLab**: Verziókövetés.
- **PHP 8+ és Composer**: Laravel keretrendszer futtatása és kezelés.
- **MySQL Workbench**: Adatbázis tervezés és kezelés.

## 24. Architekturális terv

### Architekturális rétegek

1. **Felhasználói felület (UI) réteg**
   - **Leírás**: Az oldalon található interakciós elemek, pl. kosár és rendelés menü kezelése.
   - **Technológiák**: HTML, CSS, JavaScript, Vue.js vagy React.

2. **Üzleti logika réteg**
   - **Leírás**: A rendeléskezelési és kosárkezelési funkciók üzleti logikája.
   - **Technológiák**: PHP Laravel.

3. **Adatkezelési réteg**
   - **Leírás**: Felhasználói adatok, termékek és rendelésadatok tárolása.
   - **Technológiák**: MySQL.

### Adatmodell

- **Pizza**: Pizza adatai, pl. név, leírás, ár.
- **Felhasználó**: Regisztrált felhasználók adatai, pl. név, e-mail cím, jelszó.
- **Rendelés**: Rendelés részletei, pl. tételek, időpont, státusz.

## 25. Adatbázis rendszer

### Adatbázis struktúra

- **Pizzák tábla**: Pizzák és hozzájuk tartozó adatok tárolása.
- **Felhasználók tábla**: Felhasználói adatok és kapcsolódó információk.
- **Rendelések tábla**: Leadott rendelések és státuszaik tárolása.

## 26. Implementációs terv

1. **Adatbázis beállítása**: MySQL adatbázis struktúra létrehozása.
2. **Laravel környezet telepítése és konfigurálása**: Projekt alap beállítása.
3. **Funkciók fejlesztése**: Pizzák megjelenítése, kosár funkciók és rendeléskezelés.
4. **Tesztelés**: Egység- és funkcionális tesztek elvégzése.
5. **Telepítés**: Szerverre történő telepítés és élesítés.

## 27. Támogatott eszközök

Ideális esetben akármiféle eszköz amin müködik egy webes böngésző. Windowson és Macen illetve Linuxon mindenképpen támogatva lesz, a mobilos felület lehet kevésbé lesz ideális de arra is figyelni kellene.<br>
- **Webböngészők**: Chromium alapú böngészőkre kifejezett figyelem és a Mozillára
- **Operációs rendszerek:** Windows, macOS, Linux, iOS, Android
---

Ez a rendszerterv minden szükséges szempontot lefed a Laravel-alapú pizzarendelő weboldal sikeres megvalósításához.
