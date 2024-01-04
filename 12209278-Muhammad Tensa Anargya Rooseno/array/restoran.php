<!DOCTYPE html>
<html>
<head>
    <title>Menu Restoran</title>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            background-color: #333;
            color: #fff;
            padding: 30px;
            margin: 10px;
            border-radius: 15px;
        }

        h2 {
            margin-top: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        input[type="number"] {
            width: 40px;
        }

        input[type="submit"] {
            display: block;
            margin-top: 20px;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        h3 {
            margin-top: 20px;
            text-align: center;
        }

        .receipt {
            background-color: #fff;
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .receipt h3 {
            text-align: left;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }

        .receipt-item {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Menu Restoran</h1>

    <?php
    $food_menu = array(
        "Salad" => 15000, // Salad - Rp. 15,000
        "Sop" => 20000,   // Sop - Rp. 20,000
        "Pizza" => 100000, // Pizza - Rp. 100,000
        "Burger" => 89900  // Burger - Rp. 89,900
    );

    $drink_menu = array(
        "Soda" => 9900,  // Soda - Rp. 9,900
        "Air" => 5900    // Air - Rp. 5,900
    );

    $order = array();

    if (isset($_POST['order'])) {
        foreach (array_merge($food_menu, $drink_menu) as $item => $price) {
            if (isset($_POST[$item])) {
                $quantity = intval($_POST[$item]);
                if ($quantity > 0) {
                    $order[$item] = $quantity;
                }
            }
        }
        $total_cost = 0;
        foreach ($order as $item => $quantity) {
            $total_cost += ($food_menu[$item] ?? $drink_menu[$item]) * $quantity;
        }

        $discount = 0;
        if (count($order) > 3) {
            $discount = $total_cost * 0.03; // 3% discount jika lebih dari 3 item
        }
        if (count($order) > 5) {
            $discount = $total_cost * 0.05; // 5% discount jika lebih dari 5 item
        }

        $final_total_cost = $total_cost - $discount;

        // Display receipt
        echo "<div class='receipt'>";
        echo "<h3>Struk</h3>";
        foreach ($order as $item => $quantity) {
            echo "<div class='receipt-item'>";
            echo "$item (Jumlah: $quantity) - Rp. " . number_format(($food_menu[$item] ?? $drink_menu[$item]) * $quantity, 0, ',', '.');
            echo "</div>";
        }
        echo "<hr>";
        echo "<div class='receipt-item'>";
        echo "Total Harga: Rp. " . number_format($total_cost, 0, ',', '.');
        echo "</div>";

        if ($discount > 0) {
            echo "<div class='receipt-item'>";
            echo "Diskon: Rp. " . number_format($discount, 0, ',', '.');
            echo "</div>";
        }

        echo "<div class='receipt-item'>";
        echo "Total Harga Setelah Diskon: Rp. " . number_format($final_total_cost, 0, ',', '.');
        echo "</div>";

        echo "</div>";
    }
    ?>

    <form method="post">
        <h2>Makanan</h2>
        <ul>
            <?php
            // Food menu
            foreach ($food_menu as $item => $price) {
                echo "<li>";
                echo "$item - Rp. " . number_format($price, 0, ',', '.');
                echo " <input type='number' name='$item' value='0' min='0'>";
                echo "</li>";
            }
            ?>
        </ul>

        <h2>Minuman</h2>
        <ul>
            <?php
            // Drink menu
            foreach ($drink_menu as $item => $price) {
                echo "<li>";
                echo "$item - Rp. " . number_format($price, 0, ',', '.');
                echo " <input type='number' name='$item' value='0' min='0'>";
                echo "</li>";
            }
            ?>
        </ul>

        <input type="submit" name="order" value="Pesan">
    </form>
</body>
</html>
