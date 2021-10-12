<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jurusan;
// use App\GroupUser;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = Jurusan::get();
        $data['jurusan'] = $jurusan;
        return view('jurusan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $data['group_user'] =   GroupUser::all();
        return view("jurusan.create");
       
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
            'kajur' => 'required|max:100',
            'kontak' => 'required|max:100',

            // 'group_user_id' => 'exists:group_users,id'

        ]);
        
        $gambar='';
        if ($request->hasFile('images')) {
            $gambar = $this->uploadGambar($request);
        }

        $jurusan = new Jurusan();
        $jurusan->name=$request->get('name');
        $jurusan->username=$request->get('username');
        $jurusan->email=$request->get('email');
        $jurusan->images=$gambar;
        $jurusan->kajur=$request->get('kajur');
        $jurusan->kontak=$request->get('kontak');
        // $jurusan->group_user_id=$request->get('group_user_id');
        $jurusan->save();
        return redirect()->action('JurusanController@index');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $data['jurusan'] = $jurusan;
        return view("jurusan.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $data['jurusan'] = $jurusan;
        // $data['group_user'] = GroupUser::all();
        return view("jurusan.edit", $data);


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
            'username' => 'required|max:100',
            'email' => 'required|max:100',
            'images' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'kajur' => 'required|max:100',
            'kontak' => 'required|max:100',

            // 'group_user_id' => 'exists:group_users,id'

        ]);
        
        // $gambar='';
        // if ($request->hasFile('images')) {
        //     $gambar = $this->uploadGambar($request);
        // }

        $jurusan = Jurusan::findOrFail($id);
        $jurusan->name=$request->get('name');
        $jurusan->username=$request->get('username');
        $jurusan->email=$request->get('email');

        if($request->hasFile('images')){
            
            if($jurusan->images !== "ruang_default.png"){
                File::delete('img/ruang/'.$jurusan->images);
            }
            
            $gambar = $this->uploadGambar($request);
            $data['images'] = $gambar;
        }

        $jurusan->images=$gambar;
        $jurusan->kajur=$request->get('kajur');
        $jurusan->kontak=$request->get('kontak');
        // $jurusan->group_user_id=$request->get('group_user_id');
        $jurusan->save();
        return redirect()->action('JurusanController@index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jurusan::findOrFail($id)->delete();
        return redirect()->action('JurusanController@index');
    }
}
