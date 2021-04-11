<?php
include('index.php');
$query =  mysqli_query($koneksi, "SELECT pegawai.no, pegawai.nama, pegawai.nip, pegawai.alamat, pegawai.tanggal_lahir, pegawai.jenis_kelamin, pegawai.jabatan, jabatan.gaji FROM jabatan, pegawai where pegawai.jabatan = jabatan.jabatan");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<html>

<head>
    <title>Tabel</title>
</head>

<body>
    <nav>
        <a href="input.php">Input Data</a>
    </nav>
    <form action="search.php" method="GET">
    <input type="text" name="keyword" placeholder="Nama.........">
    <button type="submit">Find</button>
    </form>
    <table border="1">
        <thead>
            <th>Nama</th>
            <th>NIP</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Jabatan</th>
            <th>Gaji</th>
            <th>Option</th>
        </thead>
        <tbody>
            <?php foreach ($result as $value) { ?>
                <tr>
                    <td><?php echo $value['nama'] ?></td>
                    <td><?php echo $value['alamat'] ?></td>
                    <td><?php echo $value['nip']?></td>
                    <td><?php echo $value['tanggal_lahir'] ?></td>
                    <td><?php echo $value['jenis_kelamin'] ?></td>
                    <td><?php echo $value['jabatan']?></td>
                    <td><?php echo $value['gaji']?></td>
                    <td>
                        <a href="edit.php?no=<?php echo $value['no']?>">Edit</a>
                        <br>
                        <a href="delete.php?no=<?php echo $value['no']?>">Hapus</a>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
</body>

</html>