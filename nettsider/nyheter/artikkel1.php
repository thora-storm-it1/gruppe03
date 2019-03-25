


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
          <li><a href="../nyheter.php"> NYHETER </a></li>
          <li><a href="../tropp.php"> TROPP </a></li>
          <li><a href="../sponsorer.php"> SPONSORER </a></li>
          <li><a href="../tabell.php"> TABELL/KAMPER </a></li>
          <li><a href="../om_rbk.php"> OM RBK </a></li>
        </ul>
      </div>
      <div class="innhold">
<br><br>
<iframe src="http://www.rbk.no/nyheter/setter-kursen-for-marbella" height="250%" width="100%" style="border:none;"></iframe>
        <?php


        // Tilkoblingsinformasjon
        $tjener = "localhost";
        $brukernavn = "root";
        $passord = "";
        $database = "comments";

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


   $sql = "INSERT INTO comments (name, comment) VALUES ('$name', '$comment')";


   if($kobling->query($sql)) {
       // echo "Spørringen $sql ble gjennomført.";
   } else {
       echo "Noe gikk galt med spørringen $sql ($kobling->error).";
   }

 }
        ?>

          <h3>KOMMENTARER:</h3>
        <br>

        <?php
        $sql = "SELECT * FROM comments ";
        $resultat = $kobling->query($sql);



        while($rad = $resultat->fetch_assoc()) {
          $name = $rad["name"];
          $comment = $rad["comment"];

               echo "<div class='navn'>";
               echo "$name : &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;";
               echo "</div>";
               echo "<div class='kommentar'>";
               echo "$comment <br><br>";
               echo "</div>";


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
<?php
// Vanlig setup for å skrive inn hostnavnet, brukernavn, databasenavn og passord

  //Lager meg et query, velg alle bilde jeg har i databasen
  $sql = "SELECT * FROM comments";
  //Resultatet fra querykallet legger jeg i en "variabel" med navn $result
  $result = $kobling->query($sql);

while($row = $result-> fetch_assoc()){
      //Hver rad i databasen min inneholder en Bildeurl, antall likes og en unik ID, disse henter jeg ut.

      $likes = $row["likes"];
      $id = $row["id"];

      //Her er det som er teknisk vanskelig.
      //Først lager jeg meg en "wrapper" div som har kontroll på alt innholdet mitt
      //Så slenger jeg rundt en form, den må selvfølgelig ha metoden ="POST", slik at jeg kan lytte etter hvis noen trykker på like knappen(e) mine
      //Bildet vises på skjerm, med elementet <img src="$bildeURL" />
      //Viser antall likes tilknyttet til hvert bilde med <div>$likes</div>, siden antall likes fra databsen blir lagret i variabelen $likes
      //<input type='hidden' name='id' value='$id'> er tatt rett fra boken, Kapittel 18 s205
      //Legger til styling på knappen min med et ikon fra FontAwesome
      echo "
      <div>
      <form method='post'>

          <div key='$id'>$likes</div>
          <input type='hidden' name='id' value='$id'>
        <button class='btn btn-default btn-sm' name='like' type='submit'>
          <span class='glyphicon glyphicon-thumbs-up'></span> Like
        </button>
        </form>
          <br>
        </div>
      ";
    };

    mysqli_free_result($result);


    //Denne funksjonen/metoden lytter etter museklikk på liker knappene mine.
    if(isset($_POST['like'])){
      //Henter ut den ID som tilhører hver likerknapp
      $id= $_POST['id'];
      //Lager meg et query som bruker den ID'en jeg har fra en gitt knapp
      $sql = "UPDATE bilder SET likes = likes + 1 WHERE id=$id";
      //Utfører query mot databasen
      if($conn->query($sql)){
        //DENNE ER VIKTIG! Bug fiks for å hindre at du automatisk legger til ting i databasen ved "refresh" av nettsiden.
        // header('Location: .') løser dette problemet!
        header('Location: .');
      }else{
        echo "Upvote feilet";
        header('Location: .');
      }
    }
 ?>
<?php
if(isset($_POST['like'])){
    //Henter ut den ID som tilhører hver likerknapp
    $id= $_POST['id'];
    //Lager meg et query som bruker den ID'en jeg har fra en gitt knapp
    $sql = "UPDATE comments SET likes = likes + 1 WHERE id=$id";
    //Utfører query mot databasen
    if($conn->query($sql)){
      //DENNE ER VIKTIG! Bug fiks for å hindre at du automatisk legger til ting i databasen ved "refresh" av nettsiden.
      // header('Location: .') løser dette problemet!
      header('Location: .');
    }else{
      echo "Upvote feilet";
      header('Location: .');
    }
  } ?>
<form  method='post'>

  Navn: <br>
  <input type="text" name="name" placeholder="Ditt navn.."><br><br>
  Kommentar: <br>
  <textarea name='comment' placeholder="Skriv kommentar.."></textarea><br>
  <input type='submit'  name='leggtil' value="Legg til"><br>
</form>



      </div>
      <div class="footer">
        <div class="rad 1">


        <div class="foot1">
          <h4>OM NETTSIDEN:</h4>
          <h7></h7>
        </div>
        <div class="foot2">
          <h4>KONTAKTINFORMASJON:</h4> <br>
          <h7>  epost: fake-post@gmail.com <br>
                tlf: 69 420 69 <br>
               </h7>
        </div>
      </div>
        <div class="foot3">
          <h8>Denne nettsiden er laget av Tord og Jakob, ingen rettigheter reservert</h8>
        </div>
      </div>
    </div>
  </body>
</html>
