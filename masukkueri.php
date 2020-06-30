<?php
ob_start();
session_start();
include "koneksi.php";
if (isset($_POST["btnmasuk"]))
{
	$masuk_name = $_POST["masukuser"];
	$masuk_pass = $_POST["masukpass"];
	$sql = "SELECT * FROM tb_admin WHERE admin_user = '$masuk_name' AND admin_pass = '$masuk_pass'";
	$hasil = $konekkueri->query($sql);
	if ($hasil->num_rows > 0)
	{
		$tampil = $hasil->fetch_assoc();
		$_SESSION["akses"] = $tampil["admin_user"];
		header ("location:haladmin/daftarartikel.php");
	}
	else
	{
		echo "<script>alert(\"Anda gagal login\");location.href=\"masuk.php\";</script>";
	}
}
else
{
	header ("Location:index.php");
}
?>