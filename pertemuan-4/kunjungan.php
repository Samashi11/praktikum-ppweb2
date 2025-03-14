<?php

require_once('bukuTamu.php');
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
  <title>Buku Tamu</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container">
    <h4>Daftar Kunjungan</h4>
    <!-- <button class="btn btn-danger float-right mx-1">Clear</button>
    <button class="btn btn-warning float-right mx-1">Kembali</button> -->
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Timestamp</th>
          <th>Full Name</th>
          <th>Email</th>
          <th>Message</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($_SESSION['bukutamu'] as $buku) {
          ?>
          <tr>
            <td><?= htmlspecialchars($buku->timestamp); ?></td>
            <td><?= htmlspecialchars($buku->fullname); ?></td>
            <td><?= htmlspecialchars($buku->email); ?></td>
            <td><?= htmlspecialchars($buku->message); ?></td>
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>