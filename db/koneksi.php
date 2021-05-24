<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "db_pa_polper";

$koneksi = mysqli_connect($host, $user, $pass) or die ("Koneksi gagal");
mysqli_select_db($koneksi, $dbname);

?>