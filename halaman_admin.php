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
	<h1>Halaman Admin</h1>
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>
    <br/>
	<!--Content-->
	<div class="container-fluid">
        <div class="page-container">
    <div class="content-wrap">
        <div class="row">
            <div class="col-10">
                <?php
	if(isset($_GET['page'])){
		$page = $_GET['page'];
	}
	if(isset($page)){
		switch ($page){
			case 'kategori':
				include 'crud/tabel_kategori.php';
				break;
			case 'level':
				include 'crud/tabel_level.php';
				break;
			case 'tipe':
				include 'crud/tabel_tipe.php';
				break;
			case 'alur':
				include 'crud/tabel_alur.php';
				break;
		}
	}
                ?>
            </div> 
            <div class="col-9">
                <!--Footer--->
				<?php include 'aset/footer.php'; ?>
            </div> 
        </div>
    </div>
</div>
	<!--Content-->
	<br/>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>