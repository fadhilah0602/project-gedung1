<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peminjaman;
use App\Ruang;
use App\User;
use App\Konfirmasi;
use Auth;

class LaporanPeruangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $peminjaman = Peminjaman::get();
        // $data['peminjaman'] = $peminjaman;
        // $user = User::get();
        // $data['user'] = $user;
        $ruang = Ruang::get();
        $data['ruang'] = $ruang;
        //     $data = ShopPayment::where('id_user', Auth::user()->id)->whereBetween('created_at', [$tgl1, $tgl2])->get();
        $konfirmasi = Konfirmasi::get();
        $data['konfirmasi'] = $konfirmasi;
        return view('laporan_peruang.index', $data);
    }

    public function view($id)
    {
        // $peminjaman = Peminjaman::get();
        // $data['peminjaman'] = $peminjaman;
        // $user = User::get();
        // $data['user'] = $user;
        // $ruang = Ruang::get();
        // $data['ruang'] = $ruang;
        $konfirmasi = Konfirmasi::get()->where('ruang_id');
        $data['konfirmasi'] = $konfirmasi;
        return view('laporan_peruang.index', $data);

        // $ruang = Ruang::findOrFail($id);
        // $data['ruang'] = $ruang;
        // return view("ruang.view", $data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // $konfirmasi = Konfirmasi::findOrFail($id);
        // $data['konfirmasi'] = $konfirmasi;
        // $data['ruang'] = Ruang::all();
        // $data['peminjaman'] = Peminjaman::all();
        // $data['user'] = User::all();
        // return view("laporan_peruang.show", $data);
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
