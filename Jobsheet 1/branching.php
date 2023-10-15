<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>
<body>
    <form method="post">
    Input Bilangan : 
    <input type="a" name="bilangan"/>
    <input type="submit" name="submit" value="Cek" size=3> <br>
    </form>
    <?php
    $a = "bilangan";
    echo "<br>";
    if(isset($_POST['submit'])){
        $a = $_POST['bilangan'];
    }
    if($a > 0){
        echo $a." adalah Bilangan Positif";
    }
    else if($a < 0){
        echo $a." adalah Bilangan Negatif";
    }
    else{
        echo $a." adalah Nol";
    }
    ?>
</body>
</html>