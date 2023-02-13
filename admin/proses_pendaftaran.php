<?php 
include ('config.php');
//cek apakah tombol simpan sudah diklik atau belum
if($_SERVER['REQUEST_METHOD']=="POST") {
	//ambil data dari form
	$id= $_POST['id'];
	$nama= $_POST['nama'];
	$tempat= $_POST['tempat'];
	$tanggal= $_POST['tanggal'];
	$alamat= $_POST['alamat'];
	$jk= $_POST['jenis_kelamin'];
	$no_telp= $_POST['no_telp'];
	$asal_sekolah= $_POST['asal_sekolah'];
	//buat query 
	$sql= "INSERT INTO siswa(NIS, Nama, Alamat, Jenis_Kelamin, No_Telepon, Kelas) VALUE ('$id', '$nama', '$tempat', '$tanggal', '$alamat', '$jk', '$no_telp', '$asal_sekolah')";
		$query = mysqli_query($koneksi, $sql) or die (mysqli_error($koneksi));
		//apakah query update berhasil
		if ($query){
			//jika berhasil, alihkan ke halaman index.php dengan status=sukses
			header ('location:index.php?status=sukses');
	 	}else{
		//jika gagal,alihkan ke halaman index.php dengan status=gagal
			header ('location:index.php?status=gagal');
	}
		die ("Akses dilarang...");
	}
?>