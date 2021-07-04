<?php
    $server = "localhost";
    $user = "root";
    $namadb = "garisstudio";
    $sandi = "";

    $conn = mysqli_connect($server, $user, $sandi, $namadb) or die ("Koneksi Gagal");

    $jabatan = $_POST["jabatan"];
    $gaji_pokok = $_POST["gaji_pokok"];
    $tunjangan_kesehatan = $_POST["tunjangan_kesehatan"];
    $tunjangan_pendidikan = $_POST["tunjangan_pendidikan"];
    $tunjangan_transportasi = $_POST["tunjangan_transportasi"];
    $total_gaji = $_POST["total_gaji"];

    class emp{}
        $query = mysqli_query($conn, "update pekerjaan set jabatan = '".$jabatan."', gaji_pokok = '".$gaji_pokok."', tunjangan_kesehatan = '".$tunjangan_kesehatan."', tunjangan_pendidikan = '".$tunjangan_pendidikan."', tunjangan_transportasi = '".$tunjangan_transportasi."', total_gaji = '".$total_gaji."' where jabatan = '".$jabatan."'");

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