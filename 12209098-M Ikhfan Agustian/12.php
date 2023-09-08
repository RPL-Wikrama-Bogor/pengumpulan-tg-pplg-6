<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center align-items-center vh-100">
      <div class="col-lg-4 col-md-6">
        <div class="bg-light p-4 rounded text-center">
          <h1 class="mb-5 mt-5">Jika ditambah 1 detik</h1>
          <form method="post" action="#">
            <table class="table mx-auto">
              <tr>
                <td>Input Jam</td>
                <td><input type="number" name="hh" min="0" max="23" class="form-control"></td>
              </tr>
              <tr>
                <td>Input Menit</td>
                <td><input type="number" name="mm" min="0" max="59" class="form-control"></td>
              </tr>
              <tr>
                <td>Input Detik</td>
                <td><input type="number" name="ss" min="0" max="59" class="form-control"></td>
              </tr>
              <tr>
                <td colspan="2" class="text-center">
                  <button type="submit" class="btn btn-primary mt-3" name="submit">Submit</button>
                </td>
              </tr>
            </table>
          </form>
          <br>
          <?php
          if (isset($_POST['submit'])) {
              $hh = intval($_POST['hh']);
              $mm = intval($_POST['mm']);
              $ss = intval($_POST['ss']);

              $ss += 1;
              if($ss >= 60){
                  $mm += 1;
                  $ss = 0;
                  if($mm >= 60){
                      $mm = 0;
                      $hh += 1;
                      if($hh >= 24){
                          $hh = 0;
                      }
                  }
              }

              echo "<p>Waktu setelah ditambah 1 detik: " . $hh . ":" . $mm . ":" . $ss . "</p>";
          }
          ?>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
