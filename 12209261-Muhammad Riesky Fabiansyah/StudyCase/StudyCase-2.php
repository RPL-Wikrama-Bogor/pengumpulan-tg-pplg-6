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
        <p> Nama : <?= $datas['nama']; ?><br>Usia : <?= $datas['usia']; ?> Nis : <?= $datas['nis']; ?> Rombel : <?= $datas['rombel']; ?></p>
      <?php
      }
      ?>
    </tr>
  </table>

  <form action="" method="post">
    <input type="text" name="nama" placeholder="Masukkan Nama">
    <input type="submit" name="submit" value="Cari">
  </form>

  <?php
  if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $hasilnama = array_search($nama, array_column($data, "nama"));
    $new = $data[$hasilnama];
    $usia = $data[$hasilnama]['usia'];
    // if ( isset($hasilnama)){
    //   if ($hasilnama >= 17){
    //     echo "<td>" . $new['nama'] ."</td>";
    //     echo "<td>" . $new['usia'] . "</td>";
    //     echo "<td>" . $new['nis'] . "</td>";
    //     echo "<td>" . $new['rombel'] . "</td>";
    //   } else {
    //     echo "Anak tersebut Kurang dari 17 tahun";
    //   }
    // }else {
    //   echo "Data tidak ditemukan";
    // }
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