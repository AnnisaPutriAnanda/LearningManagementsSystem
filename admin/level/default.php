<?php
if(!isset($_GET['acts'])){
    include 'tabel_level.php';
}elseif(!empty($_GET['acts']== 'hapus')){
    require 'hapus_level.php';
}elseif(!empty($_GET['acts'] == 'buat')){
    require 'buat_level.php';
}elseif(!empty($_GET['acts'] == 'edit')){
    require 'edit_level.php';
}elseif(!empty($_GET['acts']== 'tabel')){
    require 'tabel_level.php';
}