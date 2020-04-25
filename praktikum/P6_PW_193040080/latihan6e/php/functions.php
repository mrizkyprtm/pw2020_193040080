<?php
// function untuk melakukan koneksi ke database
function koneksi(){
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke database gagal.");
    mysqli_select_db($conn, "tubes_193040080") or die("database salah!");

    return $conn;
}

// function untuk melakukan query ke database
function query($sql){
    $conn = koneksi();
    $result = mysqli_query($conn, $sql);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data) {
    $conn = koneksi();

    $gambar = htmlspecialchars($data['gambar']);
    $jenis = htmlspecialchars($data['jenis']);
    $nama = htmlspecialchars($data['nama']);
    $brand = htmlspecialchars($data['brand']);
    $bahan = htmlspecialchars($data['bahan']);
    $ukuran = htmlspecialchars($data['ukuran']);
    $deskripsi = $data['deskripsi'];
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO apparel
                    VALUES
                    ('','$gambar', '$jenis', '$nama', '$brand', '$bahan', '$ukuran', '$deskripsi', '$harga')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM apparel WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data){
    $conn = koneksi();

    $id = $data['id'];
    $gambar = htmlspecialchars($data['gambar']);
    $jenis = htmlspecialchars($data['jenis']);
    $nama = htmlspecialchars($data['nama']);
    $brand = htmlspecialchars($data['brand']);
    $bahan = htmlspecialchars($data['bahan']);
    $ukuran = htmlspecialchars($data['ukuran']);
    $deskripsi = $data['deskripsi'];
    $harga = htmlspecialchars($data['harga']);

    $queryubah = "UPDATE apparel
                    SET
                    gambar = '$gambar',
                    jenis = '$jenis',
                    nama = '$nama',
                    brand = '$brand',
                    bahan = '$bahan',
                    ukuran = '$ukuran',
                    deskripsi = '$deskripsi',
                    harga = '$harga'
                WHERE id = '$id' ";

    mysqli_query($conn, $queryubah);

    return mysqli_affected_rows($conn);
}
?>