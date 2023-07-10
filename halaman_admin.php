<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

	<?php 

	include 'aset/header.php';
	include 'config/koneksi.php';

	session_start();
	if($_SESSION['level']==""){
		header("location:login.php?pesan=gagal");
	}
	?>

	<!--Content-->
	<div class="container-fluid">
        <div class="page-container">
    <div class="content-wrap">
            <div class="col-12">

	<div class="container-lg" style="margin-top: 20px">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
			<h1>Halaman Admin</h1></div>
			<div class="card-body">
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a></div></div></div></div>

	
    <?php
	
	if(isset($_GET['page'])){
		$page = $_GET['page'];
	}
	if(isset($page)){
		switch ($page){
			// 
			case 'kategori':
				include 'crud/tabel_kategori.php';
				break;
			case 'buat_kategori':
				include 'crud/buat_kategori.php';
				break;
			case 'edit_kategori':
				include 'crud/edit_kategori.php';
				break;
			case 'hapus_kategori':
				include_once 'crud/hapus_kategori.php';
				break;
            //  
			case 'level':
				include 'level/tabel_level.php';
				break;
			case 'buat_level':
				include 'level/buat_level.php';
				break;
			case 'edit_level':
				include 'level/edit_level.php';
				break;
			case 'hapus_level':
				include_once 'level/hapus_level.php';
				break;
			// 
			case 'tipe':
				include 'tipe/tabel_tipe.php';
				break;
			case 'buat_tipe':
				include 'tipe/buat_tipe.php';
				break;
			case 'edit_tipe':
				include 'tipe/edit_tipe.php';
				break;
			case 'hapus_tipe':
				include_once 'tipe/hapus_tipe.php';
				break;
            // 
			case 'alur':
				include 'alur/tabel_alur.php';
				break;
			case 'buat_alur':
				include 'alur/buat_alur.php';
				break;
			case 'edit_alur':
				include 'alur/edit_alur.php';
				break;
			case 'hapus_alur':
				include_once 'alur/hapus_alur.php';
				break;
			// 
			}
	}
        ?>
		    <br/>

            </div> 
            <div class="col-12">
                <!--Footer--->
				<?php include 'aset/footer.php'; ?>
            </div> 
    </div>
</div>
	<!--Content-->
	<br/>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>