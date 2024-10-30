# Funkcionális Specifikáció

### Jelenlegi Helyzet

A pizzarendelő weboldal célja, hogy a felhasználók egyszerű és gyors módon tudjanak online pizzát rendelni. Jelenleg az étterem rendelési rendszere nem rendelkezik teljesen digitalizált online felülettel, így a rendelések telefonon vagy helyben történnek. Ez a módszer időigényes és korlátozott hozzáférést biztosít a termékinformációkhoz, különösen az esti vagy zsúfolt időszakokban.

Az új weboldal célja a rendelési folyamat teljes digitalizálása, amely javítja a felhasználói élményt, csökkenti az étterem telefonos forgalmát, és pontos adatkezelést biztosít. A Laravel keretrendszer lehetőséget nyújt egy megbízható, biztonságos, és könnyen karbantartható rendszer kialakítására, amely skálázható a jövőbeni igényekhez.

A rendszer fő funkciói:

1. **Termékkatalógus**: A felhasználók böngészhetik az étterem aktuális pizzakínálatát és szűrhetik azokat különböző kategóriák alapján.
2. **Kosár funkció**: A látogatók kiválaszthatják és kosárba helyezhetik a kívánt pizzákat és egyéb termékeket, nyomon követve azok mennyiségét és árát.
3. **Online rendelés leadása**: A felhasználók véglegesíthetik rendelésüket a kosár tartalma alapján, és megadhatják a szállításhoz szükséges adatokat.
4. **Adminisztráció**: Az adminisztrátorok számára lehetőség nyílik a termékkínálat kezelésére, a rendelések nyomon követésére, valamint az étterem menüjének folyamatos frissítésére.

Az új platform egyszerű és intuitív felületet kínál, amely javítja az ügyfélélményt és növeli az étterem hatékonyságát. A biztonságos adatkezelés a Laravel beépített eszközeivel valósul meg, lehetővé téve a felhasználói adatok és rendelési információk védelmét.

### Vágyálomrendszer Leírása

A vágyálomrendszer célja egy modern, felhasználóbarát online pizzarendelő platform létrehozása, amely gyors és intuitív rendelési folyamatot biztosít minden felhasználónak. Az oldal segít az étterem működésének hatékonyabbá tételében és az ügyfélélmény javításában az alábbi jellemzőkkel:

#### 1. Felhasználói élmény

A rendszer felhasználói élményének középpontjában az egyszerűség és a gyors navigáció áll. A látogatók könnyedén áttekinthetik a pizzakínálatot, választhatnak kategóriák vagy szűrők alapján, és testre szabhatják rendeléseiket (pl. feltétek módosítása). Az oldal reszponzív dizájnja lehetővé teszi a könnyű hozzáférést bármilyen eszközön, legyen az asztali számítógép, táblagép vagy mobiltelefon.

#### 2. Kosár és Rendelés

A felhasználók a kiválasztott pizzákat és egyéb termékeket kosárba helyezhetik, ahol valós időben nyomon követhetik azok árát és mennyiségét. Az összesítést követően a rendelés véglegesítése zökkenőmentesen zajlik, a felhasználók megadhatják szállítási és fizetési adataikat, és visszaigazolást kapnak a rendelés sikeres leadásáról.

#### 3. Szállítási és Fizetési Integrációk

A rendszer integrálja a legnépszerűbb szállítási módokat, és lehetővé teszi különböző fizetési opciók, például bankkártya vagy készpénzes fizetés választását. Továbbá valós idejű szállítási állapotkövetést biztosít a felhasználók számára, hogy nyomon követhessék rendelésük útját.

#### 4. Adminisztrációs felület

Az adminisztrációs modul átlátható, egyszerűen kezelhető felületet biztosít az étterem munkatársai számára. Az adminisztrátorok könnyen hozzáadhatják vagy módosíthatják a pizzák és egyéb termékek adatait, kezelhetik a rendeléseket, és láthatják a szállítás állapotát. A rendszer automatikus értesítéseket küld az adminisztrátorok számára a beérkezett rendelések esetén.

