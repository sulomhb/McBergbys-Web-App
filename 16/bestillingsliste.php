<?php
require 'funksjoner.php';

//Først må vi opprette en forbindelse med databasen
$db_forbindelse = åpne_db_forbindelse();
//Så henter vi alle bestillinger som ligger i databasen
$bestillinger = hent_bestillinger($db_forbindelse);
?>

<!DOCTYPE html>
<html lang="no">

<head>
    <meta charset="utf-8" />
    <title>Bestillingsmottak</title>
    <link rel="stylesheet" href="../stiler/style.css" />
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
                    <a class="nav-item nav-link active" href="../16/index.html">Bestilling&nbsp;</a>
                    <a class="nav-item nav-link" href="../06/hamburgerskolen.html">Burgerskolen&nbsp;</a>
                    <a class="nav-item nav-link" href="../07/om.html">Om Mcbergbys&nbsp;</a>
                </div>
            </div>
        </div>
    </nav>
    
    <h1>Liste over bestillinger</h1>
    <?php
      while($bestilling = hent_bestilling($bestillinger)) {
        echo "<div class=\"bestilling\"><strong>Bestilling som ble registrert den {$bestilling['tidspunkt']}:</strong><br>";
        echo bestilling_til_html(unserialize($bestilling['bestilling']));
        echo "</div><hr>";
      }
      ?>
    <footer>
        <a href="../09/personvern.html">Personvernerklæring</a>
      </footer>
</body>

</html>
<?php

//Nå må vi frigjøre resultatet fra spørringen vi kjørte tidligere,
//sånn at det ikke opptar noe minne.
frigjør_data($bestillinger);
//Nå er vi ferdig, og kan lukke forbindelsen til databasen.
lukke_db_forbindelse($db_forbindelse);

?>