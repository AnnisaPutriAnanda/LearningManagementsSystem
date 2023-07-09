<!DOCTYPE html>
<html>
<body>
	<?php
	include 'panggil.php';
	session_start();

	if($_SESSION['level']==""){
		header("location:login.php?pesan=gagal");
	}

	?>
	<h1>Halaman Pengguna</h1>

	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>

	<br/>
	<br/>
</body>
</html>