#### 5. Biztonság és Adatkezelés

A Laravel keretrendszer beépített biztonsági funkcióival a rendszer adatvédelmi szabványokat követ, biztosítva a felhasználói adatok védelmét. A felhasználói információk titkosítva kerülnek tárolásra, és a rendszer megfelelő hozzáférési jogosultságokkal szabályozza az adatok elérését.

#### 6. Statisztikák és Jelentések

Az adminisztrátorok hozzáférhetnek az értékesítési statisztikákhoz és jelentésekhez, amelyek segítenek az üzleti döntéshozatalban. A riportok segítségével az étterem vezetősége átfogó képet kap az értékesítési trendekről és az ügyfélpreferenciákról, ami támogatja a marketing és készletkezelési stratégiák kialakítását.

Az elképzelt rendszer egyszerű és átlátható rendelési folyamatot biztosít, lehetőséget adva a felhasználóknak arra, hogy gyorsan és kényelmesen élvezhessék az online pizzarendelés előnyeit.

### Jelenlegi Üzleti Folyamatok Modellje

Az étterem jelenlegi üzleti folyamatai a hagyományos pizzarendelési és kiszállítási folyamatra épülnek, amelyek főként személyes és telefonos interakciókat foglalnak magukban. Az alábbiakban bemutatjuk a főbb üzleti folyamatokat és a hozzájuk tartozó lépéseket.

#### 1. Rendelés Felvétele

Az étterem jelenleg telefonon és helyszínen veszi fel a rendeléseket, amelyeket a következő lépések alapján kezel:

##### 1.1 Telefonos rendelés

- Az ügyfél telefonon felhívja az éttermet.
- A rendelésfelvevő kolléga rögzíti az ügyfél rendelését, nevét, címét és elérhetőségét.
- Az étterem munkatársa visszaigazolja a rendelés részleteit és a várható kiszállítási időt.

##### 1.2 Személyes rendelés

- Az ügyfél az étteremben adja le a rendelését.
- A rendelésfelvevő munkatárs rögzíti az adatokat, és átadja az információkat a konyhának.

#### 2. Pizzakészítés

Miután a rendelés rögzítésre került, a konyha elkezdi a rendelés elkészítését. A folyamat lépései a következők:

##### 2.1 Rendelési lista elkészítése

- A rendelés adatai kinyomtatásra kerülnek vagy a konyhai személyzet kézzel rögzíti őket.
- A pizza összetevőinek előkészítése és a sütési folyamat megkezdése történik.

##### 2.2 Pizzasütés és csomagolás

- A pizzák a sütőbe kerülnek.
- Sütés után a pizzák csomagolásra kerülnek, a rendeléshez tartozó egyéb termékekkel együtt.

#### 3. Kiszállítás

Az elkészült pizzák kiszállítása történik a következő lépésekben:

##### 3.1 Futárkiosztás

- Az étterem a futár számára kiosztja a rendelést.
- A futár felkészül a kiszállításra és ellenőrzi a rendelés adatait.

##### 3.2 Kiszállítás az ügyfélhez

- A futár a megadott címre szállítja a rendelést.
- Az ügyfél átveszi a rendelést, és fizet készpénzzel vagy bankkártyával, ha ez az opció elérhető.

#### 4. Rendelés Nyomonkövetés és Adminisztráció

Az étterem követi a rendelés állapotát, és szükség esetén visszajelzést küld az ügyfeleknek:

##### 4.1 Rendelési állapot visszajelzés

- A rendelésfelvételt követően a kiszállítás alatt álló rendeléseket követi az étterem.
- Ha bármilyen probléma merül fel, az ügyfél értesítése telefonon történik.

##### 4.2 Visszajelzések kezelése

- Az ügyfél visszajelzéseit az étterem munkatársai rögzítik, és adott esetben intézkednek a panaszok orvoslásáról.

