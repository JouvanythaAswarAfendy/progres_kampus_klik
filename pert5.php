<?php
//membuat variable
    $nama_mahasiswa = "Ariel Tatum";
    $nama_kamu = "Andi";
    $pekerjaan = "Ibu rumah tangga";
    
    if($nama_mahasiswa != "Ariel Tatum"){
        if($pekerjaan == "Aktris") {
            $jenis_kelamin = "Perempuan";
            $penghasilan_perbulan = 1000000000;
        }else{
            $jenis_kelamin = "Perempuan";
            $penghasilan_perbulan = 2000000;
        }

    }else if($nama_kamu == "Andi") {
        $jenis_kelamin = "Laki-laki";
    }else{
        $jenis_kelamin = "??";
    }
    echo "Hallo ".$nama_mahasiswa." Selamat <br> datang, saya ".$nama_kamu.
    "jenis kelamin kamu adalah ".$jenis_kelamin." penghasilan Anda ".$penghasilan_perbulan;
?>

<html>
<head>
    <title>

    </title>
</head>
<body>
    <br>
    Calon pacar saya ...
</body>
</html>