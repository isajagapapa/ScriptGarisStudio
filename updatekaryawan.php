<?php
    //deklarasi alamat server
    $server = "localhost";
    //deklarasi username
    $user = "root";
    //deklarasi nama database
    $namadb = "garisstudio";
    //deklarasi password database
    $sandi = "";

    //membuat koneksi dalam database
    $conn = mysqli_connect($server, $user, $sandi, $namadb) or die ("Koneksi Gagal");

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
        //menjalankan query untuk mengupdate data
        $query = mysqli_query($conn, "update karyawan set nik = '".$nik."', password = '".$password."', nama = '".$nama."', alamat = '".$alamat."', jenis_kelamin = '".$jenis_kelamin."', agama = '".$agama."', pendidikan_terakhir = '".$pendidikan_terakhir."', jabatan = '".$jabatan."' where nik = '".$nik."'");

        if($query){
            //respon ketika berhasil diupdate
            $response = new emp();
            $response -> success = 1;
            $response -> message = "Data berhasil diperbarui";
            die (json_encode($response));
        }

        else{
            //respon ketika gagal diupdate
            $response = new emp();
            $response -> success = 0;
            $response -> message = "Gagal memperbarui data";
            die (json_encode($response));
        }
?>