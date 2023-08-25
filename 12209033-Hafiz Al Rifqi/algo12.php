<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Konversi Waktu</title>
</head>

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

