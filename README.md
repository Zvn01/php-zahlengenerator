# Kleiner Zahlengenerator auf PHP Basis (Unterrichtsstoff)

Der Code ist eine einfache HTML- und PHP-Anwendung, die einen Lottogenerator erstellt. 

- Der HTML-Code definiert die Struktur der Seite und enthält ein Bild, einen Titel, ein Formular, den Lottoskript-Code, einen Zurücksetzen-Button und einige CSS-Stile.

- Das PHP-Skript beginnt mit der Definition einer Funktion generateLottoNumbers, die eine bestimmte Anzahl von Lottozahlen generiert. Die Funktion verwendet die range-Funktion, um eine Sequenz von Zahlen von 1 bis 42 zu erstellen, mischt sie mit shuffle und gibt die ersten $count Zahlen zurück.

- Im nächsten Teil des PHP-Codes wird überprüft, ob das Formular abgesendet wurde ($_SERVER["REQUEST_METHOD"] == "POST"). Wenn ja, werden die Felder-Anzahl und die Anzahl der Lottozahlen gelesen und überprüft. Wenn die Anzahl gültig ist, werden für jede Feld-Anzahl die Lottozahlen und eine Glückszahl generiert und auf der Seite angezeigt.

- Schließlich gibt es noch den Zurücksetzen-Button, der den Benutzer zur Startseite zurückführt.

- Der CSS-Code enthält Stildefinitionen für verschiedene Elemente der Seite wie den Header, den Content-Bereich, Überschriften, Formulare und Links.

Hierbei handelt es sich schlicht um Unterrichtsstoff. Die initiale Aufgabe bestand darin, ein "funktionierendes" Formular aufzustellen. Ich habe lediglich für die Optik noch ein bisschen CSS implementiert.

Die Anwendung dient nur zur Veranschaulichung meines persönlichen Lernfortschritts und ist nicht zur kommerziellen Nutzung bestimmt. Nutzung auf eigene Gefahr.