Az aktuális üzleti folyamatok jelentős emberi interakciókat igényelnek, különösen a rendelésfelvétel és nyomonkövetés terén, ami növeli a hibalehetőségek számát és lassítja a folyamatot. Az új rendszer ezeket a folyamatokat kívánja digitalizálni és egyszerűsíteni az online platformon keresztül.

### Igényelt Üzleti Folyamatok Modellje

Az igényelt üzleti folyamatok egy online pizzarendelési platform bevezetésére épülnek, amely lehetővé teszi a felhasználóknak a gyors és kényelmes rendelést és az étterem számára a hatékonyabb kiszolgálást. Az alábbiakban részletesen bemutatjuk az egyes fő folyamatokat.

#### 1. Rendelés Felvétele

Az ügyfelek online adhatják le rendeléseiket, amely az alábbi lépésekből áll:

##### 1.1 Termékkiválasztás

- Az ügyfél böngészi a pizzakínálatot és szűrők segítségével találja meg a kívánt termékeket.
- Az ügyfél kiválasztja a pizzákat és egyéb termékeket, majd kosárba helyezi azokat.

##### 1.2 Kosár és Rendelés véglegesítése

- Az ügyfél ellenőrzi a kosár tartalmát és módosíthatja a mennyiséget vagy eltávolíthat termékeket.
- Az ügyfél a "Rendelés leadása" gombra kattint, majd megadja a szállítási és fizetési adatokat.

#### 2. Fizetési Folyamatok

Az ügyfél választhat különböző fizetési lehetőségek közül, beleértve az online fizetést és a készpénzes fizetést is:

##### 2.1 Online fizetés

- Az ügyfél bankkártyával fizethet az online fizetési integráción keresztül.
- Sikeres fizetés esetén az ügyfél visszaigazolást kap a rendelés feldolgozásáról.

##### 2.2 Készpénzes fizetés

- Az ügyfél választása szerint készpénzes fizetésre is van lehetőség a futárnál.
- A rendszer értesíti a futárt, hogy az ügyfél készpénzes fizetést választott.

#### 3. Pizzakészítés

A rendelés automatikusan megjelenik a konyhai személyzet számára, hogy elkészítsék a rendelést:

##### 3.1 Készítési sorrend beállítása

- A rendszer automatikusan meghatározza a beérkezett rendelések készítési sorrendjét a kiszállítási idők figyelembevételével.

##### 3.2 Pizzasütés és csomagolás

- A konyhai személyzet a rendelési lista alapján elkészíti a pizzákat.
- A pizzák sütés után csomagolásra kerülnek, és az esetleges kiegészítő termékek hozzáadásra kerülnek.

#### 4. Kiszállítás és Rendeléskövetés

Az étterem futárszolgálatán keresztül az elkészült rendelés kiszállításra kerül az ügyfélhez:

##### 4.1 Futár értesítése és rendelés átvétele

- A rendszer értesíti a futárt az új rendelésről.
- A futár átveszi a rendelést és megkezdi a kiszállítást.

##### 4.2 Szállítás követése

- Az ügyfél online nyomon követheti a rendelése állapotát, beleértve a szállítás folyamatát.
- Az ügyfél értesítést kap, amikor a futár megérkezik a megadott címre.

#### 5. Adminisztráció és Rendszerkarbantartás

Az adminisztrátorok számára egy átlátható felület biztosítja a termékkínálat és a rendelések kezelését:

##### 5.1 Termékkatalógus kezelése

- Az adminisztrátorok új pizzákat és egyéb termékeket adhatnak hozzá, módosíthatják az árakat, illetve eltávolíthatják a már nem elérhető tételeket.

##### 5.2 Rendelések és szállítási állapotok kezelése

- Az adminisztrátorok ellenőrizhetik a rendeléseket és szükség esetén beavatkozhatnak.
- A rendszer naprakész információkat nyújt a rendelési állapotokról, így az adminisztrátorok nyomon követhetik az étterem teljesítményét.

