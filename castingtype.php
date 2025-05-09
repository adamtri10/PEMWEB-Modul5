<!DOCTYPE html>
<html>
<head>
    <title>Type Casting Adam tri</title>
</head>
<body>

<?php
    // Nilai integer awal
    $angka = 2025;

    // Type casting ke string
    $stringCast = (string)$angka;

    // Menampilkan hasil
    echo "<h2>Contoh Type Casting dari Integer ke String</h2>";
    echo "<p>Nilai awal: $angka (" . gettype($angka) . ")</p>";
    echo "<p>Setelah casting ke string: \"$stringCast\" (" . gettype($stringCast) . ")</p>";
?>

</body>
</html>
