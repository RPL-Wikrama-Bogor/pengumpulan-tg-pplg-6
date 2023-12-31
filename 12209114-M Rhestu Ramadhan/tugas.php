<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pengaduan Masyarakat</title>
  <style>
    body {
      margin: 30px;
    }

    button {
      float: right;
      background-color: orange;
      color: black;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 10px;
      cursor: pointer;
    }

    .konten {
      display: flex;
      margin: 35px;
    }

    .text {
      flex: 1;
      font-size: 15px;
      padding: 15px;
    }

    img {
      float: left;
      width: 650px;
      max-width: 100%;
      border-radius: 10px;
    }

    .kolomm {
      display: flex;
      box-sizing: border-box;
      padding: 10px;
    }

    .kolom {
      flex: 1;
      margin: 3px;
      padding: 30px;
      background-color: orange;
      text-align: center;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 1rem;
      border-radius: 10px;
    }
    .kotak-persegi-panjang {
      background-color: #f2f2f2;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 10px;
      box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);
      display: flex;
      margin-bottom: 10px;
    }

    .gambar {
      flex: 1;
      padding: 10px;
    }

    .gambar img {
      max-width: 100%;
      border-radius: 10px;
      width: 100%;
    }

    .rincian {
      flex: 2;
      padding: 10px;
      background-color: #f2f2f2;
      border: 1px solid #ddd;
      border-radius: 10px;
      box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);
    }

    .rincian p {
      margin: 0;
      padding: 10px;
    }


    footer {
      background-color: rgb(249, 193, 40);
      text-align: center;
      height: 23px;
      padding-top: 7px;
    }

    @media screen and (max-width: 1000px) {
      body {
        margin: 15px;
      }

      .konten {
        flex-direction: column;
        margin: 15px;
      }

      .footer {
        margin-top: 40rem;
      }

      img {
        width: 100%;
        border-radius: 0;
      }

      .kolomm {
        flex-direction: column;
      }

      .kolom {
        margin: 10px;
        padding: 15px;
      }

      .formm {
        flex-direction: column;
      }

      .form,
      .laporan {
        flex: auto;
        margin: 10px;
      }

      .form textarea {
        width: 225px;
      }

      footer {
        display: none;
      }
    }
  </style>
</head>

<body>
  <a href="login.php  "><button>Administrasi</button></a>
  <br><br><br>
  <section class="konten">
    <div class="text">
      <h1>Pengaduan Masyarakat</h1>
      <ol>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias modi nemo illum beate omnis fugit</li>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo sapiente, soluta aliquam esse quasi aut culpa
          voluptates quo, impedit, voluptatum numquam voluptatem? Totam at quas cumque. Ea laborum quibusdam cupiditate!
        </li>
        <li>Lorem ipsum dolor sit amet</li>
      </ol>
    </div>
    <img src="referensi.png">
  </section>
  <section class="kolomm">
    <div class="kolom">Jumlah Kecamatan 15</div>
    <div class="kolom">Jumlah Desa 42</div>
    <div class="kolom">Jumlah Penduduk 12.000</div>
    <div class="kolom">Data perTahun 2023</div>
  </section>
  <br><br>
  <section class="formm" style="height: 100vh; display: flex; margin: 20px;">
    <div class="form" style="flex: 1;  background-color: #f2f2f2; padding: 20px;">
      <form action="" textare>
        <h3>Hasil Pengaduan</h3>
        <label for="">Nik : </label>
        <br>
        <textarea name="" id="" cols="55" rows="0"></textarea>
        <br>
        <label for="">Nama Lengkap : </label>
        <br>
        <textarea name="" id="" cols="55" rows="0"></textarea>
        <br>
        <label for="">No telp : </label>
        <br>
        <textarea name="" id="" cols="55" rows="0"></textarea>
        <br>
        <label for="">Pengaduan : </label>
        <br>
        <textarea name="" id="" cols="55" rows="10"></textarea>
        <br><br>
        <label for="">Upload Gambar Terkait : </label>
        <br><br>
        <input type="file">
        <br><br>
        <button class="buttonpengaduan">Kirim</button>
      </form>
    </div>
    <div class="laporan" style="flex: 1; padding: 20px;">
      <h3>Laporan</h3>
      <div class="kotak-persegi-panjang">
        <div class="rincian">
          <p>Restu</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Dolres quos reiciendis libero sunt eveniet quisquam facilis quasi placcat eaque rerum.</p>
        </div>
        <div class="gambar">
          <img src="blk.jpg">
        </div>
      </div>
      <div class="kotak-persegi-panjang">
        <div class="rincian">
          <p>Restu</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget justo a mauris convallis lacinia nec
            sed elit.</p>
        </div>
        <div class="gambar">
          <img src="r.JPG">
        </div>
      </div>
    </div>
  </section>
 

</body>

</html>