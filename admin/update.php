<?php
include 'koneksi.php';
if ($_POST['simpan']) {
    $ekstensi_diperbolehkan    = array('png', 'jpg', 'jpeg');
    $judul = $_POST['judul'];
    $jfoto = $_POST['jfoto'];
    $nama = $_FILES['file']['name'];
    $err = $_FILES['file']['error'];
    $ket = $_POST['ket'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];


    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 1044070) {
            move_uploaded_file($file_tmp, '../aset/img/upload' . $nama);
            $query = mysqli_query($koneksi, "UPDATE album SET judul='$judul', jenis_foto='$jfoto', nama='$nama', keterangan='$ket' WHERE id='$id'");
            if ($query) {
                header("location:admin.php");
            } else {
                echo 'GAGAL MENGUPLOAD GAMBAR';
            }
        } else {
            echo 'UKURAN FILE TERLALU BESAR';
        }
    } else {
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }
}
