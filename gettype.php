<!DOCTYPE html>
<html>
<head>
    <title>gettype PHP Adamtri</title>
</head>
<body>

<?php
    // Mendeklarasikan berbagai jenis variabel
    $nama = "Adamtri";        // string
    $umur = 21;                // integer
    $tinggi = 170.5;           // float
    $Mahasiswa = true;       // boolean
    $hobi = array("Bermain Bola", "Bermusik"); // array

    // Menampilkan tipe data menggunakan gettype()
    echo "<h2>Tipe Data Variabel</h2>";
    echo "<p>Variabel nama: " . gettype($nama) . "</p>";
    echo "<p>Variabel umur: " . gettype($umur) . "</p>";
    echo "<p>Variabel tinggi: " . gettype($tinggi) . "</p>";
    echo "<p>Variabel Mahasiswa: " . gettype($Mahasiswa) . "</p>";
    echo "<p>Variabel hobi: " . gettype($hobi) . "</p>";
?>

</body>
</html>
