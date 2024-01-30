<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
//untuk create
  $email = $_POST['email'];
  $nama_pengadopsi = $_POST['nama_pengadopsi'];
  $alamat_jalan = $_POST['alamat_jalan'];
  $kota = $_POST['kota'];
  $provinsi = $_POST['provinsi'];
  $kode_pos = $_POST['kode_pos'];
  $no_hp = $_POST['no_hp'];
  $id_kucing = $_GET['id'];
  

  //untuk insert
  $sql1 = "insert into pengadopsi values ('','$email','$nama_pengadopsi','$alamat_jalan','$kota','$provinsi','$kode_pos','$no_hp')";
  $q1 = mysqli_query($koneksi, $sql1);
  if ($q1) {
    $sukses = "Berhasil memasukkan data baru";
  } else {
    $error = "Gagal memasukkan data";
  }

  $id_pengadopsi = mysqli_insert_id($koneksi);
  $sql2 = "insert into transaksi(id_kucing, id_pengadopsi,tgl_trans) values ('$id_kucing','$id_pengadopsi','".date("Y-m-d")."')";
      $q1 = mysqli_query($koneksi, $sql2);
      if ($q1) {
        $id = mysqli_insert_id($koneksi);
        $sql1 = "update kucing set status = 'Teradopsi' where id_kucing = '$id_kucing'";
        $q1 = mysqli_query($koneksi, $sql1);
        header("location:cetak.php?id_transaksi=$id");
      } else {
        $error = "Gagal memasukkan data";
      }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="coba.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class=" container-fluid my-5 ">
    <div class="row justify-content-center ">
        <div class="col-xl-10">
            <div class="card shadow-lg ">
                <div class="row p-2 mt-4 justify-content-between mx-sm-2">
                    <div class="col">
                        <p class="text-muted space mb-0 shop"> Shop No.78618K</p> 
                        <p class="text-muted space mb-0 shop">Store Locator</p>   
                    </div>
                    <div class="col">
                        <div class="row justify-content-start ">
                            <div class="col">
                                <img class="irc_mi img-fluid cursor-pointer " src="images/logo.jpeg"  width="150" height="150" >
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <img class="irc_mi img-fluid bell" src="images/halal.png" width="50" height="50"  >
                    </div>
                </div>
                <div class="row  mx-auto justify-content-center text-center">
                    <div class="col-12 mt-3 ">
                        <nav aria-label="breadcrumb" class="second ">
                            <ol class="breadcrumb indigo lighten-6 first  ">
                                <li class="breadcrumb-item font-weight-bold "><a class="black-text text-uppercase " href="header.php"><span class="mr-md-3 mr-1">BACK TO SHOP</span></a><i class="fa fa-angle-double-right " aria-hidden="true"></i></li>
                                <!--  <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase" href="#"><span class="mr-md-3 mr-1">SHOPPING BAG</span></a><i class="fa fa-angle-double-right text-uppercase " aria-hidden="true"></i></li>  -->
                                <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase active-2" href="#"><span class="mr-md-3 mr-1">CHECKOUT</span></a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            
                <div class="row justify-content-around">
                    <div class="col-md-5">
                        <div class="card border-0">
                            <div class="card-header card-2 pb-0">
                                <h2 class="card-title space ">Checkout</h2>
                                <p class="card-text text-muted mt-4  space">SHIPPING DETAILS</p>
                                <hr class="my-0">
                            </div>
                            <div class="card-body">
                                <!--  <div class="row justify-content-between">
                                    <div class="col-auto mt-0"><p><b>BBBootstrap Team Vasant Vihar  110020 New Delhi India</b></p></div>
                                    <div class="col-auto"><p><b>BBBootstrap@gmail.com</b> </p></div>
                                </div>  -->
                                <div class="row mt-4">
                                    <div class="col"><p class="text-muted mb-2">Personal Information</p><hr class="mt-0"></div>
                                </div>
                                <form method="POST">
                                <div class="form-group">
                                    <label for="NAME" class="small text-muted mb-1">Email Address</label>
                                    <input type="text" class="form-control form-control-sm" name="email" id="NAME" aria-describedby="helpId" placeholder="Your email">
                                </div>
                                <div class="form-group">
                                    <label for="NAME" class="small text-muted mb-1">Full Name</label>
                                    <input type="text" class="form-control form-control-sm" name="nama_pengadopsi" id="NAME" aria-describedby="helpId" placeholder="Your name">
                                </div>
                                <div class="form-group">
                                    <label for="NAME" class="small text-muted mb-1">Phone</label>
                                    <input type="text" class="form-control form-control-sm" name="no_hp" id="NAME" aria-describedby="helpId" placeholder="Your phone">
                                </div>
                                <div class="form-group">
                                    <label for="NAME" class="small text-muted mb-1">Street Address</label>
                                    <input type="text" class="form-control form-control-sm" name="alamat_jalan" id="NAME" aria-describedby="helpId" placeholder="Street Address">
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-sm-6 pr-sm-2">
                                        <div class="form-group">
                                            <label for="NAME" class="small text-muted mb-1">Town/City</label>
                                            <input type="text" class="form-control form-control-sm" name="kota" id="NAME" aria-describedby="helpId" placeholder="Town/city">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="NAME" class="small text-muted mb-1">Province</label>
                                            <input type="text" class="form-control form-control-sm" name="provinsi" id="NAME" aria-describedby="helpId" placeholder="Province">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="NAME" class="small text-muted mb-1">Postcode</label>
                                            <input type="text" class="form-control form-control-sm" name="kode_pos" id="NAME" aria-describedby="helpId" placeholder="Postcode">
                                        </div>
                                    </div>
                                
                                </div>
                                <div class="row mb-md-5">
                                    <div class="col">
                                        <button type="submit" name="submit" id="" class="btn  btn-lg btn-block ">SUBMIT</button>
                                        
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                    <?php
                    $sql2 = "select * from kucing where id_kucing = '$_GET[id]'";
                    $q2 = mysqli_query($koneksi, $sql2);
                    $urut = 1;
                    $r2 = mysqli_fetch_array($q2);
                    ?>
                    <div class="col-md-5">
                        <div class="card border-0 ">
                            <div class="card-header card-2 mb-4">
                                <p class="card-text text-muted mt-md-4 mb-2 space">YOUR CAT <span class=" small text-muted ml-2 cursor-pointer">EDIT SHOPPING BAG</span> </p>
                                <hr class="my-2">
                            </div>
                            <div class="card-body pt-0">
                                <div class="row  justify-content-between">
                                    <div class="col-auto ">
                                        <div class="media flex-column flex-sm-row">
                                            <img class=" img-fluid" src="img/<?=$r2["foto"]?>" width="62" height="62">
                                            <div class="media-body  my-auto">
                                                <div class="row m-1">
                                                    <div class="col-auto"><p class="mb-0"><b><?=$r2["nama"]?> <?=$r2["ras"]?> <?=$r2["usia"]?> <br> <?=$r2["gender"] ?></b></p></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--
                                    <div class=" pl-0 flex-sm-col col-auto  my-auto"> <p class="boxed-1">2</p></div>
                                    <div class=" pl-0 flex-sm-col col-auto  my-auto "><p><b>179 SEK</b></p></div>
                                    -->
                                </div>
                                <!--
                                <hr class="my-2">
                                <div class="row  justify-content-between">
                                    <div class="col-auto col-md-7">
                                        <div class="media flex-column flex-sm-row">
                                            <img class=" img-fluid " src="https://i.imgur.com/9MHvALb.jpg" width="62" height="62">
                                            <div class="media-body  my-auto">
                                                <div class="row ">
                                                    <div class="col"><p class="mb-0"><b>EC-GO Bag Standard</b></p><small class="text-muted">2 Week Subscription</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pl-0 flex-sm-col col-auto  my-auto"> <p class="boxed">3</p></div>
                                    <div class="pl-0 flex-sm-col col-auto my-auto"><p><b>179 SEK</b></p></div>
                                </div>
                                <hr class="my-2">
                                <div class="row  justify-content-between">
                                    <div class="col-auto col-md-7">
                                        <div class="media flex-column flex-sm-row">
                                            <img class=" img-fluid " src="https://i.imgur.com/6oHix28.jpg" width="62" height="62">
                                            <div class="media-body  my-auto">
                                                <div class="row ">
                                                    <div class="col"><p class="mb-0"><b>EC-GO Bag Standard</b></p><small class="text-muted">2 Week Subscription</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pl-0 flex-sm-col col-auto  my-auto"> <p class="boxed-1">2</p></div>
                                    <div class="pl-0 flex-sm-col col-auto my-auto"><p><b>179 SEK</b></p></div>
                                </div>
                                -->
                                <hr class="my-4">
                                
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>