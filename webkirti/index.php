<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
    <title>KIRTI - Karya Ilmiah Remaja Teknologi Informasi</title>
  </head>
  <body>
    <header class="head">
      <div class="container">
        <nav class="navbar navbar-default">
          <div class="navbar-header">
            <a href="#">
              <h2>KIRTI</h2>
            </a>
          </div>
          <div class="menu">
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link active" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">jurusan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Karya & Prestasi</a>
                <li class="nav-item">
                  <a class="nav-link" href="#">Galeri</a>
                </li>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Testimoni</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Kontak</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <div class="utama">
      <div class="home parallax-window" data-parallax="scroll">
        <div class="gradient"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="img">
                <img src="image/path97.png" alt="">
              </div>
              <div class="ket">
                <h2>
                  <div id="typed-strings">
                    <p>Cerdas . Kreativ . Mandiri .</p>
                    <p>Make Your <strong>Creation</strong> In Organization.</p>
                  </div>
                  <span class="typed"></span></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="batas">
      <div class="rotate"></div>
      <div class="container">
        <div class="col-md-12">
          <div class="manfaat">
            <div class="col-md-4 organisasi">
              <div class="mf">
                <div class="jd-head"><h3>Organisasi</h3></div><br><br>
                <p>Dalam Kirti Siswa didik akan di ajari bagaimana berorganisasi, Mengatur jalannya kegiatan, dll.</p>
              </div>
            </div>
            <div class="col-md-4 teknologi">
              <div class="mf">
                <div class="jd-head"><h3>Teknologi</h3></div><br><br>
                <p>Siswa didik belajar menggunakan teknologi terbaru program baru dan ilmu baru mengikuti perkembangan Teknologi.</p>
              </div>
            </div>
            <div class="col-md-4 mandiri">
              <div class="mf" background="orange">
                <div class="jd-head"><h3>Mandiri</h3></div><br><br>
                <p class="mutiara">Siswa didik dilatih untuk mandiri, dengan membiasakan memecahkan sebuah masalah dengan solusi yang di dapatnya sendiri dan berdiskusi dengan temannya, mengajarkan adik kelas semua ilmu yang sudah didaptkan, dll.</p>
              </div>
            </div><br>
          </div>
        </div>
      </div>
      <p>"Tindakanmu hari ini berdampak pada hari esok"</p>
    </div>

    <div class="mf-batas">

    </div>
    <div class="jr">
      <div class="containerr">
        <div class="col-md-12">
          <div class="jurusan">
            <center><div class="pack">
              <h2>Jurusan</h2>
              <div class="garis_b"></div>
              <p>Chose Your Passion to Best Performance</p>
              <div class="img">
                <img class="jr_img responsive-image" src="image/jurusan3.png" alt="">
              </div>
            </div></center>
          </div>
        </div>
      </div>
    </div>
    <div class="kr">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="karya">

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery-3.3.1.slim.min.js" ></script>
    <script src="typed.js"></script>
    <script src="parallax.js"></script>
    <script src="popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $(window).scroll(function() {
          var scr = $(document).scrollTop() / 10;
          $(".home").css('background-position', '50% '+scr+'%');
        });
      });
    </script>
  </body>
</html>
