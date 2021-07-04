<?php
    $server = "localhost";
    $user = "root";
    $namadb = "garisstudio";
    $password = "";

    $conn = mysqli_connect($server, $user, $password, $namadb) or die ("Koneksi Gagal");

    $idadm = filter_input(INPUT_POST,"id_admin");
    $pwadm = filter_input(INPUT_POST,"password");

    $query = mysqli_query($conn, "select * from admin where id_admin = '".$idadm."'and password = '".$pwadm."'");

    if($data = mysqli_fetch_array($query)){
        echo '1';
    }
    else{
        echo '2';
    }
?>