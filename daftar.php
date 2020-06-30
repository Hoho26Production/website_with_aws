<?php
ob_start();
session_start();

if (empty($_SESSION["akses"]))
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
                  <a href="index.php">beranda</a>
                </li>
                <li class="dropdown">
                  <a href="blog.php">blog</a>
                </li>
                <li>
                  <a href="masuk.php">masuk</a>
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
            <li><a href="index.php">Beranda</a><span class="divider">/</span></li>
            <li class="active">Daftar</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="maincontent" style="background-color: black; color: beige;">
    <div class="container">
      <div class="row">
        <div class="span4">
          <aside>
            <div class="widget">
              <h4  style="color: beige;">NURSETYO NUGROHO</h4>
              <ul>
                <li><label><strong>NIM : </strong></label>
                  <p>
                    1 9 1 4 3 2 2 0 0 1
                  </p>
                </li>
                <li><label><strong>Informasi : </strong></label>
                  <p>
                    Cloud Computing<br>Program Studi Teknik Informatika Kelas Malam / E<br>Fakultas Teknik<br>Universitas Bhayangkara Surabaya<br>Semester Genap 2019-2020
                  </p>
                </li>
                <li><label><strong>Tautan : </strong></label>
                  <p>
                    nugrohoubhara@gmail.com<br>IP Private (172.31.38.251)<br>IP Public (54.251.192.189)<br>Kode xxx-github-xxx
                  </p>
                </li>
              </ul>
            </div>
          </aside>
        </div>
        <div class="span8">
          <div class="spacer30"></div>

          <script type="text/javascript">
function cekdaftar()
{
	if (frmdaftar.inputUser.value == "" && frmdaftar.inputPassword.value == "" && frmdaftar.inputPassword2.value == "")
	{
		alert("username dan password harus terisi semua...!!!");
		frmdaftar.inputUser.focus();
		return false;
	}
	else
	{
		if (frmdaftar.inputUser.value == "")
		{
			alert("username belum terisi...!!!");
			frmdaftar.inputPassword.value = "";
			frmdaftar.inputPassword2.value = "";
			frmdaftar.inputUser.focus();
			return false;
		}
		if (frmdaftar.inputPassword.value == "")
		{
			alert("Kata sandi belum terisi...!!!");
			frmdaftar.inputPassword2.value = "";
			frmdaftar.inputPassword.focus();
			return false;
		}
		if (frmdaftar.inputPassword2.value == "")
		{
			alert("ulang kata sandi belum terisi...!!!");
			frmdaftar.inputPassword.value = "";
			frmdaftar.inputPassword.focus();
			return false;
		}
		if (frmdaftar.inputPassword.value.length <= 7)
		{
			alert("panjang kata sandi minimal 8 karakter...!!!");
			frmdaftar.inputPassword.value = "";
			frmdaftar.inputPassword2.value = "";
			frmdaftar.inputPassword.focus();
			return false;
		}
		else
		{
			if (frmdaftar.inputPassword.value != frmdaftar.inputPassword2.value)
			{
				alert("Kata sandi dan ulang kata sandi belum sama...!!!");
				frmdaftar.inputPassword.value = "";
				frmdaftar.inputPassword2.value = "";
				frmdaftar.inputPassword.focus();
				return false;
			}
		}
	}
}
</script>
			<form class="form-horizontal" id="frmdaftar" name="frmdaftar" method="post" action="daftarkueri.php" onSubmit="return cekdaftar()" autocomplete="off">
				<div class="control-group">
					<label class="control-label" for="inputEmail">username</label>
					<div class="controls"> <input name="userdaftar" type="text" id="inputUser" placeholder="username"> </div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputPassword">password</label>
					<div class="controls"> <input name="sandi1" type="password" id="inputPassword" placeholder="password"> </div>
				</div>
				<div class="control-group">
					<div class="controls">
						<label>minimal 8 karakter</label>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputPassword">re-enter password</label>
					<div class="controls"> <input name="sandi2" type="password" id="inputPassword2" placeholder="password"> </div>
				</div>
				<div class="control-group">
					<div class="controls">
						<button name="btndaftar" id="btndaftar" type="submit" class="btn">daftar</button>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<label>sudah punya akun?? <a href="masuk.php">silahkan masuk</a></label>
					</div>
				</div>
			</form>
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

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="assets/js/custom.js"></script>


</body>

</html>
<?php
}
else
{
	header ("location:haladmin/daftarartikel.php");
}
?>