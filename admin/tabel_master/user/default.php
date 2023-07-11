<?php
if(!isset($_GET['acts'])){
    require 'tabel_user.php';
}elseif(isset($_GET['acts'])){
    $acts = $_GET['acts'];
}
if(isset($acts)){
    switch ($acts){
        // 
        case 'buat':
            require 'buat_user.php';
            break;
        case 'edit':
            require 'edit_user.php';
            break;
        case 'hapus':
            require 'hapus_user.php';
            break;
        case 'tabel':
            require 'tabel_user.php';
            break;
        } 
    }

?>