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
                <a class="nav-item nav-link active" href="../08/index.html">Bestilling&nbsp;</a>
                <a class="nav-item nav-link" href="../06/hamburgerskolen.html">Burgerskolen&nbsp;</a>
                <a class="nav-item nav-link" href="../07/om.html">Om Mcbergbys&nbsp;</a>
            </div>
        </div>
    </div>
</nav>

<br/>
<br/>
<br/>

  <h1>Din bestilling:</h1>
  <pre>
    <code>
    <?php 
       print_r($_POST);
    ?>
    </code>
  </pre>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body> 
</html>