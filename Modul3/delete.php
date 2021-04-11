<?php
    include('index.php');
    $no = $_GET['no'];
    $delete = mysqli_query($koneksi, "DELETE FROM pegawai WHERE pegawai.no = '$no'");
    if ($delete) {
        header('Location:show_tabel.php');
    } else {
        echo "File tidak ada";
    }
?>