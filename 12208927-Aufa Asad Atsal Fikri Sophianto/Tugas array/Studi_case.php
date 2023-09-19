<?php
$listmenu = [
    [
        "menu" => "Nasi Kebuli",
        "jenis" => "makanan",
        "harga" => 13000
    ],

    [
        "menu" => "Nasi goreng",
        "jenis" => "makanan",
        "harga" => 15000
    ],

    [
        "menu" => "Mie Tektek",
        "jenis" => "makanan",
        "harga" => 17000
    ],

    [
        "menu" => "Es jeruk",
        "jenis" => "minuman",
        "harga" => 5000
    ],

    [
        "menu" => "Teh Manis",
        "jenis" => "minuman",
        "harga" => 5000
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jualan</title>
    <style>
        /* Reset default margin and padding for all elements */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Apply a background color to the entire page */
body {
    background-color: #f5f5f5;
    font-family: Arial, sans-serif;
}

/* Style for the main container */
.menu {
    max-width: 800px;
    margin: 120px auto 30px;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}

/* Style for individual items */
.itemm, .itemmm {
    width: 48%; /* Set to 48% to fit two items in a row */
    min-height: 200px;
    background-color: #fff;
    border: 1px solid #ddd;
    margin: 10px;
    padding: 15px;
    box-sizing: border-box;
    display: inline-block;
    vertical-align: top;
    border-radius: 5px;
}

/* Style for item titles */
.itemm h2, .itemmm h2 {
    font-size: 18px;
    margin-bottom: 10px;
}

/* Style for the submit button */
.submit {
    width: 100%;
    padding: 10px;
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

/* Add hover effect for the submit button */
.submit:hover {
    background-color: #0056b3;
}

/* Style for headings */
h1, h2 {
    color: #333;
    margin-bottom: 10px;
}

/* Responsive design for smaller screens */
@media screen and (max-width: 768px) {
    .itemm, .itemmm {
        width: 100%;
    }
}
    </style>
</head>

<body>
    <center>


        <div class="Menu">
            <div class="itemm">
                <h1>Daftar Menu</h1>
                <br>
                <table>
                    <tr>
                        <td>
                            <ol>
                                <b>Makanan</b>
                                <li>Menu : Nasi Goreng <br> Harga : 15000 </li>
                                <li>Menu : Mie Goreng <br> Harga : 10000 </li>
                                <li>Menu : Kwetiaw <br> Harga : 15000 </li>
                            </ol>
                            <ol>
                                <b>Minuman</b>
                                <li>Menu : Es Jeruk <br> Harga : 5000 </li>
                                <li>Menu : Teh Manis <br> Harga : 5000 </li>
                            </ol>
                        </td>
                    </tr>
                </table>
            </div>

            <br>

            <div class="itemm">
                <form action="" method="post">
                    <table>
                        <tr>
                            <td>Pilih Makanan:</td>
                            <td><select name="Namamak" id="">
                                    <option hidden value="">Pilih Jenis Makanan</option>
                                    <?php
                                    foreach ($listmenu as $key => $menu) {
                                        if ($menu['jenis'] === 'makanan') {
                                            ?>
                                            <option value="<?= $key ?>"><?= $menu['menu'] ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Input Jumlah Makanan</td>
                            <td><input type="number" name="jummak" id=""></td>
                        </tr>
                        <tr>
                            <td>Pilih Minuman</td>
                            <td><select name="Namamin" id="">
                                    <option hidden value="">Pilih Jenis Minuman</option>
                                    <?php
                                    foreach ($listmenu as $key => $menu) {
                                        if ($menu['jenis'] === 'minuman') {
                                            ?>
                                            <option value="<?= $key ?>"><?= $menu['menu'] ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Input Jumlah Minuman</td>
                            <td><input type="number" name="jummin" id=""></td>
                        </tr>
                        <tr>
                            <td>
                                <input class="submit" type="submit" name="Beli" value="Beli">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>

<?php

if (isset($_POST['Beli'])) {
    $jenismakan = $_POST['Namamak'];
    $jenisminum = $_POST['Namamin'];
    $jummak = $_POST['jummak'];
    $jummin = $_POST['jummin'];

    $total_harga_makanan = 0;
    $total_harga_minuman = 0;

    if (!empty($jenismakan) && $jummak >= 0 && isset($listmenu[$jenismakan])) {
        $total_harga_makanan = $listmenu[$jenismakan]['harga'] * $jummak;
    }

    if (!empty($jenisminum) && $jummin >= 0 && isset($listmenu[$jenisminum])) {
        $total_harga_minuman = $listmenu[$jenisminum]['harga'] * $jummin;
    }

    $diskon = 0;
    $total_item = $jummak + $jummin;

    if ($total_item >= 5) {
        $diskon = 10; 
    } elseif ($total_item >= 3) {
        $diskon = 5;
    } else {
        $diskon = 0;
    }

    $diskon_amount_makanan = ($total_harga_makanan * $diskon) / 100;
    $total_harga_setelah_diskon_makanan = $total_harga_makanan - $diskon_amount_makanan;

    $diskon_amount_minuman = ($total_harga_minuman * $diskon) / 100;
    $total_harga_setelah_diskon_minuman = $total_harga_minuman - $diskon_amount_minuman;
    $total_pembayaran = $total_harga_setelah_diskon_makanan + $total_harga_setelah_diskon_minuman;
}
?>


<body>
    <center>
        <div class="Menu">
            <!-- ... -->
        </div>
        <br>
        <div class="itemm">
            <form action="" method="post">
            <?php
        if (isset($_POST['Beli'])) {
            if ($total_harga_makanan >= 0) {
                echo "<p>Makanan: {$listmenu[$jenismakan]['menu']} ($jummak)</p>";
                echo "<p>Harga Makanan: Rp. " . number_format($listmenu[$jenismakan]['harga'], 0, ',', '.') . " (disc: Rp. " . number_format($diskon_amount_makanan, 0, ',', '.') . ")</p>";
                echo "<p>Jumlah Harga Makanan: Rp. " . number_format($total_harga_setelah_diskon_makanan, 0, ',', '.') . "</p>";
            }

            if ($total_harga_minuman >= 0) {
                echo "<p>Minuman: {$listmenu[$jenisminum]['menu']} ($jummin)</p>";
                echo "<p>Harga Minuman: Rp. " . number_format($listmenu[$jenisminum]['harga'], 0, ',', '.') . " (disc: Rp. " . number_format($diskon_amount_minuman, 0, ',', '.') . ")</p>";
                echo "<p>Jumlah Harga Minuman: Rp. " . number_format($total_harga_setelah_diskon_minuman, 0, ',', '.') . "</p>";
            }

            echo "<p>Total Pembayaran: <b> Rp. " . number_format($total_pembayaran, 0, ',', '.') . " </b></p>";
        }
        ?>
            </form>
</div>
    </center>
</body>

</html>