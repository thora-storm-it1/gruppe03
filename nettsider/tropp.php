<!doctype.html>
<html>
  <head>
    <link rel="stylesheet" href="../styles/stilark.css">
    <meta charset="utf-8">
    <title> Rosenborg Ballklub </title>
    <link rel="icon" href="../bilder/rosenborg.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </head>
  <body>
    <div class="innpakning">
      <div class="header">
        <div class="logo">
          <img class="logo1" src="../bilder/rosenborg.png" width="200px" height="200px">
        </div>
        <div class="title">
          <h1> ROSENBORG BALLKLUB </h1>
        </div>
      </div>
      <div class="meny">
        <ul>
          <li><a href="../index.php"> HJEM </a></li>
          <li><a href="nyheter.php"> NYHETER </a></li>
          <li><a class="meny_active"> TROPP </a></li>
          <li><a href="sponsorer.php"> SPONSORER </a></li>
          <li><a href="tabell.php"> TABELL/KAMPER </a></li>
          <li><a href="om_rbk.php"> OM RBK </a></li>
        </ul>
      </div>
      <div class="innhold">

        <?php
          //Tilkoblingsinformasjon
          $tjener = "localhost";
          $brukernavn = "root";
          $passord = "";
          $database = "rbk";

          //Opretter en kobling
          $kobling = new mysqli($tjener, $brukernavn, $passord, $database);

          //Sjekker om koblingen fungerer
          if (kobling->connect_error) {
            die("Noe gikk galt: " . $kobling->connect_error);
          }

          $sql = "SELECT * FROM spiller";
          $resultat = $kobling->query($sql);

          echo "Spørringen $sql ga $resultat-num_rows rader";

        ?>

      </div>
      <div class="footer">
        <h1> Dette er en UOFFISIEL Fanside laget som et skoleprosjekt. </h1>
      </div>
    </div>
  </body>
</html>
