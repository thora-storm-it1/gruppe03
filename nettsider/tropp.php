<!doctype.html>
<html>
  <head>
    <link rel="stylesheet" href="../styles/stilark.css">
    <meta charset="utf-8">
    <title> Rosenborg Ballklub </title>
    <link rel="icon" href="../bilder/rbk.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="innpakning">
      <div class="topptekst">
          <img src="../bilder/rosenborg.png" width="300px" height="auto">
          <h1> ROSENBORG BALLKLUB </h1>
      </div>
      <!-- Nedfallsmeny fra w3schools (https://www.w3schools.com/howto/howto_css_dropdown.asp) begynner-->
      <div class="meny1">
        <div class="dropdown">
          <button class="dropbtn"> MENY </button>
          <div class="dropdown-content">
            <a href="../index.php"> HJEM </a>
            <a href="nyheter.php"> NYHETER </a>
            <a class="meny_active" href="#home"> TROPP </a>
            <a href="tabell.php"> TABELL/KAMPER </a>
            <a href="om_rbk.php"> OM RBK </a>
          </div>
        </div>
      </div>
      <!-- Nedfallsmeny fra w3schools (https://www.w3schools.com/howto/howto_css_dropdown.asp) slutter -->
      <!-- Meny som blir på topen av side fra w3schools (https://www.w3schools.com/howto/howto_css_sticky_element.asp) begynner -->
      <div class="meny2">
        <ul>
          <li><a href="../index.php"> HJEM </a></li>
          <li><a href="nyheter.php"> NYHETER </a></li>
          <li><a class="meny_active" href="#home"> TROPP </a></li>
          <li><a href="tabell.php"> TABELL/KAMPER </a></li>
          <li><a href="om_rbk.php"> OM RBK </a></li>
        </ul>
      </div>
      <!-- Meny som blir på topen av side fra w3schools (https://www.w3schools.com/howto/howto_css_sticky_element.asp) slutter -->
      <div class="innhold">
        <div class="breddeinnhold1">
          <div class="tropp">
          <?php
            //Tilkoblingsinformasjon
            $tjener = "localhost";
            $brukernavn = "root";
            $passord = "";
            $database = "rosenborg";
            //Opretter en kobling
            $kobling = new mysqli($tjener, $brukernavn, $passord, $database);
            $kobling->set_charset("utf8");
            //Sjekker om koblingen fungerer
            if ($kobling->connect_error) {
              die("Noe gikk galt: " . $kobling->connect_error);
            }
            //Definerer SQL-spørringen og henter ut resultatet
            $sql = "SELECT * FROM spiller ORDER BY draktnummer ASC";
            $resultat = $kobling->query($sql);
            echo "<br>";
            echo "<h3> Målvakter: </h3>";
              echo "<div class='spillerrad'>";
                //Henter ut resultatene fra en rad og legger dem i et array
                while($rad = $resultat->fetch_assoc()) {
                  //Lagrer variablene i en rad hver for seg
                  $id = $rad["id"];
                  $fornavn = $rad["fornavn"];
                  $etternavn = $rad["etternavn"];
                  $posisjon = $rad["posisjon"];
                  $draktnummer = $rad["draktnummer"];
                  $nasjonalitet = $rad["nasjonalitet"];
                  $ankomst = $rad["ankomst"];
                  $årstall = date("Y");
                  $opphold = $årstall - $ankomst;

                    if ($posisjon == "Målvakt") {
                        echo "<div class='spiller'>
                                <img src='../bilder/$fornavn.jpg' alt='$fornavn' width='250' height='auto'>
                                <ul>
                                  <li> Navn: $fornavn $etternavn </li>
                                  <li> Posisjon: $posisjon </li>
                                  <li> Draktnummer: $draktnummer </li>
                                  <li> Nasjonalitet: $nasjonalitet </li>
                                  <li> Ankomst: $ankomst </li>
                                  <li> År i klubben: $opphold </li>
                                </ul>
                              </div>";
                    }
                }
              echo "</div>";
          ?>
          <?php
            //Tilkoblingsinformasjon
            $tjener = "localhost";
            $brukernavn = "root";
            $passord = "";
            $database = "rosenborg";
            //Opretter en kobling
            $kobling = new mysqli($tjener, $brukernavn, $passord, $database);
            $kobling->set_charset("utf8");
            //Sjekker om koblingen fungerer
            if ($kobling->connect_error) {
              die("Noe gikk galt: " . $kobling->connect_error);
            }
            //Definerer SQL-spørringen og henter ut resultatet
            $sql = "SELECT * FROM spiller ORDER BY draktnummer ASC";
            $resultat = $kobling->query($sql);
            echo "<br>";
            echo "<h3> Forsvarspillere: </h3>";
              echo "<div class='spillerrad'>";
                //Henter ut resultatene fra en rad og legger dem i et array
                while($rad = $resultat->fetch_assoc()) {
                  //Lagrer variablene i en rad hver for seg
                  $id = $rad["id"];
                  $fornavn = $rad["fornavn"];
                  $etternavn = $rad["etternavn"];
                  $posisjon = $rad["posisjon"];
                  $draktnummer = $rad["draktnummer"];
                  $nasjonalitet = $rad["nasjonalitet"];
                  $ankomst = $rad["ankomst"];
                  $årstall = date("Y");
                  $opphold = $årstall - $ankomst;

                    if ($posisjon == "Forsvarsspiller") {
                        echo "<div class='spiller'>
                                <img src='../bilder/$fornavn.jpg' alt='$fornavn' width='250' height='auto'>
                                <ul>
                                  <li> Navn: $fornavn $etternavn </li>
                                  <li> Posisjon: $posisjon </li>
                                  <li> Draktnummer: $draktnummer </li>
                                  <li> Nasjonalitet: $nasjonalitet </li>
                                  <li> Ankomst: $ankomst </li>
                                  <li> År i klubben: $opphold </li>
                                </ul>
                              </div>";
                    }
                }
              echo "</div>";
          ?>
          <?php
            //Tilkoblingsinformasjon
            $tjener = "localhost";
            $brukernavn = "root";
            $passord = "";
            $database = "rosenborg";
            //Opretter en kobling
            $kobling = new mysqli($tjener, $brukernavn, $passord, $database);
            $kobling->set_charset("utf8");
            //Sjekker om koblingen fungerer
            if ($kobling->connect_error) {
              die("Noe gikk galt: " . $kobling->connect_error);
            }
            //Definerer SQL-spørringen og henter ut resultatet
            $sql = "SELECT * FROM spiller ORDER BY draktnummer ASC";
            $resultat = $kobling->query($sql);
            echo "<br>";
            echo "<h3> Midtbanespillere: </h3>";
              echo "<div class='spillerrad'>";
                //Henter ut resultatene fra en rad og legger dem i et array
                while($rad = $resultat->fetch_assoc()) {
                  //Lagrer variablene i en rad hver for seg
                  $id = $rad["id"];
                  $fornavn = $rad["fornavn"];
                  $etternavn = $rad["etternavn"];
                  $posisjon = $rad["posisjon"];
                  $draktnummer = $rad["draktnummer"];
                  $nasjonalitet = $rad["nasjonalitet"];
                  $ankomst = $rad["ankomst"];
                  $årstall = date("Y");
                  $opphold = $årstall - $ankomst;

                    if ($posisjon == "Midtbanespiller") {
                        echo "<div class='spiller'>
                                <img src='../bilder/$fornavn.jpg' alt='$fornavn' width='250' height='auto'>
                                <ul>
                                  <li> Navn: $fornavn $etternavn </li>
                                  <li> Posisjon: $posisjon </li>
                                  <li> Draktnummer: $draktnummer </li>
                                  <li> Nasjonalitet: $nasjonalitet </li>
                                  <li> Ankomst: $ankomst </li>
                                  <li> År i klubben: $opphold </li>
                                </ul>
                              </div>";
                    }
                }
              echo "</div>";
          ?>
          <?php
            //Tilkoblingsinformasjon
            $tjener = "localhost";
            $brukernavn = "root";
            $passord = "";
            $database = "rosenborg";
            //Opretter en kobling
            $kobling = new mysqli($tjener, $brukernavn, $passord, $database);
            $kobling->set_charset("utf8");
            //Sjekker om koblingen fungerer
            if ($kobling->connect_error) {
              die("Noe gikk galt: " . $kobling->connect_error);
            }
            //Definerer SQL-spørringen og henter ut resultatet
            $sql = "SELECT * FROM spiller";
            $resultat = $kobling->query($sql);
            echo "<br>";
            echo "<h3> Angripere: </h3>";
              echo "<div class='spillerrad'>";
                //Henter ut resultatene fra en rad og legger dem i et array
                while($rad = $resultat->fetch_assoc()) {
                  //Lagrer variablene i en rad hver for seg
                  $id = $rad["id"];
                  $fornavn = $rad["fornavn"];
                  $etternavn = $rad["etternavn"];
                  $posisjon = $rad["posisjon"];
                  $draktnummer = $rad["draktnummer"];
                  $nasjonalitet = $rad["nasjonalitet"];
                  $ankomst = $rad["ankomst"];
                  $årstall = date("Y");
                  $opphold = $årstall - $ankomst;

                    if ($posisjon == "Angrepsspiller") {
                        echo "<div class='spiller'>
                                <img src='../bilder/$fornavn.jpg' alt='$fornavn' width='250' height='auto'>
                                <ul>
                                  <li> Navn: $fornavn $etternavn </li>
                                  <li> Posisjon: $posisjon </li>
                                  <li> Draktnummer: $draktnummer </li>
                                  <li> Nasjonalitet: $nasjonalitet </li>
                                  <li> Ankomst: $ankomst </li>
                                  <li> År i klubben: $opphold </li>
                                </ul>
                              </div>";
                    }
                }
              echo "</div>"
          ?>
          </div>
        </div>
      </div>
      <div class="bunntekst">
        <img src="../bilder/rosenborg.png" alt="ROSENBORG" width="100" height="auto">
        <h5> VelkOmmen til en UOFFISIELL nettside Om ROsenbOrg Ballklub laget sOm et skOleprOsjekt i InfOrmasjOnsteknOlOgi 1. FOr å kOmme til ROsenbOrg Ballklubs faktiske nettside, klikk <a href="http://www.rbk.no/" target="_blank">her</a>. </h5>
        <p> Du kan nå RBK på: </p>
        <div class="sosialemedier">
          <a href="https://nb-no.facebook.com/rosenborg/" target="_blank" class="fa fa-facebook"></a>
          <a href="https://twitter.com/realdonaldtrump" target="_blank" class="fa fa-twitter"></a>
          <a href="https://www.youtube.com/watch?v=UVxU2HzPGug" target="_blank" class="fa fa-youtube"></a>
          <a href="https://www.instagram.com/sophieelise/?hl=nb" target="_blank" class="fa fa-instagram"></a>
        </div>
        <p> E-pOst: infO@rbk.nO eller TelefOn: 73822100 </p>
      </div>
    </div>
  </body>
</html>
