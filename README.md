# Afstuderen
Map waar mijn spullen inzitten voor de proof of concept
Om dit project te runnen is het benodigd om Jenkins te hebben. 
Daarnaast is de website van Xcart gebruikt om een de proof of concept te maken.

Software dat gebruikt is:
 - Mysql Workbench
 - Homebrew
 - Visual studio Code
 - Mamp
 - Jenkins
 - Fitnesse
 - Openrunner
 - Apache webserver
 - Php
 - Java 1.8 !!!!(voor jenkins moet het maximaal 1.8 zijn)
 - Git
 
 Essentiele commando's:
 
 Om jenkins op te starten moet eerst begonnen worden met de directory in je terminal aan te passen.
 Dit doe je als volgt:
 
 Start terminal:
 
 Zoek naar de map waar jenkins in staat b.v.:
cd /Applications/Jenkins
Vervolgens moet je de server starten van Jenkins, dit doe je door de volgende commando in de terminal:
java -Dhudson.model.DirectoryBrowserSupport.CSP="" -jar jenkins.war
Om vervolgens Jenkins te starten op je, je webbrowser:
http://localhost:8080/

Nu dat gedaan is moet je de server van de Xcart website opstarten:
Dit is door middel van de Mamp te runnen, en vervolgens te starten in je webbrowser door de middel van:
http://localhost:8888/
 
 
 
 