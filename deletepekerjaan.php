<?php
    $server = "localhost";
    $user = "root";
    $namadb = "garisstudio";
    $password = "";

    $conn = mysqli_connect($server, $user, $password, $namadb) or die ("Koneksi Gagal");

    $jabatan = $_POST['jabatan'];

    class emp{}
        $query = mysqli_query($conn, "delete from pekerjaan where jabatan = '".$jabatan."'");

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