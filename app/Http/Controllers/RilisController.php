<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rilis;
use Session;

class RilisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getjson()
    {
        $rilis = Rilis::all();
        $response = [
            'success' => true,
            'data' => $rilis,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }
    public function index()
    {
        $rilis = Rilis::all();

        return view('admin.rilis.index', compact('rilis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:rilis'
        ]);

        $rilis = new rilis;

        $rilis->nama = $request->nama;
        $rilis->slug = str_slug($request->nama);
        $rilis->save();

        toastr()->success('Data berhasil ditambah!', "$rilis->name");

        return redirect()->route('rilis.index');
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
        $request->validate([
            'nama' => 'required|unique:rilis'
        ]);

        $rilis = rilis::findOrFail($request->id);

        $rilis->nama = $request->nama;
        $rilis->slug = str_slug($request->nama);
        $rilis->save();

        toastr()->warning('Data berhasil diubah!', "$rilis->nama");

        return redirect()->route('rilis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $rilis = rilis::findOrFail($request->id);
        $old = $rilis->nama;
        $rilis->delete();

        return redirect()->route('rilis.index');
    }
}
