<?php

    include('index.php');
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $umur = $_POST['umur'];
    $jenisKelamin = $_POST['jenis_kelamin'];

    $query = mysqli_query($koneksi, "INSERT INTO biodata set nama='$nama', alamat='$alamat', umur='$umur', jenis_kelamin='$jenisKelamin' ");

    if ($query) {
        header('Location:show_tabel.php');
    }else {
        echo 'Input gagal';
    }
?>