<?php

namespace App\Http\Controllers;
use App\Responden;
use App\Peminjaman;

use Illuminate\Http\Request;

class RespondenUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // return view('responden_user.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('responden_user.create');
        $data['responden'] = Responden::all();
        $peminjaman=Peminjaman::all();
        $data['peminjaman'] =$peminjaman;

        return view("responden_user.create", $data);

        // $data['user'] = User::all();
        // $role=Role::all();
        // $data['role'] =$role;

        // $group_user=GroupUser::all();
        // $data['group_user'] =$group_user;
        // return view("user.create", $data);
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
            'pesan' => 'required|max:100',

            'peminjaman_id' => 'exists:peminjamen,id'
            

        ]);
        $responden_user = new Responden();
        $responden_user->peminjaman_id=$request->get('peminjaman_id');
        $responden_user->pesan=$request->get('pesan');
        $responden_user->save();
        return redirect()->action('RespondenUserController@create');
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
