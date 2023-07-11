<?php
if(!isset($_GET['acts'])){
    include 'tabel_tipe.php';
}elseif(!empty($_GET['acts']== 'hapus')){
    require 'hapus_tipe.php';
}elseif(!empty($_GET['acts'] == 'buat')){
    require 'buat_tipe.php';
}elseif(!empty($_GET['acts'] == 'edit')){
    require 'edit_tipe.php';
}elseif(!empty($_GET['acts']== 'tabel')){
    require 'tabel_tipe.php';
}