<?php 
include("index.php");
$query =  mysqli_query($koneksi, "SELECT * FROM pemilih");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<html>
<head>
    <title>Pemilihan</title>
</head>

<body>
    <form action="hasil.php" method="POST">
        <p>Tentukan pilihan untuk menjadi pemimpin selanjutnya</p>
        <input type="hidden" name="sudah"/>
        <br> <select name="name">
            <option value="Ippo">1. Ippo</option>
            <option value="Naruto">2.Naruto</option>
            <option value="Sasuke">3.Sasuke</option>
            <option value="Madara">4.Madara</option>
            <option value="Hashirama">5.Hashirama</option>
        </select>
        <br>
        <label> NIK</label>
        <input type="number" name="NIK" />
        <button type="submit">kirim</button>
    </form>

    <div class="row">
        <div class="column">
            <h1>Data Pemilu</h1>
            <br>
            <table border="1" align="center">
                <thead>
                    <tr>
                        <th>NIM (Pemilih)</th>
                        <th>Nama</th>
                    </tr>
                </thead>
                <?
                require  'koneksi.php';
                $view  =  $koneksi->query("SELECT  *  FROM  voting");
                while ($row = $view->fetch_array()) {
                ?>
                    <tr>
                        <td><?php echo  $row['nim'];  ?></td>
                        <td><?php echo  $row['nama'];  ?></td>

                    </tr>
                <?php
        require  './koneksi.php';
            if  (isset($_POST["kirim"]))  {
//  menangkap  data  yang  di  kirim  dari  form
$nama  =  $_POST['nama'];
$nim  =  $_POST['nim'];

$data1  =  mysqli_query($koneksi,"select  *  from  voting  where  nim='$nim'");

//  menghitung  jumlah  data  yang  ditemukan
$cek  =  mysqli_num_rows($data1); if($cek  <=  0){
$data  =mysqli_query($koneksi,"INSERT  INTO  `voting`  (`nim`,  `nama`)  VALUES  ('$nim',  '$nam a')");

if  ($data)  {
?>

                <?php
                } ?>
    <script  language="javascript"> alert("Data  Berhasil  Ditambah");
</script>
<?php

}}else  if  ($cek  >=  0){
?>
<script  language="javascript"> alert("Maaf  Id  sudah  digunakan  ");

</script>
<?php

}
}
?>
                </tbody>
            </table>
        </div>
</body>

</html>