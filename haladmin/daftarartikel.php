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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
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
  <section id="maincontent" style="background-color: black;">
    <div class="container">
      <div class="row">
        <div class="span12">
          <h3 style="color: beige;">kumpulan artikel</h3>
			<table id="myTable" class="display" style="width:100%">
        <thead>
            <tr style="color: slategray;">
                <th>No.</th>
                <th>Tanggal</th>
                <th>Penulis</th>
                <th>Judul</th>
            </tr>
        </thead>
        <tbody style="color: black;">
			<?php
	$sql = "SELECT * FROM tb_artikel ORDER BY artikel_id DESC";
$hasil = $konekkueri->query($sql);
		$nomor = 1;
	while($tampil = $hasil->fetch_assoc())
	{
	?>
            <tr>
                <td align="center"><?php print $nomor; ?></td>
                <td><?php print $tampil["artikel_tanggal"]; ?></td>
                <td><?php print nl2br($tampil["artikel_penulis"]); ?></td>
                <td><a href="daftarartikeldetil.php?id=<?php print $tampil["artikel_id"]; ?>" style="color: blue;"><?php print nl2br($tampil["artikel_judul"]); ?></a></td>
            </tr>
			<?php
		$nomor++;
	}
		?>
        </tbody>
        <tfoot>
            <tr>
                <th>No.</th>
                <th>Tanggal</th>
                <th>Penulis</th>
                <th>Judul</th>
            </tr>
        </tfoot>
    </table>
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


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	  <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	  <script type="text/javascript">
		  $(document).ready( function () {
    $('#myTable').DataTable({
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
    });
} );
	  </script>
</body>

</html>
<?php
}
else
{
	header ("location:../index.php");
}
?>