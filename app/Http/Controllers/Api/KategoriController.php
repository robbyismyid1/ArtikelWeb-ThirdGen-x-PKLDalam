<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kategori;
use Session;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        $response = [
            'success' => true,
            'data' =>  $kategori,
            'message' => 'Berhasil ditampilkan.'
        ];
        return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nama_kategori' => 'required|unique:kategoris',
        // ]);
        $kategori = new Kategori();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->slug = str_slug($request->nama_kategori, '-');
        $kategori->save();
        toastr()->success('Data berhasil ditambah!', "$kategori->nama_kategori");
        $response = [
            'success' => true,
            'data' =>  $kategori,
            'message' => 'Berhasil ditambahkan.'
        ];
        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('admin.kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'nama_kategori' => 'required',
        // ]);
        $kategori = Kategori::findOrFail($request->id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->slug = str_slug($request->nama_kategori, '-');
        $kategori->save();
        toastr()->warning('Data berhasil diubah!', "$kategori->nama_kategori");
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Mengedit <b>$kategori->nama_kategori</b>"
        ]);
        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($request->id);
        $old = $kategori->nama_kategori;
        $kategori->delete();

        toastr()->error('Data berhasil dihapus!', "$kategori");
        $response = [
            'success' => true,
            'data' =>  $kategori,
            'message' => 'Berhasil dihapus.'
        ];
        return response()->json($response, 200);
    }
}