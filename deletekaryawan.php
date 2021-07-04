<?php
    $server = "localhost";
    $user = "root";
    $namadb = "garisstudio";
    $password = "";

    $conn = mysqli_connect($server, $user, $password, $namadb) or die ("Koneksi Gagal");

    $nik = $_POST['nik'];

    class emp{}
        $query = mysqli_query($conn, "delete from karyawan where nik = '".$nik."'");

        if($query){
            $response = new emp();
            $response -> success = 1;
            $response -> message = "Data berhasil dihapus";
            die (json_encode($response));
        }

        else{
            $response = new emp();
            $response -> success = 0;
            $response -> message = "Gagal menghapus data";
            die (json_encode($response));
        }
?>