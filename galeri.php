<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri PTI</title>
    <link rel="stylesheet" href="aset/css/reset.css">
    <link rel="stylesheet" href="aset/css/style.css">
</head>

<body>
    <header>
        <div class="jumbotron">
            <h1>Keluarga PTI</h1>
            <p>Angkatan 2018</p>
            <nav class="nav center">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="galeri.php">Album</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="konten">
            <section>
                <h2>Kelas</h2>
                <?php
                include 'admin/koneksi.php';
                $data = mysqli_query($koneksi, "SELECT * FROM album WHERE jenis_foto='kelas'");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <div class="box">
                        <a href="#">
                            <img src="<?= "aset/img/upload/" . $d['nama']; ?>">
                            <p><?= $d['judul']; ?></p>
                        </a>
                    </div>
                <?php } ?>
                <div class="clear"></div>
            </section>
            <section>
                <h2>Observasi Sekolah</h2>
                <?php
                $data = mysqli_query($koneksi, "SELECT * FROM album WHERE jenis_foto='observasi'");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <div class="box">
                        <a href="#">
                            <img src="<?= "aset/img/upload/" . $d['nama']; ?>">
                            <p><?= $d['judul']; ?></p>
                        </a>
                    </div>
                <?php } ?>
                <div class="clear"></div>
            </section>
            <section>
                <h2>Malam Keakraban</h2>
                <?php
                $data = mysqli_query($koneksi, "SELECT * FROM album WHERE jenis_foto='makrab'");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <div class="box">
                        <a href="#">
                            <img src="<?= "aset/img/upload/" . $d['nama']; ?>">
                            <p><?= $d['judul']; ?></p>
                        </a>
                    </div>
                <?php } ?>
                <div class="clear"></div>
            </section>
        </div>
    </main>
    <aside>

    </aside>
    <footer>
        <p>Create by kelompok piro | 2021</p>
    </footer>
</body>

</html>