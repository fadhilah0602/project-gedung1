<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Konfirmasi;
use App\User;
use App\Peminjaman;
use App\Ruang;
use PDF;

class KonfirmasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // class pdf extends TCPDF

    public function cetak() {
        $pdf = PDF ::loadview('konfirmasi.cetak')->setPaper('A4','potrait');
        return $pdf->stream();
    }
    public function index()
    {
        $konfirmasi = Konfirmasi::get();
        $data['konfirmasi'] = $konfirmasi;
        return view('konfirmasi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('konfirmasi.create');
        $data['konfirmasi'] = Konfirmasi::all();
        $peminjaman=Peminjaman::all();
        $data['peminjaman'] =$peminjaman;
        $ruang=Ruang::all();
        $data['ruang'] =$ruang;
        $user=User::all();
        $data['user'] =$user;

        return view("konfirmasi.create", $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'status' => 'required|max:100',

            'peminjaman_id' => 'exists:peminjamen,id',
            'ruang_id' => 'exists:ruangs,id',
            'peminjaman_id' => 'exists:peminjamen,id'
            

        ]);
        // $responden_user = new Responden();
        // $responden_user->peminjaman_id=$request->get('peminjaman_id');
        // $responden_user->pesan=$request->get('pesan');
        // $responden_user->save();
        // return redirect()->action('RespondenUserController@create');

        $konfirmasi = new Konfirmasi();
        $konfirmasi->status=$request->get('status');
        $konfirmasi->ruang_id=$request->get('ruang_id');
        $konfirmasi->peminjaman_id=$request->get('peminjaman_id');
        $konfirmasi->user_id=$request->get('user_id');
        $konfirmasi->save();
        return redirect()->action('KonfirmasiController@index');
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
        $konfirmasi = Konfirmasi::findOrFail($id);
        $data['konfirmasi'] = $konfirmasi;
        $data['ruang'] = Ruang::all();
        $data['peminjaman'] = Peminjaman::all();
        $data['user'] = User::all();
        return view("konfirmasi.edit", $data);
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
        $validatedData = $request->validate([
            'status' => 'required|max:100',

            'peminjaman_id' => 'exists:peminjamen,id',
            'ruang_id' => 'exists:ruangs,id',
            'peminjaman_id' => 'exists:peminjamen,id'
            

        ]);

        $konfirmasi = Konfirmasi::findOrFail($id);
        $konfirmasi->status=$request->get('status');
        $konfirmasi->ruang_id=$request->get('ruang_id');
        $konfirmasi->peminjaman_id=$request->get('peminjaman_id');
        $konfirmasi->user_id=$request->get('user_id');
        $konfirmasi->save();
        return redirect()->action('KonfirmasiController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Konfirmasi::findOrFail($id)->delete();
        return redirect()->action('KonfirmasiController@index');
    }
}
