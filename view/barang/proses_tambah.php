<?php
 include '../../config/koneksi.php';

 $id_barang = $_POST['id_barang'];
 $nama_barang = $_POST['nama_barang'];
 $id_jenis = $_POST['id_jenis'];
 $harga_barang = $_POST['harga_barang'];
 $stock = $_POST['stock'];

 $sql = "INSERT INTO barang (id_barang, nama_barang, id_jenis, harga_barang, stock) VALUES ('$id_barang', '$nama_barang', '$id_jenis', '$harga_barang', '$stock')";
 if (mysqli_query($conn, $sql)) {
    echo "data berhasil ditambahkan!";
    header("Location: index.php");
 }else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }

 mysqli_close($conn);
?>