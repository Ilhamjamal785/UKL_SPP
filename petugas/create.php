<?php
    include '../koneksi.php';

    $nama_petugas = $_POST["nama_petugas"];
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    $level = $_POST["level"];

    $query = "INSERT INTO petugas (username, password, nama_petugas, level) VALUES ('$username', '$password', '$nama_petugas', '$level')";

    $result = mysqli_query($conn, $query);
    $num = mysqli_affected_rows($conn);

    if($num > 0) {
        echo "Berhasil tambah data";
    } else {
        echo "Gagal tambah data";
    }
    echo "<a href='read.php'>Lihat data</a>";
?>