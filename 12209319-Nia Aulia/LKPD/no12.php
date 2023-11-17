<?php

$hh;
$mm;
$ss;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>no 12</title>
</head>
<body>
    <div class="warna">
    <form action= "" method = "post">
    <center> <label for=""><b>hh-mm-ss<hr></b></label> </center>
        <br><input type = "number" name = "hh" placeholder="Jam"></input> 
        <input type = "number" name = "mm" placeholder="Menit"></input> 
        <input type = "number" name = "ss" placeholder="Detik"></input> <br>
        <input type="submit" name="submit" class="submit">
    
<?php
  if(isset($_POST['submit'])){
    $hh = $_POST["hh"];
    $mm = $_POST["mm"];
    $ss = $_POST["ss"];

    $ss = $ss + 1;

    if($ss >= 60){
        $mm = $mm + 1;
        $ss = 00;

        if($mm >= 60){
            $hh = $hh + 1;
            $mm = 00;
            $ss = 00;

            if($hh >= 24){
                $hh = 00;
                $mm = 00;
                $ss = 00;
            }
        }
    } else{
        $ss = $ss;
    }

    echo $hh."."; 
    echo $mm."."; 
    echo $ss."."; 
}
?>
</form>
</div>

<style>
body{
    background-image: url(https://i.pinimg.com/564x/6e/fb/24/6efb2453f6ec5a7284b8c84581990c53.jpg);
    font-family:sans-serif;
    background-size:cover;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;   
}

form {
    width: 250px;
    height:300px;
    border: 2px solid #ccc;
    padding: 40px;
    background: #fff;
    border-radius: 15px;
}

input {
    display: block;
    border: 2px solid #ccc;
    width: 90%;
    padding: 10px;
    margin: 10px auto;
    border-radius: 5px;
}

label {
    color:#D3CEDF ;
    font-size: 18px;
    padding: 15px;
}

.submit {
    width:140px;
    float: right;
}

</style>
</body>
</html>