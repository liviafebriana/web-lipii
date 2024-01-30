<?php
include 'koneksi.php';
if (isset($_POST['submit'])) { //untuk create
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
        $sql1 = "update kucing set status = 'Teradopsi' where id_kucing = '$id_kucing'";
        $q1 = mysqli_query($koneksi, $sql1);
        $sukses = "Berhasil memasukkan data baru";
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
  <title>Registrasi</title>
  <link rel="stylesheet" href="css/regis2.css?v2">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto+Condensed&display=swap" rel="stylesheet">

</head>

<body>

  <header>
    <div class="container">
      <div class="navigation">

        <div class="logo">
          <img src="images/paw.png" alt="" width="100px" height="100px">
          <div class="judul">
            <p>Paw Paw</p>
          </div>
        </div>
        <div class="secure">
          <img src="images/halal.png" alt="" width="100px" height="100px">

        </div>
      </div>
    </div>

    <section class="content">

      <div class="details shadow">
        <div class="details__item">


          <div class="item__details">
            <div class="item__title">
              <p>Kucing Kamu siap diproses</p>
            </div>
            <div class="item__description">
              <p>1 step lagi dimana kamu bisa manjain peliharaanmu</p>
            </div>

          </div>
        </div>

      </div>
  </header>


  <div class="container">
    <div class="payment">
      
      <div class="payment__info">
        <div class="payment__cc">
          <div class="payment__title">
            Personal Information
          </div>
          <form method="POST">
            <div class="form__cc">

              <div class="row">
                <div class="field">
                  <div class="title">
                    Email Address
                  </div>
                  <input type="text" name="email" class="input txt" />
                </div>
              </div>

              <div class="row">
                <div class="field">
                  <div class="title">
                    Full Name
                  </div>
                  <input type="text" name="nama_pengadopsi" class="input txt" />
                </div>
              </div>

              <div class="row">
                <div class="field">
                  <div class="title">
                    Street Address
                  </div>
                  <input type="text" name="alamat_jalan" class="input txt" />
                </div>
              </div>

              <div class="row">
                <div class="field small">
                  <div class="title">
                    Town/City
                  </div>
                  <input type="text" name="kota" class="input txt" />
                </div>
                <div class="field small">
                  <div class="title">
                    Province
                  </div>
                  <input type="text" name="provinsi" class="input txt" />
                </div>
                <div class="field small">
                  <div class="title">
                    Postcode
                  </div>
                  <input type="text" name="kode_pos" class="input txt" />
                </div>
              </div>


              <div class="row">
                <div class="field">
                  <div class="title">
                    Phone
                  </div>
                  <input type="text" name="no_hp" class="input txt" />
                </div>
              </div>

              <div class="container">
              <div class="actions">
                <input type="submit" name="submit" class="btn action__submit">
                <i class="icon icon-arrow-right-circle"></i>
                </input>
                <a href="header.php" class="backBtn">Go Back to Shop</a>
              </div>

            </div>

          <?php
          $sql2 = "select * from kucing where id_kucing = '$_GET[id]'";
          $q2 = mysqli_query($koneksi, $sql2);
          $urut = 1;
          $r2 = mysqli_fetch_array($q2);
          ?>
          
          <div class="wcf-order-wrap">
            <h3 id="order_review_heading">Your order</h3>

            <div id="order_review" class="woocommerce-checkout-review-order">
              <table class="shop_table woocommerce-checkout-review-order-table" data-update-time="1698126741">
                <thead>
                  <tr>
                    <th class="product-name">Product</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="cart_item">
                    <td class="product-name">
                      <div class="wcf-product-image">
                        <div class="wcf-product-thumbnail"><img width="300" height="534" src="img/<?=$r2["foto"]?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy"> </div>
                        <div class="wcf-product-name"><?=$r2["nama"]?> <?=$r2["ras"]?> <?=$r2["usia"]?> <br> <?=$r2["gender"] ?></div>
                      </div>
                    </td>
                  </tr>
                </tbody>

                
              </table>
            </div>
          </div>
          </form>

        </div>

      </div>
    </div>
  </div>


  </section>
  </div>
</body>

</html>