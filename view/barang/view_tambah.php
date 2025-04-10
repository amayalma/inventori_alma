<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <title>view tambah barang</title>
</head>
<body>
    <div class="container">
        <h1>Tambah Data Barang</h1>
        <form action="proses_tambah.php" method="post">
            <div class="mb-3">
                <label for="" class="form-labe;">id_barang</label>
                <input type="text" class="form-control" name="id_barang" id="" placeholder=""/>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">nama_barang</label>
                <input type="text" class="form-control" name="nama_barang" id="" placeholder=""/>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">id_jenis</label>
                <input type="text" class="form-control" name="id_jenis" id="" placeholder=""/>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">harga_barang</label>
                <input type="text" class="form-control" name="harga_barang" id="" placeholder=""/>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">stock</label>
                <input type="text" class="form-control" name="stock" id="" placeholder=""/>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <script  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"></script>
    </div>
</body>
</html>