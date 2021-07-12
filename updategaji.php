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

    //mengirim data dari kolom No_Gaji
    $No_Gaji = $_POST["No_Gaji"];
    //mengirim data dari kolom tanggal_gaji
    $tanggal_gaji = $_POST["tanggal_gaji"];
    //mengirim data dari kolom nik
    $nik = $_POST["nik"];

    class emp{}
        //menjalankan query untuk mengupdate data
        $query = mysqli_query($conn, "update gaji_karyawan set tanggal_gaji = '".$tanggal_gaji."', nik = '".$nik."' where No_Gaji = '".$No_Gaji."'");

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