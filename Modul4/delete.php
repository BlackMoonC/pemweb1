<?php
    include('index.php');
    $id = $_GET['id'];
    $delete = mysqli_query($koneksi, "DELETE FROM biodata WHERE id = $id");
    if ($delete) {
        header('Location:show_tabel.php');
    } else {
        echo "File tidak ada";
    }
?>