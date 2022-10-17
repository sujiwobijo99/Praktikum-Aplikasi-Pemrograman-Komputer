<?php

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbnews";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO buku_tamu (nama, email, pesan)
VALUES ('$nama', '$email', '$pesan')";

if (mysqli_query($conn, $sql)) {
  header("Location: lihat_tamu.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
