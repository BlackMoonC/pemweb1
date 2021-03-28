<?php
      $names= ["kevin rui", "jeremia", "evan", "abigael", "pratama"];
        function Konsonan($kalimat) {
        $jumlah = strlen($kalimat);
        $a = substr_count($kalimat, 'a');
        $i = substr_count($kalimat, 'i');
        $u = substr_count($kalimat, 'u');
        $e = substr_count($kalimat, 'e');
        $o = substr_count($kalimat, 'o');
        $count = $jumlah - ($a+$i+$u+$e+$o);
        
        return $count;
          }

        function Vokal($kalimat) {
        $a = substr_count($kalimat, 'a');
        $i = substr_count($kalimat, 'i');
        $u = substr_count($kalimat, 'u');
        $e = substr_count($kalimat, 'e');
        $o = substr_count($kalimat, 'o');
        $count = ($a+$i+$u+$e+$o);

        return $count;
          }

        function jumlahTanpaSpasi($kalimat){
          return strlen($kalimat) - substr_count($kalimat, ' ');
        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
      <p> Pemrograman Web dan Mobille I </p>
      <p> Nama: Mitchel C.T Singaraca </p>
      <p> NIM: 193020503041 </p>
      <p> Modul I </p>
        <table border="1" cellpadding="10" cellspacing="1">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Jumlah Huruf</th>
              <th>jumlah kata</th>
              <th>Kebalikan Nama</th>
              <th>Vokal</th>
              <th>Konsonan</th>
            </tr>
          </thead>

        <?php foreach ($names as $name) :  ?>

            <tr>
                <td><?php echo $name."<br>"; ?></td>
                <td><?php echo jumlahTanpaSpasi($name)."<br>"; ?></td>
                <td><?php echo str_word_count($name)."<br>"; ?></td>
                <td><?php echo strrev($name)."<br>"; ?></td>
                <td><?= Vokal(  $name);  ?></td>
                <td><?= Konsonan( $name);  ?></td>
            </tr>
        <?php endforeach; ?>

      </table>
      
</body>
</html>