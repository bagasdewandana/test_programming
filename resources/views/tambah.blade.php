<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Test Programming</title>
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <h3>Tambah Data</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="/koleksi/insert">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Kode Koleksi</label>
                        <input type="text" class="form-control" name="kode" required="required">
                    </div>
                    <div class="form-group">
                        <label>Kategori Koleksi</label>
                        <input type="text" class="form-control" name="kategori_koleksi" required="required">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Terima</label>
                        <input type="date" class="form-control" name="tanggal_terima" required="required">
                    </div>
                    <div class="form-group">
                        <label>Diterima</label>
                        <input type="text" class="form-control" name="diterima" required="required">
                    </div>
                    <div class="form-group">
                        <label>Nama Koleksi</label>
                        <input type="text" class="form-control" name="nama" required="required">
                    </div>
                    <div class="form-group">
                        <label>Nilai Barang</label>
                        <input type="number" class="form-control" name="nilai" required="required" placeholder="Rp">
                    </div>
                    <div class="form-group">
                        <label>Jumlah Barang</label>
                        <input type="number" class="form-control" name="jumlah" required="required">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pencatatan</label>
                        <input type="text" class="form-control" name="tanggalcatat" value="<?php echo date("Y m d") ?>" readonly>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>