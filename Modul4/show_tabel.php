<?php
include('index.php');
$query =  mysqli_query($koneksi, "SELECT * FROM biodata");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<html>

<head>
    <title>Tabel</title>
</head>

<body>
    <table border="1">
        <thead>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Option</th>
        </thead>
        <tbody>
            <?php foreach ($result as $value) { ?>
                <tr>
                    <td><?php echo $value['nama'] ?></td>
                    <td><?php echo $value['alamat'] ?></td>
                    <td><?php echo $value['umur'] ?></td>
                    <td><?php echo $value['jenis_kelamin'] ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $value['id'] ?>">Edit |</a>
                        <a href="delete.php?id=<?php echo $value['id'] ?>">Hapus |</a>
                        <a href="pilih.php?id=<?php echo $value['id'] ?>">Pilih Ketua |</a>
                        <a href="daftar.php?id=<?php echo $value['id'] ?>"> Daftar Untuk Calon Ketua</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>