<?php

include 'koneksi.php';
$barang = query("SELECT * FROM produk");

if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "<script>
        alert('Data Berhasil ditambahkan');
        document.location.href = 'index.php';
    </script>";
    } else {
        echo "
        <script>
        alert('Data Gagal ditambahkan');
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
    <title>Hosea Leonardo | Pijar Camp</title>

    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- cssBootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
 
    <!-- myCSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="assets/img/PijarCamp.png" alt="pijarcamp" width="80px" height="80px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

    </nav>

    <div class="header">
        <div class="container">
            <h1 class="text-left mt-5">Data Barang</h1>
            <div class="card border-primary mb-3 mt-5 text-justify mb-5" style="max-width: 40rem;">
                <div class="card-body">

                    <form action="" method="post">

                        <div class="form-group" action="" method="post">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" name="nama_barang" class="form-control" id="nama_barang" require>
                        </div>
                        <div class="form-group" action="" method="post">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" id="keterangan" require>
                        </div>
                        <div class="form-group" action="" method="post">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" class="form-control" id="harga" require>
                        </div>
                        <div class="form-group" action="" method="post">
                            <label for="jumlah">Jumlah</label>
                            <input type="text" name="jumlah" class="form-control" id="jumlah" require>
                        </div>

                        <button class="btn btn-success mt-5" type="submit" name="submit"> Tambah Data</button>

                    </form>


                </div>
            </div>

        </div>
    </div>


    <div class="container">
        <table class="table mt-5 pt-5">
            <thead>
                <th scope="col">No</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($barang as $row) : ?>
                    <tr>
                        <td scope="row"><?= $i; ?></td>
                        <td><?= $row["nama_produk"]; ?></td>
                        <td><?= $row["keterangan"]; ?></td>
                        <td>Rp. <?= $row["harga"]; ?></td>
                        <td><?= $row["jumlah"]; ?> Pcs</td>
                        <td>
                            <a href="update.php?id=<?= $row["id"]; ?>" type="button" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>

                            <a type="button" class="btn btn-danger btn-sm" href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin?');"><i class="bi bi-trash-fill"></i></a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>



</body>

</html>