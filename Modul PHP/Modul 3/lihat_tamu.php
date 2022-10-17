<html>

<?php
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

$query = mysqli_query($conn, "SELECT * FROM `buku_tamu` ORDER BY `id_tamu`");
$data = mysqli_fetch_array($query);
// var_dump($data);
// echo $data['email'];
echo count($data);
?>


<table align="center">
  <tr>
    <td>No</td>
    <td>Nama</td>
    <td>Email</td>
    <td>Pesan</td>
    <!-- <td>Action</td> -->
  </tr>
  <?php
  for ($x = 1; $x <= count($data); $x++) {
    $a = $data['nama'];
    $b = $data['email'];
    $c = $data['pesan'];

  ?>
    <tr align="center">
      <td><?php echo $x ?></td>
      <td><?php echo $a ?></td>
      <td><?php echo $b ?></td>
      <td><?php echo $c ?></td>
    </tr>
  <?php
  }



  ?>

</table>

</html>