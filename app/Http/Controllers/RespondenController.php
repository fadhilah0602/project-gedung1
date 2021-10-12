<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Responden;

class RespondenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $responden = Responden::get();
        $data['responden'] = $responden;
        return view('responden.index', $data);

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
        // $responden = Responden::findOrFail($id);
        // $data['responden'] = $responden;
        // return view("responden.edit", $data);
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
        // $validatedData = $request->validate([
        //     'pesan' => 'required|max:100',

        //     'peminjaman_id' => 'exists:peminjamen,id'
            

        // ]);

        // $responden= Responden::findOrFail($id);  
        // $responden->nama_ruang=$request->get('nama_ruang');
        // $responden->nama_kegiatan=$request->get('nama_kegiatan');
        // $responden->pesan=$request->get('pesan');        
        // $responden->save();
        // return redirect()->action('RespondenController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
