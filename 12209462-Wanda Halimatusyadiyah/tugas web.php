<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas</title>
</head>

<style>
    body {
        margin: 0;
        padding: 0;
    }

    .but {
        float: right;
        margin-right: 20px;
        text-decoration: none;
        background-color: #FFC436;
        color: #000;
        border-radius: 50px;
        margin-bottom: 20px;
        padding: 10px 20px;
        margin-top: 10px;
    }

    .but:hover {
        background: #ced4da;
    }

    .container {
        clear: both;
        margin: 0 auto;
    }

    .text h2 {
        margin-left: 15px;
    }

    .text ul li {
        font-size: 17px;
        margin: 10px;
        list-style-type: none;
    }

    .img {
        float: right;
        clear: both;
        margin-right: 20px;
        width: 50%;
    }

    img {
        width: 100%;
        margin-bottom: 50px;
    }

    .baris {
        display: inline-flex;
        justify-content: center;
        padding: 20px;
    }

    .col {
        margin: 400px 100px;
        margin-bottom: 100px;
        width: 304px;
        max-width: 100%;
        height: 120px;
        background-color: #FFC436;
        margin: 3px;
        color: #eee;
        font-size: 20px;
        box-sizing: border-box;
        padding: 10px;
        float: left;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    input[type=text],
    [type=number] {
        margin-top: 12px;
        margin-bottom: 10px;
        width: 500px;
        height: 25px;
    }

    textarea {
        margin-top: 12px;
        margin-bottom: 10px;
    }

    .form h1 {
        margin-top: 90px;
    }

    form {
        position: relative;
        margin-left: 20px;
        margin-top: 10px;
        background-color: #dee2e6;
        width: 500px;
        padding: 40px;
    }

    input[type=submit] {
        float: right;
        background-color: #FFC436;
        color: #fff;
        border-radius: 50px;
        text-decoration: none;
        overflow: hidden;
    }


    .kotak {
        float: right;
        margin-top: 10px;
        width: 600px;
        height: 200px;
        margin-right: 20px;
        border: 2px solid black;
    }

    .kotak b {
        float: right;
        margin-top: 30px;
        margin-right: 20px;
    }

    .kotak .txt {
        margin-left: 20px;
        margin-top: 45px;
    }

    .kotak img {
        margin-left: 410px;
        width: 180px;
        margin-top: -40px;
    }
    .kotak2 {
    float: right;
    margin-top: 40px;
    width: 600px;
    height: 200px;
    margin-right: 20px;
    justify-content: baseline;
    margin-left: 41px;
    border: 2px solid black;
}

    .kotak2 b {
        float: right;
        margin-top: 30px;
        margin-right: 20px;
    }

    .kotak2 .txt {
        margin-left: 20px;
        margin-top: 45px;
    }

    .kotak2 img {
        margin-left: 410px;
        width: 180px;
        margin-top: -40px;
    }

    footer {
        text-align: center;
        background-color: #FFC436;
        fill: solid;
        margin-top: 50px;
        width: 99%;
        color: #fff;
        padding: 5px;
    }

    iframe {
        margin-left: 640px;
        margin-bottom: -550px;
    }
</style>

<body>
    <a class="but" href="#">Administrator</a>

    <div class="container">
        <div class="text">
            <img class="img" src="https://wiggly-library-a46.notion.site/image/https%3A%2F%2Fs3-us-west-2.amazonaws.com%2Fsecure.notion-static.com%2Fe681035c-4b22-4a22-8c77-78bf5de66009%2FScreen_Shot_2023-02-02_at_10.13.21.png?table=block&id=1fca370a-0015-41e6-8c74-c049c7cf3dfb&spaceId=915c965e-4b46-4d9c-8500-23ab513e5f6b&width=2000&userId=&cache=v2">
            <h2>Pengaduan Masyarakat</h2>
            <ul>
                <li>
                    1. Jalan berlubang
                </li>
                <li>
                    2. Pengendara kebut-kebutan
                </li>
                <li>
                    3. Lampu jalan mati 
                </li>
                <li>
                    4. Lingkungan kotor
                </li>
            </ul>
            <section class="baris">
                <div class="col">Jumlah Kecamatan<br>15</div>
                <div class="col">Jumlah Desa <br>42</div>
                <div class="col">Jumlah Penduduk <br>12.000</div>
                <div class="col">Data per Tahun <br>2023</div>
            </section>
        </div>
        <div class="form">
            <h1>
                <center>Laporan Pengaduan</center>
            </h1>
            <div class="kotak">
                <b>07 feb 2007 : Wanda</b>
                <p class="txt">Jalan di rt 02 rw 02 desa ini masih saja berlubang, sehingga menyulitkan kendaraan melewat </p>
                <img src="berlubang.jpg" alt="">
            </div>
            <div class="kotak2">
                <b>07 feb 2007 : Wanda</b>
                <p class="txt">Jalan di rt 03 rw 05 desa ini masih saja berlubang, sehingga menyulitkan kendaraan melewat </p>
                <img src="berlubang.jpg" alt="">
            </div>

            
        </div>

    </div>
    <form action="" method="post">
        <label for="nik"><b> NIK :</b></label><br>
        <input type="text" name="nik" value=""><br>

        <label for="nama"><b>Nama Lengkap :</b></label><br>
        <input type="text" name="nama" value=""><br>

        <label for="notelp"><b>No Telp :</b></label><br>
        <input type="number" name="tlp"><br>

        <label for="pengaduan"><b>Pengaduan :</b></label><br>
        <textarea name="" id="" cols="66" rows="10"></textarea><br>

        <label for="gambar"><b>Upload Gambar Tekait :</b></label><br>
        <input type="file" name="gambar" id=""><br>
        <input type="submit" name="submit" value="Kirim Data">
    </form>
    </div>
    <footer>
        <p>Copyright &copy; 2023 Wanda</p>
    </footer>

</body>

</html>