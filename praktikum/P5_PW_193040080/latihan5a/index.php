<?php

//melakukan koneksi ke database
$conn = mysqli_connect("localhost","root","") or die("koneksi ke DB gagal");

//memilih database
mysqli_select_db($conn, "tubes_193040080") or die("database salah!");

//query mengambil objek dari tabel didalam database
$result = mysqli_query ($conn, "SELECT * FROM apparel");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan5a</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1 align="center">IndoDistro Official</h1>
    <table align="center" border="1" cellspacing="0" cellpadding="7">
        <tr bgcolor="salmon" height="50">
            <th>No.</th>
            <th>Gambar Produk</th>
            <th width="50">Jenis Produk</th>
            <th width="200">Nama</th>
            <th>Brand</th>
            <th width="50">Bahan</th>
            <th>Ukuran</th>
            <th width="200">Deskripsi Produk</th>
            <th>Harga</th>
        </tr>

        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr bgcolor="white" align="center">
                <td bgcolor="yellow"><?= $i; ?></td>
                <td>
                    <img width="200" src="assets/img/<?= $row["gambar"] ?>">
                </td>
                <td><?= $row["jenis"] ?></td>
                <td><?= $row["nama"] ?></td>
                <td><?= $row["brand"] ?></td>
                <td><?= $row["bahan"] ?></td>
                <td><?= $row["ukuran"] ?></td>
                <td><?= $row["deskripsi"] ?></td>
                <td>Rp <?= $row["harga"] ?></td>
            </tr>
            <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>

</html>