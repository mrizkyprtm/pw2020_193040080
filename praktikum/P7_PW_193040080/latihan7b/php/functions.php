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
                    ('', '$gambar', '$jenis', '$nama', '$brand', '$bahan', '$ukuran', '$deskripsi', '$harga')";

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

function registrasi($data) {
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["username"]);

    //cek apakah username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah digunakan!');
            </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
?>