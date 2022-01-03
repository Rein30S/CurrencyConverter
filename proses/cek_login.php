<?php 
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$data = mysqli_query($conn,"select * from user where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:../index.php");
}else{
	echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
}
?>