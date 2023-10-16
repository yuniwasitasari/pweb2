<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php
    echo "Perulangan For bilangan genap dari 1 hingga 10 </br>";
    for($x=0; $x<=10; $x +=2)
    echo "$x </br>";
    echo "</br> Perulangan While bilangan genap dari 1 hingga 10 </br>";
    $y=1;
    while($y<=10){
        echo "$y </br>";
        $y+=2;
    }
    echo "</br> Perulangan Do While bilangan prima kurang dari 20 </br>";
    $z = 2;
do {
    $Prime = true;

    for ($i = 2; $i < $z; $i++) {
        if ($z % $i === 0) {
            $Prime = false;
            break;
        }
    }

    if ($Prime) {
        echo $z . " </br>";
    }

    $z++;
} while ($z < 20);
    ?>
</body>
</html>