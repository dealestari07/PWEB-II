<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php
    echo "Perulangan FOR bilangan genap dari 1-10 <br>";
    for($x=0; $x<=10; $x+=2)
    echo "$x <br>";

    echo "<br>Perulangan WHILE bilangan ganjil dari 1-10 <br>";
    $y=1;
    while($y<=10){
        echo "$y <br>";
        $y += 2;
    }

    echo "<br>Perulangan Do While bilangan prima < 20 <br>";
    $a=0;
    $b=2;
    do{
        $c=0;
        for($i=1; $i<=$b; $i++){
            if(($b%$i)==0){
                $c++;
            }
        }
        if($c < 3){
            echo "$b <br>";
            $a=$a+1;
        }
        $b = $b + 1;
    } while ($a < 8);
    ?>
</body>
</html>