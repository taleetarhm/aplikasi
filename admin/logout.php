<?php 

session_start();

//menghapus semua session
session_destroy();

//mengalihkan ke halaman login
header("location:web/info.php");
?>