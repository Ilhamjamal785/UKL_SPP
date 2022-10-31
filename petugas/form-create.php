<?php
include '../login/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Create</title>
</head>
<body>
    <h1>Tambah Data Petugas</h1>
    <form action= "create.php" method="post">
        Nama Petugas : <input type="text" name="nama_petugas"><br>
        Username : <input type="text" name="username"><br>
        Password : <input type="password" name="password"><br>
        level :  
        <select name="level">
            <option value=""></option>
            <option value="petugas">petugas</option>
            <option value="admin">admin</option>
            
        </select>
        <input type="submit" value="simpan" name="btnSimpan">
    </form>
</body>
</html>