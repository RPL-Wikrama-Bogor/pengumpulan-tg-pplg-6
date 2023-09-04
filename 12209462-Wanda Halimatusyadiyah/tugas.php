<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<style>
p.text2 {
    text-align: end;
    margin-top: -13rem;
    margin-right: 69px;
}

.imglub {
    margin-left: 60rem;
    margin-top: 1rem;
    width:231px;
}

p.text1 {
    text-align: inherit;
    margin-left: 37rem;
    margin-top: 2rem;
    height: 213px;
    border: solid 3px black;
}

footer {
    text-align: center;
    background-color: #FFC436;
    fill: solid;
    margin-top: 195px;
    width: 102%;
    color: #fff;
    padding: 5px;
}

</style>
<body>
<div>
    <br>
        <div class="text">
        <button class="my-button">Administrator</button>
    <h2>Pengaduan Masyarakat</h2>
    <p>1. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
    <p>2. Lorem ipsum dolor sit amet. </p>
    <p>3. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo. </p>
    <p>4. Lorem ipsum dolor sit amet.</p>
    <img src="https://wiggly-library-a46.notion.site/image/https%3A%2F%2Fs3-us-west-2.amazonaws.com%2Fsecure.notion-static.com%2Fe681035c-4b22-4a22-8c77-78bf5de66009%2FScreen_Shot_2023-02-02_at_10.13.21.png?table=block&id=1fca370a-0015-41e6-8c74-c049c7cf3dfb&spaceId=915c965e-4b46-4d9c-8500-23ab513e5f6b&width=2000&userId=&cache=v2" width="550" height="300">
    <section class="baris">
	   <div class="kolom kolom1"><center>jumlah Kecamatan <p><center>1</center></p> </div>
	   <div class="kolom kolom1"><center>jumlah Desa <p><center>42</center></p> </div>
       <div class="kolom kolom1"><center>jumlah Penduduk <p><center>12.000</center></p> </div>
       <div class="kolom kolom1"><center>Data Pertahun <p><center>2023</center></p> </div>
  </section>
  <br>
</div>
  <div class="container">
    <h3>Buat Pengaduan</h3>
    <label for="fname">NIK</label><br>
    <input type="number" id="fname" name="firstname" placeholder="NIK"><br>

    <label for="lname">Nama Lengkap</label>
    <input type="text" id="lname" name="lastname" placeholder="Nama Lengkap">

    <label for="country">No Telp</label><br>
    <input type="number" id="telp" name="telp" placeholder="No Telp"> <br>

    <label for="subject">Pengaduan</label>
    <textarea id="subject" name="subject" placeholder="Pengaduan" style="height:200px"></textarea>

    <label for="subject">Upload Gambar Terkait</label>
    <input type="file">

    <input type="submit" value="kirim">
    <br>
  </div>
  <div class="form">
            <h3 class="akhir">
                Laporan Pengaduan
            </h3>
            <!-- <div class="kotak">
                <b>27 Agt 2023 : Wanda </b>
                <p class="txt">Jalan di rt 02 rw 02 desa ini masih saja berlubang, sehingga menyulitkan kendaraan melewat serta menjadi genangan air</p>
                <img src="berlubang.jpg" alt="">
            </div>
            <div class="kotak2">
                <b>27 Agt 2023 : Wanda </b>
                <p class="txt">Jalan di rt 02 rw 02 desa ini masih saja berlubang, sehingga menyulitkan kendaraan melewat serta menjadi genangan air</p>
                <img src="berlubang.jpg" alt="">
            </div> -->

            <div class="kotak">
              <p class="text1"> <br>
              Lorem ipsum dolor sit amet, consectetur 
              </p>
              <p class="text2"> 07 februari 2007 : Wanda </p>
              <img class="imglub" src="berlubang.jpg" alt="" >
           

            </div>

            <div class="kotak">
              <p class="text1"> <br>
              Lorem ipsum dolor sit amet, consectetur 
              </p>
              <p class="text2"> 07 februari 2007 : Wanda </p>
              <!-- <img class="imglub" src="berlubang.jpg" alt="" > -->
           

            </div>
            <img class="imglub" src="berlubang.jpg" alt="" >

            <footer>
        <p>Copyright &copy; Wnda_hlmt27</p>
    </footer>


  
</body>
</html>