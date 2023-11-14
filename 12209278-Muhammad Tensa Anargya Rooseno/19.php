    <!DOCTYPE html>
    <html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diskon Tiket</title>
    <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
    }

    form {
      max-width: 400px;
      margin: 20px auto;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }

    table, th, td {
      border: 1px solid #ccc;
    }

    th, td {
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }

    label {
      font-weight: bold;
    }

    input[type="text"],
    select {
      width: 90%;
      padding: 8px;
      margin-top: 4px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    input[type="submit"] {
      background-color: #007bff;
      color: #ffffff;
      border: none;
      padding: 10px 15px;
      border-radius: 3px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }
  </style>
    </head>

    <body>
    <form method="post" action="#">
        <table>
        <tr>
            <td><label for="vip">Input VIP</label></td>
            <td><input type="text" name="vip"></td>
        </tr>
        <tr>
            <td><label for="eksekutif">Input Eksekutif</label></td>
            <td><input type="text" name="eksekutif"></td>
        </tr>
        <tr>
            <td><label for="ekonomi">Input Ekonomi</label></td>
            <td><input type="text" name="ekonomi"></td>
        </tr>
        <tr>
            <td><label for="tiket">Input Tiket</label></td>
            <td><input type="text" name="tiket"></td>
        </tr>
        <tr>
            <td><label for="kategori_tiket">Kategori:</label></td>
            <td>
            <select id="kategori_tiket" name="kategori_tiket">
                <option value="ekonomi">Ekonomi</option>
                <option value="vip">Vip</option>
                <option value="eksekutif">Eksekutif</option>
            </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="submit"></td>
        </tr>
        </table>
    </form>

    <?php
  if (isset($_POST['submit'])) {
    $vip = intval($_POST['vip']);
    $eksekutif = intval($_POST['eksekutif']);
    $ekonomi = intval($_POST['ekonomi']);
    $kategori_tiket = $_POST['kategori_tiket'];

    $tiket_perkelas = 50;
    $keuntungan_vip = 0;
    $keuntungan_eksekutif = 0;
    $keuntungan_ekonomi = 0;

    if ($kategori_tiket == "vip") {
      $vip + $tiket;
      if ($vip >= 35) {
        $keuntungan_vip = 25;
      } elseif ($vip >= 20) {
        $keuntungan_vip = 15;
      } else {
        $keuntungan_vip = 5;
      }
    } elseif ($kategori_tiket == "eksekutif") {
      $eksekutif + $tiket;
      if ($eksekutif >= 40) {
        $keuntungan_eksekutif = 20;
      } elseif ($eksekutif >= 20) {
        $keuntungan_eksekutif = 10;
      } else {
        $keuntungan_eksekutif = 2;
      }
    } elseif ($kategori_tiket == "ekonomi") {
      $ekonomi + $tiket;
      $keuntungan_ekonomi = 7;
    } else {
      echo "Invalid";
    }

    $keuntungan_keseluruhan = $keuntungan_vip + $keuntungan_eksekutif + $keuntungan_ekonomi;
    $total_tiket = $vip + $eksekutif + $ekonomi;

    echo "Total Tiket : " . $total_tiket . "<br>Keuntungan Vip : " . $keuntungan_vip . "%<br>Keuntungan Eksekutif : " . $keuntungan_eksekutif . "%<br>Keuntungan Ekonomi : " . $keuntungan_ekonomi . "%";
    echo "<br>Keuntungan Keseluruhan : " . $keuntungan_keseluruhan;
  }
  ?>

    
    </body>
    </html>