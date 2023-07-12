<?php
$id = $_GET['id_tool'];
$sql = "DELETE FROM `tools` WHERE `tools`.`id` = '$id'";
$query = mysqli_query($koneksi, $sql);
header('location:index.php?page=tool');
?>