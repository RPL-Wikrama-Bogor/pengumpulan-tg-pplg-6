
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">

        <div id="wrap">

            <div style="display: flex;">

                <label for="angka"> Masukan angka : </label>

                <input type="number" name="angka[]" id="angka">

            </div>

        </div>

        <p style="cursor: pointer; color: blue" onclick = "tambahInput()"> Tambah input form </p>
        <button type="submit" name="submit" > kirim </button>

    </form>

    <script>

        let jumlahInput = 1;
        function tambahInput() {


            let inputElement = `
            <div style = "display: flex;"> 

            <label for = "angka"  > Masukan angka : </label>
            <input type = "number"  name = "angka[]" id = "angka"> </input>
            
            </div>
            `;
           
            jumlahInput++;
            if (jumlahInput < 10) {
                document.getElementById  ('wrap').innerHTML += inputElement;
            }
        }

    </script>


        <?php

        $arrAngka = [];
        $nilaiTerbesar;
        $nilaiTerkecil;
        $ratarata;

            if (isset($_POST['submit'])) {
                $arrAngka = $_POST['angka'];
                $nilaiTerbesar = max($arrAngka);
                $nilaiTerkecil = min($arrAngka);

                $ratarata = array_sum($arrAngka) / count($arrAngka);
                echo "Nilai terbesar : " . $nilaiTerbesar . " <br> Nilai terkecil : " . $nilaiTerkecil . " <br> Nilai rata-rata : " . $ratarata;
                echo "</br>";
                echo "</br>";
                echo "</br>";

            }

        ?>

</body>

</html>