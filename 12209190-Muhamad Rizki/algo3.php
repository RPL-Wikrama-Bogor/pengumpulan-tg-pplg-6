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
                echo $bil1 ;
            }
            else if ($bil2 > $bil1 && $bil2 > $bil3){
                echo $bil2 ;
            }
            else if ($bil3 > $bil1 && $bil3 > $bil2){
                echo $bil3 ;
            }
            else if ($bil1 == $bil2){
                echo "bil1 dan bil2 sama besar";
            }
            else if ($bil1 == $bil3){
                echo "bil1 dan bil3 sama besar";
            }
            else if ($bil2 == $bil3){
                echo "bil2 dan bil3 sama besar";
            }
            else{
                echo "sama besarr " ;
            }
        }
    ?>
</body>
</html>