<?php

$id = $_GET['id_alur']; 
$query = "DELETE FROM alur_kelas WHERE id = '$id'";

if($koneksi->query($query)) {
    header('location:halaman_admin.php?page=alur');
} else {
    echo "DATA GAGAL DIHAPUS!"; }


