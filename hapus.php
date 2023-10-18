<?php

include('koneksi-db.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM absen_karyawan WHERE Nik = '$id'";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>