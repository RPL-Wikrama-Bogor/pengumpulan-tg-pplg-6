<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No. 17</title>
</head>
<body>
    <h3>Terbesar | Terkecil | Rata-rata</h3>
    <form action="" method="post">
        <table>
            <?php for($a = 1 ; $a <= 20; $a++): ?>
                <tr>
                    <td>Input Bilangan ke-<?=$a?></td>
                    <td>: </td>
                    <td><input type="number" name="bilangan<?= $a ?>" ><br></td>
                </tr>
            <?php endfor;?>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="submit">submit</button></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <?php
                        $number = []; 
                        $max = 0;
                        $min = 0; 
                        $sum = 0; 
                        $count = 0; 
                        
                        if(isset($_POST['submit'])){
                            for($a = 0 ; $a <= 20; $a++){
                                if(isset($_POST["bilangan$a"])){
                                    $input_number = intval($_POST["bilangan$a"]);
                                    array_push($number, $input_number);
                                    $max = max($max, $input_number);
                                    $min = min($min, $input_number);
                                    $sum += $input_number;
                                    $count++;
                                }
                            }
                        }
                        
                        if($count > 0) {
                            $average = $sum / $count;
                            echo "Bilangan Terbesar: $max<br>";
                            echo "Bilangan Terkecil: $min<br>";
                            echo "Rata-rata Bilangan: $average<br>";
                        }
                    ?>
                </td>
            </tr>
        </table>
    </form>

    
</body>
</html>
