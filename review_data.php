<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Data</title>
    <link rel="stylesheet" href="rd.css">
    
</head>
<body>
    <div class="">
        <h2>Review Data Pendaftaran</h2>
        <table>
        <tr>
            <th>Nama</th>
            <th>WhatsApp</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Umur</th>
            <th>Nama Orang Tua</th>
            <th>Pekerjaan Orang Tua</th>
            <th>Penghasilan Orang Tua</th>
            <th>Kategori Penghasilan</th> 
            <th>Rata-rata Nilai Ujian Nasional</th>
            <th>Kategori Kemampuan</th> 
            <th>Jurusan Dipilih</th>
        </tr>

<?php
    // Dapatkan koneksi database
    $koneksi = new mysqli("localhost", "root", "", "db_pendaftaran");

    // Periksa koneksi
    if ($koneksi->connect_error) {
        die("Koneksi gagal: " . $koneksi->connect_error);
    }

    // Siapkan query untuk mengambil data mahasiswa
    $sql = "SELECT * FROM mahasiswa";
    $result = $koneksi->query($sql);

    if ($result->num_rows > 0) {
        // Tampilkan data
        while($row = $result->fetch_assoc()) {
            // Hitung usia
            $tanggal_lahir = new DateTime($row['tgl_lahir']);
            $sekarang = new DateTime(date("m-d-Y"));
            $usia = $sekarang->diff($tanggal_lahir)->y;

            // Tentukan kategori penghasilan orang tua
            if ($row['penghasilan_ortu'] <= 2000000) {
                $kategori_penghasilan = "Tidak Mampu";
            } else if ($row['penghasilan_ortu'] <= 4000000) {
                $kategori_penghasilan = "Kurang Mampu";
            } else if ($row['penghasilan_ortu'] <= 8000000) {
                $kategori_penghasilan = "Mampu";
            } else {
                $kategori_penghasilan = "Sangat Mampu";
            }

            // Tentukan kategori kemampuan mahasiswa
            if ($row['nilai_rata'] >= 90) {
                $kategori_kemampuan = "Pintar";
            } else if ($row['nilai_rata'] >= 80) {
                $kategori_kemampuan = "Cukup Pintar";
            } else if ($row['nilai_rata'] >= 60) {
                $kategori_kemampuan = "Rata-rata";
            } else {
                $kategori_kemampuan = "Penanganan Khusus";
            }

            // Tampilkan data
            echo "<tr>";
            echo "<td>" . $row["nama"] . "</td>";
            echo "<td>" . $row["wa"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["alamat"] . "</td>";
            echo "<td>" . $row["tgl_lahir"] . "</td>";
            echo "<td>$usia</td>"; 
            echo "<td>". $row["nama_ortu"] . "</td>";
            echo "<td>" . $row["pekerjaan_ortu"] . "</td>";
            echo "<td>" . $row["penghasilan_ortu"] . "</td>";
            echo "<td>$kategori_penghasilan</td>"; 
            echo "<td>" . $row["nilai_rata"] . "</td>";
            echo "<td>$kategori_kemampuan</td>"; 
            echo "<td>" . $row["jurusan"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "Data tidak ditemukan.";
    }
            
    $koneksi->close();
?>
    </div>
</body>
</html>
