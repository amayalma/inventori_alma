<?php
 $id_barang = $_GET['id'];

 $nama_barang = $_POST['nama_barang'];
 $id_jenis = $_POST['id_jenis'];
 $harga_barang = $_POST['harga_barang'];
 $stock = $_POST['stock'];

 include '../../config/koneksi.php';

 $query = mysqli_query($conn,"
        UPDATE barang SET 
        nama_barang='$nama_barang',
        id_jenis='$id_jenis',
        harga_barang='$harga_barang',
        stock='$stock'
        WHERE id_barang='$id_barang'
    ");
   if($query){
      echo "<script>alert('Data Berhasil di Edit');</script>";
      echo "<script>window.location.href='index.php'</script>";
   } else {
      echo "<script>alert('Data Gagal di Edit');</script>";
      echo "<script>window.location.href='index.php'</script>";
   }
?>