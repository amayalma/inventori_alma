<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <title>view edit barang</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Jenis</a>
        </li>
      </form>
    </div>
  </div>
</nav>

    <div class="container">
        <h1>Tambah Data Barang</h1>
        <?php
        include '../../config/koneksi.php';    
    $id=$_GET['id'];
    $query=mysqli_query($conn, "SELECT * FROM barang WHERE id_barang='$id'");
    $result=mysqli_fetch_array(($query));
    ?>
        <form action="proses_edit.php?id=<?php echo $result['id_barang']?>" method="post">
            <div class="mb-3">
                <label for="" class="form-labe;">id_barang</label>
                <input type="text" class="form-control" name="id_barang" value="<?php echo $result['id_barang']?>" id="exampleInputEmail1" aria-describedby="emailHelp"/>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">nama_barang</label>
                <input type="text" class="form-control" name="nama_barang" value="<?php echo $result['nama_barang']?>" id="exampleInputPassword1"/>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">id_jenis</label>
                <input type="text" class="form-control" name="id_jenis" value="<?php echo $result['id_jenis']?>" id="exampleInputPassword1"/>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">harga_barang</label>
                <input type="text" class="form-control" name="harga_barang" value="<?php echo $result['harga_barang']?>" id="exampleInputPassword1"/>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">stock</label>
                <input type="text" class="form-control" name="stock" value="<?php echo $result['stock']?>" id="exampleInputPassword1"/>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <script  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"></script>
    </div>
</body>
</html>