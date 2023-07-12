<?php
if(!isset($_GET['acts'])){
    require 'tabel_goal.php';
}elseif(isset($_GET['acts'])){
    $acts = $_GET['acts'];
}
if(isset($acts)){
    switch ($acts){
        // 
        case 'buat':
            require 'buat_goal.php';
            break;
        case 'edit':
            require 'edit_goal.php';
            break;
        case 'hapus':
            require 'hapus_goal.php';
            break;
        case 'tabel':
            require 'tabel_goal.php';
            break;
        } 
    }

?>