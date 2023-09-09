<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restoran Cepat Saji</title>
</head>

<body>
  <?php
  $daftarmenu = [
    [
      ""
    ],
    [
      "food" => "Mie Goreng",
      "harga" => 10000
    ],
    [

      "food" => "Nasi Goreng",
      "harga" => 15000
    ],
    [
      "food" => "Batagor",
      "harga" => 12000
    ],
    [
      "food" => "Kwetiaw",
      "harga" => 15000
    ],
    [
      "drink" => "ES Jeruk",
      "harga" => 5000
    ],
    [
      "drink" => "Teh Manis",
      "harga" => 7500
    ],
    [
      "drink" => "Cincau",
      "harga" => 5000
    ],
    [
      "drink" => "Teh Botol",
      "harga" => 7500
    ]
  ];

  $menufood = array_filter($daftarmenu, function ($item) {
    return isset($item['food']);
  });

  $menudrink = array_filter($daftarmenu, function ($item) {
    return isset($item['drink']);
  });
  ?>

  <div class="daftarmenu">
    <h2 class="Menu">Daftar Menu</h2>
    <label for="makanan" style="margin-left:50px; font-size: 20px; font-weight:bold;">Makanan</label>
    <?php
    foreach ($menufood as $key => $menu) {
    ?>
      <p> Menu : <?= $menu['food'] ?><br>Harga : Rp. <?= number_format($menu['harga'], 0, ',', '.') ?></p>
    <?php
    }
    ?>
    <label for="minuman" style="margin-left:50px; font-size: 20px; font-weight:bold; position: relative; left: 60%; top: -61%;">Minuman</label>
    <?php
    foreach ($menudrink as $key => $menu) {
    ?>
      <p style="position: relative; left: 60%; top: -61%;"> Menu : <?= $menu['drink'] ?><br> Harga : Rp. <?= number_format($menu['harga'], 0, ',', '.') ?></p>
        <?php
      }
        ?>
  </div>

  <div class="inputuser">
    <form action="" method="post" style="margin-top: 20px; ">
      <table>
        <tr>
          <td> &nbsp; PILIH MAKANAN : </td>
          <td>
            <select name="namamak">
              <option hidden>--PILIH--</option>
              <?php
              foreach ($menufood as $key => $food) {
              ?>
                <option value="<?= $key ?>"><?= $food['food'] ?></option>
              <?php
              }
              ?>
            </select>
          </td>
        </tr>
        <tr>
          <td> &nbsp; Jumlah Pembelian Makanan : </td>
          <td><input type="number" name="jumlahmak"></td>
        </tr>
        <tr>
          <td> &nbsp; PILIH MINUMAN : </td>
          <td>
            <select name="namamin">
              <option hidden>--PILIH--</option>
              <?php
              foreach ($menudrink as $key => $drink) {
              ?>
                <option value="<?= $key ?>"><?= $drink['drink'] ?></option>
              <?php
              }
              ?>
            </select>
          </td>
        </tr>
        <tr>
          <td> &nbsp; Jumlah Pembelian Minuman : </td>
          <td><input type="number" name="jumlahmin"></td>
        </tr>
        <tr>
          <td><input type="submit" name="beli" value="BELI" style="width: 400px;"></td>
        </tr>
      </table>
    </form>
  </div>
  <?php
  // if( isset($_POST['namamak'])){
  //  header('Location:StudyCase-1.php');
  // }

  if (isset($_POST['beli'])) {
    $namamak = $_POST['namamak'];
    $namamin = $_POST['namamin'];
    $jumlahmak = $_POST['jumlahmak'];
    $jumlahmin = $_POST['jumlahmin'];
    $total_harga_makanan = 0;
    $total_harga_minuman = 0;

    if (!empty($namamak) && $jumlahmak > 0) {
      $total_harga_makanan = $daftarmenu[$namamak]['harga'] * $jumlahmak;
    }

    if (!empty($namamin) && $jumlahmin > 0) {
      $total_harga_minuman = $daftarmenu[$namamin]['harga'] * $jumlahmin;
    }

    $diskonmakanan = 0;
    $diskonminuman = 0;
    $total_item = $jumlahmak + $jumlahmin;

    // if ($total_item > 3 && $total_item < 5) {
    //   $diskon = 5;
    // } elseif ($total_item > 5) {
    //   $diskon = 10;
    // }

    if ($jumlahmak >= 3 && $jumlahmak < 5) {
      $diskonmakanan = 5;
    } elseif ($total_item > 5) {
      $diskonmakanan = 10;
    }

    if ($jumlahmin >= 3 && $jumlahmin < 5) {
      $diskonminuman = 5;
    } elseif ($jumlahmin > 5) {
      $diskonminuman = 10;
    }

    $diskon_amount_makanan = ($total_harga_makanan * $diskonmakanan) / 100;
    $total_harga_setelah_diskon_makanan = $total_harga_makanan - $diskon_amount_makanan;

    $diskon_amount_minuman = ($total_harga_minuman * $diskonminuman) / 100;
    $total_harga_setelah_diskon_minuman = $total_harga_minuman - $diskon_amount_minuman;

    $total_pembayaran = $total_harga_setelah_diskon_makanan + $total_harga_setelah_diskon_minuman;
  }

  if (isset($_POST['beli'])) {
    if ($total_harga_makanan >= 0 || $total_harga_minuman > 0) {
      echo "<div class='outputharga'>";
      echo "<h2>==================STRUK==================</h2>";
      echo "<p>Makanan: {$daftarmenu[$namamak]['food']} ($jumlahmak)</p>";
      echo "<p>Harga Makanan: Rp. " . number_format($daftarmenu[$namamak]['harga'] * $jumlahmak, 0, ',', '.') . " (disc: Rp. " . number_format($diskon_amount_makanan, 0, ',', '.') . ")</p>";
      echo "<p>Jumlah Harga Makanan: Rp. " . number_format($total_harga_setelah_diskon_makanan, 0, ',', '.') . "</p>";
      echo "<p>Minuman: {$daftarmenu[$namamin]['drink']} ($jumlahmin)</p>";
      echo "<p>Harga Minuman: Rp. " . number_format($daftarmenu[$namamin]['harga'] * $jumlahmin, 0, ',', '.') . " (disc: Rp. " . number_format($diskon_amount_minuman, 0, ',', '.') . ")</p>";
      echo "<p>Jumlah Harga Minuman: Rp. " . number_format($total_harga_setelah_diskon_minuman, 0, ',', '.') . "</p>";
      echo "<p>Total Pembayaran: <b> Rp. " . number_format($total_pembayaran, 0, ',', '.') . " </b> </p>";
      echo "</div>";
    }

    // if ($total_harga_minuman > 0) {
    //   echo "<div class='outputharga'>";
    //   echo "<p>Minuman: {$daftarmenu[$namamin]['drink']} ($jumlahmin)</p>";
    //   echo "<p>Harga Minuman: Rp. " . number_format($daftarmenu[$namamin]['harga'] * $jumlahmin, 0, ',', '.') . " (disc: Rp. " . number_format($diskon_amount_minuman, 0, ',', '.') . ")</p>";
    //   echo "<p>Jumlah Harga Minuman: Rp. " . number_format($total_harga_setelah_diskon_minuman, 0, ',', '.') . "</p>";
    //   echo "</div>";
    // }
    // echo "<div class='outputharga'>";
    // echo "<p>Total Pembayaran: <b> Rp. " . number_format($total_pembayaran, 0, ',', '.') . " </b> </p>";
    // echo "</div>";
  }
  ?>

  <style>
    body {
      margin: 0;
      padding: 0;
    }

    .outputharga {
      background-color: #fff;
      position: relative;
      border-style: solid;
      max-width: 1000px;
      max-height: 1500px;
      width: 600px;
      height: 300px;
      z-index: 15;
      top: 450px;
      left: 800px;
      margin: -100px 0 0 -150px;
    }

    .daftarmenu {
      background-color: #fff;
      position: relative;
      border-style: solid;
      max-width: 1000px;
      max-height: 1500px;
      width: 600px;
      height: 400px;
      z-index: 15;
      top: 150px;
      left: 800px;
      margin: -100px 0 0 -150px;
    }

    h2 {
      text-align: center;
    }

    p {
      margin-left: 50px;
    }

    .inputuser {
      background-color: #fff;
      position: relative;
      border-style: solid;
      max-width: 1000px;
      max-height: 1500px;
      width: 600px;
      height: 200px;
      z-index: 15;
      top: 300px;
      left: 800px;
      margin: -100px 0 0 -150px;
    }

    input[type="submit"] {
      position: relative;
      left: 100px;
      top: 20px;
    }
  </style>
</body>

</html>