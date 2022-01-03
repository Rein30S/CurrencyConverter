<?php 
include '../proses/koneksi.php';

$nama = $_POST['nama_negara'];
$kurs = $_POST['kurs'];

// update data ke database
mysqli_query($conn,"UPDATE kurs set kurs='$kurs' where nama_negara='$nama'");

// mengalihkan halaman kembali ke index.php
header("location:../pages/tampil_data.php");

?>