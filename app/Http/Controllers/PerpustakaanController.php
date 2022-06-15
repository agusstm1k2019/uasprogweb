<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perpustakaan;
use App\Models\Jenis;

class PerpustakaanController extends Controller
{
    
    public function index()
    {
        $rows = Perpustakaan::all();
        return view('perpustakaan.index', compact('rows'));
    }

    public function create()
    {
        $jenis_rows = Jenis::all();
        return view('perpustakaan.add', compact('jenis_rows'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
        'judul_buku' => 'bail|required|unique:tb_perpustakaan',
        'penerbit_buku' => 'required'
        ],
        [
        'judul_buku.required' => 'judul buku wajib diisi',
        'judul_buku.unique' => 'judul buku sudah ada',
        'penerbit_buku.required' => 'penerbit buku wajib diisi'
        ]);

        Perpustakaan::create([
        'judul_buku' => $request->judul_buku,
        'penerbit_buku' => $request->penerbit_buku,
        'tahun_buku' => $request->tahun_buku,
        'jenis_buku' => $request->jenis_buku,
        'lokasi_buku' => $request->lokasi_buku
        ]);

        return redirect('perpustakaan');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $rows = Perpustakaan::where('judul_buku', 'like', "%" . $keyword . "%")->paginate();
        return view('Perpustakaan.index', compact('rows'));
    }

    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $row = Perpustakaan::findOrFail($id);
        return view('perpustakaan.edit', compact('row'));
    }

    public function lihat($id)
    {
        $row = Perpustakaan::findOrFail($id);
        return view('perpustakaan.lihat', compact('row'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
        'judul_buku' => 'bail|required|unique:tb_perpustakaan',
        'penerbit_buku' => 'required'
        ],
        [
        'judul_buku.required' => 'judul buku wajib diisi',
        'judul_buku.unique' => 'judul buku sudah ada',
        'penerbit_buku.required' => 'penerbit buku wajib diisi'
        ]);

        $row = Perpustakaan::findOrFail($id);
        $row->update([
        'judul_buku' => $request->judul_buku,
        'penerbit_buku' => $request->penerbit_buku,
        'tahun_buku' => $request->tahun_buku,
        'jenis_buku' => $request->jenis_buku,
        'lokasi_buku' => $request->lokasi_buku
        ]);

        return redirect('perpustakaan');
    }

    
    public function destroy($id)
    {
        $row = Perpustakaan::findOrFail($id);
        $row->delete();
        return redirect('perpustakaan');
    }
}
