<?php

    include('index.php');
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nip    = $_POST['nip'];
    $tanggalLahir = $_POST['tanggal_lahir'];
    $jenisKelamin = $_POST['jenis_kelamin'];
    $jabatan = $_POST['jabatan'];

    $query = mysqli_query($koneksi, "INSERT INTO pegawai set nama='$nama', 
                                                            alamat='$alamat',
                                                            nip='$nip',
                                                            tanggal_lahir='$tanggalLahir', 
                                                            jenis_kelamin='$jenisKelamin', 
                                                            jabatan='$jabatan' ");

    if ($query) {
        header('Location:show_tabel.php');
    }else {
        echo 'Input gagal';
    }
?>