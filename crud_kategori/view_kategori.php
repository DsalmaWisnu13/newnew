<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Kategori</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include '../library/koneksi.php';
            
            $no = 1;
            $query = "SELECT * FROM tbl_kategori";
            $hasil = mysqli_query($koneksi, $query);
            while($data = mysqli_fetch_array($hasil)) {
            ?>
            <tr>
                <th><?=$no;?></th>
                <th><?=$data['nama_kategori'];?></th>
                <th>
                    <a href="edit_kategori.php?id=<?= $data['id'];?>">Ubah</a>
                    <a href="delete_kategori.php?id=<?=$data['id'];?>">Hapus</a>
                </th>
            </tr>
            <?php 
            $no++;
            } ?>
        </tbody>
    </table>

    <br>
    <a href="create_kategori.php">Tambah Data Lagi~</a>
</body>
</html>