##### 5.3 Jelentések és elemzések

- Az adminisztrátorok hozzáférnek az értékesítési statisztikákhoz és ügyféladatokhoz, amelyek támogatják a marketing és logisztikai döntéseket.

Az igényelt üzleti folyamatok modernizálják és automatizálják az étterem működését, lehetővé téve a hatékonyabb rendelések kezelését és a gördülékeny felhasználói élményt.

### Követelménylista

| Id | Modul                   | Név                          | Leírás                                                                                                                             |
| :-: | ----------------------- | ----------------------------- | ------------------------------------------------------------------------------------------------------------------------------------ |
| K1 | Pizzakatalógus         | Pizzák megjelenítése       | A felhasználók böngészhetik az elérhető pizzák listáját különböző kategóriák és szűrők alapján.                   |
| K2 | Kosár                  | Kosár funkció               | A kiválasztott pizzák és termékek kosárba helyezése, azok mennyiségének és árának követése.                             |
| K3 | Rendelés               | Rendelés leadása            | A felhasználók véglegesíthetik a rendelésüket a kosár tartalma alapján, és megadhatják szállítási adataikat.            |
| K4 | Fizetés                | Fizetési mód kiválasztása | A felhasználók választhatnak különböző fizetési lehetőségek közül, például online fizetés vagy készpénzes fizetés. |
| K5 | Szállítás            | Szállítás követése       | A felhasználók nyomon követhetik a rendelés szállítási állapotát valós időben.                                            |
| K6 | Adminisztráció        | Termékek kezelése           | Az adminisztrátorok hozzáadhatják, módosíthatják vagy eltávolíthatják a termékeket a kínálatból.                        |
| K7 | Adminisztráció        | Rendelések nyomon követése | Az adminisztrátorok megtekinthetik és kezelhetik a rendeléseket, szükség esetén módosíthatják az állapotukat.              |
| K8 | Statisztika             | Értékesítési jelentések  | Az adminisztrátorok hozzáférhetnek az értékesítési adatokhoz és trendekhez, amelyek támogatják az üzleti döntéseket.    |
| K9 | Biztonság              | Adatvédelem                  | A rendszer biztosítja a felhasználói adatok titkosított tárolását és a jogosultságkezelést a biztonság érdekében.       |
| K10 | Felhasználói élmény | Reszponzív dizájn           | A rendszer minden eszközön (asztali gép, mobil, táblagép) jól használható legyen.                                            |

### Használati Esetek

#### H1: Pizzák böngészése

A felhasználó megtekinti az elérhető pizzákat, és különböző szűrők és kategóriák alapján válogathat. Lehetősége van a pizza összetevőinek és árának áttekintésére.

**Szereplők:** Felhasználó

---

#### H2: Kosárba helyezés

A felhasználó kiválasztja a megvásárolni kívánt pizzákat vagy egyéb termékeket, és kosárba helyezi azokat. A kosár tartalma frissül, és a felhasználó nyomon követheti a kiválasztott tételek mennyiségét és végösszegét.

**Szereplők:** Felhasználó

---

#### H3: Rendelés leadása

A felhasználó a kosárban található termékek alapján véglegesíti a rendelését, megadva a szükséges szállítási adatokat és kiválasztva a fizetési módot.

**Szereplők:** Felhasználó

---

#### H4: Fizetési mód kiválasztása

A felhasználó kiválasztja a fizetési módot, például online bankkártyás fizetést vagy készpénzes fizetést a kiszállításkor.

**Szereplők:** Felhasználó

---

#### H5: Rendelés nyomon követése

A felhasználó követheti a rendelésének állapotát a rendszerben, beleértve a szállítási folyamatot és a várható kiszállítási időt.

**Szereplők:** Felhasználó

---

#### H6: Termékek kezelése

Az adminisztrátor a pizzakínálatot módosíthatja: új pizzákat adhat hozzá, szerkesztheti a meglévőket, illetve eltávolíthatja a már nem elérhető termékeket.

