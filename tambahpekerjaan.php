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

    //mengirim data dari kolom jabatan
    $jabatan = $_POST["jabatan"];
    //mengirim data dari kolom gaji_pokok
    $gaji_pokok = $_POST["gaji_pokok"];
    //mengirim data dari kolom tunjangan_kesehatan
    $tunjangan_kesehatan = $_POST["tunjangan_kesehatan"];
    //mengirim data dari kolom tunjangan_pendidikan
    $tunjangan_pendidikan = $_POST["tunjangan_pendidikan"];
    //mengirim data dari kolom tunjangan_transportasi
    $tunjangan_transportasi = $_POST["tunjangan_transportasi"];
    //mengirim data dari kolom total_gaji
    $total_gaji = $_POST["total_gaji"];
    
    class emp{}
        //menjalankan query untuk menambah data
        $query = mysqli_query($conn, "insert into pekerjaan (jabatan, gaji_pokok, tunjangan_kesehatan, tunjangan_pendidikan, tunjangan_transportasi, total_gaji) values ('$jabatan', '$gaji_pokok','$tunjangan_kesehatan','$tunjangan_pendidikan','$tunjangan_transportasi','$total_gaji')");

        if($query){
            //respon ketika berhasil ditambah
            $response = new emp();
            $response -> success = 1;
            $response -> message = "Data berhasil disimpan";
            die (json_encode($response));
        }

        else{
            //respon ketika gagal ditambah
            $response = new emp();
            $response -> success = 0;
            $response -> message = "Gagal menyimpan data";
            die (json_encode($response));
        }
?>