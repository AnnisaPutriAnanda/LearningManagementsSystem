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

	include 'config/koneksi.php';

	session_start();

	if($_SESSION['level']==""){
		header("location:login.php?pesan=gagal");
	} 

    if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username atau Password tidak sesuai !</div>";
		}
		elseif($_GET['pesan']=="session"){
			echo "<div class='alert'>Sesi Belum Dihancurkan !</div>";
		}
	}
	?>
	
    <?php

    if($_SESSION['level'] == 'admin'){

        include 'aset/header.php';
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
	<h1>Halaman <?php echo $_SESSION['level']; ?></h1></div>
	<div class="card-body">
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a></div></div></div></div>

        <?php

    if(!isset($_GET['page'])){
        include 'admin/home.php';
    }elseif(!empty($_GET['page'] == 'alur')){
        include 'admin/tabel_master/alur/default.php';
    }elseif(!empty($_GET['page'] == 'kategori')){
        include 'admin/tabel_master/crud/default.php';
    }elseif(!empty($_GET['page'] == 'level')){
        include 'admin/tabel_master/level/default.php';
    }elseif(!empty($_GET['page'] == 'tipe')){
        include 'admin/tabel_master/tipe/default.php';
    }elseif(!empty($_GET['page'] == 'user')){
        include 'admin/tabel_master/user/default.php';
    }elseif(!empty($_GET['page'] == 'pekerjaan')){
        include 'admin/tabel_master/pekerjaan/default.php';
    }elseif(!empty($_GET['page'] == 'personal_goal')){
        include 'admin/tabel_master/personal_goal/default.php';
    }elseif(!empty($_GET['page'] == 'tool')){
        include 'admin/tabel_master/tool/default.php';
    }

    }
    if($_SESSION['level'] == 'pengguna'){
        include 'aset/header2.php';
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