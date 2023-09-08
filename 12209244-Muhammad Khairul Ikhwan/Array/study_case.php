<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <style>
    
        body {
            background-color: gray;
            font-family: 'Raleway', sans-serif;
        }

        table {
            max-width: 50%;
            border-collapse: collapse;
            border: 1px solid #dddddd;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .daftar {
            margin-bottom: 50px;
        }

        hr {
            margin-bottom: 50px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="daftar">
        <center>
            <h2 style="margin: 60px 0px 50px 0px;">Harga Menu Bakso</h2>
            <table>
                <tr>
                    <th>Bakso</th>
                    <td>Rp. 15.000</td>
                </tr>
                <tr>
                    <th>Mie Ayam</th>
                    <td>Rp. 15.000</td>
                </tr>
                <tr>
                    <th>Mie Ayam Bakso</th>
                    <td>Rp. 20.000</td>
                </tr>
                <tr>
                    <th>Es Jeruk</th>
                    <td>Rp. 5.000</td>
                </tr>
                <tr>
                    <th>Es Teh Manis</th>
                    <td>Rp. 5.000</td>
                </tr>
            </table>
        </center>
    </div>

    <hr>

    <center>
        <form>
            <table>
                <tr>
                    <td>Makanan</td>
                    <td>
                        <select name="makan" required>
                            <option hidden>--Pilih Makan--</option>
                            <option value="Bakso">Bakso</option>
                            <option value="Mie Ayam">Mie Ayam</option>
                            <option value="Mie Ayam Bakso">Mie Ayam Bakso</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Makanan</td>
                    <td><input type="number" name="jumlMkn" required></td>
                </tr>
                <tr>
                    <td>Minuman</td>
                    <td>
                        <select name="minum" required>
                            <option hidden>--Pilih Minuman--</option>
                            <option value="Es Jeruk">Es Jeruk</option>
                            <option value="Es Teh Manis">Es Teh Manis</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Minuman</td>
                    <td><input type="number" name="jumlMin" required></td>
                </tr>
                <tr>
                    <td>Pesan</td>
                    <td><input type="button" name="submit" value="Pesan" onclick="hitungTotal()"></td>
                </tr>
            </table>
        </form>
    </center>

    <hr>

    <center>
        <h2 id="buktiPembelian" style="display: none;">Bukti Pembelian</h2>
        <table border="1" style="margin-bottom: 50px; display: none;" id="tabelBukti">
            <tr>
                <th>Menu Makanan</th>
                <th>Jumlah Makanan</th>
                <th>Total Harga Makanan</th>
                <th>Setelah Diskon</th>
            </tr>
            <tr id="menuMakananRow" style="display: none;">
                <td id="menuMakanan"></td>
                <td id="jumlahMakanan"></td>
                <td id="totalMakanan"></td>
                <td id="setelahDiskonMakanan"></td>
            </tr>
            <tr>
                <th>Menu Minuman</th>
                <th>Jumlah Minuman</th>
                <th>Total Harga Minuman</th>
                <th>Setelah Diskon</th>
                <th>Total Bayar</th>
            </tr>
            <tr id="menuMinumanRow" style="display: none;">
                <td id="menuMinuman"></td>
                <td id="jumlahMinuman"></td>
                <td id="totalMinuman"></td>
                <td id="setelahDiskonMinuman"></td>
                <td id="totalBayar"></td>
            </tr>
        </table>
    </center>

    <script>
        function hitungTotal() {
            var makanan = document.querySelector("select[name='makan']").value;
            var jumlahMakanan = parseInt(document.querySelector("input[name='jumlMkn']").value);
            var minuman = document.querySelector("select[name='minum']").value;
            var jumlahMinuman = parseInt(document.querySelector("input[name='jumlMin']").value);

            var hargaMakanan = 0;
            var hargaMinuman = 0;

            switch (makanan) {
                case "Bakso":
                    hargaMakanan = 15000;
                    break;
                case "Mie Ayam":
                    hargaMakanan = 15000;
                    break;
                case "Mie Ayam Bakso":
                    hargaMakanan = 20000;
                    break;
            }

            switch (minuman) {
                case "Es Jeruk":
                    hargaMinuman = 5000;
                    break;
                case "Es Teh Manis":
                    hargaMinuman = 5000;
                    break;
            }

            var totalMakanan = hargaMakanan * jumlahMakanan;
            var totalMinuman = hargaMinuman * jumlahMinuman;

            var diskonMakanan = 0;
            var diskonMinuman = 0;

            if (jumlahMakanan >= 3) {
                diskonMakanan = hargaMakanan * 0.05;
            }
            if (jumlahMakanan >= 5) {
                diskonMakanan = hargaMakanan * 0.10;
            }

            if (jumlahMinuman >= 3) {
                diskonMinuman = hargaMinuman * 0.05;
            }
            if (jumlahMinuman >= 5) {
                diskonMinuman = hargaMinuman * 0.10;
            }

            var setelahDiskonMakanan = totalMakanan - diskonMakanan;
            var setelahDiskonMinuman = totalMinuman - diskonMinuman;
            var totalBayar = setelahDiskonMakanan + setelahDiskonMinuman;

            document.getElementById("menuMakananRow").style.display = "table-row";
            document.getElementById("menuMakanan").innerHTML = makanan;
            document.getElementById("jumlahMakanan").innerHTML = jumlahMakanan;
            document.getElementById("totalMakanan").innerHTML = "Rp. " + totalMakanan + " (Diskon: Rp. " + diskonMakanan + ")";
            document.getElementById("setelahDiskonMakanan").innerHTML = "Rp. " + setelahDiskonMakanan;

            document.getElementById("menuMinumanRow").style.display = "table-row";
            document.getElementById("menuMinuman").innerHTML = minuman;
            document.getElementById("jumlahMinuman").innerHTML = jumlahMinuman;
            document.getElementById("totalMinuman").innerHTML = "Rp. " + totalMinuman + " (Diskon: Rp. " + diskonMinuman + ")";
            document.getElementById("setelahDiskonMinuman").innerHTML = "Rp. " + setelahDiskonMinuman;
            document.getElementById("totalBayar").innerHTML = "Rp. " + totalBayar;

            document.getElementById("buktiPembelian").style.display = "block";
            document.getElementById("tabelBukti").style.display = "block";
        }
    </script>
</body>
</html>