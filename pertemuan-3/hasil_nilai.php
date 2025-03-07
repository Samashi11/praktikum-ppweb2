<?php
if (!isset($_POST['nama'])) {
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
</head>

<body>
  <table border="1" cellpadding="5" cellspacing="0">
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td><?= $_POST['nama'] ?></td>
    </tr>
    <tr>
      <td>NIM</td>
      <td>:</td>
      <td><?= $_POST['nim'] ?></td>
    </tr>
    <tr>
      <td>Rombel</td>
      <td>:</td>
      <td><?= $_POST['rombel'] ?></td>
    </tr>
    <tr>
      <td>Mata Kuliah</td>
      <td>:</td>
      <td><?= $_POST['matkul'] ?></td>
    </tr>
    <tr>
      <td>Nilai Tugas</td>
      <td>:</td>
      <td><?= $_POST['tugas'] ?></td>
    </tr>
    <tr>
      <td>Nilai UTS</td>
      <td>:</td>
      <td><?= $_POST['uts'] ?></td>
    </tr>
    <tr>
      <td>Nilai UAS</td>
      <td>:</td>
      <td><?= $_POST['uas'] ?></td>
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
      <td><?= $total ?></td>
    </tr>
    <tr>
      <td>Predikat</td>
      <td>:</td>
      <td>
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
</body>

</html>