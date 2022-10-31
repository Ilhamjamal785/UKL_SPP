<?php
    include '../login/header.php';
    include '../koneksi.php';
    $id_petugas = $_GET['id_petugas'];
    $query = "SELECT * FROM petugas WHERE id_petugas = $id_petugas";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Form Ubah Petugas</h2>
    <form action="update.php" method="post">
        <table>
            <tr>
                <td><label for="nama">Nama petugas</label></td>
                <td>:</td>
                <td><input type="text" name="nama_petugas" id="nama" value="<?php echo $row['nama_petugas']; ?>"></td>
            </tr>
            <tr>
                <td><label for="username">Username</label></td>
                <td>:</td>
                <td><input type="text" name="username" id="username" value="<?php echo $row['username']; ?>"></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td>:</td>
                <td><input type="password" name="password" id="password" value="<?php echo $row['password']; ?>"></td>
            </tr>
            <tr>
                <td><label for="level">level</label></td>
                <td>:</td>
                <td><select name="level">
                    <option value=""></option>
                    <option value="petugas" <?php if($row['level']=='petugas'){echo "selected";}?> >petugas</option>
                    <option value="admin" <?php if($row['level']=='admin'){echo "selected";}?> >admin</option>
                </select></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="hidden" name="id_petugas" value="<?php echo $row['id_petugas']; ?>"></td>
                <td><input type="submit" value="Simpan" name="btnSimpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>