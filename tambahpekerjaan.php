<?php
    $server = "localhost";
    $user = "root";
    $namadb = "garisstudio";
    $password = "";

    $conn = mysqli_connect($server, $user, $password, $namadb) or die ("Koneksi Gagal");

    $jabatan = $_POST["jabatan"];
    $gaji_pokok = $_POST["gaji_pokok"];
    $tunjangan_kesehatan = $_POST["tunjangan_kesehatan"];
    $tunjangan_pendidikan = $_POST["tunjangan_pendidikan"];
    $tunjangan_transportasi = $_POST["tunjangan_transportasi"];
    $total_gaji = $_POST["total_gaji"];
    
    class emp{}
        $query = mysqli_query($conn, "insert into pekerjaan (jabatan, gaji_pokok, tunjangan_kesehatan, tunjangan_pendidikan, tunjangan_transportasi, total_gaji) values ('$jabatan', '$gaji_pokok','$tunjangan_kesehatan','$tunjangan_pendidikan','$tunjangan_transportasi','$total_gaji')");

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