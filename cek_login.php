<?php
session_start();
include 'config.php';

$username=$_POST['username'];
$password=$_POST['password'];

$login= mysqli_query($koneksi, "select * from user where username= '$username' and password= '$password'");
$cek =mysqli_num_rows($login);

//cek apakah username dan password ditemukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	//cek jika user login sebagai user
	if($data['level']=="user"){

		//buat session login dan username
		//$_SESSION['username'] = $username;
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['level'] ="user";

		//alihkan ke halaman dashboard user
		header("location:home.php");
	}else if($data['level']=="admin"){

		//buat session login dan username
		//$_SESSION['username'] = $username;
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['level'] ="user";

		//alihkan ke halaman dashboard user
		header("location:admin/home.php");
}else{
	header("location:index.php");
}
}
?>