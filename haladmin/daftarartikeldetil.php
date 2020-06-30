<?php
include "../koneksi.php";
ob_start();
session_start();
if (!empty($_SESSION["akses"]))
{
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>nugroho_1914322001</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- styles -->
  <link href="../assets/css/bootstrap.css" rel="stylesheet">
  <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="../assets/css/docs.css" rel="stylesheet">
  <link href="../assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="../assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="../assets/css/flexslider.css" rel="stylesheet">
  <link href="../assets/css/sequence.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/color/default.css" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="../assets/ico/unnamed.png">
  <!--<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">-->

  
</head>

<body style="background-color: #303030;">
  <header>
    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <div class="navigation">
            <nav>
              <ul class="nav topnav">
                <li class="dropdown">
                  <a href="../index.php">beranda</a>
                </li>
                <li class="dropdown">
                  <a href="../blog.php">blog</a>
                </li>
                <li class="dropdown active">
                  <a href="daftarartikel.php">artikel</a>
                </li>
                <li class="dropdown">
                  <a href="tambahartikel.php">tambah</a>
                </li>
                <li>
                  <a href="keluar.php">keluar</a>
                </li>
              </ul>
            </nav>
          </div>
          <!-- end menu -->
        </div>
      </div>
    </div>
  </header>
  <!-- Subhead
================================================== -->
  <section id="subintro" style="background-color: darkslategrey;">
    <div class="jumbotron subhead" id="overview">
    </div>
  </section>
  <section id="breadcrumb" style="background-color: white;">
    <div class="container">
      <div class="row">
        <div class="span12">
          <ul class="breadcrumb notop">
            <li><a href="../index.php">Beranda</a><span class="divider">/</span></li>
            <li class="active">Artikel</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
	<?php
	$urutan = $_GET["id"];
	$kueri = "SELECT * FROM tb_artikel WHERE artikel_id = '$urutan'";
$hasil = $konekkueri->query($kueri);
$tampil = $hasil->fetch_assoc()
	?>
  <section id="maincontent" style="background-color: black; color: beige;">
    <div class="container">
      <div class="row">
        <div class="span8">
          <!-- start article full post -->
          <article class="blog-post">
            <div class="post-heading">
              <h3 style="color: beige;"><?php print nl2br($tampil["artikel_judul"]); ?></h3>
            </div>
            <div class="clearfix">
            </div>
            <ul class="post-meta">
              <li class="first"><i class="icon-calendar"></i><span><?php print $tampil["artikel_tanggal"]; ?></span></li>
              <li><i class="icon-pencil"></i><span><?php print print nl2br($tampil["artikel_penulis"]); ?></span></li>
            </ul>
            <div class="clearfix">
            </div>
            <p align="justify"> 
              <?php print nl2br($tampil["artikel_isi"]); ?>
            </p>
          </article>
          <!-- end article full post -->
        </div>
      </div>
    </div>
  </section>
  <!-- Footer
 ================================================== -->
  <footer class="footer">    <div class="verybottom">
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
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/jquery.easing.js"></script>
  <script src="../assets/js/google-code-prettify/prettify.js"></script>
  <script src="../assets/js/modernizr.js"></script>
  <script src="../assets/js/bootstrap.js"></script>
  <script src="../assets/js/jquery.elastislide.js"></script>
  <script src="../assets/js/sequence/sequence.jquery-min.js"></script>
  <script src="../assets/js/sequence/setting.js"></script>
  <script src="../assets/js/jquery.prettyPhoto.js"></script>
  <script src="../assets/js/application.js"></script>
  <script src="../assets/js/jquery.flexslider.js"></script>
  <script src="../assets/js/hover/jquery-hover-effect.js"></script>
  <script src="../assets/js/hover/setting.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="../assets/js/custom.js"></script>


</body>

</html>
<?php
}
else
{
	header ("location:../index.php");
}
?>