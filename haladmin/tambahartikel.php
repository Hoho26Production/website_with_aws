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

<body data-spy="scroll" data-target=".bs-docs-sidebar" style="background-color: #303030;">
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
                <li class="dropdown">
                  <a href="daftarartikel.php">artikel</a>
                </li>
                <li class="dropdown active">
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
            <li class="active">Tambah</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="maincontent" style="background-color: black; color: beige;">
    <div class="container">
      <div class="row">
        <div class="span12">
          <h3 style="color: beige;">tambah artikel</h3>
			<script type="text/javascript">
function cektambah()
{
	if (frmartikel.penulisartikel.value == "" && frmartikel.judulartikel.value == "" && frmartikel.kontenartikel.value == "")
	{
		alert("harus terisi semua...!!!");
		frmartikel.penulisartikel.focus();
		return false;
	}
	else
	{
		if (frmartikel.penulisartikel.value == "")
		{
			alert("penulis belum terisi...!!!");
			frmartikel.penulisartikel.focus();
			return false;
		}
		if (frmartikel.judulartikel.value == "")
		{
			alert("judul belum terisi...!!!");
			frmartikel.judulartikel.focus();
			return false;
		}
		if (frmartikel.kontenartikel.value == "")
		{
			alert("konten belum terisi...!!!");
			frmartikel.kontenartikel.focus();
			return false;
		}
	}
}
</script>
			<form class="form-horizontal" id="frmartikel" name="frmartikel" method="post" action="artikeltambah.php" onSubmit="return cektambah()" autocomplete="off">
				<div class="control-group">
					<label class="control-label" for="inputEmail">Tanggal</label>
					<div class="controls"> <input name="tanggalartikel" type="text" id="tanggalartikel" placeholder="tanggal" readonly value="<?php $tgl = date("d"); $bulan = date("m"); $tahun = date("Y"); print "$tgl $bulan $tahun"; ?>"> </div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputEmail">Penulis</label>
					<div class="controls"> <input name="penulisartikel" type="text" id="penulisartikel" placeholder="penulis"> </div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputEmail">Judul</label>
					<div class="controls"> <input name="judulartikel" type="text" id="judulartikel" placeholder="judul" style="width: 70%;"> </div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputEmail">Konten</label>
					<div class="controls"> <textarea name="kontenartikel" id="kontenartikel" rows="10" style="width: 70%;"></textarea> </div>
				</div>
				<div class="control-group">
					<div class="controls">
						<button name="btntambah" id="btntambah" type="submit" class="btn">tambah</button>
						<button name="btnbatal" id="btnbatal" type="reset" class="btn">batal</button>
					</div>
				</div>
			</form>
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