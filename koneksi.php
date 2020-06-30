<?php
$konekkueri = new mysqli("dbbog.cd2btkf0u7ut.ap-southeast-1.rds.amazonaws.com","admin","adminadmin","dbbog","3306");

// Check connection
if ($konekkueri -> connect_errno) {
  echo "Failed to connect to MySQL: " . $konekkueri -> connect_error;
  exit();
}
?>