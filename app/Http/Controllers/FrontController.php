<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Kategori;
use App\Tag;

class FrontController extends Controller
{
    public function index()
    {
        $artikel = Artikel::orderBy('created_at', 'desc')->get();
        $tag = Tag::all();

        return view('front.index', compact('artikel', 'tag'));
    }
    public function catalog(Request $request)
    {
        $artikel = Artikel::orderBy('created_at', '', 'desc')->get();
        $tag = Tag::all();

        // $cari = $request->cari;

        // if ($cari) {
        //     $artikel = Artikel::where('judul', 'LIKE', "%$cari%")->get();
        // }
        return view('front.catalog', compact('artikel', 'tag'));
    }
    public function detailblog(Artikel $artikel)
    {
        return view('front.details1', compact('artikel'));
    }
}
