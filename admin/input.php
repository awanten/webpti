<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>

<body>
    <h1>Halaman Input Data</h1>
    <form action="aksi.php" method="post" enctype="multipart/form-data">
        <label for="judul">Judul Foto</label><br>
        <input type="text" name="judul"><br>
        <label for="jfoto">Jenis Foto</label><br>
        <input type="radio" name="jfoto" value="kelas">
        <label for="kelas">Kelas</label><br>
        <input type="radio" name="jfoto" value="makrab">
        <label for="makrab">Makrab</label><br>
        <input type="radio" name="jfoto" value="observasi">
        <label for="observasi">Observasi</label><br>
        <label for="file">File</label><br>
        <input type="file" name="file"><br>
        <label for="keterangan">Keterangan Foto</label><br>
        <input type="text" name="keterangan"><br>

        <input type="submit" name="upload" value="Upload">
    </form>
</body>

</html>