<!DOCTYPE html>
<html>

<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" type="text/css" href="aset/css/reset.css">
    <link rel="stylesheet" type="text/css" href="aset/css/login.css">
</head>

<body>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "<div class='alert'>Username dan Password tidak sesuai!</div>";
        }
    }
    ?>

    <div class="kotak_login">
        <p class="tulisan_login">Silahkan login &#40;admin&#41;</p>
        <form action="cek_login.php" method="post">
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="isikan username" required="required">
            <label>Password</label>
            <input type="password" name="password" class="form_login" placeholder="password anda" required="required">
            <input type="submit" class="tombol_login" value="LOGIN">

            <center>
                <a class="link" href="index.php">Kembali ke WebPTI</a>
            </center>
        </form>
    </div>
</body>

</html>