<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice Cart</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        * {
            font-family: 'Titillium Web', sans-serif;
        }

        .product {
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }

        table,
        th,
        tr {
            text-align: center;
        }

        .title2 {
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }

        h2 {
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }

        table th {
            background-color: #efefef;
        }
    </style>
</head>

<body>

    <div class="container" style="width: 65%">
        <?php
        $koneksi = mysqli_connect("localhost", "root", "", "db_adopt");
        $id = $_GET['id_transaksi'];

        //Menampilkan data pada tabel detail (id transaksi, nama barang dan jumlah barang)
        $trans = "SELECT * FROM transaksi 
        inner join pengadopsi on transaksi.id_pengadopsi = pengadopsi.id_pengadopsi 
        where transaksi.id_transaksi='$id'";
        $query = mysqli_query($koneksi, $trans);
        $data = mysqli_fetch_array($query);
        ?>
        <div style="clear: both"></div>
        <h3 class="title2">Nota Pembelian</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                No. Invoice : INV-<?= $id ?> <br>
                Tanggal Pembelian: <?= $data['tgl_trans'] ?> <br>
                Nama: <?= $data['nama_pengadopsi'] ?> <br>
                Alamat: <?= $data['alamat_jalan'] ?>, <?= $data['kota'] ?>, <?= $data['provinsi'] ?>
                <tr>
                    <th width="30%">Keterangan</th>
                    <th width="10%">Identitas</th>
                </tr>

                <?php
                $prod = "SELECT * FROM transaksi 
            inner join kucing on transaksi.id_kucing = kucing.id_kucing 
            where transaksi.id_transaksi='$id'";
                $query2 = mysqli_query($koneksi, $prod);
                while ($row = mysqli_fetch_array($query2)) { ?>
                    <tr>
                        <td>Nama kucing </td>
                        <td><?= $row["nama"] ?></td>
                    </tr>
                    <tr>
                        <td>Ras </td>
                        <td><?= $row["ras"] ?></td>
                    </tr>
                    <tr>
                        <td>Usia </td>
                        <td><?= $row["usia"] ?></td>
                    </tr>
                    <tr>
                        <td>Gender </td>
                        <td><?= $row["gender"] ?></td>
                    </tr>
                <?php } ?>
                
            </table>
        </div>

    </div>

    <script>
        window.print();
    </script>

</body>

</html>