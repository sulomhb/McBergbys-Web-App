<!DOCTYPE html>
<html lang="nb">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>McBERGBYS | Ordrebekreftelse</title>
    <link rel="stylesheet" href="stiler/index.css">
</head>
<body>
   <!--Navigasjon-->
   <nav>
      <h1 id="overskrift">Ordrebekreftelse</h1>
      <a class="aktiv" href="index.php">Gå tilbake</a>
   </nav>
   <br>
   <br>
   <br>
    
   <!--PHP-->
<?php
$telefonnummer = $_POST['telefonnummer'];
$navn = $_POST['navn'];
$etternavn = $_POST['etternavn'];
if(empty($navn) || empty($etternavn) || $telefonnummer<10000000){
    echo "<br><h4>Vennligst gå gjennom det du har skrevet, telefonnummeret må være realistisk!</h4>";
}

else{
$telefonnummer = $_POST['telefonnummer'];
$navn = $_POST['navn'];
$etternavn = $_POST['etternavn'];
$drikke = $_POST['drikke'];
$hamburger = $_POST['hamburger'];
$tilbehør = $_POST['tilbehør'];
 echo "<h2>Her er bestillingen din:</h2>";
 echo "<em>Telefonnummer:</em> +47 ". $telefonnummer. "<br>";
 echo "<em>Navn:</em> ". $navn ."<br>";
 echo "<em>Etternavn:</em> ". $etternavn."<br>";

 if($drikke!="Ingen"){
     echo "<em>Drikke:</em> ". $drikke. "<br>";
 }
 else {
     $drikke=null;
     echo "<em>Ingen drikke valgt</em><br>";
 }

 if($hamburger!="Ingen"){
    echo "<em>Hamburger:</em> ". $hamburger. "<br>";  
 }
 else {
     $hamburger=null;
    echo "<em>Ingen hamburger valgt</em><br>";
 }

 if($tilbehør!="Ingen"){
    echo "<em>Tilbehør:</em> ". $tilbehør. "<br>";   
 }
 else {
     $tilbehør=null;
    echo "<em>Ingen tilbehør valgt</em><br>";
 }

 if(isset($_POST['annet'])){
    $annet = $_POST['annet'];
    echo "<em>Annet:</em> <ul>";
    foreach($annet as $e) {
      echo "<li>".$e."</li>";
    }
    echo "</ul>";
 } 
 else {
    echo "<em>Ingen ekstra valgt</em><br><br>";
 }

 $servername = "localhost";
 $username = "3009sesu";
 $password = "3009sesu";
 $dbname = "3009sesu";
  
 // Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 // Check connection
 if (mysqli_connect_errno()) { 
     die('Kunne ikke opprette forbindelse med databasen: ' . mysqli_connect_error()) ; 
     } 
  
 $sql_1 = "INSERT INTO personinfo (telefon, navn, etternavn)
 VALUES ('{$telefonnummer}', '{$navn}', '{$etternavn}');";
 $sql_2 = "INSERT INTO bestilling (drikke, hamburger, tilbehør, personinfo_telefonnummer)
 VALUES ('{$drikke}', '{$hamburger}', '{$tilbehør}', '{$telefonnummer}');";
 
 mysqli_query($conn, $sql_1); 
  
     //Nå er vi ferdig, og kan lukke forbindelsen til databasen 
 
 mysqli_query($conn, $sql_2); 
  
     //Nå er vi ferdig, og kan lukke forbindelsen til databasen 
     mysqli_close($conn); 
 }
?>
</body>
</html>