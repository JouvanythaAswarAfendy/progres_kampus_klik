<?php
include "koneksi.php";

// Mengambil data dari form
$nama_mhs = $_POST['nama'];
$prodi_mhs = $_POST['prodi'];
$npm_mhs = $_POST['npm'];

$proses = mysqli_query($koneksi, "INSERT INTO mahasiswa (nama_mahasiswa, prodi, npm) VALUES ('$nama_mhs','$prodi_mhs', '$npm_mhs')")or die(mysqli_error($koneksi));

if ($proses) {
    echo "
        <script>
            alert('Data Berhasil Disimpan');
            window.location.href='pert6,7-akhir.php';
        </script>";
} else {
    echo "
        <script>
            alert('Data Gagal Disimpan');
            window.location.href='pert6,7-akhir.php';
        </script>";
}
?>
