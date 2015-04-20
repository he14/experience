# Projekt eXperience Online

Diese Anleitung beschreibt, wie das Drupal-Projekt eXperience Online auf einem lokalen Rechner installiert werden kann.

Als Voraussetzungen werden PHP, ein Webserver und eine MySQL-Datenbank benötigt. Mit MAMP unter MAC oder XAMPP unter Window kann eine solche Umgebung leicht eingerichtet werden.

## Git-Projekt klonen

Um das Projekt zu klonen, kann man im Termin die folgenden Gefehle ausführen:

    git clone https://github.com/hf-ict-he14/experience.git

Im aktuellen Verzeichnis wird ein Unterverzeichnis namens "experience" erstellt.

## Datenbank erstellen

Eine neue Datenbank mit dem Namen "experience" erstellen.

## DB-Dump importieren

Mit Sequel Pro (Mac) oder MySQL Workbench (Windows) den aktuellsten DB-Dump im Verzeichnis "/experience/_dbdump" importieren.

## Konfigurationsdatei kopieren und anpassen

Im Verzeichnis "/experience/sites/default" die Datei "experience.settings.php" kopieren nach "settings.php" und die folgenden Einstellungen entsprechend Deiner Umgebung anpassen:

    'database' => 'experience-online.ch',
    'username' => 'root',
    'password' => 'root',

## Website aufrufen

Im Browser kann die Website unter MAMP nun wie folgt aufgerufen werden:

    http://localhost:8888/experience/
    

