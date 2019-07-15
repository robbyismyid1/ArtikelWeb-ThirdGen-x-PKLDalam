<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getjson()
    {
        $tag = Tag::all();
        $response = [
            'success' => true,
            'data' => $tag,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    public function index()
    {
        $tag = Tag::all();
        return view('admin.tag.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['nama_tag' => 'required|unique:tags']);

        $tag = new Tag;
        $tag->nama_tag = $request->nama_tag;
        $tag->slug = str_slug($request->nama_tag,'-');
        $tag->save();
        toastr()->success('Data berhasil ditambah!', "$tag->nama_tag");
        $response = [
            'success' => true,
            'data' => $tag,
            'message' => 'berhasil'
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
        //
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
        $request->validate(['nama_tag' => 'required|unique:tags']);
        
        $tag = Tag::findOrFail($id);
        $tag->nama_tag = $request->nama_tag;
        $tag->slug = str_slug($request->nama_tag,'-');
        $tag->save();
        toastr()->success('Data berhasil ditambah!', "$tag->nama_tag");
        $response = [
            'success' => true,
            'data' => $tag,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $old = $tag->nama_tag;
        $tag->delete();
        toastr()->error('Data Dihapus!', "$old");
        $response = [
            'success' => true,
            'data' => $tag,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }
}
