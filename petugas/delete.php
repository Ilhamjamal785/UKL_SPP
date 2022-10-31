<?php
    include '../koneksi.php';

    $id_petugas = $_GET['id_petugas'];
    $query = "DELETE FROM petugas WHERE id_petugas = $id_petugas";
    $result = mysqli_query($conn, $query);
    $num = mysqli_affected_rows($conn);

    if($num > 0) {
        echo "Berhasil update data <br>";
    } else {
        echo "Gagal update data <br>";
    }
    echo "<a href='read.php'>Lihat Data</a>";
?>