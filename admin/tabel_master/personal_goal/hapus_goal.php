<?php
$id = $_GET['id_goal'];
$sql = "DELETE FROM `personal_goal` WHERE `personal_goal`.`id` = '$id'";
$query = mysqli_query($koneksi, $sql);
header('location:index.php?page=personal_goal');
?>