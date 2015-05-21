# Projekt eXperience Online

Diese Anleitung beschreibt, wie das Drupal-Projekt eXperience Online auf einem lokalen Rechner installiert werden kann.

Als Voraussetzungen werden PHP, ein Webserver und eine MySQL-Datenbank benötigt. Mit MAMP unter MAC oder XAMPP unter Windows kann eine solche Umgebung leicht eingerichtet werden.

## Umgebung einrichten

### Git-Projekt klonen

Führe im Terminal die folgenden Befehle aus, um das Projekt zu klonen:

    git clone https://github.com/hf-ict-he14/experience.git

Im aktuellen Verzeichnis wird ein Unterverzeichnis namens `experience` erstellt.

### Datenbank erstellen

Erstelle eine neue Datenbank mit dem Namen `experience`. Achte darauf, dass als Zeichensatz `UTF-8` definiert ist.

### DB-Dump importieren

Entpacke den aktuellsten DB-Dump aus dem Verzeichnis `/experience/_dbdump` und importiere diesen in die soeben erstellte Datenbank.

Sequel Pro (Mac) oder MySQL Workbench (Windows) sind die passenden Programme für diesen Zweck.

### Konfigurationsdatei kopieren und anpassen

Kopiere im Verzeichnis `/experience/sites/default` die Datei `experience.settings.php` und benenne sie um in `settings.php`. Passe die folgenden Einstellungen entsprechend Deiner Umgebung an:

    'database' => 'experience',
    'username' => 'root',
    'password' => 'root',

### Website aufrufen

Die Website kannst Du nun im Browser (unter MAMP) wie folgt aufrufen:

    http://localhost:8888/experience/
    
Unter anderen Umgebungen könnte die URL auch folgendermassen aussehen:

    http://localhost/experience/
    
    
### Besitzer anpassen

Unter Umständen gibt es Probleme mit Berechtigungen. Diese können wie folgt behoben werden.

	sudo chown -R <NEUER_BESITZER> experience


## Informationen zu Drupal

### Pfade

**/sites/all/modules/**  
In diesem Verzeichnis sind installierten Module abgelegt. Die Ordner und Dateien in diesem Verzeichnis dürfen nicht angepasst werden.

**/sites/all/themes/**  
In diesem Verzeichnis ist das Theme `experience` abgelegt. Dieses steuert das Aussehen und das Verhalten der Website.
Über eine genau definierte Namenskonvention kann das ganze Template, eine einzelne Seite, ein Node (=Artikel), aber auch einzelne Felder "übersteuert" werden. Somit hat man die Kontrolle über den generierten HTML-Code.

### Admin-Login

Der Login in die Administration ist:

Benutzer: he14a  
Passwort: eXperienceNow  

