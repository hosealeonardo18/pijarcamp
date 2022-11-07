<?php

include 'koneksi.php';
$barang = query("SELECT * FROM produk");


// ambil data
$id = $_GET["id"];


// query data produk
$produk = query("SELECT * FROM produk WHERE id = $id")[0];



if (isset($_POST["submit"])) {
    if (update($_POST) > 0) {
        echo "<script>
        alert('Data Berhasil diubah');
        document.location.href = 'index.php';
    </script>";
    } else {
        echo "
        <script>
        alert('Data Gagal diubah');
        document.location.href = 'index.php';
    </script>  
        ";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PijarCamp</title>

    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- cssBootsrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- myCSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#"><img src="assets/img/PijarCamp.png" alt="pijarcamp" width="80px" height="80px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
        </div>
    </nav> -->

    <div class="header">
        <div class="container">
            <h1 class="text-left mt-5">Ubah Data Barang</h1>



            <div class="card border-primary mb-3 mt-5 text-justify mb-5" style="max-width: 40rem;">
                <div class="card-body">

                    <form action="" method="post">

                        <div class="form-group" action="" method="post">
                            <input type="hidden" name="id" class="form-control" id="id" value="<?= $produk["id"]; ?>">


                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" name="nama_barang" class="form-control" id="nama_barang" value="<?= $produk["nama_produk"]; ?>">
                        </div>
                        <div class="form-group" action="" method="post">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" id="keterangan" value="<?= $produk["keterangan"]; ?>">
                        </div>
                        <div class="form-group" action="" method="post">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" class="form-control" id="harga" value="<?= $produk["harga"]; ?>">
                        </div>
                        <div class="form-group" action="" method="post">
                            <label for="jumlah">Jumlah</label>
                            <input type="text" name="jumlah" class="form-control" id="jumlah" value="<?= $produk["jumlah"]; ?>">

                        </div>

                        <button class="btn btn-success" type="submit" name="submit"> Update Data</button>

                        <a href="index.php" class="btn btn-danger">Cancel</a>

                    </form>
                </div>
            </div>


        </div>
    </div>

</body>

</html>