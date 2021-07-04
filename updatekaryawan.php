<?php
    $server = "localhost";
    $user = "root";
    $namadb = "garisstudio";
    $sandi = "";

    $conn = mysqli_connect($server, $user, $sandi, $namadb) or die ("Koneksi Gagal");

    $nik = $_POST["nik"];
    $password = $_POST["password"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $agama = $_POST["agama"];
    $pendidikan_terakhir = $_POST["pendidikan_terakhir"];
    $jabatan = $_POST["jabatan"];

    class emp{}
        $query = mysqli_query($conn, "update karyawan set nik = '".$nik."', password = '".$password."', nama = '".$nama."', alamat = '".$alamat."', jenis_kelamin = '".$jenis_kelamin."', agama = '".$agama."', pendidikan_terakhir = '".$pendidikan_terakhir."', jabatan = '".$jabatan."' where nik = '".$nik."'");

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