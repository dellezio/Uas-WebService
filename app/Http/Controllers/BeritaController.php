<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
   
    public function index()
    {
        return Berita::all();
    }

    
    public function store(Request $request)
    {
        $request -> validate([
            'kategori' => ['required'],
            'judul' => ['required'],
            'isi' => ['required']
        ]);

        $berita = auth()->user()->beritas()->create($this->beritaStore());
        
        return $berita;
    }

   
    public function show($id)
    {
        //
    }

  
    public function update(Request $request, Berita $berita)
    {
        $berita->update($this->beritaStore());

        return $berita;
    }

    
    public function destroy(Berita $berita)
    {
        $berita->delete();
    
        return response()->json('File Anda Berhasil Di Hapus');
    }
    public function beritaStore(){
    return [
        'kategori' => request('kategori'),
        'judul' => request('judul'),
        'isi' => request('isi')
    ];
    }
}
