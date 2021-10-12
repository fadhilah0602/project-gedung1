<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruang;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Http\Requests\Pegawai\StorePegawaiRequest;
use App\Http\Requests\Pegawai\UpdatePegawaiRequest;


class RuangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ruang = Ruang::get();
        $data['ruang'] = $ruang;
        return view('ruang.index', $data);
    }

    public function cetakRuang()
    {

        $ruang = Ruang::get();
        $data['ruang'] = $ruang;
        return view('ruang.cetak', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ruang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $gambar='';
        if ($request->hasFile('images')) {
            $gambar = $this->uploadGambar($request);
        }

        $ruang = new Ruang();
        $ruang->name=$request->get('name');
        $ruang->kode_ruang=$request->get('kode_ruang');
        $ruang->images=$gambar;
        
        $ruang->lokasi=$request->get('lokasi');
        $ruang->luas=$request->get('luas');
        $ruang->kapasitas=$request->get('kapasitas');
        $ruang->status=$request->get('status');
        $ruang->no_aset=$request->get('no_aset');
        $ruang->keterangan=$request->get('keterangan');
        $ruang->save();
        return redirect()->action('RuangController@index');
   
    }

    public function uploadGambar($request)
    {
        $namafile = Str::slug($request->nama);
        $gambar = "$namafile-$request->kode_ruang";
        $request->images->move(public_path('/img/ruang'), $gambar);

        return $gambar;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ruang = Ruang::findOrFail($id);
        $data['ruang'] = $ruang;
        return view("ruang.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $ruang = Ruang::findOrFail($id);
        $data['ruang'] = $ruang;
        return view("ruang.edit", $data);
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

        $gambar='';
        if ($request->hasFile('images')) {
            $gambar = $this->uploadGambar($request);
        }

        // $data = $request->only([
        //     'images', 
            
        // ]);

        $ruang = Ruang::findOrFail($id);
        $ruang->name=$request->get('name');
        $ruang->kode_ruang=$request->get('kode_ruang');
        
        // $ruang->images=$gambar;
        if($request->hasFile('foto_ruang')){
            // $data = $request->$images;
            
            if($ruang->images !== "ruang_default.png"){
                File::delete('img/ruang'.$ruang->images);
            }
            $gambar = $this->uploadGambar($request);
            $ruang['images'] = $gambar;
            
        }
        // $ruang->update($data);
        
        // $ruang->images = $urlImages;
        // if($request->hasFile('images')){
            
        //     $gambar = $this->uploadGambar($request);
        //     $data['images'] = $gambar;
        // }
        $ruang->lokasi=$request->get('lokasi');
        $ruang->luas=$request->get('luas');
        $ruang->kapasitas=$request->get('kapasitas');
        $ruang->status=$request->get('status');
        $ruang->no_aset=$request->get('no_aset');
        $ruang->keterangan=$request->get('keterangan');
        $ruang->save();
        return redirect()->action('RuangController@index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ruang::findOrFail($id)->delete();
        return redirect()->action('RuangController@index');
        
    }
}
