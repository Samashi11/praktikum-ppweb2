<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Submission</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-4" style="max-width: 500px; width: 100%;">
      <h3 class="text-center mb-3">Selamat Datang di Perpustakaan STT-NF</h3>
      <p class="text-center text-muted">Silahkan isi Buku Tamu di bawah ini</p>
      <hr>
      <form method="post" action="kunjungan.php">
        <div class="mb-3">
          <label for="fullname" class="form-label">Nama Lengkap</label>
          <input id="fullname" name="fullname" type="text" class="form-control" placeholder="Masukkan Nama" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input id="email" name="email" type="email" class="form-control" placeholder="Masukkan Email" required>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Keperluan</label>
          <textarea id="message" name="message" class="form-control" rows="4" placeholder="Tuliskan keperluan Anda"
            required></textarea>
        </div>
        <button type="submit" class="btn btn-primary w-100">Submit</button>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>