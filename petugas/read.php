<?php
    include '../login/header.php';
    include '../koneksi.php';

    $query = "SELECT * FROM petugas";
    $result = mysqli_query($conn, $query);
    $num = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>read</title>
</head>
<body>
    <table class="table table-hover table-striped">
    <h2>Data Petugas</h2>
        <tr>
            <th>No.</th>
            <th>Nama Petugas</th>
            <th>Username</th>
            <th>Level</th>
            <th>Aksi</th>
        </tr>

        <?php
            if($num > 0){
                $no = 1;
                while($data = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $data['nama_petugas']. "</td>";
                    echo "<td>" . $data['username'] . "</td>";
                    echo "<td>" . $data['level'] . "</td>";
                    echo "<td><a href='ubah_petugas.php?id_petugas=" . $data['id_petugas'] . "' >Edit</a> | ";
                    echo "<a href='delete.php?id_petugas=" . $data['id_petugas'] . "' onclick='return confirm(\"Apakah yakin ingin menghapus data?\")'>Hapus</a></td>";
                    echo "</tr>";
                    $no++;                
                }
            } else {
                echo "<td colspan= '3'>Tidak ada data</td>";
            }
        ?>
    </table>
    <td><a href="tambah_petugas.php">Tambah data</a></td>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<?php
    include "../login/footer.php";
?>