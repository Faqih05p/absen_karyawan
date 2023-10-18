<?php 

include('koneksi-db.php');

if (isset($_GET["id"])) {

    $Nik = $_GET["id"];
    $keluar = date("H:i:s");
    $query = "UPDATE absen_karyawan SET Jam_keluar = '$keluar' WHERE Nik = '$Nik' ";
    $result = mysqli_query($connection, $query);

    header('Location: index.php');

    
}

?>