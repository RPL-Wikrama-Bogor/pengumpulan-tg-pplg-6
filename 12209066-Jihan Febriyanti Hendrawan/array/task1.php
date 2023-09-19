<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 50px;
            background-image: url(https://i.pinimg.com/736x/3f/ef/7c/3fef7cb945bfaa75197b9eb473dc637a.jpg);
            background-size: cover;
            background-repeat: none;
        
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            
        }

        h1 {
            text-align: center;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; 
        }

        .result {
            background-color: #fff;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Nilai Juneb</h1>

        <div class="result">
            <?php
            $nilai = [90, 70, 77, 80, 97, 83];
            echo "Nilai yang di dapat : <br> <b>" . implode(", ", $nilai) . "</b> <br />";
            echo "</b> <br />";
            echo "nilai yang paling tinggi adalah : <br><b>" . max($nilai) . "</b> <br />";
            echo "</b> <br />";
            echo "nilai yang paling kecil adalah : <br><b>" . min($nilai) . "</b> <br />";
            echo "</b> <br />";

            $nilai1 = [];
            foreach ($nilai as $nla) {
                $nilai1[] = $nla;
            }

            asort($nilai1);
            echo "Jika di urutkan dari nilai yang terkecil: <br><b>" . implode(", ", $nilai1) . "</b> <br />";
            echo "</b> <br />";

            arsort($nilai1); 
            echo "Jika di urutkan dari nilai yang terbesar:  <br><b>" . implode(", ", $nilai1) . "</b> <br />";
            echo "</b> <br />";

            echo "jika di bulatkan, maka rata-rata akan menjadi: <b>" . round(array_sum($nilai) / count($nilai)) . "</b> <br />";
            echo "</b> <br />";

            $key = array_search(min($nilai), $nilai);
            $Remedial = [75];
            array_splice($nilai, $key, 1, $Remedial);

            echo "Setelah melakukan Remedial untuk nilai saya yang kurang, yaitu <b>" . min($nilai1) . "</b>, saya mendapatkan nilai pas kkm yaitu <b>$Remedial[0]. <br>";
            echo "</b> <br />";

            echo " jadi nilai saya sekarang adalah : <br><b>" . implode(", ", $nilai) . "</b> <br />";
            echo "</b> <br />";

            arsort($nilai);
            echo "maka dari itu jika di urutkan dari nilai yang terbesar hasilnya menjadi: <br><b>" . implode(", ", $nilai) . "</b> <br />";
            ?>
        </div>
    </div>
</body>
</html>
