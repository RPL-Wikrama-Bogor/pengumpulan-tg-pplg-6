<?php
$nilai = [80, 78, 72, 84, 92, 88];

$nilai2 = [];
foreach ($nilai as $nl) {
	$nilai2[] = $nl;
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Array</title>
    <style>


        body{
            height:100%;
            background-color: #E4E4D0;
        }
        .title{
            color: #F8FF95;
            background-color:#213555;
            font-size: 25px;
        }

        .parent{
            color: #FFF5E0;
            background-color: #4F709C;
        }

        .child{
            color: #AED2FF;

            background-color: #5C8374;

        }
    </style>
</head>
<body>
    <center>
        <table border="1" cellspacing="0" cellpadding="10" >
            <th class="title" colspan="3">Tugas Array</th>
            <tr>
                <td class="parent">Nilai Array</td>
                <td class="child"><?= implode(", ", $nilai); ?></td>
            </tr>
            <tr>
                <td class="parent">Nilai Tertinggi</td>
                <td class="child"><?= max($nilai); ?></td>
            </tr>
            <tr>
                <td class="parent">Nilai Terkecil</td>
                <td class="child"><?= min($nilai); ?></td>
            </tr>
            <tr>
                <td class="parent">Dari yang terkecil</td>
                <?php asort($nilai2); ?>
                <td class="child"><?= implode(', ', $nilai2); ?></td>
            </tr>
            <tr>
                <td class="parent">Dari yang terbesar</td>
                <?php arsort($nilai2); ?>
                <td class="child"><?= implode(', ', $nilai2); ?></td>
            </tr>
            <tr>
                <td class="parent">Rata-Rata</td>
                <td class="child"><?= round(array_sum($nilai)/count($nilai)); ?></td>
            </tr>
            <tr>
                <?php
                $key = array_search(min($nilai), $nilai); 
                // array_search() berguna untuk mencari sebuah value yang ada di array, 
                // dan memunculkan output berupa key yang memiliki value yang di cari. 
                $nilaiGanti = [75];
                array_splice($nilai, $key, 1, $nilaiGanti); 
                ?>
                <td class="parent">Perbaikan nilai dari</td>
                <td class="child"><?= min($nilai2)?> ke- <?= $nilaiGanti[0]; ?></td>
            </tr>
            <tr>
                <td class="parent">Jadi nilai sekarang</td>
                <td class="child"><?= implode(", ", $nilai); ?></td>
            </tr>
            <tr>
                <td class="parent">Sekarang, Nilai dari yang terbesar</td>
                <?php arsort($nilai); ?>
                <td class="child"><?= implode(", ", $nilai); ?></td>
            </tr>
        </table>
    </center>
</body>
</html>