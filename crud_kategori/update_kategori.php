<?php 
include '../library/koneksi.php';

$id = $_GET['id'];
$nama_kategori = $_GET['nam_kat'];

$query = "UPDATE tbl_kategori SET nama_kategori='$nama_kategori' WHERE id='$id' ";
$hasil = mysqli_query($koneksi, $query);

if ($hasil) {
    echo "<script>
            alert('Edit data berhasil!');
            window.location='view_kategori.php';
        </script>";
}else {
    echo "<script>
            alert('Edit data gagal!');
            window.location='edit_kategori.php';
        </script>";
}
?>