<?php
if(!isset($_GET['acts'])){
    require 'tabel_alur.php';
}elseif(isset($_GET['acts'])){
    $acts = $_GET['acts'];
}
if(isset($acts)){
    switch ($acts){
        // 
        case 'buat':
            require 'buat_alur.php';
            break;
        case 'edit':
            require 'edit_alur.php';
            break;
        case 'hapus':
            require 'hapus_alur.php';
            break;
        case 'tabel':
            require 'tabel_alur.php';
            break;
        } 
    }

?>