**Szereplők:** Adminisztrátor

---

#### H7: Rendelések kezelése

Az adminisztrátor nyomon követheti a rendeléseket és szükség esetén módosíthatja azok állapotát, így biztosítva a gördülékeny kiszolgálást.

**Szereplők:** Adminisztrátor

---

#### H8: Statisztikák megtekintése

Az adminisztrátor megtekintheti az értékesítési jelentéseket és statisztikákat, amelyek támogatják az üzleti döntéseket és a logisztikai tervezést.

**Szereplők:** Adminisztrátor

---

#### H9: Adatbiztonság kezelése

A rendszer biztosítja a felhasználói adatok védelmét titkosított adatkezeléssel és jogosultságkezeléssel, hogy az adatbiztonsági előírásoknak megfeleljen.

**Szereplők:** Rendszer

### Megfeleltetési Mátrix

Az alábbi táblázat bemutatja, hogy az egyes használati esetek hogyan fedik le a követelményeket, biztosítva, hogy minden követelmény teljesítése egy-egy funkcionális folyamat során megvalósuljon.

| Használati Eset                            | Követelmény(ek)                                         |
| ------------------------------------------- | --------------------------------------------------------- |
| **H1: Pizzák böngészése**         | K1: Pizzák megjelenítése                               |
| **H2: Kosárba helyezés**            | K2: Kosár funkció                                       |
| **H3: Rendelés leadása**            | K3: Rendelés leadása, K4: Fizetési mód kiválasztása |
| **H4: Fizetési mód kiválasztása** | K4: Fizetési mód kiválasztása                         |
| **H5: Rendelés nyomon követése**   | K5: Szállítás követése                               |
| **H6: Termékek kezelése**           | K6: Termékek kezelése                                   |
| **H7: Rendelések kezelése**         | K7: Rendelések nyomon követése                         |
| **H8: Statisztikák megtekintése**   | K8: Értékesítési jelentések                          |
| **H9: Adatbiztonság kezelése**      | K9: Adatvédelem                                          |

### Képernyőtervek


### Forgatókönyvek

#### Forgatókönyv 1: Pizzarendelés leadása

1. **Felhasználó** megnyitja a pizzarendelő weboldalt.
2. Böngészi a pizzakínálatot és szűrők segítségével kiválasztja a kívánt pizzát.
3. Kiválasztja a pizzát és a „Kosárba helyezés” gombra kattint.
4. Megtekinti a kosár tartalmát, majd a „Rendelés leadása” gombra kattint.
5. Megadja a szállítási adatokat és kiválasztja a fizetési módot.
6. A rendszer visszaigazolást küld a rendelés leadásáról.

#### Forgatókönyv 2: Rendelés követése

1. **Felhasználó** bejelentkezik és megnyitja a rendeléskövetési felületet.
2. Megtekinti a korábbi rendeléseinek állapotát.
3. Kiválasztja az aktív rendelést, és látja a szállítás folyamatát, beleértve a várható érkezési időt.
4. Értesítést kap, amikor a futár a megadott címre érkezik.

#### Forgatókönyv 3: Új pizza hozzáadása az adminisztrációs felületen

1. **Adminisztrátor** belép az adminisztrációs felületre.
2. A „Termékkatalógus kezelése” menüpontban kiválasztja az „Új pizza hozzáadása” opciót.
3. Megadja az új pizza adatait (név, ár, leírás, hozzávalók stb.).
4. A „Mentés” gombra kattint, és az új pizza megjelenik a felhasználói pizzakatalógusban.

#### Forgatókönyv 4: Rendelés állapotának módosítása

1. **Adminisztrátor** megnyitja a rendeléskezelési felületet.
2. Kiválasztja a rendelést, amelynek állapotát módosítani szeretné.
3. Frissíti a rendelés állapotát (pl. „Készül”, „Kiszállítás alatt”, „Kiszállítva”).
4. A rendszer értesítést küld a felhasználónak az állapotváltozásról.

