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

    //memfilter input
    $idadm = filter_input(INPUT_POST,"id_admin");
    $pwadm = filter_input(INPUT_POST,"password");

    //menjalankan query untuk membaca data sesuai parameter
    $query = mysqli_query($conn, "select * from admin where id_admin = '".$idadm."'and password = '".$pwadm."'");

    //mengirim kode ketika data sesuai
    if($data = mysqli_fetch_array($query)){
        echo '1';
    }
    //mengirim kode ketika data tidak sesuai
    else{
        echo '2';
    }
?>