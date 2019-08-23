<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Negara;
use Session;

class NegaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getjson()
    {
        $negara = Negara::all();
        $response = [
            'success' => true,
            'data' => $negara,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    public function index()
    {
        $negara = Negara::all();

        return view('admin.negara.index', compact('negara'));
    }

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
        $negara = new Negara;

        $negara->name = $request->nama;
        $negara->slug = str_slug($request->nama);
        $negara->save();

        toastr()->success('Data berhasil ditambah!', "$negara->name");

        return redirect()->route('negara.index');
    }

    public function edit($id)
    {

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
        $negara = Negara::findOrFail($request->id);

        $negara->name = $request->nama;
        $negara->slug = str_slug($request->nama);
        $negara->save();

        toastr()->warning('Data berhasil diubah!', "$negara->name");

        return redirect()->route('negara.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $negara = Negara::findOrFail($id);
        $negara->name;
        $negara->delete();
        
        toastr()->error('Data negara berhasil dihapus!');

        return redirect()->route('negara.index');
    }
}
