<?php

if (isset($_POST['submit'])) {
    $suhu_celcius = $_POST['suhu_celcius'];
    $suhu_fahrenheit;

    $suhu_fahrenheit = $suhu_celcius / 33.8;

    if ($suhu_celcius > 30) {
        echo "Suhu Panas";
    } elseif ($suhu_celcius < 25) {
        echo "Suhu Dingin";
    } else {
        echo "Suhu Normal";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 9 (Suhu)</title>
</head>

<body>
    <form method="post" action="">
        <table>
            <tr>
                <td>Input suhu</td>
                <td><input type="text" name="suhu_celcius" id="suhu"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Input" name="submit">
            </tr>
        </table>
    </form>


</body>

</html>