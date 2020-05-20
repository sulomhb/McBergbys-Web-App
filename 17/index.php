<!DOCTYPE html>
<html lang="nb">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>McBERGBYS</title>
      <link rel="stylesheet" href="stiler/index.css">
   </head>
   <body>
         <!--Navigasjon-->
         <nav>
            <h1 id="overskrift">Velkommen til McBergbys!</h1>
            <a class="aktiv" href="index.php">Menyvelgeren</a>
            <a href="vaktliste.html">Vaktliste</a>
            <a href="hamburgerskolen.html">Hamburgerskolen</a>
            <a href="om_oss.html">Om oss</a>
            <a href="personvern.html">Personvern</a>
            <a href="bestillingsliste.php">Bestillingsliste</a>
         </nav>
         <br>
         <br>
         <br>
         <!-- Meny velgeren -->
         <div id="meny_velgeren">
            <h2>Menyvelgeren</h2>
            <h3>Sett sammen din kombinasjon for kun 99kr!</h3>
            <h4>Obligatoriske felt er merket med <span class="rød_stjerne">*</span> </h4>
            <form action="skjema.php" method="post">
                <!--Personlig info-->
               <label for="id_telefonnummer"><span class="rød_stjerne">*</span> Telefonnummer (format: 8 siffer uten mellomrom)</label><br>
               <input type="tel" pattern="[0-9]{8}" id="id_telefonnummer" name="telefonnummer" placeholder="+47 "><br><br>
               <label for="id_navn"><span class="rød_stjerne">*</span> Navn</label><br>
               <input type="text" id="id_navn" name="navn" placeholder="Ditt fornavn"><br><br>
               <label for="id_etternavn"><span class="rød_stjerne">*</span> Etternavn</label><br>
               <input type="text" id="id_etternavn" name="etternavn" placeholder="Ditt etternavn"><br><br>
               <!--Drikke-->
               <label for="id_drikke">Drikke</label><br>
               <select name="drikke" id="id_drikke">
                  <option value="Ingen">Ingen</option>
                  <option value="Cola">Cola</option>
                  <option value="Solo">Solo</option>
                  <option value="Sitronbrus">Sitronbrus</option>
                  <option value="Vann">Vann</option>
               </select><br><br>
               <!--Hamburger-->
               <label for="id_hamburger">Hamburger</label><br>
               <select name="hamburger" id="id_hamburger">
                  <option value="Ingen">Ingen</option>
                  <option value="Superburger">Superburger - alles favoritt</option>
                  <option value="Cheeseburger">Cheeseburger - hvis du liker ost</option>
                  <option value="Veggis">Veggis - for deg som er glad i planter</option>
               </select><br><br>
               <!--Tilbehør-->
               <label for="id_tilbehør">Tilbehør</label><br>
               <select name="tilbehør" id="id_tilbehør">
                  <option value="Ingen">Ingen</option>
                  <option value="Pommes frites">Pommes frites</option>
                  <option value="Løkringer">Løkringer</option>
                  <option value="Cheese sticks">Cheese sticks</option>
               </select><br><br>
               <!--Annet-->
               Annet<br>
               <input type="checkbox" id="id_annet_1" name="annet[]" value="Ketchup">
               <label for="id_annet_1">Ketchup laget av ekte tomater</label><br>
               <input type="checkbox" id="id_annet_2" name="annet[]" value="Sennep">
               <label for="id_annet_2">Sennep av den knallsterke typen</label><br>
               <input type="checkbox" id="id_annet_3" name="annet[]" value="Grillkrydder">
               <label for="id_annet_3">Grillkrydder som passer til alt</label><br>
               <input type="checkbox" id="id_annet_4" name="annet[]" value="Dip">
               <label for="id_annet_4">Dip laget etter vår hemmelige oppskrift</label><br><br>
               <!--Fullfør-->
               <label for="id_fullfør" class="hidden">Label for fullfør</label>
               <input type="submit" id="id_fullfør" value="Fullfør" name="submit_knapp">
               <label for="id_nullstill" class="hidden">Label for nullstill</label>
               <input type="reset" id="id_nullstill" value="Nullstill">
            </form>
         </div>
         <!--Galleri-->
         <!--Bilde er sjekket opp og krevet ikke "attribution"-->
         <div class="galleri">
                <img src="bilder/hamburgers.jpg" alt="Bilde av en hamburger">
             </div>
   </body>
</html>