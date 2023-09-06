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
                <td><label for="">Input Suhu Fahrenheit</label></td>
                <td><input type="number" name="fahr"></td>
            </tr>
        </table>
        <tr><button type="submit" name="submit">Submit</button></tr>
    </form>
    
    <?php
    $celcius;
    $fahrenheit;

    if(isset($_POST['submit'])){
        $fahrenheit = $_POST['fahr'];

        $celcius = ($fahrenheit - 32) * 5/9;

        echo "Suhu Fahrenheit hari ini: " . $fahrenheit . " F </br>";

        echo "Suhu Celcius: " . $celcius . " C </br>";

    if($celcius > 30){
        echo "Suhu hari ini panas";
    } else if($celcius < 25){
        echo "Suhu hari ini dingin";
    } else {
        echo "Suhu hari ini normal";
    }
    }
    ?>
</body>
</html>