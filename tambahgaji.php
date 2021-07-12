<?php
    //deklarasi alamat server
    $server = "localhost";
    //deklarasi username
    $user = "root";
    //deklarasi nama database
    $namadb = "garisstudio";
    //deklarasi password database
    $password = "";

    //membuat koneksi dalam database
    $conn = mysqli_connect($server, $user, $password, $namadb) or die ("Koneksi Gagal");

    //mengirim data dari kolom tanggal_gaji
    $tanggal_gaji = $_POST['tanggal_gaji'];
    //mengirim data dari kolom nik
    $nik = $_POST['nik'];
    
    class emp{}
        //menjalankan query untuk menambah data
        $query = mysqli_query($conn, "insert into gaji_karyawan (tanggal_gaji, nik) values ('$tanggal_gaji','$nik')");

        //respon ketika berhasil ditambah
        if($query){
            $response = new emp();
            $response -> success = 1;
            $response -> message = "Data berhasil disimpan";
            die (json_encode($response));
        }

        //respon ketika gagal ditambah
        else{
            $response = new emp();
            $response -> success = 0;
            $response -> message = "Gagal menyimpan data";
            die (json_encode($response));
        }
?>