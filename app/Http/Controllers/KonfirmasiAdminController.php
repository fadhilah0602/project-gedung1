<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\GroupUser;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class KonfirmasiAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::get();
        $data['user'] = $user;
        return view('konfirmasi_admin.index', $data);
    }

    public function uploadGambar($request)
    {
        $namafile = Str::slug($request->file);
        $gambar = "$namafile";
        $request->file->move(public_path('dokumen/'), $gambar);

        return $gambar;
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
        $user = User::findOrFail($id);
        $data['user'] = $user;
        // $data['role'] = Role::all();
        // $data['group_user'] = GroupUser::all();
        return view("konfirmasi_admin.edit", $data);
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
            'name' => 'required|max:100',
            'email' => 'required|max:100',
            // 'password' => 'required|max:100',
            'username' => 'required|max:100',
            'kontak' => 'required|max:100',
            // 'status' => 'required|max:100',
            'file' => 'required|mimetypes:application/pdf|max:10000',

            // 'role_id' => 'exists:roles,id',
            // 'group_user_id' => 'exists:group_users,id'

        ]);

        $gambar='';
        if ($request->hasFile('file')) {
            $gambar = $this->uploadGambar($request);
        }

        $user= User::findOrFail($id);
        $user->name=$request->get('name');
        $user->email=$request->get('email');
        // $user->password=$request->get('password');
        $user->username=$request->get('username');
        $user->kontak=$request->get('kontak');
        $user->status=$request->get('status');
        $user->file=$gambar;  
        // $user->role_id=$request->get('role_id');
        // $user->group_user_id=$request->get('group_user_id');
        $user->save();
        return redirect()->action('KonfirmasiAdminController@index');

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
