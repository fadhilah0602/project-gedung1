<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peminjaman;
use App\Konfirmasi;
use App\Ruang;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class PermohonanReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman = Peminjaman::get();
        $user = User::get();
        $ruang = Ruang::get();
        $konfirmasi = Konfirmasi::get();
        $data['konfirmasi'] = $konfirmasi;
        return view('permohonan_reservasi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('peminjaman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // public function uploadGambar($request)
    // {
    //     $namafile = Str::slug($request->nama_kegiatan);
    //     $gambar = "$namafile-$request->nama_ruang";
    //     $request->dokumen->move(public_path('/storage'), $gambar);

    //     return $gambar;
    // }
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'nama_kegiatan' => 'required|max:100',
        //     'nama_ruang' => 'required|max:100',
        //     'tangal_mulai' => 'required|max:100',
        //     'durasi' => 'required|max:100',
        //     'waktu' => 'required|max:100',
        //     'pj' => 'required|max:100',
        //     'no_hp' => 'required|max:100',
        //     'dokumen' => 'required|max:100',


        // ]);
        // $gambar='';
        // if ($request->hasFile('dokumen')) {
        //     $gambar = $this->uploadGambar($request);
        // }

        // $peminjaman = new Peminjaman();
        // $peminjaman->nama_kegiatan=$request->get('nama_kegiatan');
        // $peminjaman->nama_ruang=$request->get('nama_ruang');
        // $peminjaman->tanggal_mulai=$request->get('tanggal_mulai');
        // $peminjaman->durasi=$request->get('durasi');
        // $peminjaman->waktu=$request->get('waktu');
        // $peminjaman->pj=$request->get('pj');
        // $peminjaman->no_hp=$request->get('no_hp');
        // $peminjaman->dokumen=$gambar;
        // $peminjaman->save();
        // return redirect()->action('PermohonanReservasiController@index');
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
        //
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
