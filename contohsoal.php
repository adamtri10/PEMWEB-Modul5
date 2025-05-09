<!DOCTYPE html>
<html>
<head>
    <title>Klasifikasi Nilai Adamtri</title>
</head>
<body>

<h2>Form Input Nilai</h2> 
<form method="post">
    Nama: <input type="text" name="nama" required><br><br>
    Nilai: <input type="number" name="nilai" required><br><br>
    <input type="submit" value="Proses"> 
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nilai = (int) $_POST['nilai'];
    $hasil = "";

    if ($nilai > 80) {
        $hasil = "A";
    } elseif ($nilai > 70 && $nilai <= 79) {
        $hasil = "B";
    } elseif ($nilai > 60 && $nilai <= 69) {
        $hasil = "C";
    } elseif ($nilai > 50 && $nilai <= 59) {
        $hasil = "D";
    } elseif ($nilai <= 49) {
        $hasil = "Tidak Lulus";
    } else {
        $hasil = "Nilai tidak valid.";
    }

    echo "<h3>Hasil Klasifikasi:</h3>";
    echo "Nama: " . htmlspecialchars($nama) . "<br>";
    echo "Nilai: " . $nilai . "<br>";
    echo "Klasifikasi: " . $hasil;
}
?>

</body>
</html>
