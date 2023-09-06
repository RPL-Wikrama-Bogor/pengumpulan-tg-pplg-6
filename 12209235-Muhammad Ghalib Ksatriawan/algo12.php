<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Konversi Waktu</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f5f5f5;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h3 {
      margin-bottom: 15px;
      text-align: center;
    }

    form {
      text-align: center;
    }

    table {
      margin: 0 auto;
    }

    td {
      padding: 10px;
    }

    input[type="number"] {
      width: 50px;
    }

    input[type="submit"] {
      padding: 8px 20px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .result {
      margin-top: 20px;
      text-align: center;
    }
  </style>
</head>
<div class="container">

<body>
    <h3>Input hh,mm,ss</h3>
  <form method="post" action="#">
    <table>
      <tr>
        <td>Input hh</td>
        <td><input type="number" name="hh" min="0" max="23"></td>
      </tr>
      <tr>
        <td>Input mm</td>
        <td><input type="number" name="mm" min="0" max="59"></td>
      </tr>
      <tr>
        <td>Input ss</td>
        <td><input type="number" name="ss" min="0" max="59"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="Submit" name="submit"></td>
      </tr>
    </table>
  </form>

  <?php
  if (isset($_POST['submit'])) {
    $hh = intval($_POST['hh']);
    $mm = intval($_POST['mm']);
    $ss = intval($_POST['ss']);

    $ss += 1;
    if ($ss >= 60) {
      $ss = 0;
      $mm += 1;
      if ($mm >= 60) {
        $mm = 0;
        $hh += 1;
        if ($hh >= 24) {
          $hh = 0;
        }
      }
    }

    echo "Waktu setelah ditambah 1 detik: " . sprintf("%02d:%02d:%02d", $hh, $mm, $ss);
  }
  ?>
</body>
</html>