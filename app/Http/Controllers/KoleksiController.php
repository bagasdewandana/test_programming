<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KoleksiController extends Controller
{
    public function index()
    {
        $koleksi = DB::table('koleksi')->paginate(2);

        return view('index', ['koleksi' => $koleksi]);
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $koleksi = DB::table('koleksi')
            ->where('nama_koleksi', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('index', ['koleksi' => $koleksi]);
    }

    public function tanggal(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $koleksi = DB::table('koleksi')
            ->where('tanggal_terima', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('index', ['koleksi' => $koleksi]);
    }
    public function tambah()
    {
        return view('tambah');
    }
    public function insert(Request $request)
    {
        DB::table('koleksi')->insert([
            'kode_koleksi' => $request->kode,
            'kategori_koleksi' => $request->kategori_koleksi,
            'tanggal_terima' => $request->tanggal_terima,
            'diterima' => $request->diterima,
            'nama_koleksi' => $request->nama,
            'nilai_barang' => $request->nilai,
            'jumlah_barang' => $request->jumlah
        ]);
        return redirect('/koleksi');
    }
    public function edit($kode_koleksi)
    {
        $koleksi = DB::table('koleksi')->where('kode_koleksi', $kode_koleksi)->get();
        return view('edit', ['koleksi' => $koleksi]);
    }
    public function update(Request $request)
    {
        DB::table('koleksi')->where('kode_koleksi', $request->kode)->update([
            'kode_koleksi' => $request->kode,
            'kategori_koleksi' => $request->kategori_koleksi,
            'tanggal_terima' => $request->tanggal_terima,
            'diterima' => $request->diterima,
            'nama_koleksi' => $request->nama,
            'nilai_barang' => $request->nilai,
            'jumlah_barang' => $request->jumlah
        ]);
        return redirect('/koleksi');
    }
    public function hapus($kode_koleksi)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('koleksi')->where('kode_koleksi', $kode_koleksi)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/koleksi');
    }
}
