<!DOCTYPE html>
<html>
<head>
    <title>Pemesanan Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h3 {
            color: #333;
            text-align: center;
        }

       
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 600px;
            margin: 20px 0;
            margin-right: auto;
            margin-left: auto;
        }

        table, th, td {
            border: 1px solid #333;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }


        .order-form {
            background-color: #fff;
            padding: 20px;
            max-width: 400px;
            margin: 0 auto;
            border: 1px solid #ddd;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        label {
            font-weight: bold;
        }

        select, input[type="number"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <h3>Daftar Menu</h3>
    <div class="menu-container">
    <table>
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Tipe</th>
        </tr>
        <?php
        // Daftar menu
        $menu = [
            [
                "nama" => "Nasi Goreng",
                "harga" => 15000,
                "tipe" => "makanan",
            ],
            [
                "nama" => "Es Teh",
                "harga" => 5000,
                "tipe" => "minuman",
            ],
            [
                "nama" => "Mie Ayam",
                "harga" => 10000,
                "tipe" => "makanan",
            ],
            [
                "nama" => "Jus Jeruk",
                "harga" => 5000,
                "tipe" => "minuman",
            ],
            [
                "nama" => "Kwetiau",
                "harga" => 10000,
                "tipe" => "makanan",
            ],
            // Tambahkan menu lainnya di sini
        ];
        ?>

        <?php foreach ($menu as $item): ?>
        <div class="menu-item">
        <tr>
            <td><?php echo $item["nama"]; ?></td>
            <td>Rp <?php echo number_format($item["harga"], 2); ?></td>
            <td><?php echo $item["tipe"]; ?></td>
        </tr>
        </div>
        <?php endforeach; ?>
    </table>

    <h3>Pesan Menu</h3>
    <div class="order-form">
    <form method="post">
        <label for="nama_makanan">Pilih makanan :</label>
        <select name="nama_makanan" id="nama_makanan">
            <option hidden>----Pilih-----</option>
            <?php foreach ($menu as $item): ?>
                <?php if ($item["tipe"] === "makanan"): ?>
                    <option value="<?php echo $item["nama"]; ?>"><?php echo $item["nama"]; ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="jumlah_makanan">Jumlah Pembelian makanan :</label>
        <input type="number" name="jumlah_makanan" id="jumlah_makanan" min="0">
        <br>

        <label for="nama_minuman">Pilih Minuman :</label>
        <select name="nama_minuman" id="nama_minuman">
            <option hidden>----Pilih-----</option>
            <?php foreach ($menu as $item): ?>
                <?php if ($item["tipe"] === "minuman"): ?>
                    <option value="<?php echo $item["nama"]; ?>"><?php echo $item["nama"]; ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="jumlah_minuman">Jumlah Pembelian Minuman :</label>
        <input type="number" name="jumlah_minuman" id="jumlah_minuman" min="0">
        <br>

        <input type="submit" value="Pesan">
    </form>
    </div>

    <?php
    // Inisialisasi variabel pembelian dan diskon
    $totalPembelianMakanan = 0;
    $totalPembelianMinuman = 0;
    $diskonMakanan = 0;
    $diskonMinuman = 0;

    // Cek apakah form sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $namaMakanan = $_POST["nama_makanan"];
        $jumlahMakanan = intval($_POST["jumlah_makanan"]);
        $namaMinuman = $_POST["nama_minuman"];
        $jumlahMinuman = intval($_POST["jumlah_minuman"]);

        // Hitung total pembelian makanan
        foreach ($menu as $menuitem) {
            if ($menuitem["nama"] === $namaMakanan) {
                $totalPembelianMakanan = $menuitem["harga"] * $jumlahMakanan;
                // Diskon 5% jika lebih dari 3 item
                if ($jumlahMakanan >= 3) {
                    $diskonMakanan = 0.05;
                }
                // Diskon 10% jika lebih dari 5 item
                if ($jumlahMakanan >= 5) {
                    $diskonMakanan = 0.10;
                }
            }
        }

        // Hitung total pembelian minuman
        foreach ($menu as $menuitem) {
            if ($menuitem["nama"] === $namaMinuman) {
                $totalPembelianMinuman = $menuitem["harga"] * $jumlahMinuman;
                // Diskon 5% jika lebih dari 3 item
                if ($jumlahMinuman >= 3) {
                    $diskonMinuman = 0.05;
                }
                // Diskon 10% jika lebih dari 5 item
                if ($jumlahMinuman >= 5) {
                    $diskonMinuman = 0.10;
                }
            }
        }
    }

    // Hitung total pembayaran
    $totalPembayaran = ($totalPembelianMakanan - ($totalPembelianMakanan * $diskonMakanan)) + ($totalPembelianMinuman - ($totalPembelianMinuman * $diskonMinuman));

    // Hitung total setelah diskon
    $totalSetelahDiskon = $totalPembayaran - ($totalPembayaran * ($diskonMakanan + $diskonMinuman));
    ?>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    <h3>Bukti Pembayaran</h3>
    <table>
        <?php if ($jumlahMakanan > 0): ?>
        <tr>
            <td>Nama Makanan :</td>
            <td><?php echo $namaMakanan  . " ($jumlahMakanan)"; ?></td>
        </tr>
        <tr>
            <td>Harga Makanan :</td>
            <td>Rp <?php echo number_format($totalPembelianMakanan, 2); ?> (Diskon <?php echo ($diskonMakanan * 100); ?>%)</td>
        </tr>
        <tr>
            <td>Jumlah Harga Makanan :</td>
            <td>Rp <?php echo number_format($totalPembelianMakanan - ($totalPembelianMakanan * $diskonMakanan), 2); ?></td>
        </tr>
        <?php endif; ?>

        <?php if ($jumlahMinuman > 0): ?>
        <tr>
            <td>Nama Minuman :</td>
            <td><?php echo $namaMinuman . " ($jumlahMinuman)"; ?></td>
        </tr>
        <tr>
            <td>Harga Minuman :</td>
            <td>Rp <?php echo number_format($totalPembelianMinuman, 2); ?> (Diskon <?php echo ($diskonMinuman * 100); ?>%)</td>
        </tr>
        <tr>
            <td>Jumlah Harga Minuman :</td>
            <td>Rp <?php echo number_format($totalPembelianMinuman - ($totalPembelianMinuman * $diskonMinuman), 2); ?></td>
        </tr>
        <?php endif; ?>

        <tr>
            <td>Total Pembayaran:</td>
            <td>Rp <?php echo number_format($totalPembayaran, 2); ?></td>
        </tr>
    </table>
    <?php endif; ?>
</body>
</html>
