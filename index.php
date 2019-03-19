<!doctype.html>
<html>
  <head>
    <link rel="stylesheet" href="styles/stilark.css">
    <meta charset="utf-8">
    <title> Rosenborg Ballklub </title>
    <link rel="icon" href="bilder/rosenborg.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </head>
  <body>
    <div class="innpakning">
      <div class="header">
        <div class="logo">
          <img class="logo1" src="bilder/rosenborg.png" width="200px" height="200px">
        </div>
        <div class="title">
          <h1> ROSENBORG BALLKLUB </h1>
        </div>
      </div>
      <div class="meny">
        <ul>
          <li><a class="meny_active" href="#home"> HJEM </a></li>
          <li><a href="nettsider/nyheter.php"> NYHETER </a></li>
          <li><a href="nettsider/tropp.php"> TROPP </a></li>
          <li><a href="nettsider/sponsorer.php"> SPONSORER </a></li>
          <li><a href="nettsider/tabell.php"> TABELL/KAMPER </a></li>
          <li><a href="nettsider/om_rbk.php"> OM RBK </a></li>
        </ul>
      </div>
      <div class="innhold">
        <p>

        </p>
<h2>NYHETER</h2>
<!-- Lysbildekode fra w3schools (https://www.w3schools.com/howto/howto_js_slideshow.asp) slutter -->
        <!-- Slideshow container -->
        <div class="slideshow-container">

          <!-- Full-width images with number and caption text -->
          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="bilder/marbella.jpg" style="width:100%">
            <div class="text"> <h4>ROSENBORG PÅ TRENINGSLEIR I MARBELLA, SPANIA, DENNE UKEN FOR Å GJØRE SEG KLARE FØR SESONGSTART. LES MER  </h4> <a href="nettsider/nyheter/artikkel1.php">her</a> . Foto: ROSENBORG </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="bilder/ranheim.jpg" style="width:100%">
            <div class="text"> Rosenborg tapte treningskampen mot Ranheim torsdag 28. februar. Les mer <a href="nettsider/nyheter/artikkel2.php">her</a> . Foto: EIRIK EVENSEN </div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="bilder/brann.jpg" style="width:100%">
            <div class="text"> Rosenborg tapte treningskampen mot Brann 10. mars.  Les mer <a href="nettsider/nyheter/artikkel3.php">her</a> . Foto: ARNE RISTESUND </div>
          </div>

          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
        </div>

        <script>
          var slideIndex = 1;
          showSlides(slideIndex);

          // Next/previous controls
          function plusSlides(n) {
            showSlides(slideIndex += n);
          }

          // Thumbnail image controls
          function currentSlide(n) {
            showSlides(slideIndex = n);
          }

          function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
          }
        </script>
<!-- Lysbildekode fra w3schools (https://www.w3schools.com/howto/howto_js_slideshow.asp) slutter -->

      </div>
      <div class="footer">
        <h5> Dette er en UOFFISIEL Fanside laget som et skoleprosjekt. </h5>
        <p> KONTAKT OSS PÅ: </p>
        <p> TLF: +47 191 71 917 </p>
        <p> EPOST: rbk@fake-epost.no </p>
      </div>
    </div>
  </body>
</html>
