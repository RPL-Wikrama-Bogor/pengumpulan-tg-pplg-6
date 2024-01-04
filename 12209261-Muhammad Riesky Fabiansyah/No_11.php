<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kode Pegawai</title>
</head>

<body>
  <div class="tabelinput">
    <form method="post" action="#">
      <tr>
        <td>Input No Pegawai</td>
        <td><input type="text" name="no_pegawai" minlength="11" maxlength="11" required placeholder="gddmmyyyynn"></td>
      </tr>
      <tr>
        <td>
          <input type="submit" value="Submit" name="submit">
        </td>
      </tr>
    </form>
  </div>
  <?php
  if (isset($_POST['submit'])) {
    $no_pegawai = $_POST['no_pegawai'];
    $tanggal_lahir = 0;
    $no_golongan = substr($no_pegawai, 0, 1);
    $tanggal = substr($no_pegawai, 1, 2);
    $bulan = substr($no_pegawai, 3, 2);
    $month = substr($no_pegawai, 3, 2);
    $tahun = substr($no_pegawai, 5, 4);
    $no_urut = substr($no_pegawai, 9, 2);


    if ($bulan == 1) {
      $bulan = "Januari";
      $tanggal_lahir = $tanggal . $bulan . $tahun;
      echo "<table class='tabelshow' border='0'><tr>";
      echo "<th><h2>DATA PEGAWAI</h2>" . $no_golongan . $tanggal . $month . $tahun . $no_urut . "</th>";
      echo "<td><h4> No Golongan : " . $no_golongan . "<br><h4> Tanggal Lahir : " . $tanggal_lahir . "<br><h4>No. Urut : " . $no_urut . "</h4></td>";
      echo "</tr>";
      echo "</table>";
    } elseif ($bulan == 2) {
      $bulan = "Februari";
      $tanggal_lahir = $tanggal . $bulan . $tahun;
      echo "<table class='tabelshow' border='0'><tr>";
      echo "<th><h2>DATA PEGAWAI</h2>" . $no_golongan . $tanggal . $month . $tahun . $no_urut . "</th>";
      echo "<td><h4> No Golongan : " . $no_golongan . "<br><h4> Tanggal Lahir : " . $tanggal_lahir . "<br><h4>No. Urut : " . $no_urut . "</h4></td>";
      echo "</tr>";
      echo "</table>";
    } elseif ($bulan == 3) {
      $bulan = "Maret";
      $tanggal_lahir = $tanggal . $bulan . $tahun;
      echo "<table class='tabelshow' border='0'><tr>";
      echo "<th><h2>DATA PEGAWAI</h2>" . $no_golongan . $tanggal . $month . $tahun . $no_urut . "</th>";
      echo "<td><h4> No Golongan : " . $no_golongan . "<br><h4> Tanggal Lahir : " . $tanggal_lahir . "<br><h4>No. Urut : " . $no_urut . "</h4></td>";
      echo "</tr>";
      echo "</table>";
    } elseif ($bulan == 4) {
      $bulan = "April";
      $tanggal_lahir = $tanggal . $bulan . $tahun;
      echo "<table class='tabelshow' border='0'><tr>";
      echo "<th><h2>DATA PEGAWAI</h2>" . $no_golongan . $tanggal . $month . $tahun . $no_urut . "</th>";
      echo "<td><h4> No Golongan : " . $no_golongan . "<br><h4> Tanggal Lahir : " . $tanggal_lahir . "<br><h4>No. Urut : " . $no_urut . "</h4></td>";
      echo "</tr>";
      echo "</table>";
      $tanggal_lahir = $tanggal . $bulan . $tahun;
      echo "<table class='tabelshow' border='0'><tr>";
      echo "<th><h2>DATA PEGAWAI</h2>" . $no_golongan . $tanggal . $month . $tahun . $no_urut . "</th>";
      echo "<td><h4> No Golongan : " . $no_golongan . "<br><h4> Tanggal Lahir : " . $tanggal_lahir . "<br><h4>No. Urut : " . $no_urut . "</h4></td>";
      echo "</tr>";
      echo "</table>";
    } elseif ($bulan == 5) {
      $bulan = "Mei";
      $tanggal_lahir = $tanggal . $bulan . $tahun;
      echo "<table class='tabelshow' border='0'><tr>";
      echo "<th><h2>DATA PEGAWAI</h2>" . $no_golongan . $tanggal . $month . $tahun . $no_urut . "</th>";
      echo "<td><h4> No Golongan : " . $no_golongan . "<br><h4> Tanggal Lahir : " . $tanggal_lahir . "<br><h4>No. Urut : " . $no_urut . "</h4></td>";
      echo "</tr>";
      echo "</table>";
    } elseif ($bulan == 6) {
      $bulan = "Juni";
      $tanggal_lahir = $tanggal . $bulan . $tahun;
      echo "<table class='tabelshow' border='0'><tr>";
      echo "<th><h2>DATA PEGAWAI</h2>" . $no_golongan . $tanggal . $month . $tahun . $no_urut . "</th>";
      echo "<td><h4> No Golongan : " . $no_golongan . "<br><h4> Tanggal Lahir : " . $tanggal_lahir . "<br><h4>No. Urut : " . $no_urut . "</h4></td>";
      echo "</tr>";
      echo "</table>";
    } elseif ($bulan == 7) {
      $bulan = "Juli";
      $tanggal_lahir = $tanggal . $bulan . $tahun;
      echo "<table class='tabelshow' border='0'><tr>";
      echo "<th><h2>DATA PEGAWAI</h2>" . $no_golongan . $tanggal . $month . $tahun . $no_urut . "</th>";
      echo "<td><h4> No Golongan : " . $no_golongan . "<br><h4> Tanggal Lahir : " . $tanggal_lahir . "<br><h4>No. Urut : " . $no_urut . "</h4></td>";
      echo "</tr>";
      echo "</table>";
    } elseif ($bulan == 8) {
      $bulan = "Agustus";
      $tanggal_lahir = $tanggal . $bulan . $tahun;
      echo "<table class='tabelshow' border='0'><tr>";
      echo "<th><h2>DATA PEGAWAI</h2>" . $no_golongan . $tanggal . $month . $tahun . $no_urut . "</th>";
      echo "<td><h4> No Golongan : " . $no_golongan . "<br><h4> Tanggal Lahir : " . $tanggal_lahir . "<br><h4>No. Urut : " . $no_urut . "</h4></td>";
      echo "</tr>";
      echo "</table>";
    } elseif ($bulan == 9) {
      $bulan = "September";
      $tanggal_lahir = $tanggal . $bulan . $tahun;
      echo "<table class='tabelshow' border='0'><tr>";
      echo "<th><h2>DATA PEGAWAI</h2>" . $no_golongan . $tanggal . $month . $tahun . $no_urut . "</th>";
      echo "<td><h4> No Golongan : " . $no_golongan . "<br><h4> Tanggal Lahir : " . $tanggal_lahir . "<br><h4>No. Urut : " . $no_urut . "</h4></td>";
      echo "</tr>";
      echo "</table>";
    } elseif ($bulan == 10) {
      $bulan = "Oktober";
      $tanggal_lahir = $tanggal . $bulan . $tahun;
      echo "<table class='tabelshow' border='0'><tr>";
      echo "<th><h2>DATA PEGAWAI</h2>" . $no_golongan . $tanggal . $month . $tahun . $no_urut . "</th>";
      echo "<td><h4> No Golongan : " . $no_golongan . "<br><h4> Tanggal Lahir : " . $tanggal_lahir . "<br><h4>No. Urut : " . $no_urut . "</h4></td>";
      echo "</tr>";
      echo "</table>";
    } elseif ($bulan == 11) {
      $bulan = "November";
      $tanggal_lahir = $tanggal . $bulan . $tahun;
      echo "<table class='tabelshow' border='0'><tr>";
      echo "<th><h2>DATA PEGAWAI</h2>" . $no_golongan . $tanggal . $month . $tahun . $no_urut . "</th>";
      echo "<td><h4> No Golongan : " . $no_golongan . "<br><h4> Tanggal Lahir : " . $tanggal_lahir . "<br><h4>No. Urut : " . $no_urut . "</h4></td>";
      echo "</tr>";
      echo "</table>";
    } elseif ($bulan == 12) {
      $bulan = "Desember";
      $tanggal_lahir = $tanggal . $bulan . $tahun;
      echo "<table class='tabelshow' border='0'><tr>";
      echo "<th><h2>DATA PEGAWAI</h2>" . $no_golongan . $tanggal . $month . $tahun . $no_urut . "</th>";
      echo "<td><h4> No Golongan : " . $no_golongan . "<br><h4> Tanggal Lahir : " . $tanggal_lahir . "<br><h4>No. Urut : " . $no_urut . "</h4></td>";
      echo "</tr>";
      echo "</table>";
    } else {
      echo "<table class='tabelshow' border='0'><tr>";
      echo "<th><h2>Mohon Inputkan Ulang Bulan Kelahiran Anda! <br><h4>(Bulan Kelahiran Tidak Valid.)</h4></h2></th>";
      echo "</tr>";
      echo "</table>";
    }
    // echo $no_golongan, $tanggal_lahir, $no_urut;
  }
  ?>
  
  <style type="text/css">
    /* Gaya umum */
    /* Gaya umum */
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
      background-color: #f0f0f0;
    }

    /* Gaya formulir */
    .tabelinput {
      display: flex;
      flex-direction: column;
      align-items: center;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      background: whitesmoke;
      box-shadow: 5px 10px 10px #ccc;
      border-radius: 5px;
      padding: 20px;
      width: 400px;
      max-width: 20%;
      margin-bottom: 20px;
    }

    input[type=text] {
      width: 100%;
      padding: 5px 15px;
      margin: 5px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    /* Gaya tabel */
    .tabelshow {
      display: inline-block;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      background-color: whitesmoke;
      color: #609966;
      border-radius: 5px;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 100%;
      max-width: 340px;
      text-align: left;
    }

    /* Gaya tombol submit */
    input[type=submit] {
      width: 100%;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #609966;
      background-color: white;
      padding: 5px 15px;
      margin: 5px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      transition: ease 1s;
    }

    input[type=submit]:hover {
      cursor: pointer;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #609966;
      color: white;
    }
  </style>
</body>

</html>