<?php

// We need to know when the order was placed.

$tidspunkt = date("Y-m-d H:i:s");

//Connection to our database.

$db_host = 'localhost';
$db_navn = '3009sesu';
$db_bruker = '3009sesu';
$db_pass = '3009sesu';
$db_forbindelse = mysqli_connect($db_host, $db_bruker, $db_pass, $db_navn);
if (mysqli_connect_errno()) {
die('Kunne ikke opprette forbindelse med databasen: ' . mysqli_connect_error()) ;
}
$bestilling = serialize($_POST);
$spørring = "INSERT INTO Bestillinger(tidspunkt, bestilling) VALUES ('{$tidspunkt}', '{$bestilling}');";
mysqli_query($db_forbindelse, $spørring);
mysqli_close($db_forbindelse);
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
     <strong>Navn:</strong>
     
     <?php 

     if(isset($_POST['navn'])) {

     echo $_POST['navn'];
     }
         ?>
     
     
     
</p>
      <p><strong>Telefon: </strong>
      
      <?php 
      if(isset($_POST['tlf'])) {
      echo $_POST['tlf'];
      }
     
     ?>

</p> 
      
      <p><strong>Burger:</strong>
      
      <?php
      if(isset($_POST['burger'])) {

      
      echo $_POST['burger'];
      }

      else{
          echo "Ingen burger valgt.\n";
      }
     ?>


	  </p> 

      <p><strong>Drikke: </strong> 
      
      
      <?php if(isset($_POST['burger'])) {
          
          echo $_POST['drikke'];
         
      }
         
      else{
        echo "Ingen drikke valgt.\n";
         }
     ?> </p>  
     
     
     <p><strong>Tilbehør: </strong> 
     
     <?php if(isset($_POST['tilbehør'])) {
         
         echo $_POST['tilbehør'];
     }        
         else{
            echo "Ingen tilbehør valgt.\n";
         }

         ?></p>


	  <p>
      <strong>Ekstra: </strong> 
      <?php
      if(isset($_POST['ekstra']) && is_array($_POST['ekstra'])) {
       
        echo "<ul>\n";

        foreach($_POST['ekstra'] as $e) {

          echo "<li>{$e}</li>\n";
        }
        echo "</ul>\n";
      }

      else{
         
        echo "Ingen ekstra tilbehør er lagt til.\n";
     }


     //"$tlf" = Telefon input from index.

     $tlf = $_POST['tlf'];

     //Validation


     if(isset($_POST['tlf'])) {
         $tlf = str_replace(" ", "", $_POST['tlf']);
     }
     
     else {
         $tlf = NULL;
     }

     //We are checking if the number that is typed in is a Norwegian phone number, and has 8 "letters".
     if (is_numeric($tlf) && strlen((string)$tlf) == 8) {
         $tlf_ok = true;
     }
     else {
         $tlf_ok = false;
     }
      ?>
      
     </p>
     
    </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>
