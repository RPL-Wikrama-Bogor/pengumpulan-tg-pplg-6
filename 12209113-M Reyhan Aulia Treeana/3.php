

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table>
        <tr>
            <td>Bilangan X</td>
            <td><input type="number" name="x"></td>
        </tr>
        <tr>
            <td>Bilangan Y</td>
            <td><input type="number" name="y"></td>
        </tr>
        <tr>
            <td>Bilangan Z</td>
            <td><input type="number" name="z"></td>
        </tr>
        </table>
        <tr><button type="submit" name="submit">Submit</button></tr>
    </form>

</br>


    <?php

if(isset($_POST['submit'])){

$x = $_POST['x'];
$y = $_POST['y'];
$z = $_POST['z'];

if($x > $y && $x > $z){
    echo "Terbesar adalah X: " . $x;
} else if($y > $z && $y > $x){
    echo "Terbesar adalah Y: " . $y;
} else if( $z > $x && $z > $y){
    echo "Terbesar adalah Z: " . $z;
} else if( $z == $x && $z > $y){
    echo "Z dan X sama besar euy"; 
} else if( $z == $y && $y > $x){
    echo "Z dan Y sama besar euy";
} else if( $x == $y && $x > $z){
    echo "X dan Y sama besar euy";
} else{
    echo "Sama Besar";
}

}
?>

</body>
</html>