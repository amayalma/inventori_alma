<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <title>view tambah jenis</title>
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
          <a class="nav-link active" aria-current="page" href="#">Jenis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Barang</a>
        </li>
      </form>
    </div>
  </div>
</nav>

    <div class="container">
        <h1>Tambah Data Jenis</h1>
        <?php
        include '../../config/koneksi.php';
    $id_jenis=$_GET['id'];
    $query=mysqli_query($conn, "SELECT * FROM jenis WHERE id_jenis='$id_jenis'");
    $result=mysqli_fetch_array(($query));
    ?>
       <form action="proses_tambah.php?id=<?php echo $result['id_jenis']?>" method="post">
            <div class="mb-3">
                <label for="" class="form-labe;">id_jenis</label>
                <input type="text" class="form-control" name="id_jenis" value="<?php echo $result['id_jenis']?>" id="exampleInputEmail1" aria-describedby="emailHelp"/>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">nama_jenis</label>
                <input type="text" class="form-control" name="nama_jenis" value="<?php echo $result['nama_jenis']?>" id="exampleInputPassword1"/>
            </div>
            <button type="sumbit" class="btn btn-primary">Sumbit</button>
        </form>
        <script  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"></script>
    </div>
</body>
</html>