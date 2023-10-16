<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php
    function persegi_panjang($p, $l)
    {
        return $p*$l;
    }
    function lingkaran($r)
    {
        return 3.14 *$r*$r;
    }
    ?>
    <form method='POST'></br>
    masukkan panjang <input type="text" name="panjang"></br>
    masukkan lebar <input type="text" name="lebar" ></br>
    masukkan radius <input type="text" name="radius"></br>
    hitung <input type="submit" name="hitung"></br>
</form>
    <?php
    if(isset($_POST["hitung"])){
        $panjang=$_POST["panjang"];
        $lebar=$_POST["lebar"];
        $radius=$_POST["radius"];

        echo "</br> Luas Persegi Panjang =".persegi_panjang($panjang,$lebar)."</br>";
        echo "</br> Luas Lingkaran =".lingkaran($radius)."</br>";
    }
   
   ?>
</body>
</html>