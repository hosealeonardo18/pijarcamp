<?php


include 'koneksi.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "<script>
        alert('Data Berhasil dihapus');
        document.location.href = 'index.php';
    </script>";
}
