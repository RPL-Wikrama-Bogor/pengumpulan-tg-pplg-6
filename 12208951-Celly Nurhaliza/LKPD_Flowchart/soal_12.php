<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form action="" method="post" class="form">
        <input type="number" name="hh" class="input" placeholder="Jam"><br><br>

        <input type="number" name="mm" class="input" placeholder="Menit"><br><br>

        <input type="number" name="ss" class="input" placeholder="Detik"><br><br>

        <input type="submit" name="submit" class="submit">
    </form>
    <div class="hasil">
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
            $ss = $ss + 1;
        }

        echo $hh."."; 
        echo $mm."."; 
        echo $ss."."; 
    }
    ?></div></div>
    <style>
    .container {
  max-width: 350px;
  background: #F8F9FD;
  background: linear-gradient(0deg, rgb(255, 255, 255) 0%, rgb(244, 247, 251) 100%);
  border-radius: 40px;
  padding: 25px 35px;
  border: 5px solid rgb(255, 255, 255);
  box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 30px 30px -20px;
  margin: 20px;
  margin-left: auto;
  margin-right: auto;
  margin-top: 10em;
}
.form {
  margin-top: 20px;
}

.form .input {
  width: 90%;
  background: white;
  border: none;
  padding: 15px;
  border-radius: 20px;
  margin-top: 15px;
  box-shadow: #cff0ff 0px 10px 10px -5px;
  border-inline: 2px solid transparent;
  
}
.form .submit {
  width: 100%;
  background: white;
  border: none;
  padding: 15px;
  border-radius: 20px;
  margin-top: 15px;
  box-shadow: #cff0ff 0px 10px 10px -5px;
  border-inline: 2px solid transparent;
}
.hasil{
    text-align: center;
    margin-left: auto;
    margin-right: auto; 
    margin-top: 20px;
}
.submit:hover{
    background-color: #cff0ff;
    color: white;
}

    </style>
</body>
</html>