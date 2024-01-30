<?php 
    include 'koneksi.php';
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = mysqli_query($koneksi, "select * from login_admin where username='$username' and password ='$password'");
        if(mysqli_num_rows($query)>0){
            header("Location: login.php");
        }else{
            header("Location: hal_admin.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" >
        <table width="25%" border="0" align="center">
            <tr>
                <td class="col-sm-3">Username</td>
                <td><input type="text" class="form-control" name="username"></td>
            </tr>
            <tr>
                <td class="col-sm-3">Password</td>
                <td><input type="password" class="form-control" name="password"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" class="btn btn-primary" name="login" value="Login" >
                </td>
            </tr>
        </table>
    </form>
</body>
</html>