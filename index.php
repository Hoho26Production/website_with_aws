<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>nugroho_1914322001</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- styles -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="assets/css/docs.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="assets/css/flexslider.css" rel="stylesheet">
  <link href="assets/css/sequence.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/color/default.css" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/unnamed.png">
  <!--<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">-->

  
</head>

<body>
  <header>
    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <div class="navigation">
            <nav>
              <ul class="nav topnav">
                <li class="dropdown active">
                  <a href="index.php">beranda</a>
                </li>
                <li class="dropdown">
                  <a href="blog.php">blog</a>
                </li>
				  <?php
				  ob_start();
session_start();

if (empty($_SESSION["akses"]))
{

				  ?>
                <li>
                  <a href="masuk.php">masuk</a>
                </li>
				  <?php
}
				  else
				  {
				  ?>
                <li class="dropdown">
                  <a href="haladmin/daftarartikel.php">artikel</a>
                </li>
                <li class="dropdown">
                  <a href="haladmin/tambahartikel.php">tambah</a>
                </li>
                <li>
                  <a href="haladmin/keluar.php">keluar</a>
                </li>
				  <?php
				  }
					  ?>
              </ul>
            </nav>
          </div>
          <!-- end menu -->
        </div>
      </div>
    </div>
  </header>
  <section id="intro" style="background-color: darkslategrey;">
    <div class="jumbotron masthead">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div id="slider_holder">
              <div id="sequence">
                <ul>
                  <!-- Layer 1 -->
                  <li>
                    <div class="info animate-in">
                      <h2>INGAT YAA...!!!</h2>
                      <br>
                      <h3>S E N Y U M</h3>
                      <p style="color: beige;">
                        jangan lupa bernafas dan sarapan<br>jangan lupa bahagia
                      </p>
                    </div>
                    <img class="slider_img animate-in" src="assets/img/slides/sequence/IMG_20200616_090445.jpg" alt="">
                  </li>
                </ul>
              </div>
            </div>
            <!-- Sequence Slider::END-->
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="maincontent" style="background-color: black; color: beige;">
    <div class="container">
      <div class="row">
        <div class="span3 features">
          <!--<i class="icon-circled icon-32 icon-suitcase left active"></i>-->
          <h4 style="color: beige;">INILAH AKU</h4>
          <div class="dotted_line">
          </div>
          <p class="left" align="right">
            NURSETYO NUGROHO<br>nugrohoubhara@gmail.com<br>Surabaya, 25 April 1990<br>Perumahan Griya Kencana 2M/96<br>RT 008 RW 011<br>Desa Mojosarirejo - Kecamatan Driyorejo<br>Gresik 61177
          </p>
        </div>
        <div class="span3 features">
          <!--<i class="icon-circled icon-32 icon-plane left"></i>-->
          <h4 style="color: beige;">SEKOLAH DI MANA</h4>
          <div class="dotted_line">
          </div>
          <p class="left">
            1994 s.d 1996<br>TK Budi Utomo Airlangga, Surabaya<br><br>1996 s.d 2002<br>SDN 1 Mojosarirejo, Gresik<br><br>2002 s.d 2005<br>SMPN 1 Driyorejo, Gresik<br><br>2005 s.d 2008<br>SMAN 1 Driyorejo, Gresik<br><br>2009 s.d 2014<br>Universitas Negeri Surabaya<br><br>2019 s.d sekarang<br>Universitas Bhayangkara Surabaya
          </p>
        </div>
        <div class="span3 features">
          <!--<i class="icon-circled icon-32 icon-leaf left"></i>-->
          <h4 style="color: beige;">SUDAH DAN SEDANG APA SAJA</h4>
          <div class="dotted_line">
          </div>
          <p class="left">
            <ol><li>Sensus Penduduk (2010)</li><li>Universitas Negeri Surabaya (2015 s.d sekarang)</li><li>Seleksi masuk perguruan tinggi (2016 s.d 2019)</li><li>Seminar Nasional HISPISI (2019)</li></ol>
          </p>
        </div>
        <div class="span3 features">
          <!--<i class="icon-circled icon-32 icon-wrench left"></i>-->
          <h4 style="color: beige;">PENAMBAHAN ILMU</h4>
          <div class="dotted_line">
          </div>
          <p class="left">
            <ul type="square"><li>Pelatihan bahasa Inggris<br>2015 dan 2017</li><li>Keprotokoleran<br>2016</li><li>Kearsipan<br>2019</li></ul>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="span12">
          <div class="tagline centered">
            <div class="row">
              <div class="span12">
                <div class="tagline_text">
                  <h2>UJIAN AKHIR SEMESTER (UAS) CLOUD COMPUTING</h2>
                  <p style="color: black;">
                    <b>DOSEN PENGAMPU: M. TANTOWI MUSTOFA, S.T.</b><br>PROGRAM STUDI TEKNIK INFORMATIKA KELAS MALAM / E<br>FAKULTAS TEKNIK<br>UNIVERSITAS BHAYANGKARA SURABAYA<br>SEMESTER GENAP TAHUN AKADEMIK 2019 – 2020
                  </p>
                </div>
                <div class="btn-toolbar cta">
                  <a class="btn btn-large btn-color">NIM: 1914322001</a>
                  <a href="https://github.com/Hoho26Production/website_with_aws" target="_blank" class="btn btn-large btn-color" style="background-color: steelblue;">source code (Hoho26arsip)</a>
                  <a class="btn btn-large btn-inverse">IP: 172.31.38.251 (private)</a>
                  <a class="btn btn-large btn-color" style="background-color: darksalmon;">IP: 54.251.192.189 (public)</a>
                </div>
              </div>
            </div>
          </div>
          <!-- end tagline -->
        </div>
      </div>
    </div>
  </section>
  <!-- Footer
 ================================================== -->
  <footer class="footer">
    <div class="verybottom">
      <div class="container">
        <div class="row">
          <div class="span6">
          </div>
          <div class="span6">
            <div class="credits">
				<p>
              &copy; Hoho26 Production 2020
            </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- JavaScript Library Files -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery.easing.js"></script>
  <script src="assets/js/google-code-prettify/prettify.js"></script>
  <script src="assets/js/modernizr.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/jquery.elastislide.js"></script>
  <script src="assets/js/sequence/sequence.jquery-min.js"></script>
  <script src="assets/js/sequence/setting.js"></script>
  <script src="assets/js/jquery.prettyPhoto.js"></script>
  <script src="assets/js/application.js"></script>
  <script src="assets/js/jquery.flexslider.js"></script>
  <script src="assets/js/hover/jquery-hover-effect.js"></script>
  <script src="assets/js/hover/setting.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="assets/js/custom.js"></script>

</body>
</html>
