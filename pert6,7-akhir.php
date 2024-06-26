<?php
include "koneksi.php";
$data_edit = isset($_GET['id']) ? mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id = " . $_GET['id'])) : null;
?>

<html>
<head>
    <title>Index</title>
    <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="library/assets/styles.css" rel="stylesheet" media="screen">
    <script src="library/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>

<div class="span9" id="content">
    <div class="row-fluid">
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">Input Nilai Mahasiswa</div>
            </div>
            <div class="block-content collapse in">
                <div class="span12">
                    <form action="<?php echo isset($data_edit['id']) ? 'edit.php?id=' . $data_edit['id'] . '&proses=1' : 'proses.php'; ?>" method="POST">
                        <fieldset>
                            <legend>Input Nilai Mahasiswa</legend>

                            <div class="control-group">
                                <label class="control-label" for="nama">NAMA MAHASISWA</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge focused" id="nama" name="nama" value="<?php echo isset($data_edit['nama_mahasiswa']) ? $data_edit['nama_mahasiswa'] : ''; ?>">  
                                </div>
                            </div>

                            <div class="control-group">
                                    <label class="control-label" for="npm">NPM MAHASISWA</label>
                                    <div class="controls">
                                        <input type="text" class="input-xlarge focused" id="npm" name="npm" value="<?php echo isset($data_edit['npm']) ? $data_edit['npm'] : ''; ?>">
                                    </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="prodi">PRODI MAHASISWA</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge focused" id="prodi" name="prodi" value="<?php echo isset($data_edit['prodi']) ? $data_edit['prodi'] : ''; ?>">
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">SUBMIT</button>
                                <button type="reset" class="btn">Cancel</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row-fluid">
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">Data Mahasiswa</div>
            </div>
            <div class="block-content collapse in">
                    <div class="span12">
                        <!-- Pencarian Data -->
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <div class="input-group mb-3">
                                <input type="text" name="tcari" value="<?php echo htmlspecialchars(isset($_POST['tcari']) ? $_POST['tcari'] : ''); ?>" class="form-control" placeholder="Masukan kata kunci">
                                <div class="input-group-append">
                                    <button type="submit" name="tcari_btn" class="btn btn-primary">Cari</button>
                                    <button type="submit" name="reset" class="btn btn-danger">Kembali</button>
                                </div>
                            </div>
                        </form>

                       <?php
                        if(isset($_POST['tcari_btn'])){
                            $keyword = $_POST['tcari'];
                            $q = "SELECT * FROM mahasiswa WHERE nama_mahasiswa LIKE '%$keyword%' or nama_mahasiswa LIKE '%$keyword%' ORDER BY id DESC";
                        } else {
                            $q = "SELECT * FROM mahasiswa ORDER BY id DESC";
                        }
            
                        $hasil = mysqli_query($koneksi, $q);
                        ?>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>NPM Mahasiswa</th>
                                    <th>Prodi Mahasiswa</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            while ($data = $hasil->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($data['id']); ?></td>
                                    <td><?php echo htmlspecialchars($data['nama_mahasiswa']); ?></td>
                                    <td><?php echo htmlspecialchars($data['npm']); ?></td>
                                    <td><?php echo htmlspecialchars($data['prodi']); ?></td>
                                    <td>
                                        <a href="pert6,7-akhir.php?id=<?php echo htmlspecialchars($data['id']); ?>">Edit</a> |
                                        <a href="hapus.php?id=<?php echo htmlspecialchars($data['id']); ?>">Hapus</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
