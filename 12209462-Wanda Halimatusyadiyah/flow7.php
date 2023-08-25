<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<form action="" method="post">
    <table>
    <tr>
      <td><label for="jam">total gram</label></td>
      <td><input type="number" name="ttl_grm" id="ttl_grm" maxlength="2"></td>
    </tr>
    <br>
    <tr>
      <td><input type="submit" name="submit" value="Konversi"></td>
    </tr>

  <?php
    if (isset($_POST['submit'])) {
      $ttl_grm = $_POST['ttl_grm'];

      $hrg_sblm = $ttl_grm * 500;
      $diskon = 5 * $hrg_sblm / 100;
      $hrg_stlh = $hrg_sblm - $diskon;
      
      echo "Total gram = $ttl_grm <br>";
      echo "Harga sebelum diskon = $hrg_sblm <br>";
      echo "Diskon = $diskon<br>";
      echo "Harga setelah diskon = $hrg_stlh <br>";
    }
  ?>
  </table>
  </form>
</body>
</html>