<!DOCTYPE html>
<html lang="en">
<head>
    <title>Menu Utama</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body background="LoginBG.svg">
    <center>
        <header>
            <div class="logo">
                <img src="Logo.png" alt="">
            </div>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="index.php">Daftar Matakuliah</a></li>
                <li><a href="admin.php">Profil</a></li>
                <li><a href="login.php" class="btn_login">Log Out</a></li>
                </ul>
        </header>
        <main>
            <H2>Selamat Datang Di Si Pintar!</H2>
            <div class="slides">
                <div class="slide">
                  <img src="Belajar1.jpg" alt="Belajar1">
                </div>
                <div class="slide">
                  <img src="Belajar2.jpg" alt="Belajar2">
                </div>
                <div class="slide">
                  <img src="Belajar3.jpg" alt="Belajar3">
                </div>
                <div class="navigation">
                  <a class = "prev" onclick = "plusSlides(-1)">&#10094;</a>
                  <a class = "next" onclick = "plusSlides(-1)">&#10095;</a>
                </div>
              </div>
        </main>
        <footer>
            <h4>&copy; Sipintar EST 2024</h4>
        </footer>
    </center>
    <script> // JS
        var slideIndex = 1;
        showSlides(slideIndex);
  
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
  
        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("slide"); // DOM
          if (n > slides.length)
          {
            slideIndex = 1;
          }
          if (n < 1)
          {
            slideIndex = slides.length
          }
          for (i = 0; i < slides.length; i++)
          {
            slides[i].style.display = "none";
          }
          slides[slideIndex-1].style.display = "block";
        }
      </script>
</body>
</html>