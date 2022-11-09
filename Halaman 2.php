<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman 2</title>
    <a href='http://localhost:83/PHP%20SENTRA/Halaman%201.php'>Halaman 1</a>
</head>
<body>

<?php

    $angka1 = 4;
    $angka2 = 5;
    $jumlah = $angka1+$angka2;
    $kurang = $angka1-$angka2;
    $bagi = $angka1/$angka2;
    $kali = $angka1*$angka2;

    echo "<h4> Angka 1 : [$angka1] </h4>";
    echo "<h4>Angka 2 : [$angka2] </h4>";
    echo "<h4>Hasil Penjumlahan : $jumlah</h4>";
    echo "<h4>Hasil Pengurangan : $kurang</h4>";
    echo "<h4>Hasil Pembagian : $bagi</h4>";
    echo "<h4>Hasil Perkalian : $kali</h4>";

?>
</body>
</html>