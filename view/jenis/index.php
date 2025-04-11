<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Data jenis</title>
</head>
<body>
    <div class="container">
        <h1>Data jenis</h1>
        <a href="view_tambah.php" class="btn btn-primary"> <i class="fa-solid fa-cart-plus"></i> Tambah Data jenis</a>
        <br></br>
        <table class="table table-striped table-bprdered">
            <thead>
                <tr>
                    <th>id_jenis</th>
                    <th>nama_jenis</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../../config/koneksi.php';
                $query = mysqli_query($conn,"SELECT * FROM jenis");
                if(mysqli_num_rows($query) > 0){
                    $id_jenis = 1;
                    while($result=mysqli_fetch_assoc($query)){
                        ?>
                        <tr>
                            <td><?php echo $result['id_jenis'] ?></td>
                            <td><?php echo $result['nama_jenis'] ?></td>
                            <td>
                              <a class="btn btn-warning btn-sm" href="view_edit.php?id=<?php echo $result['id_jenis']?>">
                              <i class="fa-solid fa-file-pen"></i> Edit</a>
                                <a href="proses_hapus.php?id=<?php echo $result['id_jenis'];?>" 
                                onclick="return confirm('yakin?')"
                                    class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i> Hapus</a>
                            </td>
                    </tr>
                    <?php
                    $id_jenis++;
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