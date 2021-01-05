<!DOCTYPE html>
<html>

<head>
    <title>Edit data</title>
</head>

<body>
    <h2>Halaman Admin</h2>
    <br>
    <a href="admin.php">KEMBALI</a>
    <br><br>
    <h3>EDIT DATA FOTO</h3>
    <?php
    include 'koneksi.php';
    if (isset($_POST['simpan'])) {
        $err = $_FILES['file']['error'];
        if ($err == 4) echo "Silahkan pilih foto terlebih dahulu";
    }
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM album WHERE id='$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form action="update.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Judul</td>
                    <td>
                        <input type="hidden" name="id" value="<?= $d['id']; ?>">
                        <input type="text" name="judul" value="<?= $d['judul']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Jenis Foto</td>
                    <td>
                        <input type="radio" name="jfoto" value="kelas" <?php if ($d['jenis_foto'] == 'kelas') echo 'checked'; ?>>
                        <label for="jfoto">Kelas</label>
                        <input type="radio" name="jfoto" value="makrab" <?php if ($d['jenis_foto'] == 'makrab') echo 'checked'; ?>>
                        <label for="jfoto">Makrab</label>
                        <input type="radio" name="jfoto" value="observasi" <?php if ($d['jenis_foto'] == 'observasi') echo 'checked'; ?>>
                        <label for="jfoto">Observasi</label>
                    </td>
                </tr>
                <tr>
                    <td>File</td>
                    <td><input type="file" name="file"></td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td><input type="text" name="ket" value="<?= $d['keterangan']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="simpan" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>