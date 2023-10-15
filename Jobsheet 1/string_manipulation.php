<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>
<body>
    <?php
    $x="Selamat Belajar PHP! ";
    echo $x;

    echo "<br><br>Mengubah string menjadi huruf kapital : ".strtoupper($x)."<br>";
    echo "Mengubah string menjadi huruf kecil : ".strtolower($x)."<br>";
    echo "Memotong string : ".substr($x, 0,7)."<br>";
    ?>
</body>
</html>