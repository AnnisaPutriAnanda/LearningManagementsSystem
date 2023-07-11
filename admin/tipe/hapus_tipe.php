<?php

$id = $_GET['id_tipe']; 
$query = "DELETE FROM tipe_kelas WHERE id = '$id'";

if($koneksi->query($query)) {
    header('location:index.php?page=tipe');
} else {
    echo "DATA GAGAL DIHAPUS!"; }


