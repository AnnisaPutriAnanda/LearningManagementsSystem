<?php

$id = $_GET['id_user']; 
$query = "DELETE FROM `user` WHERE `user`.`id_user` = '$id'";

if($koneksi->query($query)) {
    header('location:index.php?page=user');
} else {
    echo "DATA GAGAL DIHAPUS!"; }


