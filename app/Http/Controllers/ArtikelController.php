<?php

namespace App\Http\Controllers;

use App\Artikel;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * function untuk menampilkan artikel & kategori
     * berbentuk json agar mudah ditampilkan kedalam datatables
     *
     * @param Request $request
     * @return void
     */
    public function ArtikelJson(Request $request){
        // panggil model artikel dan relasi dengan model kategori
        $artikels = Artikel::with('kategori')->get();
        
        // buat variabel array
        $data = [];

        // looping $artikels dan masukkan data ke dalam $data
        foreach($artikels as $key => $artikel){
            $data[$key]['nama_artikel'] = $artikel->title;
            $data[$key]['nama_kategori'] =  $artikel->kategori->name;
            $data[$key]['konten'] = Str::limit($artikel->content,100);
            $data[$key]['created_at'] = Carbon::parse($artikel->created_at)->isoFormat('D MMMM Y');
        }

            return datatables()->of($data)->make();
        }
}
