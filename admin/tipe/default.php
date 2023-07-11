<?php
if(!isset($_GET['acts'])){
    require 'tabel_tipe.php';
}elseif(isset($_GET['acts'])){
    $acts = $_GET['acts'];
}
if(isset($acts)){
    switch ($acts){
        // 
        case 'buat':
            require 'buat_tipe.php';
            break;
        case 'edit':
            require 'edit_tipe.php';
            break;
        case 'hapus':
            require 'hapus_tipe.php';
            break;
        case 'tabel':
            require 'tabel_tipe.php';
            break;
        } 
    }

?>