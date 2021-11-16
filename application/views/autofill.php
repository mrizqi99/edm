<?php
$koneksi = mysqli_connect("localhost","root","","edm");
$diesName = $_GET['diesName'];
$sql = mysqli_query($koneksi, "SELECT * FROM dies WHERE diesName = '$diesName'");
$dies = mysqli_fetch_array($sql);

$data = array(
  'diesNo' => $dies['diesNo'],
);
echo json_encode($data);
 ?>
