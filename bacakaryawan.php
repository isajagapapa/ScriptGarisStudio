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
$conn = mysqli_connect($server, $user, $password, $namadb) or die("Koneksi Gagal");

//menjalankan query untuk menampilkan data
$result = mysqli_query($conn, "select * from karyawan");

//mebuat variabel json yang berjenis data array
$json = array();

//membaca isi data dari database
while ($row = mysqli_fetch_assoc($result)) {
    $json[] = $row;
}

echo json_encode($json);
mysqli_close($conn);