#### Forgatókönyv 5: Statisztikai jelentések megtekintése

1. **Adminisztrátor** belép az admin felületre, és kiválasztja a „Statisztikák” menüpontot.
2. Megtekinti az értékesítési adatokat és statisztikákat (pl. napi, heti, havi összesítések).
3. Szűrőket alkalmaz, hogy egyedi időszakokra vagy termékekre vonatkozó adatokat jelenítsen meg.
4. Elemzi az adatokat a jövőbeni üzleti döntések támogatása érdekében.

### Funkció - Követelmény Megfeleltetés

| Id | Követelmény                 | Funkció                                                                                               |
| :-: | ----------------------------- | ------------------------------------------------------------------------------------------------------ |
| K1 | Pizzák megjelenítése       | A pizzák listájának megjelenítése a weboldalon különböző szűrőkkel és kategóriákkal.     |
| K2 | Kosár funkció               | A kiválasztott pizzák és termékek kosárba helyezése és mennyiségük, áruk követése.         |
| K3 | Rendelés leadása            | A kosár tartalmából rendelés leadása a szükséges szállítási adatok megadásával.            |
| K4 | Fizetési mód kiválasztása | A fizetési mód kiválasztása, például online vagy készpénzes fizetés.                          |
| K5 | Szállítás követése       | Rendelések szállítási állapotának nyomon követése a felhasználó számára.                   |
| K6 | Termékek kezelése           | Az adminisztrátor új termékeket adhat hozzá, szerkesztheti vagy eltávolíthatja azokat.           |
| K7 | Rendelések nyomon követése | Az adminisztrátor a beérkezett rendeléseket megtekintheti és módosíthatja.                       |
| K8 | Értékesítési jelentések  | Az adminisztrátor számára értékesítési statisztikák és trendek megjelenítése.               |
| K9 | Adatvédelem                  | Biztonságos adatkezelés és jogosultságkezelés biztosítása a felhasználói adatok védelméhez. |
| K10 | Reszponzív dizájn           | Az oldal reszponzív működésének biztosítása minden eszközön.                                  |

### Fogalomszótár

#### Felhasználó

Az a személy, aki a weboldalon böngész és pizzát rendel.

#### Adminisztrátor

Az a személy, aki a rendszer adminisztrációs felületén keresztül kezeli a pizzakínálatot, a rendeléseket és a statisztikai adatokat.

#### Pizza

Az online rendelhető étel, amelyet a felhasználók kiválaszthatnak a pizzakatalógusból.

#### Pizzakatalógus

A weboldal azon része, ahol a felhasználók megtekinthetik a rendelkezésre álló pizzákat kategóriák és szűrők alapján.

#### Kosár

Virtuális kosár, amelyben a felhasználó gyűjtheti a rendelni kívánt pizzákat és termékeket, mielőtt véglegesíti a rendelést.

#### Rendelés

Az a folyamat, amely során a felhasználó leadja a kiválasztott pizzákra és termékekre vonatkozó rendelését.

#### Fizetési mód

A rendelkezésre álló fizetési lehetőségek, amelyeket a felhasználó választhat (pl. online bankkártyás fizetés vagy készpénzes fizetés).

#### Szállítási adatok

Azok az adatok (például cím és elérhetőség), amelyeket a felhasználó megad a rendelés kiszállításához.

#### Rendelés állapota

A rendelés aktuális szakaszának jelzése (pl. „Feldolgozás alatt”, „Készül”, „Kiszállítás alatt”).

#### Statisztikák

Az adminisztrátor számára elérhető értékesítési és felhasználói adatok, amelyek segítik a döntéshozatalt.

#### Reszponzív dizájn

A weboldal azon tulajdonsága, amely biztosítja, hogy az oldal megjelenése minden eszközön megfelelően alkalmazkodik a képernyőmérethez.

#### Adatbiztonság

A felhasználói adatok védelme és titkosítása a jogosulatlan hozzáférés ellen.
