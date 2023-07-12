<?php
if(!isset($_GET['acts'])){
    require 'tabel_tool.php';
}elseif(isset($_GET['acts'])){
    $acts = $_GET['acts'];
}
if(isset($acts)){
    switch ($acts){
        // 
        case 'buat':
            require 'buat_tool.php';
            break;
        case 'edit':
            require 'edit_tool.php';
            break;
        case 'hapus':
            require 'hapus_tool.php';
            break;
        case 'tabel':
            require 'tabel_tool.php';
            break;
        } 
    }

?>