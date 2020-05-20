<?php 
require 'funksjoner.php';

$tlf =  hent_skjemadata('tlf');
$tlf = fjern_mellomrom($tlf);
$tlf_ok = valider_telefonnummer($tlf);

$navn =  hent_skjemadata('navn', TRUE);
$burger =  hent_skjemadata('burger');
$drikke = hent_skjemadata('drikke');
$tilbehør = hent_skjemadata('tilbehør');
$ekstra = hent_skjemadata('ekstra');

//Først må vi opprette en forbindelse med databasen
$db_forbindelse = åpne_db_forbindelse();

//Så lagrer vi bestillingen til databasen,
//men bare dersom skjemaet validerte til ok
if ($tlf_ok) {
  lagre_bestilling($db_forbindelse, $_POST);
}

//Nå er vi ferdig, og kan lukke forbindelsen til databasen
lukke_db_forbindelse($db_forbindelse);

?>
<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="utf-8">
    <meta name="author" content="sulomhb">
    <title>McBergbys bestillingssystem</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../stiler/style.css" />
</head>

<body>

<nav class="navbar nav-tabs fixed-top bg-dark navbar-expand-sm pb-0">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#minmeny" aria-controls="minmeny"
            aria-expanded="false" aria-label="Vis navigasjonsmeny">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="minmeny">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active" href="../12/index.html">Bestilling&nbsp;</a>
                <a class="nav-item nav-link" href="../06/hamburgerskolen.html">Burgerskolen&nbsp;</a>
                <a class="nav-item nav-link" href="../07/om.html">Om Mcbergbys&nbsp;</a>
            </div>
        </div>
    </div>
</nav>

<br/>
<br/>
<br/>

  <h1>Kvittering til bestilling:</h1>

  <div id="kvittering">
  <p>
     <strong>Navn: <?php echo $navn;?></strong>
     

     
     
</p>
      <p><strong>Telefon: <?php echo $tlf; ?> </strong></p> 
      
      <p><strong>Burger: <?php echo $burger; ?></strong>
      


	  </p> 

      <p><strong>Drikke: <?php echo $drikke; ?> </strong>  </p>  
     
     
     <p><strong>Tilbehør: <?php echo $tilbehør; ?> </strong> </p>


	  <p>
      <strong>Ekstra: </strong> 
      <?php
      if(isset($ekstra) && is_array($ekstra)) {
       
        echo "<ul>\n";

        foreach($ekstra as $e) {

          echo "<li>{$e}</li>\n";
        }
        echo "</ul>\n";
      }

      else{
         
        echo "Ingen ekstra tilbehør er lagt til.\n";
     }

     ?>

    </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>
