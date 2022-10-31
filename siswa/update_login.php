<?php
    include '../koneksi.php';

    $id_petugas = $_POST['id_petugas'];
    $nama_petugas = $_POST['nama_petugas'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];

    $query ="UPDATE petugas SET username = '$username', password = '$password', nama_petugas = '$nama_petugas', level = '$level' WHERE id_petugas = $id_petugas";
    $result = mysqli_query($conn, $query);
    $num = mysqli_affected_rows($conn);

    if($num > 0) {
        echo "Berhasil update data <br>";
    } else {
        echo "Gagal update data <br>";
    }
    echo "<a href='read.php'>Lihat Data</a>";
?>