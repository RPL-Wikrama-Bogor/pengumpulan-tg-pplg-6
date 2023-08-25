<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perulangan</title>
</head>

<body>
  <div class="container">
    <?php
    $i = 1;
    while ($i <= 50) {
      echo $i . "<br>";
      $i++;
    }
    ?>
    </div>

    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
      }

      .container {
        background-color: #ffffff;
        border-radius: 5px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 300px;
        text-align: center;
      }

      .number {
        font-size: 18px;
        margin-bottom: 5px;
      }
    </style>
</body>

</html>