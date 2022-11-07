<?php

$server = "localhost";
$username = "root";
$password = "";
$nama_database = "pijarcamp";

$db = mysqli_connect($server, $username, $password, $nama_database);

if (!$db) {
    echo "gagal koneksi database";
}

function query($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}



function tambah($data)
{
    global $db;
    $nama_barang = htmlspecialchars($data["nama_barang"]);
    $keterangan =  htmlspecialchars($data["keterangan"]);
    $harga =  htmlspecialchars($data["harga"]);
    $jumlah = htmlspecialchars($data["jumlah"]);

    $insert = "INSERT INTO produk
            VALUES
            ('', '$nama_barang','$keterangan', '$harga', '$jumlah')
    
    ";

    mysqli_query($db, $insert);

    return mysqli_affected_rows($db);
}


function hapus($id)
{
    global $db;
    mysqli_query($db, "DELETE FROM produk WHERE id = $id");

    return mysqli_affected_rows($db);
}


function update($data)
{
    global $db;

    $id = htmlspecialchars($data["id"]);
    $nama_barang = htmlspecialchars($data["nama_barang"]);
    $keterangan =  htmlspecialchars($data["keterangan"]);
    $harga =  htmlspecialchars($data["harga"]);
    $jumlah = htmlspecialchars($data["jumlah"]);

    $update = "UPDATE produk SET
                nama_produk = '$nama_barang',
                keterangan = '$keterangan',
                harga = '$harga',
                jumlah = '$jumlah'
                WHERE id = $id
";

    mysqli_query($db, $update);

    return mysqli_affected_rows($db);
}
