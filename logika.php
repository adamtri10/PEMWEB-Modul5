<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh logika Adamtri</title>
</head>
<body>

<?php
echo"<H2> Contoh logika OR</H2>";

$usia = 17;
$memilikiSIM = false;

// Logika OR: salah satu kondisi harus benar
if ($usia >= 17 || $memilikiSIM) {
    echo "Kamu boleh mengajukan SIM.";
} else {
    echo "Kamu belum memenuhi syarat untuk SIM.";
}
// Baris baru
echo "<H2>Contoh logika NOT</H2>";

// Logika NOT: membalikkan kondisi
if (!$memilikiSIM) {
    echo "Kamu belum punya SIM.";
} else {
    echo "Kamu sudah punya SIM.";
}
?>

</body>
</html>

