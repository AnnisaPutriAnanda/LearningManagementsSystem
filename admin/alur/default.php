<?php
if(!isset($_GET['acts'])){
    include 'tabel_alur.php';
}elseif(!empty($_GET['acts']== 'hapus')){
    require 'hapus_alur.php';
}elseif(!empty($_GET['acts'] == 'buat')){
    require 'buat_alur.php';
}elseif(!empty($_GET['acts'] == 'edit')){
    require 'edit_alur.php';
}elseif(!empty($_GET['acts']== 'tabel')){
    require 'tabel_alur.php';
}