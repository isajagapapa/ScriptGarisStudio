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
        //menjalankan query untuk mengupdate data
        $query = mysqli_query($conn, "update pekerjaan set jabatan = '".$jabatan."', gaji_pokok = '".$gaji_pokok."', tunjangan_kesehatan = '".$tunjangan_kesehatan."', tunjangan_pendidikan = '".$tunjangan_pendidikan."', tunjangan_transportasi = '".$tunjangan_transportasi."', total_gaji = '".$total_gaji."' where jabatan = '".$jabatan."'");

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