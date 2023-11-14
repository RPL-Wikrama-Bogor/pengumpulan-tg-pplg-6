<?php

    $bil1;
    $bil2;
    $bil3;



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urutkan bilangan</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
        <td>Bil1 </td>
        <td>:</td>
        <td><input type="number" name="bil1"></td>
        </tr>
            <tr>
        <td>Bil2 </td>
        <td>:</td>
        <td><input type="number" name="bil2"></td>
        </tr>
            <tr>
        <td>Bil3 </td>
        <td>:</td>
        <td><input type="number" name="bil3"></td>
        </tr>
</table>
<tr>
            <td></td>
            <td></td>
            <input type="submit" value="start" name="submit">
        </tr>
    </form>

    <?php
        if (isset($_POST['submit'])){
            $bil1 = $_POST['bil1'] ;
            $bil2 = $_POST['bil2'] ;
            $bil3 = $_POST['bil3'] ;

            if ($bil1 > $bil2 && $bil1 > $bil3){
                echo "bilangan terbesar adalah " . $bil1 ;
            }
            elseif($bil2 > $bil1 && $bil2 > $bil3){
                echo "bilangan terbesar adalah " . $bil2 ;
            }
            elseif($bil3 > $bil1 && $bil3 > $bil2){
                echo "bilangan terbesar adalah " . $bil3 ;
            }
            elseif ($bil1 == $bil2 ){
                echo $bil1 . " = " . $bil2;
            }
            elseif ($bil1 == $bil3 ){
                echo $bil1 . " = " . $bil3;
            }
            elseif ($bil2 == $bil3 ){
                echo $bil2 . " = " . $bil3;
            }
            else{
                echo "sama besar";
            }
        }
    ?>
</body>
</html>