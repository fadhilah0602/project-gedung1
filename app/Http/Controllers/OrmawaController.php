<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ormawa;
use App\GroupUser;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class OrmawaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ormawa = Ormawa::get();
        $data['ormawa'] = $ormawa;
        return view('ormawa.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ormawa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function uploadGambar($request)
    {
        $namafile = Str::slug($request->nama);
        $gambar = "$namafile-$request->username";
        $request->images->move(public_path('/img/ruang'), $gambar);

        return $gambar;
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'username' => 'required|max:100',
            'email' => 'required|max:100',
            'images' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'pembina' => 'required|max:100',
            'ketua' => 'required|max:100',
            'kontak' => 'required|max:100',


        ]);
        
        $gambar='';
        if ($request->hasFile('images')) {
            $gambar = $this->uploadGambar($request);
        }
    
        $ormawa = new Ormawa();
        $ormawa->name=$request->get('name');
        $ormawa->username=$request->get('username');
        $ormawa->email=$request->get('email');
        $ormawa->images=$gambar;
        $ormawa->pembina=$request->get('pembina');
        $ormawa->ketua=$request->get('ketua');
        $ormawa->kontak=$request->get('kontak');
        $ormawa->save();
        return redirect()->action('OrmawaController@index');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ormawa = Ormawa::findOrFail($id);
        $data['ormawa'] = $ormawa;
        return view("ormawa.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ormawa = Ormawa::findOrFail($id);
        $data['ormawa'] = $ormawa;
        return view("ormawa.edit", $data);
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

        $ormawa = Ormawa::findOrFail($id);
        $ormawa->name=$request->get('name');
        $ormawa->username=$request->get('username');
        $ormawa->email=$request->get('email');
        $ormawa->images=$gambar;
        $ormawa->pembina=$request->get('pembina');
        $ormawa->ketua=$request->get('ketua');
        $ormawa->kontak=$request->get('kontak');
        $ormawa->save();
        return redirect()->action('OrmawaController@index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ormawa::findOrFail($id)->delete();
        return redirect()->action('OrmawaController@index');
    }
}
