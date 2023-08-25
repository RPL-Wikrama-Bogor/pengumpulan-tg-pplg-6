<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Konversi Ke Detik</title>
</head>

<body>

  <form method="post" action="#">
    <tr>
      <td><label for="jam">Input Waktu</label></td>
      <td><input type="number" name="waktu" id="waktu" maxlength="7"></td>
    </tr>
    <tr>
      <td><input type="submit" name="submit" value="Konversi"></td>
    </tr>
  </form>

<?php
  if (isset($_POST['submit'])) {
    $waktu = $_POST['waktu'];
    $jam;
    $menit;
    $detik;
    $hasil;

    $jam = floor($waktu / 3600);
    $menit = floor(($waktu % 3600) / 60);
    $detik = floor(($waktu % 3600) % 60);

  // if ($waktu > 3600){
  //   $jam = floor($waktu / 3600);
  //   $waktu = $waktu - ($jam*3600);
  //   $hasil = $jam ."jam";
  // }
  // elseif($waktu > 60){
  //   $menit = floor($waktu / 60);
  //   $waktu = $waktu - ($menit*60);
  //   $hasil = $menit ."menit";
  // }else {
  //   $detik = $waktu;
  //   $hasil = $detik ."detik";

  // }
  echo "Waktu yang diinput adalah : " .$jam. "Jam" . $menit . "Menit" . $detik . "Detik";
    // echo "Waktu yang diinput adalah " .$hasil. " detik";
  }
  
  ?>

</body>
</html>