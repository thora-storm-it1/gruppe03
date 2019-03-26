<!doctype.html>
<html>
  <head>
    <link rel="stylesheet" href="../../styles/stilark.css">
    <meta charset="utf-8">
    <title> Rosenborg Ballklub </title>
    <link rel="icon" href="../../bilder/rbk.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="innpakning">
      <div class="topptekst">
          <img src="../../bilder/rosenborg.png" width="300px" height="auto">
          <h1> ROSENBORG BALLKLUB </h1>
      </div>
      <!-- Nedfallsmeny fra w3schools (https://www.w3schools.com/howto/howto_css_dropdown.asp) begynner-->
      <div class="meny1">
        <div class="dropdown">
          <button class="dropbtn"> MENY </button>
          <div class="dropdown-content">
            <a href="../../index.php"> HJEM </a>
            <a class="meny_active" href="../../nettsider/nyheter.php"> NYHETER </a>
            <a href="../../nettsider/tropp.php"> TROPP </a>
            <a href="../../nettsider/tabell.php"> TABELL/KAMPER </a>
            <a href="../../nettsider/om_rbk.php"> OM RBK </a>
          </div>
          <!-- Meny som blir på topen av side fra w3schools (https://www.w3schools.com/howto/howto_css_sticky_element.asp) slutter -->
        </div>
      </div>
      <!-- Nedfallsmeny fra w3schools (https://www.w3schools.com/howto/howto_css_dropdown.asp) slutter -->
      <!-- Meny som blir på topen av side fra w3schools (https://www.w3schools.com/howto/howto_css_sticky_element.asp) begynner -->
      <div class="meny2">
        <ul>
          <li><a href="../../index.php"> HJEM </a></li>
          <li><a class="meny_active" href="../../nettsider/nyheter.php"> NYHETER </a></li>
          <li><a href="../../nettsider/tropp.php"> TROPP </a></li>
          <li><a href="../../nettsider/tabell.php"> TABELL/KAMPER </a></li>
          <li><a href="../../nettsider/om_rbk.php"> OM RBK </a></li>
        </ul>
      </div>
      <div class="innhold">
        <br>

          <iframe src="http://www.rbkweb.no/vis/13970" height="auto" width="100%" style="border:none;"></iframe>
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
        } else {}
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
        <h3>KOMMENTARER:</h3>
        <br>
        <?php
        $sql = "SELECT * FROM comments2 ";
        $resultat = $kobling->query($sql);
        while($rad = $resultat->fetch_assoc()) {
          $name = $rad["name"];
          $comment = $rad["comment"];
          echo "<div class='unit'>
          <div class='navn'>
          $name :
          </div>
          <div class='kommentar'>
          $comment <br>
         </div>
         </div>";
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
      <div class="bunntekst">
        <img src="../bilder/rosenborg.png" alt="ROSENBORG" width="100" height="auto">
        <h5> VelkOmmen til en UOFFISIELL nettside Om ROsenbOrg Ballklub laget sOm et skOleprOsjekt i InfOrmasjOnsteknOlOgi 1. FOr å kOmme til ROsenbOrg Ballklubs faktiske nettside, klikk <a href="http://www.rbk.no/" target="_blank">her</a>. </h5>
        <p> Du kan nå RBK på: </p>
        <div class="sosialemedier">
          <a href="https://nb-no.facebook.com/rosenborg/" target="_blank" class="fa fa-facebook"></a>
          <a href="https://twitter.com/RBKfotball?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank" class="fa fa-twitter"></a>
          <a href="https://www.youtube.com/channel/UCMzBr0zvB2uhUTRvnSFzwIw" target="_blank" class="fa fa-youtube"></a>
          <a href="https://www.instagram.com/rosenborgballklub/?hl=nb" target="_blank" class="fa fa-instagram"></a>
        </div>
        <p> E-pOst: infO@rbk.nO eller TelefOn: 73822100 </p>
      </div>
    </div>
  </body>
</html>
