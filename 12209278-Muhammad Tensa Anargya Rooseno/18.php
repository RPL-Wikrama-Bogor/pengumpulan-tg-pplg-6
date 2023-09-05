<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $students = [];

  for ($i = 1; $i <= 3; $i++) {
    $name = $_POST["name$i"];
    $math = floatval($_POST["math$i"]);
    $indonesian = floatval($_POST["indonesian$i"]);
    $english = floatval($_POST["english$i"]);
    $science = floatval($_POST["science$i"]);
    $religion = floatval($_POST["religion$i"]);
    $attendance = floatval($_POST["attendance$i"]);

    $totalScore = $math + $indonesian + $english + $science + $religion;

    if ($totalScore >= 475 && $attendance == 100) {
      $students[] = [
        'name' => $name,
        'totalScore' => $totalScore
      ];
    }
  }

  if (!empty($students)) {
    usort($students, function ($a, $b) {
      return $b['totalScore'] - $a['totalScore'];
    });

    echo "Juara Kelas: " . $students[0]['name'] . "<br>";
    echo "Total Nilai: " . $students[0]['totalScore'];
  } else {
    echo "Tidak ada siswa yang memenuhi syarat.";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Form</title>
<head>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }

  .container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 80%;
    max-width: 600px;
    box-sizing: border-box;
  }

  h3 {
    margin-top: 0;
    color: #333;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 15px;
  }

  th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  input[type="text"],
  input[type="number"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-bottom: 10px;
  }

  input[type="submit"] {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
  }

  input[type="submit"]:hover {
    background-color: #0056b3;
  }
</style>
</head>
<body>
    
</body>
<form method="post" action="">
  <?php for ($i = 1; $i <= 3; $i++) : ?>
    <h3>Siswa <?= $i ?></h3>
    <table>
      <tr>
        <td>Nama: <input type="text" name="name<?= $i ?>"><br></td>
      </tr>
      <tr>
        <td>Nilai MTK: <input type="number" name="math<?= $i ?>" required min="0" max="100"><br></td>
      </tr>
      <tr>
        <td>Nilai Bahasa Indonesia: <input type="number" name="indonesian<?= $i ?>" required min="0" max="100"><br></td>
      </tr>
      <tr>
        <td>Nilai Bahasa Inggris: <input type="number" name="english<?= $i ?>" required min="0" max="100"><br></td>
      </tr>
      <tr>
        <td>Nilai IPA: <input type="number" name="science<?= $i ?>" required min="0" max="100"><br></td>
      </tr>
      <tr>
        <td>Nilai Agama: <input type="number" name="religion<?= $i ?>" required min="0" max="100"><br></td>
      </tr>
      <tr>
        <td>Kehadiran (%): <input type="number" name="attendance<?= $i ?>" required min="0" max="100"><br></td>
      </tr>

    </table>
    <hr>
  <?php endfor; ?>
  <input type="submit" value="Cari Juara Kelas">
</form>
