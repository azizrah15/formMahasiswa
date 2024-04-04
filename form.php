<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="container">
        <h2>Form Daftar Mahasiswa Baru</h2>

        <form id="form_pendaftaran" action="simpan_pendaftaran.php" method="post">
            <label for="nama">Nama: </label>
            <input type="text" id="nama" name="nama" required>

            <label for="wa">No Whatsapp: </label>
            <input type="text" id="wa" name="wa" required>

            <label for="email">Email: </label>
            <input type="text" id="email" name="email" required>

            <label for="alamat">Alamat: </label>
            <textarea id="alamat" name="alamat" required></textarea>

            <label for="tgl_lahir">Tanggal Lahir: </label>
            <input type="date" id="tgl_lahir" name="tgl_lahir" required>

            <label for="tempat_lahir">Tempat Lahir: </label>
            <input type="text" id="tempat_lahir" name="tempat_lahir" required>

            <label for="nama_ortu">Nama Orang Tua: </label>
            <input type="text" id="nama_ortu" name="nama_ortu" required>

            <label for="pekerjaan_ortu">Pekerjaan Orang Tua: </label>
            <input type="text" id="pekerjaan_ortu" name="pekerjaan_ortu" required>

            <label for="penghasilan_ortu">Penghasilan Orang Tua: </label>
            <input type="text" id="penghasilan_ortu" name="penghasilan_ortu" required>

            <label for="nilai_rata">Nilai Rata-rata UN: </label>
            <input type="text" id="nilai_rata" name="nilai_rata" required>

            <label for="jurusan">Jurusan: </label>
            <select name="jurusan" id="jurusan" required>
                <option value="">-pilih jurusan-</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Industri">Teknik Industri</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Teknik Sipil">Teknik Sipil</option>
                <option value="Teknik Elektro">Teknik Elektro</option>
            </select>

            <button type="submit" class="submit_data" name="submit">Submit</button>
        </form>
    </div>

</body>
</html>