<!DOCTYPE html>
<html>
<head>
    <title>Data Nilai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        b {
            color: blue;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Nilai</h1>
        <?php
        $nilai = [90, 95, 71, 79, 86, 96];
        $nilai2 = $nilai;
        $nilaiGanti = [75];

        $key = array_search(min($nilai), $nilai);
        array_splice($nilai, $key, 1, $nilaiGanti);
        arsort($nilai);
        ?>

        <table>
            <tr>
                <th>Nilai</th>
            </tr>
            <tr>
                <td><?php echo implode(", ", $nilai2); ?></td>
            </tr>
        </table>

        <p>Nilai tertinggi adalah : <b><?php echo max($nilai2); ?></b></p>
        <p>Nilai terkecil adalah : <b><?php echo min($nilai2); ?></b></p>

        <table>
            <tr>
                <th>Urutan dari yang terkecil</th>
            </tr>
            <tr>
                <td><?php asort($nilai2); echo implode(", ", $nilai2); ?></td>
            </tr>
        </table>

        <table>
            <tr>
                <th>Urutan dari yang terbesar</th>
            </tr>
            <tr>
                <td><?php arsort($nilai2); echo implode(", ", $nilai2); ?></td>
            </tr>
        </table>

        <?php
        $average = round(array_sum($nilai) / count($nilai));
        ?>
        <p>Rata-rata dari nilai tersebut, jika dibulatkan : <b><?php echo $average; ?></b></p>

        <p>Nilai yang harus diperbaiki <b><?php echo min($nilai2); ?></b>, Nilai yang didapat <b><?php echo $nilaiGanti[0]; ?></b>. Nilai saya sekarang : <b><?php echo implode(", ", $nilai); ?></b></p>

        <table>
            <tr>
                <th>Urutan nilai terbesar setelah perbaikan nilai</th>
            </tr>
            <tr>
                <td><?php echo implode(", ", $nilai); ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
