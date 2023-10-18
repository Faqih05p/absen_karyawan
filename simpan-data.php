<?php 

include 'koneksi-db.php';

$Nik = $_POST['Nik'];
$nama = $_POST['nama_lengkap'];
$jabatan = $_POST['jabatan'];
$masuk = date("H:i:s");
$keluar = NULL;


$query = "INSERT INTO absen_karyawan VALUES ('$Nik', '$nama', '$jabatan', '$masuk', '$keluar')";

$result = mysqli_query($connection, $query);

header('Location: index.php');

?>