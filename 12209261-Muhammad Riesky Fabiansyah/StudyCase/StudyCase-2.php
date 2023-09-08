<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mencari Nama</title>
</head>

<body>
  <?php
  $data =
    [

      [
        "nama" => "Riesky",
        "usia" => 18,
        "nis" => 12209261,
        "rombel" => "PPLG - XI 6",
      ],
      [
        "nama" => "Reyhan",
        "usia" => 16,
        "nis" => 12209320,
        "rombel" => "PPLG - XI 3",
      ],
      [
        "nama" => "Tensa",
        "usia" => 17,
        "nis" => 12209666,
        "rombel" => "PPLG - XI 1",
      ],
      [
        "nama" => "Louis",
        "usia" => 21,
        "nis" => 12209999,
        "rombel" => "TJKT - XI 3",
      ]

    ];
  ?>

  <h2>LIST NAMA</h2>
  <table>
    <tr>
      <?php foreach ($data as $key => $datas) { ?>
        <p> Nama : <?= $datas['nama']; ?><br>Usia : <?= $datas['usia']; ?></p>
      <?php
      }
      ?>
    </tr>
  </table>

  <a href="?usia=TRUE">Cari yang sudah 17 tahun keatas</a><br>

  <?php
  if (isset($_GET['usia'])) { ?>
  <h2>LIST NAMA Diatas 17 tahun</h2>
  <table>
    <tr>
      <?php foreach ($data as $key => $datas) { 
        if ($datas['usia'] >= 17) {?>
          <p> Nama : <?= $datas['nama']; ?><br>Usia : <?= $datas['usia']; ?></p>
        <?php
          }
        }
      }
      ?>
    </tr>
  </table>

  <form action="" method="post">
    <br>
    <input type="text" name="nama" placeholder="Masukkan Nama">
    <input type="submit" name="submit" value="Cari">
  </form>

  <?php
  if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $hasilnama = array_search($nama, array_column($data, "nama"));
    $new = $data[$hasilnama];
    $usia = $data[$hasilnama]['usia'];
    if ($hasilnama !== false) {
      if ($usia >= 17) {
        echo "<table>";
        echo "<p>" . "Nama : " . $new['nama'] . "</p>";
        echo "<p>" . "Usia : " . $new['usia'] . "</p>";
        echo "<p>" . "Nis  : " . $new['nis'] . "</p>";
        echo "<p>" . "Rombel : " . $new['rombel'] . "</p>";
        echo "</table>";
      } else {
        echo "Belum berusia 17 tahun.";
      }
    } else {
      echo "Data tidak ditemukan ";
    }
  }
  ?>
</body>

</html>