<?php
ob_start();
session_start();
if (empty($_SESSION["akses"]))
{
	header ("Location:../masuk.php");
}
else
{
	session_destroy();
	header ("Location:../index.php");
}
?>