<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Paduan Masyarakat</title>
  </head>
  <body>
    <style>
    header {
        display: flex;
        justify-content: flex-end;
    }

    nav {
        margin-top: 20px;
        padding : 7px 15px;
        float : right;
        text-decoration: none;
        border-radius: 15px;
        background-color: #F0B86E;
        color: black;
    }

    .baris {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 50px;
        max-width: 100%;
    }

    li{
        font-size: 18px;
    }

    .gambar {
        flex: 1;
    }

    .gambar img {
        max-width: 100%;
        border-radius: 15px;
    }

    .clas{
        float: left;
        color: black;
        font-size: 25px;
        margin: 20px;
    }

    .kolom {
        height: 120px;
        background-color: #F0B86E;
        margin: 3px;
        box-sizing: border-box;
        padding: 1px 50px;
        border-radius: 15px;
    }

    .baris2 {
        color: black;
        box-sizing: border-box;
        padding: 20px;
        margin: 20px;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
    }

    h1{
        font-size: 23px;
        text-align: center;
    }

    h4 {
        padding-top: -25px;
        font-size: 20px;
        text-align: center;
    }    

    h2 {
        text-align: center;
        font-size: 24px;
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    input[type="text"],
    input[type="number"],
    textarea {
        max-width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 3px;
    }

    input[type="submit"] {
        margin-top: 10px;
        width: 20%;
        padding: 10px;
        background-color: gray;
        color: white;
        border: none;
        border-radius: 10px;
        cursor: pointer;
    }

    .baris3 form {
        display: flex;
        flex-direction: column;
        background-color: #F0B86E;
        padding: 20px;
        border-radius: 15px;
    }

    .baris3 {
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        padding: 50px;
        border-radius: 15px;
    }

    .form {
        flex: 1;
        padding-right: 70px;
        margin-bottom: 15px;
        
    }

    .lap p {
        text-align: end; 
        color: black;
    }

    .lap {
        flex: 1;
        padding-left: 20px; 
        padding: 28px;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    }

    .baris4 {
        border: 1px solid black;
        max-width: 100%;
        margin-bottom: 10px;
    }

    .box {
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    .lap-img img {
        flex: 1;
    }

    .text {
        margin-right: 10px;
        max-width: 100%;
    }

    footer {
        text-align: center;
        color: black;
        background-color: #F0B86E;
        fill: solid;
        margin-top: 30px;
        width: 99%;
        padding: 1px;
    }

    @media (max-width: 900px) {
        .baris {
            flex-direction: column;
        }

        .baris2 {
            grid-template-columns: repeat(2, 1fr);
        }

        .box {
            flex-direction: column;
        }

    }

    @media (max-width: 600px) { 
        .baris2 {
            grid-template-columns: repeat(1, 1fr);
        }
        
        .baris3 {
            flex-direction: column;
        }

        header {
            justify-content: center;
        }

    }
    </style>
    <header>
      <nav>Administrator</nav>
    </header>
    <section class="baris">
      <div class="clas">
        <h1>Pengaduan Masyarakat</h1>
        <ol>
        <li >
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.</li>
        <li >
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur, debitis?.</li>
        <li>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit, Voluptate eligendi et atque <br> dolores veniam malores quasi error desecrunt ducimus delectus?.</li>
        <li>
            Lorem ipsum, dolor sit amet.</li>
    </ol>
      </div>

      <div class="gambar">
        <img src="gambar.png" alt="" />
      </div>
    </section>

    <section class="baris2">
      <div class="kolom">
        <h1 class="text">Jumlah Kecamatan</h1>
        <h4>15</h4>
      </div>
      <div class="kolom">
        <h1 class="text">Jumlah Desa</h1>
        <h4>42</h4>
      </div>
      <div class="kolom">
        <h1 class="text">Jumlah Penduduk</h1>
        <h4>12.000</h4>
      </div>
      <div class="kolom">
        <h1 class="text">Data Pertahun</h1>
        <h4>2023</h4>
      </div>
    </section>

    <section class="baris3">
      <div class="form">
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

      <div class="lap">
        <h2>Hasil Laporan</h2>
        <div class="baris4">
          <p>3 September 2023: Amelia Septiana</p>
          <div class="box">
            <div class="text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores quos 
                reiciendis libero sunt eveniet quisquam facilis quasi placeat caque rerum.</p>
            </div>

            <div class="lap-img">
              <img src="gambar1.jpeg" width="250" height="150" alt="Poto Laporan"/>
            </div>
            
          </div>
        </div>
        
        <div class="baris4">
          <p>3 September 2023: Amelia Septiana</p>
          <div class="box">
            <div class="text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores quos 
                reiciendis libero sunt eveniet quisquam facilis quasi placeat caque rerum.</p>
            </div>

            <div class="lap-img">
              <img src="gambar1.jpeg" width="250" height="150" alt="Poto Laporan"/>
            </div>

          </div>
        </div>
      </div>
    </section>

    <footer>
      <p>Copyright &copy; 2023 Amelia Septiana</p>
    </footer>

  </body>
</html>
