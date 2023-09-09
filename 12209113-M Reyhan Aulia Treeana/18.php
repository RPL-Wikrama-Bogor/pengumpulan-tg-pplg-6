<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
  }

  form {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    width: 300px;
    margin: 0 auto;
    margin-top: 20px;
    margin-bottom: 20px;
  }

  input {
    width: 280px;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }

  button {
    padding: 15px 30px;
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
  }

  button:hover {
    background-color: #0056b3;
  }

  .input-group {
    margin-bottom: 10px;
  }

  .add-button {
    text-align: center;
  }

  p {
    cursor: pointer;
    color: blue;
    text-decoration: underline;
  }

  p:hover {
    color: #0056b3;
  }
</style>

</head>

<body>
  <form action="" method="post">
    <div id="box">
      <div style="display: inline; ">
        <label for="nama">Nama: </label>
        <input type="text" name="nama[]" required>
        <label for="kehadiran">Input Kehadiran: </label>
        <input type="number" name="kehadiran[]" required>
        <label for="mtk">MTK: </label>
        <input type="number" name="mtk[]" required>
        <label for="indo">Indo: </label>
        <input type="number" name="indo[]" required>
        <label for="ing">Ing: </label>
        <input type="number" name="ing[]" required>
        <label for="dpk">DPK: </label>
        <input type="number" name="dpk[]" required>
        <label for="agama">Agama: </label>
        <input type="number" name="agama[]" required>
        <p style="cursor: pointer; color: blue;" onclick="tambahInput()">Tambah Input Form</p>
        
      </div>
    </div>
    <button type="submit" name="submit">SUBMIT</button>
  </form>

  <script>
    let jumlahInput = 1;

    function tambahInput() {
      if (jumlahInput < 10) {
        let inputElement = `
                    <br><div style="display: flex; width: fit-content;">
                    <label for="nama">Nama: </label>
                    <input type="text" name="nama[]" required>
                    <label for="kehadiran">Input Kehadiran: </label>
                    <input type="number" name="kehadiran[]" required>
                    <label for="mtk">MTK: </label>
                    <input type="number" name="mtk[]" required>
                    <label for="indo">Indo: </label>
                    <input type="number" name="indo[]" required>
                    <label for="ing">Ing: </label>
                    <input type="number" name="ing[]" required>
                    <label for="dpk">DPK: </label>
                    <input type="number" name="dpk[]" required>
                    <label for="agama">Agama: </label>
                    <input type="number" name="agama[]" required>
                </div> <br> <br> `;
        document.getElementById('box').innerHTML += inputElement;
        jumlahInput++;
      }
    }
  </script>

    <center>

  <?php
  if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $hadir = $_POST['kehadiran'];
    $mtk = $_POST['mtk'];
    $indo = $_POST['indo'];
    $ing = $_POST['ing'];
    $dpk = $_POST['dpk'];
    $agama = $_POST['agama'];

    $data = [];
    $jumlahData = count($nama);

    for ($i = 0; $i < $jumlahData; $i++) {
      $data[$i] = [
        'nama' => $nama[$i],
        'kehadiran' => $hadir[$i],
        'mtk' => $mtk[$i],
        'indo' => $indo[$i],
        'ing' => $ing[$i],
        'dpk' => $dpk[$i],
        'agama' => $agama[$i]
      ];
    }

    $totalData =
      array_sum(array_column($data, 'mtk')) +
      array_sum(array_column($data, 'indo')) +
      array_sum(array_column($data, 'ing')) +
      array_sum(array_column($data, 'dpk')) +
      array_sum(array_column($data, 'agama'));

    $rataRata = round($totalData / (count($data) * 5));

    echo "Total Data: $totalData<br>";

    $dataKehadiran = [];
    echo "<p>Daftar Kehadiran : </p>";
    foreach ($data as $item) {
      echo "{$item['nama']} <br>";
      echo "{$item['kehadiran']}% <br>";
      echo "Total Nilai: " . ($item['mtk'] + $item['indo'] + $item['ing'] + $item['dpk'] + $item['agama']) . "<br>". "<br>";
      $dataKehadiran[] = $item['kehadiran'];
    }

    $rataRataKehadiran = round(array_sum($dataKehadiran) / count($dataKehadiran));

    echo "Rata-rata Kehadiran: $rataRataKehadiran%<br>";

    // ... (your previous code)

    $juara = [];
    foreach ($data as $item) {
      if ($rataRata >= 80 && $item['kehadiran'] == 100) {
        $juara[] = $item['nama']; 
      }
    }

    if (!empty($juara)) {
      echo "Juara: ";
      for ($i = 0; $i < count($juara); $i++) {
        echo $juara[$i];
        if ($i < count($juara) - 1) {
          echo ", ";
        }
      }
    }

    // ... (the rest of your code)


  }
  ?>
  </center>
</body>

</html>