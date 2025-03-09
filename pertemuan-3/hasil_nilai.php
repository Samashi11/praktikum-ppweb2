<?php
if (@!isset($_POST['nama'])) {
  echo '<script>alert("Anda Harus Mengisi Form Terlebih Dahulu!")</script>
<meta http-equiv="refresh" content="0; url=form_nilai.php">';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Nilai Mahasiswa</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <style>
    .round-table {
      border-radius: 10px;
      overflow: hidden;
    }
  </style>
</head>

<body>
  <div class="container-fluid px-5 pt-4">
    <div class="card mx-auto bg-light shadow-lg" style="max-width: 600px;">
      <div class="card-header text-center text-white bg-primary">
        <h2 class="text-center">Hasil Nilai Mahasiswa</h2>
      </div>
      <div class="card-body">
        <table class="table table-info font-weight-bold table-hover round-table">
          <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= @$_POST['nama'] ?></td>
          </tr>
          <tr>
            <td>NIM</td>
            <td>:</td>
            <td><?= @$_POST['nim'] ?></td>
          </tr>
          <tr>
            <td>Rombel</td>
            <td>:</td>
            <td><?= @$_POST['rombel'] ?></td>
          </tr>
          <tr>
            <td>Mata Kuliah</td>
            <td>:</td>
            <td><?= @$_POST['matkul'] ?></td>
          </tr>
          <tr>
            <td>Nilai Tugas</td>
            <td>:</td>
            <td><?= @$_POST['tugas'] ?></td>
          </tr>
          <tr>
            <td>Nilai UTS</td>
            <td>:</td>
            <td><?= @$_POST['uts'] ?></td>
          </tr>
          <tr>
            <td>Nilai UAS</td>
            <td>:</td>
            <td><?= @$_POST['uas'] ?></td>
          </tr>
          <?php
          $tugas = $_POST['tugas'] * (35 / 100);
          $uts = $_POST['uts'] * (30 / 100);
          $uas = $_POST['uas'] * (30 / 100);
          $total = $tugas + $uts + $uas;
          ?>
          <tr>
            <td>Total Nilai</td>
            <td>:</td>
            <td><?= @$total ?></td>
          </tr>
          <tr>
            <td>Predikat</td>
            <td>:</td>
            <td <?php
            if ($total <= 35) {
              echo 'class="text-danger"';
            } elseif ($total <= 55 && $total > 35) {
              echo 'class="text-danger"';
            } elseif ($total <= 69 && $total > 55) {
              echo 'class="text-danger"';
            } elseif ($total <= 84 && $total > 69) {
              echo 'class="text-warning"';
            } elseif ($total <= 100 && $total > 84) {
              echo 'class="text-success"';
            } else {
              echo 'class="text-danger"';
            }
            ?>>
              <?php
              if ($total <= 35) {
                $predikat = "E";
                echo $predikat;
              } elseif ($total <= 55 && $total > 35) {
                $predikat = "D";
                echo $predikat;
              } elseif ($total <= 69 && $total > 55) {
                $predikat = "C";
                echo $predikat;
              } elseif ($total <= 84 && $total > 69) {
                $predikat = "B";
                echo $predikat;
              } elseif ($total <= 100 && $total > 84) {
                $predikat = "A";
                echo $predikat;
              } else {
                $predikat = "Undefined";
                echo $predikat;
              }
              ?>
            </td>
          </tr>
          <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td>
              <?php
              switch ($predikat) {
                case 'A':
                  echo "Sangat Baik, Ko Memang Terbaik la!";
                  break;
                case 'B':
                  echo "B Aja, Mangat Bre";
                  break;
                case 'C':
                  echo "Cukup laaa, Belajar lagi Dek!";
                  break;
                case 'D':
                  echo "Kurang ni Bree, Niat ga si!";
                  break;
                case 'E':
                  echo "Astagaaaa, Tak de Otak ke?!";
                  break;
                default:
                  echo "Kerja Bagus!";
                  break;
              }
              ?>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>

</html>