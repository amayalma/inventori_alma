<?php
 $id_jenis = $_GET['id_jenis'];

 $nama_jenis = $_POST['nama_jenis'];

 include '../../config/koneksi.php';

 $query = mysqli_query($coon,"
        UPDATE barang SET 
        nama_barang='$nama_barang',
        id_jenis='id_jenis',
        harga_barang='harga_barang',
        stock='stock'
        WHERE id_barang='$id_barang'
    ");
 if($query){
        echo "<script>alter('Data Berhasil di Edit');</script>";
        echo "<script>window.location.href='index.php;</script>";
     } else {
        echo "<script>alter('Data Gagal di Edit');</script>";
        echo "<script>window.location.href='index.php;</script>";
     }
?>