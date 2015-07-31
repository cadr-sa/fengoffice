<?php 
	/*
	* Első magyar fordítás 1.3 verzióig: Váczy Attila <vaczy.a.m@gmail.com>
	* Magyar fordítás 1.4.2 verzióig (az 1.3 bázis részbeni újrafordításával, módosításával): Lukács Péter <programozo@lukacspeter.hu>
	*/

return array(

//
	'new message' => 'Új levél',
	'new comment' => 'Új feljegyzés',
	'your account created' => 'A rendszer hozzáférése sikeresen létrehozva - felhasználói adatok',
	'your password' => 'Jelszava',
	'milestone assigned to you' => 'Mérföldkövet rendeltek Önhöz',
	'task assigned to you' => 'Feladatot rendeltek Önhöz',

//
	'hi john doe' => 'Tisztelt {0}',

	'user password reseted desc' => 'A jelszava meg lett változtatva. A {0} oldalaira itt: {1} léphet be az alábbiakkal:',
	'user password reseted username' => 'Felhasználói név: {0}',
	'user password reseted password' => 'Jelszó: {0}',

	'password expiration reminder' => 'Jelszó lejáratáról emlékeztető',
	'password expires days' => 'Az Ön jelszava {0} nap múlva le fog járni.',

	'dont reply wraning' => 'EZ EGY RENDSZERÜZENET. NE VÁLASZOLJON RÁ!',
	'new message posted' => '"{0}" új üzenet elküldve',
	'new task' => 'Új feladat',
	'new task created' => 'A "{1}" nevű projektben "{1}" új feladat lett létrehozva',
	'view new message' => 'Üzenet megtekintése',
	'view new task' => 'Feladat megtekintése',

	'new comment posted' => 'A(z) "{0}" elemhez új megjegyzést fűztek',
	'view new comment' => 'Megjegyzés megtekintése',
	
	'user created your account' => '{0} új felhasználói fiókot hozott létre az Ön számára, amivel használhatja a projekt rendszert',
	'visit and login' => 'Látogasson el {0} oldalra, és lépjen be a következő azonosítóval:',
	
	'milestone assigned' => '"{0}" nevű mérföldkövet Önhöz rendelték',
	'task assigned' => '"{0}" nevű feladatot Önhöz rendelték',
	'view assigned milestones' => 'Mérföldkő megtekintése',
	'view assigned tasks' => 'Feladat megtekintése',
	
	'reply mail' => 'Válasz',
	'write mail' => 'Email üzenet írása',
	'mail to' => 'Címzett',
	'mail account' => 'Postafiók',
	'mail account desc' => ' A levél küldéséhez használandó postafiók',
	'mail subject' => 'Tárgy',
	'mail CC' => 'CC',
	'mail CC desc' => ' Carbon Copy (másolat) címzettjei az eredetivel megegyező üzenetet kapnak',
	'mail BCC' => 'BCC',
	'mail BCC desc' => ' Blind  Carbon Copy (rejtett másolat) címzettjei az eredetivel megegyező üzenet kapnak, de a többi címzett erről nem fog tudni',
	'mail from' => 'Feladó',
	'mail body' => 'Üzenet szövege',
	'send mail' => 'Üzenet elküldése',
	'smtp server' => 'SMTP Szerver',
	'mail account smtp server description' => ' Az üzenetek küldésére használandó SMTP szerver',
	'smtp use auth' => 'SMTP Szerver azonosítás (hitelesítés)',
	'mail account smtp use auth description' => ' Az SMTP Szerver által használandó azonosítás (hitelesítés) módja. Általában a "Letöltési adatok használata" a helyes választás.',
	'no smtp auth' => 'Nincs azonosítás',
	'same as incoming' => 'Letöltési adatok használata',
	'smtp specific' => 'SMTP felhasználói név és jelszó megadása',
	'smtp username' => 'SMTP felhasználói név',
	'mail account smtp username description' => ' Felhasználói név az SMTP Szerveren',
	'smtp password' => 'SMTP Jelszó',
	'mail account smtp password description' => ' Jelszó az SMTP Szerver',
	'smtp port' => 'SMTP Szerver Portja',
	'mail account smtp port description' => ' Ezen a porton figyel az SMTP Szerver. Az alapérték általában 25.',
	'outgoing transport type' => 'Biztonságos kapcsolat',
	'mail account outgoing transport type description' => 'Állítsa "ssl"-re vagy "tls"-re a biztonágos kapcsolathoz (amennyiben támogatja a szerver!)',
	'smtp settings' => 'SMTP Beállítások',
	'format plain' => 'Formázatlan szövegként',
	'format html' => 'HTML szövegként',
	'mail options' => 'Beállítások',
	'forward mail' => 'Továbbítás',
	'reply to all mail' => 'Válasz az összes címzettnek',
	'switch format warn' => 'A formázatlan szövegre kapcsolás kizárja a HTML formázást. Folytasuk?',
	'success mark objects' => 'A levél frissítésre került',
	'error mark email' => 'Hiba a levél frissítése során',
	'draft' => 'Piszkozatként',
	'success save mail' => 'Piszkozat elmentve',
	'discard' => 'Elvet',
	'mail address' => 'Email cím',
	'mail address description' => 'Az email cím az a cím, amire mások email üzenetet küldhetnek Önnek.',

	'unread emails' => 'Olvasatlan üzenetek',
	//'view due task' => 'View due task',
	'due_date reminder notification task' => 'Feladat határidő emlékeztető',
	'due_date task reminder' => 'Feladat határidő emlékeztető',
	'due_date task reminder desc' => 'A "{0}" feladat "{1}"-n lejár és még mindig függőben van',
	'due_date reminder notification milestone' => 'Mérföldkő határidő emlékeztető',
  'due_date milestone reminder' => 'Mérföldkő határidő emlékeztető',
	'due_date milestone reminder desc' => 'A "{0}" mérföldkő "{1}"-n lejár és még mindig függőben van',
	'start reminder notification event' => 'Esemény  emlékeztető',
	'start event reminder' => 'Esemény emlékeztető',
	'start event reminder desc' => 'A "{0}" esemény "{1}"-kor kezdődik',
	'task has been modified' => 'A "{1}" projekt "{0}" feladata módosult',
	'task modified' => 'Feladat módosult',
	'view task' => 'Feladat megtekintése',
	'view file' => 'Fájl megtekintése',
	'view message' => 'Üzenet megtekintése',
	'view comment' => 'Megjegyzés megtekintése',
	'view company' => 'Szervezet megtekintése',
	'view contact' => 'Személy megtekintése',
	'view mail account' => 'Email postafiók megtekintése',
	'view email' => 'Email üzenet megtekintése',
	'view emailunclassified' => 'Email üzenet megtekintése',
	'view chart' => 'Grafikon megtekintése',
	'view event' => 'Esemény megtekintése',
	'view file_revision' => 'Fájl verzió',
	'view form' => 'Nyomtatvány megtekintése',
	'view milestone' => 'Mérföldkő megtekintése',
	'view webpage' => 'Webhely megtekintése',
	'view project' => 'Projekt  megtekintése',
	'view tag' => 'Címke megtekintése',
	'view template' => 'Sablon megtekintése',
	'view timeslot' => 'Időtartam megtekintése',
	'view user' => 'Felhasználó megtekintése',
	
	'original message' => 'Eredeti üzenet',
	'mail sent' => 'Elküldve',
	
	'new notification task' => 'Új feladat \'{0}\' témában',
	'new notification task desc' => 'A \'{0}\' nevű új feladatot {1} adta hozzá.',
	'new notification event' => 'Új esemény \'{0}\' témában',
	'new notification event desc' => 'A \'{0}\' nevű új eseményt {1} adta hozzá.',
	'new notification company' => 'Új szervezet \'{0}\' témában',
	'new notification company desc' => 'A \'{0}\' nevű új szervezetet {1} adta hozzá',
	'new notification contact' => 'Új személy \'{0}\' témában',
	'new notification contact desc' => 'A \'{0}\' nevű új személyt {1} adta hozzá',
	'new notification message' => 'Új feljegyzés \'{0}\' témában',
	'new notification message desc' => 'A \'{0}\' nevű új feljegyzést {1} adta hozzá',
	'new notification file' => 'New fájl \'{0}\' témában',
	'new notification file desc' => 'A \'{0}\' nevű új fájlt {1} adta hozzá',
	'new notification webpage' => 'Új webhely \'{0}\' témában',
	'new notification webpage desc' => 'A \'{0}\' új webhelyet {1} adta hozzá.',
	'new notification milestone' => 'Új mérföldkő \'{0}\' témában',
	'new notification milestone desc' => 'A \'{0}\' nevű új mérföldkövet {1} adta hozzá',
	'new notification comment' => 'Új megjegyzés \'{0}\' témában',
	'new notification comment desc' => 'Új megjegyzés létrehozva \'{0}\' címmel {1} adta hozzá.',

	'modified notification task' => 'A \'{0}\' feladat módosításra került',
	'modified notification task desc' => 'A \'{0}\' feladatot {1} módosította.',
	'modified notification event' => 'A \'{0}\' esemény módosításra került',
	'modified notification event desc' => 'A \'{0}\' feladatot {1} módosította.',
	'modified notification company' => 'A \'{0}\' nevű szervezet adatai módosításra kerültek',
	'modified notification company desc' => 'A \'{0}\' nevű szervezet adatait {1} módosította.',
	'modified notification contact' => 'A \'{0}\' nevű személy módosításra került',
	'modified notification contact desc' => 'A \'{0}\' nevű személy adatait {1} módosította.',
	'modified notification message' => 'A \'{0}\' nevű feljegyzés módosításra került',
	'modified notification message desc' => 'A \'{0}\' nevű feljegyzést {1} módosította.',
	'modified notification file' => 'A \'{0}\' nevű fájl módosításra került',
	'modified notification file desc' => 'A \'{0}\' nevű fájlt {1} módosította.',
	'modified notification webpage' => 'A \'{0}\' nevű webhelycím módosításra került',
	'modified notification webpage desc' => 'A \'{0}\' webhelycímet {1} módosította.',
	'modified notification webpage desc' => 'A \'{0}\' webhelycímet {1} módosította.',
	'modified notification milestone' => 'A \'{0}\' nevű mérföldkő módosításra került',
	'modified notification milestone desc' => 'A \'{0}\' nevű mérföldkövet {1} módosította.',
	
	'deleted notification task' => '\'{0}\' feladat módosításra került',
	'deleted notification task desc' => '\'{0}\' feladatot {1} a kukába dobta.',
	'deleted notification event' => '\'{0}\' nevű esemény a kukába lett dobva',
	'deleted notification event desc' => '\'{0}\' nevű feladatot {1} a kukába dobta.',
	'deleted notification company' => '\'{0}\' nevű szervezet adatai a kukába lettek dobva',
	'deleted notification company desc' => '\'{0}\' nevű szervezet adatait {1} a kukába dobta.',
	'deleted notification contact' => '\'{0}\' nevű személy adatai a kukába lettek dobva',
	'deleted notification contact desc' => 'A \'{0}\' nevű személy adatait {1} a kukába dobta.',
	'deleted notification message' => '\'{0}\' feljegyzés a kukába lett dobva',
	'deleted notification message desc' => '\'{0}\' feljegyzést {1} a kukába dobta.',
	'deleted notification file' => '\'{0}\' nevű fájl a kukába lett dobva',
	'deleted notification file desc' => '\'{0}\' nevű fájlt {1} a kukába dobta.',
	'deleted notification webpage' => '\'{0}\' webhely a kukába lett dobva',
	'deleted notification webpage desc' => '\'{0}\' webhely {1} a kukába dobta.',
	'deleted notification milestone' => '\'{0}\' nevű mérföldkő a kukába lett dobva',
	'deleted notification milestone desc' => '\'{0}\' nevű mérföldkövet {1} a kukába dobta.',
	'deleted notification email' => ' \'{0}\' levelet a kukába dobta',
	'deleted notification email desc' => '\'{0}\' levelet {1} felhasználó a kukába dobta.',

'closed notification task' => 'A \'{0}\' feladat be lett fejezve',
	'closed notification task desc' => 'A \'{0}\' feladatot {1} befejezte.',
	'closed notification milestone' => 'A \'{0}\' mérföldkő be lett fejezve',
	'closed notification milestone desc' => 'A \'{0}\' nevű mérföldkövet {1} befejezte.',
	'mail attachments' => 'Mellékletek',
	'select attachment' => 'Melléklet kiválasztása és feltöltése',
	'attach from workspace' => 'Melléklet kiválasztása a projekt oldalról',

); 

?>