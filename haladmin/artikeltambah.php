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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">
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

<body data-spy="scroll" data-target=".bs-docs-sidebar">
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
            <li><a href="daftarartikel.php">Artikel</a><span class="divider">/</span></li>
            <li class="active">Info Tambah</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="maincontent" style="background-color: black; color: beige;">
    <div class="container">
      <div class="row">
        <div class="span12">
          <?php
			include "../koneksi.php";
			if (isset($_POST["btntambah"]))
			{
			$tanggal_artikel = $_POST["tanggalartikel"];
			$penulis_artikel = addslashes($_POST["penulisartikel"]);
			$judul_artikel = addslashes($_POST["judulartikel"]);
			$konten_artikel = addslashes($_POST["kontenartikel"]);
			$sql = "INSERT INTO tb_artikel (artikel_tanggal,artikel_penulis,artikel_judul,artikel_isi) VALUES ('$tanggal_artikel', '$penulis_artikel', '$judul_artikel', '$konten_artikel')";
				
				if ($konekkueri->query($sql) === TRUE)
				{
					?>
			<div class="alert alert-success" align="center">artikel baru sukses ditambahkan</div><h3 align="center" style="color: beige;"><a href="daftarartikel.php">lihat artikel</a> atau <a href="tambahartikel.php">tambah lagi</a></h3>
					<?php
				}
				else
				{
					echo "Error: " . $sql . "<br>" . $konekkueri->error;
				}
			}
	else
	{
		header ("location:../index.php");
	}
			?>
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