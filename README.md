# Webprog2
						Webshop

Navigációs menü: 
	- Áruház
	- Rólunk
	- Kapcsolatok
	- Bejelentkezés
	- Regisztráció

Bejelentkezett felhasználóknak:
	- Megjelenik egy kis kosár ikon.
	- Kosárba tudja helyezni a termékeket
	- Kiírja a jobb fenti sarokban hogy kiként van bejelentkezve
	- Kedvencek menüpont ahol eltárolhatja a kedvenc termékeit
	- Kapcsolat felvétel az oldallal, a site-on keresztül

Adminisztrációs feladatok:
	- Bizonyos termék leakciózása
	- Termék hozzáadása
	- Termék törlése
	- Felhasználók kezelése
	- Válasz írása a felhasználónak

Felhasználó rendszeri elvárások:
	- A felhasználót kiléptesse 1 nap inaktivitás után (Lejár a session)
	- Müködő kosár
	- Kedvenc termékek elmentése
	- Bejelentkezés és regisztráció 


						Éttermi oldal

Navigációs menü:
	- Város választás -> Étterem lista
	- Bejelentkezés / Regisztráció
	Az oldal alján:
		- Kapcsolat
		- Rólunk

Nézetek:
	- Felhasználó
	- Étterem
	- Rendszer adminisztátor
	- Látogató

	Felhasználó:
		- Étlap megtekintés
		- Ételek pakolása a kosárba
		- Esetlegesen plusz feltét az ételhez.
		- Elöző rendelések megtekintése
		- Felhasználói adatok módosítása
		- Kapcsolat felvétel az étteremmel
		- Ha egy időzítő ami számolja az időt hogy mikor adta le a rendelést.
		- 3 perces rendelés visszavonása opció -> 3 perc után nem elérhető a menüpont.
		- Az étlapot tudja szűrni/rendezni
		- Értékelni tudja az adott éttermet.
		- Kedvezményt tud beaktiválni.


	Étterem:
		- Látja a rendeléseket:
			- Eltudja fogadni / elutasítani.
			- Letudja nyitni az adott rendelést és ott áttudja nézni az adatokat hogy mind valós-e. És akkor tudja elküldeni egy másik oldalra ami mondjuk a konyhában látható.
			- Ha kivitték a rendelést akkor rá tud nyomni hogy teljesítve.
		- Ki tud tiltani bizonyos felhasználókat az étteremből, pirossal jelezné a sorban hogy ő egy tiltott felhasználó.
		- Egy külön oldal ahol csak a rendelés kód és az látszik amit rendeltek (Konyhába egy kijelzőre ki lehet vetíteni)
		- Segítséget tud kérni az adminisztrátortól
		- Tud nyomtatni egy számlát, minden adattal
		- Kedvezményt tud hozzáadni az étteremhez.


	Adminisztrátor:
		- Tudja kezelni az éttermeket -> Hozzáadni, eltávolítani
		- Regisztráltak listáját le tudja kérni
		- Szerver logolást tud bekapcsolni ami listáz minden tevékenységet. (globális változó)
		- Tud üzenetet fogadni az étteremtől és válaszolni is neki.
		- Globális kedvezményt tud hozzáadni.
		- Adott étteremhez tud kedvezményt hozzáadni.


	Látogató: 
		- Megtudja nézni az éttermeket
		- Értékeléseket
		- NEM TUD rendelni


Apró funkciók:
	- Nem lehet rendelni ha már bezárt az étterem / a rendelési idő lejárt.
	- POPUP ablak egyszeri kedvezményről.

Bejelentkezés / Regisztráció:
	KÓDOLÁS 


