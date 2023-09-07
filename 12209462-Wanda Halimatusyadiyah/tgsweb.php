<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas</title>
    <link rel="stylesheet" href="style1.css">
</head>

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