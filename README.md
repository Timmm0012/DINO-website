# DINO-website
Dit is een website ontwikkeld voor de minor ORM-DINO.

# Project installeren en runnen
	1.	Download deze repository als .zip
	2.	Pak het bestand uit (Extract / Uitpakken)
	3.	Installeer XAMPP via https://www.apachefriends.org
	4.	Plaats de uitgepakte map in:
/Applications/XAMPP/xamppfiles/htdocs/dino-website/
	5.	Start Apache in XAMPP
	6.	Open de website in de browser via:
http://localhost/dino-website/html/home.html

# Mappenstructuur
	•	html/ — HTML-pagina’s
	•	css/ — stylesheets
	•	php/ — PHP-bestanden (inclusief mailfunctionaliteit)
	•	images/ — afbeeldingen
	•	.env — mailconfiguratie

# Mail functionaliteit
Het contactformulier maakt gebruik van PHPMailer.
De .env file bevat de mailinstellingen:

email=“YOUR_EMAIL”
password=“YOUR_APP_PASSWORD”

# Overige informatie
	•	Apache moet actief zijn om de website te kunnen laden
	•	De website werkt alleen via http://localhost/ vanwege PHP
	•	De mapstructuur mag niet gewijzigd worden i.v.m. relatieve paden
