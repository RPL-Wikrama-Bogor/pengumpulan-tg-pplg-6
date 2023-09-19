<?php 

    $bilangan_pertama;
    $bilangan_kedua;
    $bilangan_ketiga;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Task 3 (Persamaan Bilangan)</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Bilangan Pertama</td>
                <td>:</td>
                <td><Input type="number" name="bil_one"></Input></td>
            </tr>
            <tr>
                <td>Bilangan Kedua</td>
                <td>:</td>
                <td><Input type="number" name="bil_two"></Input></td>
            </tr>
            <tr>
                <td>Bilangan Ketiga</td>
                <td>:</td>
                <td><Input type="number" name="bil_three"></Input></td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Input" name="submit"></td>
            </tr>
        </table>
    </form>

        <?php 
            if(isset($_POST['submit'])){
                $bilangan_pertama = $_POST['bil_one'];
                $bilangan_kedua = $_POST['bil_two'];
                $bilangan_ketiga = $_POST['bil_three'];

                if($bilangan_pertama > $bilangan_kedua && $bilangan_pertama > $bilangan_ketiga){
                    echo $bilangan_pertama;
                } elseif($bilangan_kedua > $bilangan_ketiga && $bilangan_kedua > $bilangan_pertama){
                    echo $bilangan_kedua;
                } elseif($bilangan_ketiga > $bilangan_kedua && $bilangan_ketiga > $bilangan_pertama){
                    echo $bilangan_ketiga;
                }elseif($bilangan_pertama = $bilangan_kedua && $bilangan_pertama > $bilangan_ketiga) {
                    echo "Bil1 = Bil2 > Bil3" ;
                }elseif($bilangan_kedua = $bilangan_ketiga && $bilangan_kedua > $bilangan_pertama){
                    echo "Bil2 = Bil3 > Bil1" ; 
                }elseif($bilangan_pertama = $bilangan_ketiga && $bilangan_pertama > $bilangan_kedua){
                    echo "Bil1 = Bil3 > Bil2" ;
                }else {
                    echo "Bilangan Sama Besar";
                }
            }
        ?>
</body>
</html>