<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="css/regis.css">
</head>
<body>
    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="header.php">
                <img src="images/logo.jpeg" alt="site icon">
            </a>
            
        </div>
    </nav>
    <!-- end navbar -->

    <?php
        $query = "SELECT * FROM  where id_kucing='$_GET[id_kucing]'";
        $result = mysqli_query($koneksi, $query);
        $data = mysqli_fetch_array($result);
    ?>

    <section class="container">
        <header>Registrasi Form</header>
        <form action="#" class="from">
            <div class="input-box">
                <label >Email Address</label>
                <input type="text" placeholder="Your email">
            </div>
            <div class="input-box">
                <label >Full Name</label>
                <input type="text" placeholder="Full name">
            </div>
        </form>
    </section>
</body>
</html>