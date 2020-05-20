<!DOCTYPE html>
<html lang="nb">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>McBERGBYS | Bestillingsliste</title>
    <link rel="stylesheet" href="stiler/index.css">
</head>
<body>
   <!--Navigasjon-->
   <nav>
            <h1 id="overskrift">Velkommen til McBergbys!</h1>
            <a href="index.php">Menyvelgeren</a>
            <a href="vaktliste.html">Vaktliste</a>
            <a href="hamburgerskolen.html">Hamburgerskolen</a>
            <a href="om_oss.html">Om oss</a>
            <a href="personvern.html">Personvern</a>
            <a class="aktiv" href="bestillingsliste.php">Bestillingsliste</a> 
         </nav>
         <br>
         <br>
         <br>
    <h2>Fullførte bestillinger</h2>
    <form action="bestillingsliste.php" method="POST">
    <label for="id_telefonnummer">Telefonnummer (format: 8 siffer uten mellomrom)</label><br><br>
    <input type="tel" pattern="[0-9]{8}" id="id_telefonnummer" name="telefonnummer" placeholder="+47 ">
    <label for="bestilling" class="hidden">Submit</label><br>
    <input type="submit" name="submit" id="bestilling">
    </form>
    <br><br>
    
   <!--PHP-->
<?php
if(isset($_POST['telefonnummer']) && $_POST['telefonnummer'] > 0){
    // Informasjon for å koble seg til DB
    $db_host = 'localhost';
    $db_navn = '3009sesu';
    $db_bruker = '3009sesu';
    $db_pass = '3009sesu';
    //Vi forsøker først å opprette forbindelsen med databasen.
    //Se https://secure.php.net/manual/en/function.mysqli-connect.php
    $db_forbindelse = mysqli_connect($db_host, $db_bruker, $db_pass, $db_navn);
    //Vi sjekker om forbindelsen ble opprettet
    if (mysqli_connect_errno()) {
        die('Kunne ikke opprette forbindelse med databasen: ' . mysqli_connect_error()) ;
    }
    //Nå lager vi SQL-spørringen som skal kjøres, og så
    //kjører vi den i databasen som vi har opprettet en forbindelse til.
    //Se https://secure.php.net/manual/en/mysqli.query.php
    $spørring = "SELECT * FROM bestilling JOIN personinfo ON personinfo_telefonnummer = personinfo.telefon WHERE personinfo_telefonnummer = $_POST[telefonnummer];";
    $resultat = mysqli_query($db_forbindelse, $spørring);
    echo "<h2>Bestillinger: </h2>";
    echo "<table>";
    echo "<tr>";
    echo "<th>Telefonnummer</th>";
    echo "<th>Navn</th>";
    echo "<th>Etternavn</th>";
    echo "<th>Drikke</th>";
    echo "<th>Hamburger</th>";
    echo "<th>Tilbehør</th>";
    echo "</tr>";
    while($row = mysqli_fetch_assoc($resultat)){
        echo "<tr>";
        echo "<td>" . $row['personinfo_telefonnummer'] . "</td>";
        echo "<td>" . $row['navn'] . "</td>";
        echo "<td>" . $row['etternavn'] . "</td>";
        echo "<td>" . $row['drikke'] . "</td>";
        echo "<td>" . $row['hamburger'] . "</td>";
        echo "<td>" . $row['tilbehør'] . "</td>";
        echo "</tr>";
    }
    //Nå er vi ferdig, og kan lukke forbindelsen til databasen
    mysqli_close($db_forbindelse);
}

elseif(!isset($_POST['telefonnummer'])){
    echo "";
}
?>
</body>
</html>