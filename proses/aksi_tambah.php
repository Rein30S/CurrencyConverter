<?php
include 'koneksi.php';

$nama = $_POST['nama_negara'];
$kurs = $_POST['kurs'];

mysqli_query($conn,"INSERT INTO kurs VALUES ('','$nama','$kurs')");

echo "<script>alert('Berhasil menambahkan data!')</script>";

header("Location:../pages/tambah_data.php")

?>