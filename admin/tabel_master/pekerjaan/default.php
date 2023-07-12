<?php
if(!isset($_GET['acts'])){
    require 'tabel_pekerjaan.php';
}elseif(isset($_GET['acts'])){
    $acts = $_GET['acts'];
}
if(isset($acts)){
    switch ($acts){
        // 
        case 'buat':
            require 'buat_pekerjaan.php';
            break;
        case 'edit':
            require 'edit_pekerjaan.php';
            break;
        case 'hapus':
            require 'hapus_pekerjaan.php';
            break;
        case 'tabel':
            require 'tabel_pekerjaan.php';
            break;
        } 
    }

?>