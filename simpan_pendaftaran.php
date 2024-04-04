<?php

include("koneksi.php");


    $nama = $_POST["nama"];
    $wa = $_POST["wa"];
    $email = $_POST["email"];
    $alamat = $_POST["alamat"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $tempat_lahir = $_POST["tempat_lahir"];
    $nama_ortu = $_POST["nama_ortu"];
    $pekerjaan_ortu = $_POST["pekerjaan_ortu"];
    $penghasilan_ortu = $_POST["penghasilan_ortu"];
    $nilai_rata = $_POST["nilai_rata"];
    $jurusan = $_POST["jurusan"];

    $insert = mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES('', '$nama', '$wa', '$email', '$alamat', '$tgl_lahir', '$tempat_lahir', '$nama_ortu', '$pekerjaan_ortu', '$penghasilan_ortu', '$nilai_rata', '$jurusan')");

    if ($insert) {
        header("Location:review_data.php");
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }

    

