
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kode Pegawai</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-color: #f4f4f4;
    }

    form {
      background-color: #fff;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    table {
      width: 100%;
    }

    td {
      padding: 10px;
    }

    input[type="number"] {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    input[type="submit"] {
      background-color: #007bff;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .output h3{
        font-weight: bold;
    }
    .output {
      text-align: center;
      background-color: #fff;
      border-radius: 10px;
      padding: 20px;
      margin: 20px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>
  <form method="post" action="#">
    <table>
      <tr>
        <td>Input No Pegawai</td>
        <td><input type="number" name="no_pegawai" maxlength="11" required placeholder="gddmmyyyynn"></td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" value="Submit" name="submit">
        </td>
      </tr>
    </table>
  </form>

  <?php 
    if (isset($_POST['submit'])) {
      $no_pegawai = $_POST['no_pegawai'];
      $tanggal_lahir;
      $no_golongan = substr($no_pegawai, 0, 1);
      $tanggal = substr($no_pegawai, 1, 2);
      $bulan = substr($no_pegawai, 3, 2);
      $tahun = substr($no_pegawai, 5, 4);
      $no_urut = substr($no_pegawai, 9, 2);

      if($bulan == 1){
        $bulan = "Januari";
      }
      elseif($bulan == 2){
        $bulan = "Februari";
      }
      elseif($bulan == 3){
        $bulan = "Maret";
      }
      elseif($bulan == 4){
        $bulan = "April";
      }
      elseif($bulan == 5){
        $bulan = "Mei";
      }
      elseif($bulan == 6){
        $bulan = "Juni";
      }
      elseif($bulan == 7){
        $bulan = "Juli";
      }
      elseif($bulan == 8){
        $bulan = "Agustus";
      }
      elseif($bulan == 9){
        $bulan = "September";
      }
      elseif($bulan == 10){
        $bulan = "Oktober";
      }
      elseif($bulan == 11){
        $bulan = "November";
      }
      else{
        $bulan = "Desember";
      }
      $tanggal_lahir = $tanggal . "/" . $bulan . "/" . $tahun;
    }
  ?>

  <div class="output">
    <h3>Output:</h3>
    <?php
      if (isset($_POST['submit'])) {
        echo $no_golongan . " " . $tanggal_lahir . " " . $no_urut;
      }
    ?>
  </div>
</body>
</html>
