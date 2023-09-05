<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: white;
        }
        .nav {
            float : right;
            text-decoration: none;
            border-radius: 15px;
            background-color:  #F0B86E;
            color: white;
        }
        
        .baris {
            padding: 50px;
        }

        li{
            font-size: 15px;
        }
        .clas{
            float: left;
            color: black;
            font-size: 25px;
            margin: 20px;
        }

        img {
            width: 900px;
            max-width: 600px;
            float: right;
            border-radius: 15px;
        }
        .kolom{             
            
            height: 120px;
            background-color:  #F0B86E;
            margin: 3px;
            box-sizing: border-box;
            padding: 1px 50px;
            border-radius: 20px;
        }
        .baris2 {
            color: white;
            box-sizing: border-box;
            padding: 20px;
            clear: right;
            margin: 20px;
        }
        .kolom1, .kolom2, .kolom3, .kolom4 {
            float: left;
            width: 24%;
            text-align: center;
        }
        h4 {
            padding-top: -25px;
        }

        .baris3{
            background-color:  #F0B86E;
            width: 350px;
            height: 440px;
            margin: 150px 2px 25px 45px;
            border-radius: 25px;
            outline: auto;
            margin-right: 20px;
            
        }
        .nama {
            text-align: center;
            padding: 10px 2px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            color: white;
        }
        .submit {
            padding: 2px 25px;
            border-radius: 10px;
            float: right; 
            background-color:  #F0B86E;
        }
        .submit:hover {
            background-color: #F0B86E;
        }
        .sub {
            padding: 2px 10px;
        }
        .input {
            padding: 10px;
        }
        .lap {
            margin: 10px 450px;
            color: black;
            text-align: center;
            margin-top: -35%;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        .baris4 {
            outline: auto;
            width: 750px;
            height: 150px;
            margin: 70px ; 
            border-radius: 15px;
            float: right;
            margin-top: -380px;
        }
        .baris5 {
            outline: auto;
            width: 750px;
            height: 150px;
            margin: 70px; 
            border-radius: 15px;
            float: right;
            margin-top: -200px;
        }
        .tang {
            margin: 10px;
            color: black;
            float: right;
            
        }
        p{
            margin: 25px;
            margin-top: 55px;
        }

        p img{
            width: 180px;
            height: 100px;
            margin-top: -35px;
        }
        
    </style>
</head>
<body>
    <button class="nav">Administrator</button>
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
    <img src="gambar.png" alt="">
    </div>
    </section>

    <section class="baris2">
        <div class="kolom kolom1">
            <h1 class="text">Jumlah Kecamatan</h1>
            <h4>15</h4>
        </div>
        <div class="kolom kolom2">
            <h1 class="text">Jumlah Desa</h1>
            <h4>42</h4>
        </div>
        <div class="kolom kolom3">
            <h1 class="text">Jumlah Penduduk</h1>
            <h4>12.000</h4>
        </div>
        <div class="kolom kolom4">
            <h1 class="text">Data Pertahun</h1>
            <h4> 2023</h4>
        </div>
    </section>

    <section class="baris3">
        <div class="nama">
            <h2> Buat Pengaduan</h2>
        </div>
        <div class="input">
            <span class="detail">NIK</span><br>
            <input type="text" placeholder="Masukan NIS" size="25">
        </div>
            <div class="input">
                <span class="detail">Nama Lengkap</span><br>
                <input type="text" placeholder="Masukan nama" size="25">
            </div>
            <div class="input">
                <span class="detail">No telp</span><br>
                <input type="text" placeholder="Masukan no telp" size="25">
            </div>
            <div class="input">
                <span class="detail">Pengaduan</span><Br>
                <textarea type="text" placeholder="Masukan Pengaduan"></textarea>
            </div>
            <div class="input">
                <span class="detail">Upload Gambar Terkait:</span><Br>
                <input type="file" placeholder="Choose file">
            </div>
            <div class="sub">
               <button class="submit">Kirim</button>
            </div>
    </section>
   
        <div class="lap">
            <h2>Hasil Laporan</h2>
        </div>

        <section class="baris4">
            <div class="tang" >3 September 2023 : Amelia Septiana </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores quos <br>reiciendis libero sunt eveniet quisquam facilis quasi placeat caque rerum.
            <img src="gambar1.jpeg" alt=""> </p>
        </section>

        <section class="baris5">
            <div class="tang" >3 September 2023 : Amelia Septiana </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores quos <br>reiciendis libero sunt eveniet quisquam facilis quasi placeat caque rerum.
            <img src="gambar1.jpeg" alt=""></p>
        </section>

        <div style="margin-top: 450px; text-align: center; background-color:  #F0B86E;">
        Copyright © 2023;
    </div>
</body>
</html>

