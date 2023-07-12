<?php
$id = $_GET['id_pekerjaan'];

$sql = "DELETE FROM `pekerjaan` WHERE `pekerjaan`.`id` = '$id'";
$query = mysqli_query($koneksi, $sql);
header('location:index.php?page=pekerjaan')
?>