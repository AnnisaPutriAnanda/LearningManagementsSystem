<?php 
session_start();

include 'config/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
$data = mysqli_fetch_assoc($login);

if($cek > 0){

	if(!empty($_POST["ingat"])) {
		setcookie ("username",$username,time()+ 3600);
		setcookie ("password",$password,time()+ 3600);

	} else {
		setcookie("username","");
		setcookie("password","");
	}
	if($data['level']=="admin"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		
		header("location:index.php");

	}else if($data['level']=="pengguna"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pengguna";

		header("location:index.php");

	}else if($data['level']=="pengurus"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pengurus";
		
		header("location:halaman_pengurus.php");

	}
	else{

		header("location:login.php?pesan=gagal");
	}

}else{

	header("location:login.php?pesan=gagal");
}



?>