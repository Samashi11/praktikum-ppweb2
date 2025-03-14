<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Praktikum 3</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container mt-5">
    <div class="mb-5">
      <h2>Selamat Datang di Perpustakaan STT-NF</h2>
      <p>Silahkan isi buku tamu dibawah ini</p>
    </div>
    <form method="post" action="kunjungan.php">
      <div class="form-group row">
        <label for="fullname" class="col-4 col-form-label">Nama Lengkap</label>
        <div class="col-8">
          <input id="fullname" name="fullname" type="text" class="form-control" aria-describedby="fullnameHelpBlock">
          <span id="fullnameHelpBlock" class="form-text text-muted">isi nama lengkap kamu</span>
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-4 col-form-label">Email</label>
        <div class="col-8">
          <input id="email" name="email" type="text" class="form-control" aria-describedby="emailHelpBlock"
            required="required">
          <span id="emailHelpBlock" class="form-text text-muted">isi dengan email aktif kamu</span>
        </div>
      </div>
      <div class="form-group row">
        <label for="message" class="col-4 col-form-label">Keperluan</label>
        <div class="col-8">
          <textarea id="message" name="message" cols="40" rows="5" class="form-control" required="required"
            aria-describedby="messageHelpBlock"></textarea>
          <span id="messageHelpBlock" class="form-text text-muted">tulis keperluan kamu</span>
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
</body>

</html>

<?php
require_once('BukuTamu.php');
session_start();

if (!isset($_SESSION['bukutamu'])) {
  $_SESSION['bukutamu'] = [];
}

if (isset($_POST['submit'])) {
  $bukutamu = new BukuTamu();
  $bukutamu->timestamp = date('Y-m-d H:i:s');
  $bukutamu->fullname = $_POST['fullname'];
  $bukutamu->email = $_POST['email'];
  $bukutamu->message = $_POST['message'];

  array_push($_SESSION['bukutamu'], $bukutamu);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Kunjungan</title>
</head>

<body>
  <table border="1" cellpadding='10'>
    <tbody>
      <?php foreach ($_SESSION['bukutamu'] as $entry): ?>
        <tr>
          <td><?php echo htmlspecialchars($entry->timestamp) ?></td>
          <td><?php echo htmlspecialchars($entry->fullname) ?></td>
          <td><?php echo htmlspecialchars($entry->email) ?></td>
          <td><?php echo htmlspecialchars($entry->message) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <a href="index.php">Kembali</a>
</body>

</html> -->