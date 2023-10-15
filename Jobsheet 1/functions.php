<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi</title>
</head>
<body>
    <?php
    function persegi_panjang($panjang, $lebar){
        return $panjang*$lebar;
    }
    function lingkaran($r){
        return 3.14*$r*$r;
    }
    ?>
    <form method="POST">
        <div>
            Masukkan Panjang : <input type="panjang" name="panjang"> <br><br>
            Masukkan Lebar   : <input type="lebar" name="lebar"><br><br>
            <button>Hitung</button>
        </div>
    </form>
    <?php
    $panjang = @$_POST['panjang'];
    $lebar = @$_POST['lebar'];
    $persegi_panjang = @$_POST['persegi_panjang'];
    echo "Luas Persegi Panjang = ".persegi_panjang($panjang, $lebar)."<br><br>";
    ?>
    <form method="POST">
        <div>
            Masukkan Jari-jari = <input type="r" name="r" ><br><br>
            <button>Hitung</button>
        </div>
    </form>
    <?php
    $r = @$_POST['r'];
    $lingkaran = @$_POST['lingkaran'];
    echo "<br>Luas Lingkaran = ".lingkaran($r)."<br>";
     ?>
</body>
</html>