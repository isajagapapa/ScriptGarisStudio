<?php
    $server = "localhost";
    $user = "root";
    $namadb = "garisstudio";
    $password = "";

    $conn = mysqli_connect($server, $user, $password, $namadb) or die ("Koneksi Gagal");

    $tanggal_gaji = $_POST['tanggal_gaji'];
    $nik = $_POST['nik'];
    
    class emp{}
        $query = mysqli_query($conn, "insert into gaji_karyawan (tanggal_gaji, nik) values ('$tanggal_gaji','$nik')");

        if($query){
            $response = new emp();
            $response -> success = 1;
            $response -> message = "Data berhasil disimpan";
            die (json_encode($response));
        }

        else{
            $response = new emp();
            $response -> success = 0;
            $response -> message = "Gagal menyimpan data";
            die (json_encode($response));
        }
?>