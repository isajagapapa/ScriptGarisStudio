<?php
    $server = "localhost";
    $user = "root";
    $namadb = "garisstudio";
    $password = "";

    $conn = mysqli_connect($server, $user, $password, $namadb) or die ("Koneksi Gagal");

    $result = mysqli_query($conn, "select * from gaji_karyawan");

    $json = array();

    while ($row = mysqli_fetch_assoc($result)){
        $json[] = $row;
    }

    echo json_encode($json);
    mysqli_close($conn);
?>