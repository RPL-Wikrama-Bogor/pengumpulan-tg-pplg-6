<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <a class="but" href="#">Administrator</a>

    <div class="container">
        <div class="text">
            <img class="img" src="../img/pl.jpg">
            <h2>Pengaduan Masyarakat</h2>
            <ul>
                <li>
                    1. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae dolor eveniet enim sit
                    nihil.
                </li>
                <li>
                    2. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit, excepturi? Sint omnis
                    voluptates facere nostrum!
                </li>
                <li>
                    3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique hic in sunt.
                </li>
                <li>
                    4. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </li>
            </ul>
        </div>
        <section class="baris">
            <div class="col">Jumlah Kecamatan<br>15</div>
            <div class="col">Jumlah Desa <br>42</div>
            <div class="col">Jumlah Penduduk <br>12.000</div>
            <div class="col">Data per Tahun <br>2023</div>
        </section>
        <div class="content">
            <div class="form">
                <h1>
                    <center>Laporan Pengaduan</center>
                </h1>
                <div class="kotak">
                    <b>23 Juni 2023 : Abiyu Rafi</b>
                    <p class="txt">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum sed iste provident!
                    </p>
                    <img src="../img/berlubang.jpg" alt="">
                </div>
                <div class="kotak2">
                    <b>23 Juni 2023 : Abiyu Rafi</b>
                    <p class="txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora hic voluptatem
                        unde!r</p>
                    <img src="../img/berlubang.jpg" alt="">
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
            <p>Copyright &copy; 2023 Abiyu Rafi</p>
        </footer>

</body>

</html>