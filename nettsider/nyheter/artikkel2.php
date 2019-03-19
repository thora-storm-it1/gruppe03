


<!doctype.html>
<html>
  <head>
    <link rel="stylesheet" href="../../styles/stilark.css">
    <meta charset="utf-8">
    <title> Rosenborg Ballklub </title>
    <link rel="icon" href="../../bilder/rosenborg.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </head>
  <body>
    <div class="innpakning">
      <div class="header">
        <div class="logo">
          <img class="logo1" src="../../bilder/rosenborg.png" width="200px" height="200px">
        </div>
        <div class="title">
          <h1> ROSENBORG BALLKLUB </h1>
        </div>
      </div>
      <div class="meny">
        <ul>
          <li><a href="../../index.php"> HJEM </a></li>
          <li><a class="meny_active"> NYHETER </a></li>
          <li><a href="tropp.php"> TROPP </a></li>
          <li><a href="sponsorer.php"> SPONSORER </a></li>
          <li><a href="tabell.php"> TABELL/KAMPER </a></li>
          <li><a href="om_rbk.php"> OM RBK </a></li>
        </ul>
      </div>
      <div class="innhold">
<br><br>
        <?php


        // Tilkoblingsinformasjon
        $tjener = "localhost";
        $brukernavn = "root";
        $passord = "";
        $database = "commentsection";

        // Opprette en kobling
        $kobling = new mysqli($tjener, $brukernavn, $passord, $database);

        // Sjekk om koblingen virker
        if ($kobling->connect_error) {
            die("Noe gikk galt: " . $kobling->connect_error);
        } else {

        }

        // Angi UTF-8 som tegnsett
        $kobling->set_charset("utf8");


if(isset($_POST["leggtil"])) {
   // Lagrer skjemafeltene i enklere navn
   $name = $_POST["name"];
   $comment = $_POST["comment"];

   $sql = "INSERT INTO comments2 (name, comment) VALUES ('$name', '$comment')";


   if($kobling->query($sql)) {
       // echo "Spørringen $sql ble gjennomført.";
   } else {
       echo "Noe gikk galt med spørringen $sql ($kobling->error).";
   }

 }
        ?>

        <h2>Kommentarer:</h2>
        <br>

        <?php
        $sql = "SELECT * FROM comments2 ";
        $resultat = $kobling->query($sql);



        while($rad = $resultat->fetch_assoc()) {
          $name = $rad["name"];
          $comment = $rad["comment"];

              //echo "<class="navn">";
               echo "$name : &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;";
            //   echo "</div>";
            //   echo "<div class="kommentar">";
               echo "$comment <br><br>";
              // echo "</div>";


        }

        echo "</table>"; // Avslutter tabellen

        ?>
        <br><br>
        <script>
                //thank you god. I promise never to use PHP again
                if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
                }
              </script>

<form  method='post'>

  Navn: <br>
  <input class="navn" type="text" name="name" placeholder="Ditt navn.."><br><br>
  Kommentar: <br>
  <textarea name='comment' placeholder="Skriv kommentar.."></textarea><br>
  <input class="kommentar" type='submit'  name='leggtil' value="Legg til"><br>
</form>



      </div>
      <div class="footer">
        <h1> Dette er en UOFFISIEL Fanside laget som et skoleprosjekt. </h1>
      </div>
    </div>
  </body>
</html>
