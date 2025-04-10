<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <title>Data barang</title>
</head>
<body>
    <div class="container">
        <h1>Data Barang</h1>
        <a href="view_tambah.php" class="btn btn-primary"> Tambah Data Barang</a>
        <br></br>
        <table class="table table-striped table-bprdered">
            <thead>
                <tr>
                    <th>id_barang</th>
                    <th>nama_barang</th>
                    <th>id_jenis</th>
                    <th>harga_barang</th>
                    <th>stock</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../../config/koneksi.php';
                $query = mysqli_query($conn,"SELECT * FROM barang");
                if(mysqli_num_rows($query) > 0){
                    $no = 1;
                    while($result=mysqli_fetch_assoc($query)){
                        ?>
                        <tr>
                            <td><?php echo $result['id_barang'] ?></td>
                            <td><?php echo $result['nama_barang'] ?></td>
                            <td><?php echo $result['id_jenis'] ?></td>
                            <td><?php echo $result['harga_barang'] ?></td>
                            <td><?php echo $result['stock'] ?></td>
                            <td>
                                <a href="view_edit.php?id=<?php echo $result['id_barang'];?>"  class="btn btn-warning">Edit</a>
                                <a href="proses_hapus.php?id=<?php echo $result['id_barang'];?>"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                            </td>
                    </tr>
                    <?php
                    $no++;
                    }
                }else{
                    echo"Belum ada data";
                }
                ?>
            </tbody>
            </table>
        </div>
</body>
</html>