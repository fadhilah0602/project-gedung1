<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GroupUser;

class GroupUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $group_user = GroupUser::get();
        $data['group_user'] = $group_user;
        return view('group_user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('group_user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $group_user = new GroupUser();
        $group_user->nama_group=$request->get('nama_group');
        $group_user->save();
        return redirect()->action('GroupUserController@index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $group_user = GroupUser::findOrFail($id);
        $data['group_user'] = $group_user;
        return view("group_user.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $group_user = GroupUser::findOrFail($id);
        $data['group_user'] = $group_user;
        return view("group_user.edit", $data);
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
        $group_user = GroupUser::findOrFail($id);
        $group_user->nama_group=$request->get('nama_group');
        $group_user->save();
        return redirect()->action('GroupUserController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        GroupUser::findOrFail($id)->delete();
        return redirect()->action('GroupUserController@index');
    }
}
