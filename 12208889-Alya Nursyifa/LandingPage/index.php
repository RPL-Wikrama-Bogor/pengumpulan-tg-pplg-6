<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Paduan Masyarakat</title>
    <link rel="website icon" type="png" href="img/iconn.svg">
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
      <nav>Administrator</nav>
    </header>

    <section class="baris">
      <div class="awal">
        <h1>Pengaduan Masyarakat</h1>
        <ol>
          <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</li>
          <li>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Aspernatur, debitis?.
          </li>
          <li>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit, Voluptate
            eligendi et atque <br />
            dolores veniam malores quasi error desecrunt ducimus delectus?.
          </li>
          <li>Lorem ipsum, dolor sit amet.</li>
        </ol>
      </div>

      <div class="baris-img">
        <img src="img/tugas.png" alt="" />
      </div>
    </section>

    <section class="baris2">
      <div class="card">
        <h1 class="text">Jumlah Kecamatan</h1>
        <h4>15</h4>
      </div>
      <div class="card">
        <h1 class="text">Jumlah Desa</h1>
        <h4>42</h4>
      </div>
      <div class="card">
        <h1 class="text">Jumlah Penduduk</h1>
        <h4>12.000</h4>
      </div>
      <div class="card">
        <h1 class="text">Data Pertahun</h1>
        <h4>2023</h4>
      </div>
    </section>

    <section class="laporan-section">
      <div class="form-section">
        <form action="">
          <h2>Buat Pengaduan</h2>
          <label for="nik">NIK :</label>
          <input type="number" id="nik" name="nik" />

          <label for="nama">Nama Lengkap :</label>
          <input type="text" id="nama" name="nama" />

          <label for="noTelp">No Telp :</label>
          <input type="text" id="noTelp" name="noTelp" />

          <label for="pengaduan">Pengaduan :</label>
          <textarea id="pengaduan" name="pengaduan" cols="30" rows="10"></textarea>

          <label for="gambar">Upload Gambar Terkait :</label>
          <input type="file" id="gambar" name="gambar" />

          <input type="submit" value="Kirim"></input>
        </form>
      </div>

      <div class="laporan">
        <h2>Laporan Pengaduan</h2>
        <div class="konten">
          <p>2 September 2023: Alya Nursyifa</p>
          <div class="box-laporan">
            <div class="text">
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum
                  libero omnis voluptates, repellat neque et perferendis officiis,
                  molestias nisi quo dolore debitis facilis, officia sint! Dolore
                  dolor quae ratione dolorem?
                </p>
            </div>

            <div class="laporan-img">
              <img src="img/jalan.jpg" width="250" height="150" alt="Poto Laporan"/>
            </div>
            
          </div>
        </div>
        
        <div class="konten">
          <p>2 September 2023: Alya Nursyifa</p>
          <div class="box-laporan">
            <div class="text">
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum
                  libero omnis voluptates, repellat neque et perferendis officiis,
                  molestias nisi quo dolore debitis facilis, officia sint! Dolore
                  dolor quae ratione dolorem?
                </p>
            </div>

            <div class="laporan-img">
              <img src="img/jalan.jpg" width="250" height="150" alt="Poto Laporan"/>
            </div>

          </div>
        </div>
      </div>
    </section>

    <footer>
      <p>Copyright &copy; 2023 Alya Nursyifa;</p>
    </footer>

  </body>
</html>
