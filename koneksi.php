<?php
$konekkueri = new mysqli("--hostname--","--username--","--password--","--databasename","--port--");

// Check connection
if ($konekkueri -> connect_errno) {
  echo "Failed to connect to MySQL: " . $konekkueri -> connect_error;
  exit();
}
?>
