<?php 
include '../proses/koneksi.php';

$nama = $_GET['nama'];

mysqli_query($conn,"DELETE FROM kurs WHERE nama_negara='$nama'");

header("location:../pages/tampil_data.php");

?>