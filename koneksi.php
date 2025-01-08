<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "dbakademik";

$conn = mysqli_connect($servername, $username, $password, $databasename);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>