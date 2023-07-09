<?php

$id = $_GET['id_kategori']; 
$query = "DELETE FROM kategori_kelas WHERE id = '$id'";

if($koneksi->query($query)) {
    header('location:halaman_admin.php?page=kategori');
} else {
    echo "DATA GAGAL DIHAPUS!"; }


