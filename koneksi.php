<?php
    $hostname = "localhost";
    $userDataBase = "root";
    $passwordUser = "";
    $databaseName = "crud_pemweb";

    $koneksi = mysqli_connect($hostname,$userDataBase,$passwordUser,$databaseName) or die (mysqli_error($koneksi));

    // if($koneksi) {
    //     echo "berhasil koneksi";
    // } else echo "gagal koneksi";
?>