<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Profil Seseorang</title>
  <style>
        img {
            border-radius: 50%;
            display: block;
            margin-left: auto;
            margin-right: auto;

        }

        p.paragraf {
            line-height: 40px;
        }
		h5.namaDokter {
			text-align:center;
        }
        h6.judul {
            line-height: 40px;
        }
        </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-5">
    <div class="row">
		<div class="media-body">
		<a href="create.php" class="btn btn-info btn-sm">Edit Informasi Dokter</a>

		<img src="dokter1.jpg" class="img-thumbnail" class="rounded float-left" width="300px" alt="Foto Dokter" > <!-- Ganti link_gambar.jpg dengan link gambar yang Anda gunakan -->

			<h5 class="namaDokter">dr. Ariana Aulia, Sp. OG</h5>
			<h6 class="judul">Specialis: </h6>
			Obstetri dan Ginekologi

			<h6 class="judul">Riwayat Pendidikan: </h6>
			2020, Sp.OG (Spesialis Obstetri dan Ginekologi), Universitas Gajah Mada

			<h6 class="judl">Penghargaan: </h6>
			2014, Magna Cum Laude Program Spesialis, Universitas Gajah Mada

			<h6 class="judul">Keanggotaan: </h6>
			Anggota, Perhimpunan Obstetri dan Ginekologi Indonesia

			<h6 class="judul">Keahlian Bidang: </h6>
			Asuhan Antenatal / Kehamilan, USG Ginekologi, USG Obstetri, Kehamilan dengan Komplikasi	
		</div>

		<table class="table">
      <thead>
        <tr>
          <th scope="col">Hari</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Waktu</th>
          <th scope="col">Poliklinik</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Senin</td>
          <td>2023-12-25</td>
          <td>08:00 - 10:00</td>
          <td>Poliklinik Umum</td>
          <td>
            <button type="button" class="btn btn-primary">Edit Jadwal</button>
            <button type="button" class="btn btn-danger">Hapus Jadwal</button>
          </td>
        </tr>
        <!-- Anda dapat menambahkan baris-baris tambahan sesuai dengan jadwal yang ingin ditampilkan -->
      </tbody>
    </table>

    </div>
  </div>


  <!-- Panggil Bootstrap JS dan Bundle (Optional, hanya jika diperlukan oleh Bootstrap) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
