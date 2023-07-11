<?php
if(!isset($_GET['acts'])){
    require 'tabel_level.php';
}elseif(isset($_GET['acts'])){
    $acts = $_GET['acts'];
}
if(isset($acts)){
    switch ($acts){
        // 
        case 'buat':
            require 'buat_level.php';
            break;
        case 'edit':
            require 'edit_level.php';
            break;
        case 'hapus':
            require 'hapus_level.php';
            break;
        case 'tabel':
            require 'tabel_level.php';
            break;
        } 
    }

?>