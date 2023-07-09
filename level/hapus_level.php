<?php

$id = $_GET['id_level']; 
$query = "DELETE FROM level_kelas WHERE id = '$id'";

if($koneksi->query($query)) {
    header('location:halaman_admin.php?page=level');
} else {
    echo "DATA GAGAL DIHAPUS!"; }


