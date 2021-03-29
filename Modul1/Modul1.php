<?php
      $daftarNama= ["Namasia Mey", "Katie M", "Abi aja", "leon thunder", "Agus"];
        function Konsonan($kalimat) {
        return strlen($kalimat) - (
                substr_count($kalimat, 'a')
              + substr_count($kalimat, 'i')
              + substr_count($kalimat, 'u')
              + substr_count($kalimat, 'e')
              + substr_count($kalimat, 'o')
        );
       }

        function Vokal($kalimat) {
          return
            substr_count($kalimat, 'a')
          + substr_count($kalimat, 'i')
          + substr_count($kalimat, 'u')
          + substr_count($kalimat, 'e')
          + substr_count($kalimat, 'o');
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
      <p> Nama: Rakhel Cakra Kusumadinata Sera </p>
      <p> NIM: 193030503062 </p>
      <p> Modul I </p>
        <?php foreach ($daftarNama as $name) :  ?>
                Nama: <?php echo $name; ?>
                | Jumlah Huruf: <?php echo jumlahTanpaSpasi($name); ?>
                | Jumlah Kata: <?php echo str_word_count($name); ?>
                | Kebalikan Nama: <?php echo strrev($name); ?>
                | Vokal: <?php echo Vokal(  $name);  ?>
                | Konsonan: <?php echo Konsonan( $name);  ?>
                </BR>
        <?php endforeach; ?>

      </table>
      
</body>
</html>