<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search for data</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        /* Change the color scheme */
        body {
            background-color: #ececec;
        }

        h1 {
            color: #333;
        }

        .container {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        th {
            background-color: #333;
            color: #fff;
        }

        input[type="text"] {
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #555;
        }

        input[type="submit"]:hover {
            background-color: #777;
        }
    </style>

<body>
    <?php
    $data = [
        [
            "nama" => "Alfarizy",
            "nis" => "87654321",
            "rombel" => "PPLG XI-12",
            "umur" => 16
        ],
        [
            "nama" => "Dapaa",
            "nis" => "67301232",
            "rombel" => "PPLG XI-3",
            "umur" => 17
        ],
        [
            "nama" => "Muhammad Alfarizy",
            "nis" => "12345678",
            "rombel" => "PPLG XI-1",
            "umur" => 17
        ],
        [
            "nama" => "Muhammad Dava",
            "nis" => "12209219",
            "rombel" => "PPLG XI-6",
            "umur" => 16
        ]
    ];
    ?>
</body>

<form action="" method="post">
    <table>
        <tr>
            <td>
                <input type="text" name="data" placeholder="Input Data" required>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="Search">
            </td>
        </tr>
    </table>
</form>

<?php
if (isset($_POST['submit'])) {
    $cari = $_POST['data'];

    $hasil = [];
    foreach ($data as $siswa) {
        if ((intval($cari) >= 17 && $siswa['umur'] >= 17) || (stripos($siswa['nama'], $cari) !== false)) {
            $hasil[] = $siswa;
        }
    }
    if (!empty($hasil) && !empty($cari)) {
        echo "<h2>Result :</h2>";
        foreach ($hasil as $hasil) {
            echo "Name: " . $hasil['nama'] . "<br>";
            echo "NIS: " . $hasil['nis'] . "<br>";
            echo "Rombel: " . $hasil['rombel'] . "<br>";
            echo "Age: " . $hasil['umur'] . "<br>";
            echo "<br>";
        }
    } else {
        echo "sorry, data not found.";
    }
}
?>

</html>