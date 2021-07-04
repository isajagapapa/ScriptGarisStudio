<?php
    $server = "localhost";
    $user = "root";
    $namadb = "garisstudio";
    $sandi = "";

    $conn = mysqli_connect($server, $user, $sandi, $namadb) or die ("Koneksi Gagal");

    $No_Gaji = $_POST["No_Gaji"];
    $tanggal_gaji = $_POST["tanggal_gaji"];
    $nik = $_POST["nik"];

    class emp{}
        $query = mysqli_query($conn, "update gaji_karyawan set tanggal_gaji = '".$tanggal_gaji."', nik = '".$nik."' where No_Gaji = '".$No_Gaji."'");

        if($query){
            $response = new emp();
            $response -> success = 1;
            $response -> message = "Data berhasil diperbarui";
            die (json_encode($response));
        }

        else{
            $response = new emp();
            $response -> success = 0;
            $response -> message = "Gagal memperbarui data";
            die (json_encode($response));
        }
?>