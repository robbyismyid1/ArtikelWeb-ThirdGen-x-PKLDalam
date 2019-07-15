<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Artikel;
use App\Tag;
use App\Kategori;
use File;
use Session;
use Auth;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::with('kategori', 'tag', 'user')->get();
        $response = [
            'success' => true,
            'data' =>  $artikel,
            'message' => 'Berhasil ditampilkan.'
        ];
        return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
       
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     // $request->validate([
    //     //     'judul' => 'required|unique:artikels',
    //     //     'konten' => 'required|min:30',
    //     //     'foto' => 'required|mimes:jpeg,jpg,png,gif|required|max:2048',
    //     //     'kategori_id' => 'required',
    //     //     'tag_id' => 'required'
    //     // ]);
    //    $artikel = new Artikel();
    //    $artikel->judul = $request->judul;
    //    $artikel->slug = str_slug($request->judul, '-');
    //    $artikel->konten = $request->konten;
    //    $artikel->user_id = 1;
    //    $artikel->kategori_id = $request->kategori;

    //    if ($request->hasFile('foto')){
    //        $file = $request->file('foto');
    //        $path = public_path().
    //                        '/assets/img/artikel/';
    //        $filename = str_random(6).'_'
    //                    .$file->getClientOriginalName();
    //        $uploadSuccess = $file->move(
    //            $path,
    //            $filename
    //        );
    //        $artikel->foto = $filename;
    //    }
    //    $artikel->save();
    //    $artikel->tag()->attach($request->tag);
    //    toastr()->success('Data artikel berhasil disimpan!');
    //    $response = [
    //     'success' => true,
    //     'data' =>  $artikel,
    //     'message' => 'Berhasil ditambahkan.'
    // ];
    // return response()->json($response, 200); 
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Artikel  $artikel
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     $artikel = Artikel::findOrFail($id);
    //     $kategori = Kategori::all();
    //     $tag = Tag::all();
    //     $selected = $artikel->tag->pluck('id')->toArray();
    //     return view('admin.artikel.show', compact('artikel', 'selected', 'kategori', 'tag'));
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Artikel  $artikel
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     $artikel = Artikel::findOrFail($id);
    //     $kategori = Kategori::all();
    //     $tag = Tag::all();
    //     $selected = $artikel->tag->pluck('id')->toArray();
    //     return view('admin.artikel.edit', compact('artikel', 'selected', 'kategori', 'tag'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Artikel  $artikel
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     $artikel = Artikel::findOrFail($id);
    //     $artikel->judul = $request->judul;
    //     $artikel->slug = str_slug($request->judul, '-');
    //     $artikel->konten = $request->konten;
    //     $artikel->user_id = Auth::user()->id;
    //     $artikel->kategori_id = $request->kategori_id;

    //     if ($request->hasFile('foto')){
    //         $file = $request->file('foto');
    //         $path = public_path().
    //                         '/assets/img/artikel/';
    //         $filename = str_random(6).'_'
    //                     .$file->getClientOriginalName();
    //         $uploadSuccess = $file->move(
    //             $path,
    //             $filename
    //         );
    //         // hapus foto lama, jika ada
    //         if ($artikel->foto){
    //             $old_foto = $artikel->foto;
    //             $filepath = public_path()
    //             .'/assets/img/artikel'
    //             .$artikel->foto;    
    //             try {
    //                 File::delete($filepath);
    //             } catch (FileNotFoundException $e) {
    //                 // File sudah dihapus/tidak ada
    //             }
    //         }
    //         $artikel->foto = $filename;
    //     }
    //     $artikel->save();
    //     $artikel->tag()->sync($request->tag_id);
    //     toastr()->success('Data artikel berhasil diubah!');

    //     return redirect()->route('artikel.index');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Artikel  $artikel
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     $artikel = Artikel::findOrFail($id);
    //     if ($artikel->foto){
    //         $old_foto = $artikel->foto;
    //         $filepath = public_path()
    //         . '/assets/img/artikel/'
    //         . $artikel->foto;
    //         try {
    //             File::delete($filepath);
    //         } catch (FileNotFoundException $e) {
    //             // File sudah dihapus/tidak ada
    //         }
    //     }
    //     $artikel->tag()->detach($artikel->id);
    //     $artikel->delete();
    //     toastr()->error('Data artikel berhasil dihapus!');
    //     $response = [
    //         'success' => true,
    //         'data' =>  $artikel,
    //         'message' => 'Berhasil dihapus.'
    //     ];
    //     return response()->json($response, 200);
    // }
}
