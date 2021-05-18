<?php
include('index.php');
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT count,id FROM biodata WHERE id = '$id' LIMIT 1");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<html>
<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $result[0]['id'] ?>">

    <label>PILIH CALON</label><br />
    <select name="terpilih">
    <?php 
        for ($i=0; $i < ; $i++) { 
            # code...
        }
    ?>
        <option value="<?php ?>">>Pria</option>
    </select>

    <button type="submit">Rubah</button>
</form>

</html>