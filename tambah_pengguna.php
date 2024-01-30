<?php
include 'koneksi.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pengguna</title>
</head>
<body>

    <a href="home.php">Kembali ke Home</a><br><br>

    <form action="tambah_pengguna.php" method="post">
        <table width="25%" border="0">
            <tr>
                <td>Nama Pengguna</td>
                <td><input type="text" name="nama_pengguna"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Tambah"></td>
            </tr>
        </table>
    </form>

    <?php
    if(isset($_POST['submit'])){
        $nama_pengguna = $_POST['nama_pengguna'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $result = mysqli_query($koneksi, "INSERT INTO pengguna(nama_pengguna,username,password) 
        VALUES('$nama_pengguna','$username','$password')");
    }

    ?>

</body>
</html>