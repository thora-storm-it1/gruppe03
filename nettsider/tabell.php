<!doctype.html>
<html>
  <head>
    <link rel="stylesheet" href="../styles/stilark.css">
    <meta charset="utf-8">
    <title> Rosenborg Ballklub </title>
    <link rel="icon" href="../bilder/rosenborg.png">
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
          <button class="dropbtn"> Meny </button>
          <div class="dropdown-content">
            <a href="../index.php"> HJEM </a>
            <a href="nyheter.php"> NYHETER </a>
            <a href="tropp.php"> TROPP </a>
            <a class="meny_active" href="#home"> TABELL/KAMPER </a>
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
          <li><a href="tropp.php"> TROPP </a></li>
          <li><a class="meny_active" href="#home"> TABELL/KAMPER </a></li>
          <li><a href="om_rbk.php"> OM RBK </a></li>
        </ul>
      </div>
      <!-- Meny som blir på topen av side fra w3schools (https://www.w3schools.com/howto/howto_css_sticky_element.asp) slutter -->
      <div class="innhold">
        <iframe class="tabell" src="https://vglive.no/turneringer/eliteserien-2019/1877/tabell" height="100%" width="75%" style="border:none;"></iframe>
      </div>
      <div class="bunntekst">
        <h5> Velkommen til en UOFFISIELL nettside om Rosenborg Ballklub laget som et skoleprosjekt i Informasjonstaknologi 1. For å komme til Rosenborg Ballklubs faktiske nettside, klikk <a href="http://www.rbk.no/" target="_blank">her</a>. </h5>
        <p> Du kan nå RBK på: </p>
        <div class="sosialemedier">
          <a href="https://nb-no.facebook.com/rosenborg/" target="_blank" class="fa fa-facebook"></a>
          <a href="https://twitter.com/RBKfotball?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank" class="fa fa-twitter"></a>
          <a href="https://www.youtube.com/channel/UCMzBr0zvB2uhUTRvnSFzwIw" target="_blank" class="fa fa-youtube"></a>
          <a href="https://www.instagram.com/rosenborgballklub/?hl=nb" target="_blank" class="fa fa-instagram"></a>
        </div>
        <p> E-post: info@rbk.no eller Telefon: 73822100 </p>
      </div>
    </div>
  </body>
</html>
