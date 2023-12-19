<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form Input Nama dan NIM</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <h2>Form Informasi Dokter</h2>
  <form>
  <div class="form-group">
      <label for="foto profil">Foto Profil:</label>
      <input type="text" class="form-control" id="foto Profil" placeholder="Masukkan Foto Profil">
    </div>

    <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
    </div>

    <div class="form-group">
      <label for="spesialis">Spesialis:</label>
      <input type="text" class="form-control" id="nim" placeholder="Masukkan Spesialis">
    </div>

    <div class="form-group">
      <label for="riwayat pendidikan">Riwayat Pendidikan:</label>
      <input type="text" class="form-control" id="riwayat pendidikan" placeholder="Masukkan Riwayat Pendidikan">
    </div>

    <div class="form-group">
      <label for="penghargaan">Penghargaan:</label>
      <input type="text" class="form-control" id="penghargaan" placeholder="Masukkan Penghargaan">
    </div>

    <div class="form-group">
      <label for="keanggotaan">Keanggotaan:</label>
      <input type="text" class="form-control" id="keanggotaan" placeholder="Masukkan Keanggotaan">
    </div>

    <div class="form-group">
      <label for="keahlian bidang">Keahlian Bidang:</label>
      <input type="text" class="form-control" id="keahlian bidang" placeholder="Masukkan Keahlian Bidang">
    </div>

    <button type="submit" class="btn btn-primary">Update Informasi Dokter</button>
  </form>
</div>

<!-- Bootstrap JS dan jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>