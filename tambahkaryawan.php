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

     //mengirim data dari kolom nik
    $nik = $_POST["nik"];
     //mengirim data dari kolom password
    $password = $_POST["password"];
     //mengirim data dari kolom nama
    $nama = $_POST["nama"];
     //mengirim data dari kolom alamat
    $alamat = $_POST["alamat"];
     //mengirim data dari kolom jenis_kelamin
    $jenis_kelamin = $_POST["jenis_kelamin"];
     //mengirim data dari kolom agama
    $agama = $_POST["agama"];
     //mengirim data dari kolom pendidikan_terakhir
    $pendidikan_terakhir = $_POST["pendidikan_terakhir"];
     //mengirim data dari kolom jabatan
    $jabatan = $_POST["jabatan"];

    class emp{}
    //menjalankan query untuk menambah data
        $query = mysqli_query($conn, "insert into karyawan (nik, password, nama, alamat, jenis_kelamin, agama, pendidikan_terakhir, jabatan) values ('$nik', '$password','$nama','$alamat','$jenis_kelamin','$agama','$pendidikan_terakhir','$jabatan')");

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