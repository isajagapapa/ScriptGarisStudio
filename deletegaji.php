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

    //mengirim data dari kolom No_Gaji
    $No_Gaji = $_POST['No_Gaji'];

    class emp{}
        //menjalankan query untuk menghapus data sesuai parameter
        $query = mysqli_query($conn, "delete from gaji_karyawan where No_Gaji = '".$No_Gaji."'");

        //respon ketika berhasil dihapus
        if($query){
            $response = new emp();
            $response -> success = 1;
            $response -> message = "Data berhasil dihapus";
            die (json_encode($response));
        }

        //respon ketika gagal dihapus
        else{
            $response = new emp();
            $response -> success = 0;
            $response -> message = "Gagal menghapus data";
            die (json_encode($response));
        }
?>