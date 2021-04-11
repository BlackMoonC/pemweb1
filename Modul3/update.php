<?php

    include('index.php');
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nip    = $_POST['nip'];
    $tanggalLahir = $_POST['tanggal_lahir'];
    $jenisKelamin = $_POST['jenis_kelamin'];
    $jabatan = $_POST['jabatan'];

    $query = mysqli_query($koneksi, "UPDATE pegawai set nama='$nama', alamat='$alamat',nip='$nip',tanggal_lahir='$tanggalLahir', jenis_kelamin='$jenisKelamin', jabatan='$jabatan' WHERE pegawai.no = '$no'");

    if ($query) {
        header('Location:show_tabel.php');
    }else {
        echo 'Input gagal';
    }
