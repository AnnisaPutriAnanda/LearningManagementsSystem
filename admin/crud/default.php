<?php
if(!isset($_GET['acts'])){
    include 'tabel_kategori.php';
}elseif(!empty($_GET['acts']== 'hapus')){
    require 'hapus_kategori.php';
}elseif(!empty($_GET['acts'] == 'buat')){
    require 'buat_kategori.php';
}elseif(!empty($_GET['acts'] == 'edit')){
    require 'edit_kategori.php';
}elseif(!empty($_GET['acts']== 'tabel')){
    require 'tabel_kategori.php';
}
