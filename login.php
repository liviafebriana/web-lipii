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
    <title>Login Admin</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <section>
       
        <div class="form-box">
            <div class="form-value">
                <form method="post">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" require>
                        <label for="">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" require>
                        <label for="">Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember Me <a href="#"> Forget Password</a> </label>
                    </div>
                    <input type="submit" class="btn btn-primary" name="login" value="Login" >
                    <div class="register">
                        <p>Don't have a account <a href="#">Register</a> </p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>