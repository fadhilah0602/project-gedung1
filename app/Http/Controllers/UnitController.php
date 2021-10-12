<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;
use App\User;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unit = Unit::get();
        $data['unit'] = $unit;
        return view('unit.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('unit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $unit = new Unit();
        $unit->name=$request->get('name');
        $unit->kepala_unit=$request->get('kepala_unit'); 
        $unit->admin_unit=$request->get('admin_unit');        
        $unit->kontak=$request->get('kontak');
        $unit->email=$request->get('email');
        $unit->save();
        return redirect()->action('UnitController@index');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unit = Unit::findOrFail($id);
        $data['unit'] = $unit;
        return view("unit.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unit = Unit::findOrFail($id);
        $data['unit'] = $unit;
        return view("unit.edit", $data);
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

        $unit = Unit::findOrFail($id);
        $unit->name=$request->get('name');
        $unit->kepala_unit=$request->get('kepala_unit');
        $unit->admin_unit=$request->get('admin_unit');
        $unit->kontak=$request->get('kontak');
        $unit->email=$request->get('email');
        $unit->save();
        return redirect()->action('UnitController@index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Unit::findOrFail($id)->delete();
        return redirect()->action('UnitController@index');
    }
}
