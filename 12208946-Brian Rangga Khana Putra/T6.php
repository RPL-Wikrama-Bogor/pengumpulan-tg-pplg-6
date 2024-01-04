<?php 
    $detik;
    $menit;
    $jam;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 6 (Detik ke J M D)</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Konverensi</td>
                <td>:</td>
                <td><input type="number" name="totaldetik"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Input" name="submit"></td>
            </tr>
        </table>
    </form>

    <?php 
        
        
        if (isset($_POST['submit'])) {
            $totalDetik = ($_POST['totaldetik']);
        
            $jam = floor($totalDetik / 3600);
            $sisaDetik = $totalDetik % 3600;
            $menit = floor($sisaDetik / 60);
            $detik = $sisaDetik % 60;
        
            $output = "";
            if ($jam > 0) {
                $output .= $jam . " jam ";
            }
            if ($menit > 0) {
                $output .= $menit . " menit ";
            }
            $output .= $detik . " detik";
        
            echo "Total detik $totalDetik menjadi: $output";
        }
    ?>
</body>
</html>

