<?php
    $server = "localhost";
    $user = "root";
    $namadb = "garisstudio";
    $password = "";

    $conn = mysqli_connect($server, $user, $password, $namadb) or die ("Koneksi Gagal");

    $nik = $_POST["nik"];
    $password = $_POST["password"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $agama = $_POST["agama"];
    $pendidikan_terakhir = $_POST["pendidikan_terakhir"];
    $jabatan = $_POST["jabatan"];

    class emp{}
        $query = mysqli_query($conn, "insert into karyawan (nik, password, nama, alamat, jenis_kelamin, agama, pendidikan_terakhir, jabatan) values ('$nik', '$password','$nama','$alamat','$jenis_kelamin','$agama','$pendidikan_terakhir','$jabatan')");

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