<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="../aset/css/reset.css">
    <link rel="stylesheet" href="../aset/css/admin.css">
</head>

<body>
    <div class="content">
        <h1>Halaman Admin</h1>
        <p class="log"><a href="../login.php">Logout</a></p>
        <h2>Data Foto</h2>
        <a class="tambah" href="input.php">Tambah data</a>
        <table>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Jenis Foto</th>
                <th>Foto</th>
                <th>Keterangan</th>
                <th>Tool</th>
            </tr>
            <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM album");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td>
                        <?= $no++; ?>
                    </td>
                    <td>
                        <?= $d['judul']; ?>
                    </td>
                    <td>
                        <?= $d['jenis_foto']; ?>
                    </td>
                    <td><?= $d['nama']; ?></td>
                    <td>
                        <?= $d['keterangan']; ?>
                    </td>
                    <td>
                        <a href="edit.php?id=<?= $d['id']; ?>">Edit</a>|
                        <a href="hapus.php?id=<?= $d['id']; ?>">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>