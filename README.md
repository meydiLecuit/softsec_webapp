Hosted versie
<a href="https://meydilecuit.be/"> https://meydilecuit.be</a>
<p><b>Done:</b> <br> 
 <ul>Gebruikte package:
     <li>laravel Excel</li>
     <li>laravel cookie-consent</li>
     <li>pwned validator</li>
     <li>laravel secure-headers</li> 
  </ul>
    
 
<h3>HTTPS</h3>
Mijn domain kreeg een A op de website https://www.ssllabs.com/ssltest
DNS CAA met lets encrypt 
iedere respons bevat een Strict-Transport-Security header
het gebruikte domein staat in de HSTS preload list of wacht op toevoeging.

<h3> Registratie & Aanmelden: </h3>
De gebruiker kan een gebruikersnaam (of email) en wachtwoord ingeven. alle 'printable' ASCII karakters worden aanvaard in het wachtwoord. Het wachtwoord moet uit minstens 7 karakters bestaan.Na een mislukte login poging moet het gebruiker 60 seconde wachten. De webtoepassing maakt gebruik van de HIBP api die wachtwoorden dat meer dan 300 keer als has been pwned markeert weigert. De user moet bij registratie een emailadres opgeven en deze moet bevestigt worden door de user vooraleer deze toegang krijgt tot de webtoepassing. Ten slotte maakt Laravel gebruik van Bcrypt met een salt om het wachtwoord op te slaan. <br>

De gebruiker kan pas inloggen nadat hij bewezen heeft dat hij de eigenaar is van de emailadres. Na het aanmelden wordt de user ontvangen in een dashboard, zodat het duidelijk is dat hij ingelogd is. Na het aanmelden kan hij al zijn gegevens opvragen, wijzigen,zijn account verwijderen en ook downloaden in een csv file.

In de scope van het project hebben we mailtrap gebruikt om de mail te sturen en ontvangen. <b>Een probleem die kan voorkomen bij de registratie is dat het mail  bij spams word gezet</b> 

<h3>Maatregelen tegen de courante aanvallen</h3>
    Laravel framework <br>
    -> Laravel is beveiligd tegen de gevraagde courante aanvallen. Vervolgens worden de geheimen beveiligd. Ten slotte worden er maatregelen getroffen tegen typische web vulnerabilities. <br>
<h3>Uitoefenen van rechten</h3>
    - inzage, <br>
    - rectificatie, <br>
    - wissen van account, <br>
    - gegevensoverdraagbaarheid in een csv file downloaden,
    - bezwaar
    <br>
 <h3> Bescherming persoonlijke gegevens: </h3>
 <p>Deze website is conform met de privacy wetgeving. De gebruiker kan de Privacyverklaring ten alle tijden raadplegen onderaan de website op elke pagina. Ook maakt deze website enkel gebruik van noodzakelijke cookies waar hij van op de hoogte wordt gesteld bij het aanmelden. Indien de gebruiker bezwaar heeft kan hij contact opzoeken zoals vermeld in de privacy verklaring.</p> <br>
<h1>Verwerkingsregister: </h1>
<h3>1) Contactgegegevens </h3>
-Contact persoon: Meydi Lecuit  <br>
-adress: Nijverheidskaai 170, 1070 Anderlecht <br>
-email: meydi.lecuit@student.ehb.be <br>
<br>

<h3>2) Categorie persoonsgegevens: </h3>
   <p> naam, email en passwoord <p>

<h3>3) Categorie betrokkennen:</h3> gebruikers <br>
<h3> 4) Grondslag voor verwerking: </h3> uitvoering overeenkomst <br>
<h3> 5) Doel verwerking:</h3> boekhouding <br>
<h3> 6) jurische basis:</h3> wettelijke verplichting <br>
<h3> 7) Locatie verwerker: </h3> in de EU grenzen <br>
<h3> 8) Bewaartermijn: </h3> tot de gebruiker het account wenst te verwijderen <br>
<h3> 9) Veiligheidsmaatregelen: </h3> Voorafgaande autorisatie en het encrypteren van data <br>
<h3> 10) Verwerkingsactiviteiten van bijzondere persoonsgegevens: </h3> Niet ten voordeel <br> 
<h3> 11) Datum aanmaken register: </h3> 20 januari 2021 <br>
<h3>12) De partijen worden met niemand gedeeld </h3> <br>
