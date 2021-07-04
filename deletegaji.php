<?php
    $server = "localhost";
    $user = "root";
    $namadb = "garisstudio";
    $password = "";

    $conn = mysqli_connect($server, $user, $password, $namadb) or die ("Koneksi Gagal");

    $No_Gaji = $_POST['No_Gaji'];

    class emp{}
        $query = mysqli_query($conn, "delete from gaji_karyawan where No_Gaji = '".$No_Gaji."'");

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