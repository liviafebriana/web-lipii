<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_adopt";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //cek koneksi
  die("tidak bisa terkoneksi ke database");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
  <style>
    .mx-auto {
      width: 1300px;
    }

    .card {
      margin-top: 125px;
    }
  </style>
</head>

<body>

  <!-- navbar -->

  <nav class="navbar navbar-expand-lg navbar-light bg-secondary py-4 fixed-top">
    <div class="container">
      <a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="header.php">
        <img src="images/paw.png" alt="site icon">
      </a>

      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-lg-1" id="navMenu">
        <ul class="navbar-nav mx-auto text-center">
          <li class="nav-item px-2 py-2">
            <a class="nav-link text-uppercase text-dark" href="hal_admin.php">Data Kucing</a>
          </li>
          <li class="nav-item px-2 py-2">
            <a class="nav-link text-uppercase text-dark" href="data_pengadopsi.php">Data Pengadopsi</a>
          </li>
          <li class="nav-item px-2 py-2 border-0">
            <a class="nav-link text-uppercase text-dark" href="transaksi.php">Transaksi</a>
          </li>
        </ul>
      </div>


    </div>
  </nav>
  <!-- end navbar -->

  <div class="mx-auto">
    <!--untuk mengeluarkan data-->
    <div class="card">
      <div class="card-header text-white bg-secondary">
        Data transaksi
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">ID</th>
              <th scope="col">Email</th>
              <th scope="col">Nama Pengadopsi</th>
              <th scope="col">Alamat jalan</th>
              <th scope="col">Kota</th>
              <th scope="col">Provinsi</th>
              <th scope="col">Kode Pos</th>
              <th scope="col">No hp</th>
              <th scope="col">Nama Kucing</th>
              <th scope="col">Ras</th>
              <th scope="col">Usia</th>
              <th scope="col">Gender</th>
            </tr>
          <tbody>
            <?php
            $sql2 = "SELECT * FROM transaksi 
            inner join kucing on transaksi.id_kucing = kucing.id_kucing 
            inner join pengadopsi on transaksi.id_pengadopsi = pengadopsi.id_pengadopsi";
            $q2 = mysqli_query($koneksi, $sql2);
            $urut = 1;
            while ($r2 = mysqli_fetch_array($q2)) {
              $id_transaksi = $r2['id_transaksi'];
              $id_transaksi = $r2['id_transaksi'];
              $email = $r2['email'];
              $nama_pengadopsi = $r2['nama_pengadopsi'];
              $alamat_jalan = $r2['alamat_jalan'];
              $kota = $r2['kota'];
              $provinsi = $r2['provinsi'];
              $kode_pos = $r2['kode_pos'];
              $no_hp = $r2['no_hp'];
              $nama = $r2['nama'];
              $ras = $r2['ras'];
              $usia = $r2['usia'];
              $gender = $r2['gender'];

            ?>
              <tr>
                <th scope="row">
                  <?php echo $urut++ ?>
                </th>
                <td scope="row">
                  <?php echo $id_transaksi ?>
                </td>
                <td scope="row">
                  <?php echo $email ?>
                </td>
                <td scope="row">
                  <?php echo $nama_pengadopsi ?>
                </td>
                <td scope="row">
                  <?php echo $alamat_jalan ?>
                </td>
                <td scope="row">
                  <?php echo $kota ?>
                </td>
                <td scope="row">
                  <?php echo $provinsi ?>
                </td>
                <td scope="row">
                  <?php echo $kode_pos ?>
                </td>
                <td scope="row">
                  <?php echo $no_hp ?>
                </td>
                <td scope="row">
                  <?php echo $nama ?>
                </td>
                <td scope="row">
                  <?php echo $ras ?>
                </td>
                <td scope="row">
                  <?php echo $usia ?>
                </td>
                <td scope="row">
                  <?php echo $gender ?>
                </td>
              </tr>
            <?php
            }
            ?>
          </tbody>
          </thead>
        </table>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>