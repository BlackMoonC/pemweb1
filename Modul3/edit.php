<?php
include('index.php');
$no = $_GET['no'];
$query = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE pegawai.no = '$no' LIMIT 1");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<html>
<form action="update.php" method="POST">
    <input type="hidden" name="no" value="<?php echo $result[0]['no']?>">
    <label>Nama</label><br />
    <input type="text" name="nama" value="<?php echo $result[0]['nama'] ?>" />
    <br /><br />

    <label>Alamat</label><br />
    <textarea name="alamat" cols="30" rows="10"><?php echo $result[0]['alamat'] ?></textarea>
    <br /><br />

    <label>NIP</label>
    <input type="text" name="nip" value="<?php echo $result[0]['nip']?>">
    <br/><br/>

    <label>Tanggal Lahir</label><br/>
    <input type="date" name="tanggal_lahir" value="<?php echo $result[0]['tanggal_lahir']?>"/>
    <br/><br/>

    <label>Jenis Kelamin</label><br />
    <select name="jenis_kelamin">
        <option value="Pria" <?php echo ($result[0]['jenis_kelamin'] == 'Pria') ? 'selected' : '' ;?>>Pria</option>
        <option value="Wanita" <?php echo ($result[0]['jenis_kelamin'] == 'Wanita') ? 'selected' : '' ;?>>Wanita</option>
    </select>
    <br/><br/>
    <label>Jabatan</label><br/>
    <select name="jabatan">
        <option value="Analis" <?php echo ($result[0]['jabatan'] == 'Analis') ? 'selected' : '' ;?>>Analis</option>
        <option value="Programmer" <?php echo ($result[0]['jabatan'] == 'Programmer') ? 'selected' : '' ;?>>Programmer</option>
        <option value="Supervisor" <?php echo ($result[0]['jabatan'] == 'Supervisor') ? 'selected' : '' ;?>>Supervisor</option>
    </select>
    <br/><br/>
    <button type="submit">Rubah</button>
</form>

</html>