<!DOCTYPE html>
<html lang="en">

<head>
    <center>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Waktu</title>

        <style>
            body {
                background-color: #9681EB;
            }

            form {
                background-color: rgb(236, 236, 236);
                border-radius: 10px;
                padding: 50px;
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
                width: 250px;
                margin-top: 130px;
            }


            .label {
                font-weight: bold;
            }

            .besar-teks-bayangan {
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
                margin-top: 200px;
                font-size: 24px;
                color: white;

            }


            form h2 {

                margin-top: -15px;

            }

            .input {
                display: flex;
            }

            .input input {
                border-radius: 10px;
                margin-left: 20px;
                margin-bottom: 13px;
                padding: 8px 8px 5px;
                border: none;
            }

            .submit input {

                border-radius: 10px;
                border: none;
                background-color: #6527BE;
                padding: 5px 10px;
                font-weight: bold;
            }



            @media screen and (max-width: 360px) {

                
                form {
                    width: 200px;
                  
                }

                .input {

                    display: block;
                    
                }

                .label {
                    margin-bottom: 10px;
                }

            }


            @media screen and (max-width: 320px) {
                form {
                    width: 180px;
                }

                .input {

                    display: block;

                }

                .input input {
                    margin-left: 8px;
                }

                .label {
                    margin-bottom: 10px;
                }

            }
        </style>

</head>

<body>

    <form action="" method="post">

        <div style="text-align: center;">
            <h2>Masukkan Inputan</h2>
        </div>



        <div class="input">

            <div class="label">
                <label for="jam"> jam &nbsp&nbsp&nbsp:</label>
            </div>
            <input type="number" name="h" id="jam" required>

        </div>

        <br>

        <div class="input">

            <div class="label">
                <label for="menit"> menit :</label>
            </div>
            <input type="number" name="m" id="menit" required>

        </div>


        <br>

        <div class="input">

            <div class="label">
                <label for="detik"> detik &nbsp:</label>
            </div>

            <input type="number" name="s" id="detik" required>

        </div>


        <br>

        <div class="submit">

            <label for="submit"></label>
            <input type="submit" name="submit" id="submit">

        </div>

    </form>

    <br>
    <br>


    <?php

    $hh;
    $mm;
    $ss;


    if (isset($_POST['submit'])) {
        $hh = $_POST['h'];
        $mm = $_POST['m'];
        $ss = $_POST['s'];

        $ss = $ss + 1;

        if ($ss >= 60) {
            $mm = $mm + 1;
            $ss = 00;

            if ($mm >= 60) {
                $hh = $hh + 1;
                $mm = 00;
                $ss = 00;

                if ($hh >= 24) {
                    $hh = 00;
                    $mm = 00;
                    $ss = 00;
                }
            }
        } else {
            $ss = $ss;
        }




        echo '<span class="besar-teks-bayangan">' . $hh . ':</span>';
        echo '<span class="besar-teks-bayangan">' . $mm . ':</span>';
        echo '<span class="besar-teks-bayangan">' . $ss . '</span>';
    }


    ?>
</body>

</html>