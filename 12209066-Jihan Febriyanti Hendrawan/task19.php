<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
        background-color: #9EB384;
        font-family: 'sans-serif';
        justify-content: center;
        align-items: center;
        padding-top: 50px;
    }

    form {
        background-color: #F8F6F4;
        border-radius: 15px;
        padding: 50px;

        box-shadow: 16px 13px 20px -14px rgba(147, 235, 43, 0.66) inset;
        -webkit-box-shadow: 16px 13px 20px -14px rgba(147, 235, 43, 0.66) inset;
        -moz-box-shadow: 16px 13px 20px -14px rgba(147, 235, 43, 0.66) inset;

        width: 300px;
        margin-bottom: 30px;

        margin: 0 auto;
        position: absolute;
        top: 20px;
        left: 0;
        right: 0;
    }


    label {
        margin-bottom: 15px;
        border-radius: 30px;
        font-weight: bold;
    }

    .besar {
        font-size: 24px;
        color: white;
    }

    .teks-bayangan {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }


    form h2 {

        margin-top: -15px;

    }

    .input {
        display: flex;

    }

    .input input {
        border: none;
        background-color: #9EB384;
        padding: 5px 10px;
        border-radius: 10px;
        font-weight: bold;
        margin-left: 80%;
    }

    .input1 input {
        border-radius: 10px;
        margin-left: 20px;
        margin-bottom: 13px;
        padding: 8px 8px 5px;
        /* border: none; */
        border-color: #94ff11;
        flex-wrap: wrap;

    }

    .input2 input {
        border-radius: 10px;
        margin-left: 20px;
        margin-bottom: 13px;
        padding: 8px 8px 5px;
        border-color: #94ff11;
        flex-wrap: wrap;
    }

    .input3 input {
        border-radius: 10px;
        margin-left: 20px;
        margin-bottom: 13px;
        padding: 8px 8px 5px;
        border-color: #94ff11;
        flex-wrap: wrap;
    }

    .label {
        font-weight: bold;

    }


    .output h2 {
        display: flex;
        justify-content: center;
    }


    .output {

        background-color: white;
        border-radius: 15px;
        padding: 20px 50px 50px;

        box-shadow: -21px -18px 20px -14px rgba(147, 235, 43, 0.66) inset;
        -webkit-box-shadow: -21px -18px 20px -14px rgba(147, 235, 43, 0.66) inset;
        -moz-box-shadow: -21px -18px 20px -14px rgba(147, 235, 43, 0.66) inset;

        width: 300px;
        height: 450px;
        margin-bottom: 30px;


        margin: 0 auto;
        /* Menengahkan elemen horizontal */
        position: absolute;
        top: 450px;
        /* Mengatur jarak dari atas */
        left: 0;
        right: 0;

    }


    .harga {
        /* font-weight: bold; */
        text-align: center;
        margin-bottom: 30px;
    }

    .per-kelas {
        font-weight: bold;
    }

    .keuntungan {
        font-weight: bold;
    }

    .keseluruhan {

        font-weight: bold;

    }

    .total {

        font-weight: bold;

    }


    @media screen and (max-width: 510px) {

        label{
            display: block;
            margin-left: 19px;
        }

        .input input{
            margin-left: 60px;
        }

        form{
            width: 200px;
        }

    }

    @media screen and (max-width: 360px){
        
        label {
            margin-left: 75px;

        }

        .input input{
            margin-left: 2px;
        }

    }



    @media screen and (max-width: 510px) {

        .output{
            width: 200px;
            top: 530px;
        }

        .input input{
            margin-left: 60px;
        }

        form{
            width: 200px;
        }

    }




</style>

<body>


    <form action="" method="post">

        <div style="text-align: center;">
            <h2>Jumlah tiket : </h2>
        </div>

        <div class="input1">

            <label for="vip"> VIP &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</label>
            <input type="text" name="vip" id="vip" maxlength="50" oninput="validateInput()" required>
            <p id="errorMessage" style="color: red;"></p>

        </div>

        <div class="input2">

            <label for="eksekutif"> Eksekutif :</label>
            <input type="text" name="eksekutif" id="eksekutif" required>

        </div>
        <br>

        <div class="input3">
            <label for="ekonomi">Ekonomi &nbsp:</label>
            <input type="text" name="ekonomi" id="ekonomi" required>
        </div>
        <br>


        <div class="input">
            <label for="submit"></label>
            <input type="submit" name="submit" id="submit">
        </div>


    </form>




    <?php


    $keun_vip = 0;
    $keun_eksekutif = 0;
    $keun_ekonomi = 0;

    $vip;
    $eksekutif;
    $ekonomi;

    $keun_keseluruhan;
    $total_tiket;



    if (isset($_POST['submit'])) {
        $vip = $_POST['vip'];
        $eksekutif = $_POST['eksekutif'];
        $ekonomi = $_POST['ekonomi'];


        if ($vip >= 35) {
            $keun_vip = ($vip * 50000) * 25 / 100;
        } elseif ($vip < 35 && $vip >= 20) {
            $keun_vip = ($vip * 50000) * 15 / 100;
        } else {
            $keun_vip = ($vip * 50000) * 5 / 100;
        }


        if ($eksekutif >= 40) {
            $keun_eksekutif = ($eksekutif * 30000) * 20 / 100;
        } elseif ($eksekutif < 40 && $eksekutif >= 20) {
            $keun_eksekutif = ($eksekutif * 30000) * 10 / 100;
        } else {
            $keun_eksekutif = ($eksekutif * 30000) * 2 / 100;
        }


        if ($ekonomi > 0 && $ekonomi <= 50) {
            $keun_ekonomi = ($ekonomi * 20000) * 7 / 100;
        }


        $keun_keseluruhan = $keun_vip + $keun_eksekutif + $keun_ekonomi;
        $total_tiket = $vip + $eksekutif + $ekonomi;



        //jumlah tiket per kelas
        echo '<div class = "output">' .

            '<div class = "harga">' . "<H2>Rincian</H2>" . '</div>' .

            '<div class = "per-kelas">' . "Jumlah tiket per kelas : " . '</div>' .

            '<div class = "VIP">' . "VIP = " . $vip . '</div>' .

            '<div class = "EKSEKUTIF">' . "Eksekutif = " . $eksekutif . '</div>' .

            '<div class = "EKONOMI">' . "Ekonomi = " . $ekonomi . '</div>' .

            "<======================>" .
            "</br>" .
            "</br>" .




            //keuntungan

            '<div class = "keuntungan">' . "Keuntungan tiket per kelas : " . '</div>' .

            //Vip
            '<div class = "vip">' . "vip = Rp." . number_format($keun_vip) . '</div>' .


            //Eksekutif
            '<div class = "eksekutif">' . "Eksekutif = Rp." . number_format($keun_eksekutif) . '</div>' .


            //Ekonomi
            '<div class = "ekonomi">' . "Ekonomi = Rp." . number_format($keun_ekonomi) . '</div>' .


            "<======================>" .
            "</br>" .
            "</br>" .



            //Keseluruhan
            '<div class = "keseluruhan">' . "Keuntungan secara keseluruhan :" . '</div>' .
            " Rp. " . number_format($keun_keseluruhan) .


            "</br>" .
            "<======================>" .
            "</br>" .
            "</br>" .



            //total tiket per kelas
            '<div class = "total">' . "Total tiket dari seluruh kelas : " . '</div>' .
            number_format($total_tiket) . " tiket" .

            "</br>" .
            "<======================>" .



            '</div>';



    }


    ?>




</body>

</html>