<?php
$mysqli = new mysqli("9d702b0838e6","root","admin","liveidb");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>
