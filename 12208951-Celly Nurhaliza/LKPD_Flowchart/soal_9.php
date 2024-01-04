<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 9</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Suhu fahrenheit</label>
        <input type="number" name="suhu_f"><br><br>

         <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $suhu_f = $_POST["suhu_f"];

        $suhu_c = $suhu_f / 33.8;
        
        if($suhu_f >= 300){
            echo "Panas";
        }
        elseif($suhu_f >= 250){
            echo "Normal";
        }
        else{
            echo "Dingin";
        }
    }
    ?>
</body>
</html>