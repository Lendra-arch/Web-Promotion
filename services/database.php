<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "web";

$conn = mysqli_connect($host, $user, $pass, $db_name);

if (mysqli_connect_errno()) {
  echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>