<?php
if(!isset($_GET['acts'])){
    require 'tabel_kategori.php';
}elseif(isset($_GET['acts'])){
    $acts = $_GET['acts'];
}
if(isset($acts)){
    switch ($acts){
        // 
        case 'buat':
            require 'buat_kategori.php';
            break;
        case 'edit':
            require 'edit_kategori.php';
            break;
        case 'hapus':
            require 'hapus_kategori.php';
            break;
        case 'tabel':
            require 'tabel_kategori.php';
            break;
        } 
    }

?>
