<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $bilangan = [];
  for ($i = 1; $i <= 20; $i++) {
    if (isset($_POST["number$i"])) {
      $bilangan1 = floatval($_POST["number$i"]);
      array_push($bilangan, $bilangan1);
    }
  }

  if (!empty($bilangan)) {
    $count = count($bilangan);
    $max = max($bilangan);
    $min = min($bilangan);
    $sum = array_sum($bilangan);
    $average = $sum / $count;

    echo "Bilangan Terbesar: $max <br>";
    echo "Bilangan Terkecil: $min <br>";
    echo "Rata-rata Bilangan: $average";
  } else {
    echo "Tidak ada bilangan yang dimasukkan.";
  }
}
?>

<form method="post" action="#">
  <?php for ($i = 1; $i <= 20; $i++) : ?>
    Bilangan <?= $i ?>: <input type="number" name="number<?= $i ?>"><br>
  <?php endfor; ?>
  <input type="submit" value="Hitung">
</form>