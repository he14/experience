# Projekt eXperience Online

Diese Anleitung beschreibt, wie das Drupal-Projekt eXperience Online auf einem lokalen Rechner installiert werden kann.

Als Voraussetzungen werden PHP, ein Webserver und eine MySQL-Datenbank benötigt. Mit MAMP unter MAC oder XAMPP unter Windows kann eine solche Umgebung leicht eingerichtet werden.

## Umgebung einrichten

### Git-Projekt klonen

Um das Projekt zu klonen, kann man im Terminal die folgenden Befehle ausführen:

    git clone https://github.com/hf-ict-he14/experience.git

Im aktuellen Verzeichnis wird ein Unterverzeichnis namens "experience" erstellt.

### Datenbank erstellen

Eine neue Datenbank mit dem Namen "experience" erstellen.

### DB-Dump importieren

Mit Sequel Pro (Mac) oder MySQL Workbench (Windows) den aktuellsten DB-Dump im Verzeichnis "/experience/_dbdump" importieren.

### Konfigurationsdatei kopieren und anpassen

Im Verzeichnis "/experience/sites/default" die Datei "experience.settings.php" kopieren nach "settings.php" und die folgenden Einstellungen entsprechend Deiner Umgebung anpassen:

    'database' => 'experience-online.ch',
    'username' => 'root',
    'password' => 'root',

### Website aufrufen

Im Browser kann die Website unter MAMP nun wie folgt aufgerufen werden:

    http://localhost:8888/experience/
    
### Besitzer anpassen

Unter Umständen gibt es Probleme mit Berechtigungen. Diese können wie folgt behoben werden.

	sudo chown -R <NEUER_BESITZER> experience


## Informationen zu Drupal

### Pfade

*/sites/all/modules/*  
In diesem Verzeichnis sind installierten Module abgelegt. Die Ordner und Dateien in diesem
Verzeichnis dürfen nicht angepasst werden.

*/sites/all/themes/*  
In diesem Verzeichnis ist das Theme "experience" abgelegt. Dieses steuert das Aussehen und
das Verhalten der Website.
Über eine genau definierte Namenskonvention kann das ganze Template, eine einzelne 
Seite, ein Node (=Artikel), aber auch einzelne Felder "übersteuer" werden. Somit hat man 
die Kontrolle über den generierten HTML-Code.

### Admin-Login

Der Login in die Administration ist:

Benutzer: he14a
Passwort: eXperienceNow
