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
                <h3>Data Koleksi</h3>
                <form action="/koleksi/cari" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" name="cari" placeholder="Search..." value="{{ old('cari') }}">
                        <input type="submit" value="CARI">
                    </div>
                </form>
                <form action="/koleksi/tanggal" method="GET">
                    <div class="input-group mb-3">
                        <input type="date" name="start_date">
                        <input type="submit" value="CARI">
                    </div>
                </form>
                <br />
            </div>

            <div class="card-body">
                <a href="/koleksi/tambah" type="button" class="btn btn-success">Tambah data Baru</a>
                <br />
                <br />
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Kode Kategori</th>
                            <th>Diterima</th>
                            <th>Nama Koleksi</th>
                            <th>Nilai Barang</th>
                            <th>Jumlah Barang</th>
                            <th>Tanggal Diterima</th>
                            <th>Tanggal Pencatatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($koleksi as $k)
                        <tr>
                            <td>{{ $k->kategori_koleksi }}</td>
                            <td>{{ $k->diterima }}</td>
                            <td>{{ $k->nama_koleksi }}</td>
                            <td>@money ($k->nilai_barang)</td>
                            <td>{{ $k->jumlah_barang }}</td>
                            <td>{{ $k->tanggal_terima }}</td>
                            <td>{{ $k->tanggal_catat }}</td>
                            <td><a href="/koleksi/edit/{{ $k->kode_koleksi }}" type="button" class="btn btn-warning">Edit</a> <br /><br />
                                <a href="/koleksi/hapus/{{ $k->kode_koleksi }}" type="button" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <br />
                Halaman : {{ $koleksi->currentPage() }} <br />
                Jumlah Data : {{ $koleksi->total() }} <br />
                Data Per Halaman : {{ $koleksi->perPage() }} <br />
                {{ $koleksi->links() }}
            </div>
        </div>
    </div>
</body>

</html>