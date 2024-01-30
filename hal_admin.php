<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_adopt";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //cek koneksi
  die("tidak bisa terkoneksi ke database");
}

$id_kucing = "";
$nama = "";
$ras = "";
$usia = "";
$gender = "";
$status = "";
$foto = "";
$sukses = "";
$error = "";
$ekstensi = "";
$ekstensi1 = "";

if (isset($_GET['op'])) {
  $op = $_GET['op'];
} else {
  $op = "";
}

if ($op == 'delete') {
  $id_kucing = $_GET['id'];
  $sql1 = "delete from kucing where id_kucing = '$id_kucing'";
  $q1 = mysqli_query($koneksi, $sql1);
  if ($q1) {
    $sukses = "Berhasil hapus data";
  } else {
    $error = "Gagal melakukan delete data";
  }
}

if ($op == 'edit') {
  $id_kucing = $_GET['id'];
  $sql1 = "select * from kucing where id_kucing = '$id_kucing'";
  $q1 = mysqli_query($koneksi, $sql1);
  $r1 = mysqli_fetch_array($q1);
  $nama = $r1['nama'];
  $ras = $r1['ras'];
  $usia = $r1['usia'];
  $gender = $r1['gender'];
  $status = $r1['status'];

  if ($id_kucing == '') {
    $error = "Data tidak ditemukan";
  }
}
if (isset($_POST['simpan'])) { //untuk create
  $id_kucing = $_POST['id_kucing'];
  $nama = $_POST['nama'];
  $ras = $_POST['ras'];
  $usia = $_POST['usia'];
  $gender = $_POST['gender'];
  $status = $_POST['status'];
  $foto = $_FILES['foto']['name'];
  $ekstensi = array('png', 'jpg', 'jpeg');
  $x = explode('.', $foto);
  $ekstensi1 = strtolower(end($x));
  $file_tmp = $_FILES['foto']['tmp_name'];
  if(array($ekstensi, $ekstensi1) == true){
    move_uploaded_file($file_tmp, 'img/'.$foto);
  }else{
    echo "<script> alert ('Ekstensi tidak diperbolehkan) </script>";
  }

  if ($id_kucing && $nama && $ras && $usia && $gender && $status && $foto) {
    if ($op == 'edit') { //untuk update
      $id = $_GET['id'];
      $sql1 = "update kucing set id_kucing = '$id_kucing', nama = '$nama', ras = '$ras', usia = '$usia', gender = '$gender', status = '$status', foto = '$foto' where id_kucing = '$id'";
      $q1 = mysqli_query($koneksi, $sql1);
      if ($q1) {
        $sukses = "Data berhasil diupdate";
      } else {
        $error = "Data gagal diupdate";
      }
    } else { //untuk insert
      $sql1 = "insert into kucing(id_kucing,nama,ras,usia,gender,status,foto) values ('$id_kucing','$nama','$ras','$usia','$gender','$status','$foto')";
      $q1 = mysqli_query($koneksi, $sql1);
      if ($q1) {
        $sukses = "Berhasil memasukkan data baru";
      } else {
        $error = "Gagal memasukkan data";
      }
    }
  } else {
    $error = "Silahkan masukkan semua data";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
  <style>
    .mx-auto {
      width: 800px;
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
    <!----untuk memasukan data---->
    <div class="card">
      <div class="card-header">
        Form Tambah Kucing
      </div>
      <div class="card-body">
        <?php
        if ($error) {
          ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $error ?>
          </div>
          <?php
          header("refresh:3;url=hal_admin.php"); //5 : detik
        }
        ?>
        <?php
        if ($sukses) {
          ?>
          <div class="alert alert-success" role="alert">
            <?php echo $sukses ?>
          </div>
          <?php
          header("refresh:3;url=hal_admin.php"); //5 : detik
        }
        ?>
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="mb-3 row">
            <label for="id_kucing" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id_kucing="id_kucing" name="id_kucing" value="<?php echo $id_kucing ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="ras" class="col-sm-2 col-form-label">Ras</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="ras" name="ras" value="<?php echo $ras ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="usia" class="col-sm-2 col-form-label">Usia</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="usia" name="usia" value="<?php echo $usia ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="gender" class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="gender" name="gender" value="<?php echo $gender ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="status" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="status" name="status" value="<?php echo $status ?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="status" class="col-sm-2 col-form-label">Foto</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" id="foto" name="foto" value="<?php echo $foto ?>">
            </div>
          </div>
            <div class="col-12">
              <input type="submit" name="simpan" value="Simpan data" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div>
      <!--untuk mengeluarkan data-->
      <div class="card">
        <div class="card-header text-white bg-secondary">
          Data Kucing
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Ras</th>
                <th scope="col">Usia</th>
                <th scope="col">Gender</th>
                <th scope="col">Status</th>
                <th scope="col">Foto</th>
                <th scope="col">Aksi</th>
              </tr>
            <tbody>
              <?php
                $sql2 = "select * from kucing order by id_kucing desc";
                $q2 = mysqli_query($koneksi, $sql2);
                $urut = 1;
                while ($r2 = mysqli_fetch_array($q2)) {
                  $id_kucing = $r2['id_kucing'];
                  $nama = $r2['nama'];
                  $ras = $r2['ras'];
                  $usia = $r2['usia'];
                  $gender = $r2['gender'];
                  $status = $r2['status'];
                  $foto = $r2['foto'];
                ?>
              <tr>
                <th scope="row">
                  <?php echo $urut++ ?>
                </th>
                <td scope="row">
                  <?php echo $id_kucing ?>
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
                <td scope="row">
                  <?php echo $status ?>
                </td>
                <td scope="row">
                 <img src="img/<?=$foto?>" height="100" width="100">
                </td>
                <td scope="row">
                  <a href="hal_admin.php?op=edit&id=<?php echo $id_kucing ?>"><button type="button"
                      class="btn btn-warning">Edit</button><br></a>
                  <a href="hal_admin.php?op=delete&id=<?php echo $id_kucing ?>"> <button type="button" class="btn btn-danger"
                      onclick="return confirm('Yakin ingin delete data?')">Delete</button></a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"></script>
</body>

</html>