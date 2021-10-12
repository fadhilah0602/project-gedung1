<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\GroupUser;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // protected $redirectTo = RouteServiceProvider::HOME;
    public function index()
    {

        $user = User::get();
        $data['user'] = $user;
        return view('user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data['user'] = User::all();;
        $role=Role::all();
        $data['role'] =$role;

        $group_user=GroupUser::all();
        $data['group_user'] =$group_user;
        return view("user.create", $data);
    }

    // public function create($data)
    // {
    //     $user =  User::create([
    //         'name' => $data['name'],
    //         'username' => $data['username'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //         'kontak' => $data['kontak'],
    //         'status' => $data['status'],
    //         'file' => $data['file'],
    //         'role_id' => "3",
    //         'group_user_id' => "1",
    //     ]);

    //     return $user;
    // }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'username' => 'required|max:100',
            'email' => 'required|max:100',
            // 'password' => Hash::make($data['password']);
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'kontak' => 'required|max:100',
            'file' => 'required|mimetypes:application/pdf|max:10000',

            'role_id' => 'exists:roles,id',
            'group_user_id' => 'exists:group_users,id',
            

        ]);

        $user = new User();
        $user->name=$request->get('name');
        $user->username=$request->get('username');
        $user->email=$request->get('email'); 
        $user->password=Hash::make($request->get('password'));
        // $user=>Hash::make($request->get('password'));
        // $user->password=$request->get('password');
        $user->kontak=$request->get('kontak');
        $user->status=$request->get('status');
        $user->file=$request->get('status');
        $user->role_id=$request->get('role_id');
        $user->group_user_id=$request->get('group_user_id');
        $user->save();
        return redirect()->action('UserController@index');
   
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'kontak' => ['required', 'string', 'max:255'],
            'status' => ['required', 'string', 'max:255'],
            'file' => ['required', 'string', 'max:255'],
            'role_id' => ['required', 'bigInt', 'max:20'],
            'group_user_id' => ['required', 'bigInt', 'max:20'],
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        $data['user'] = $user;
        return view("user.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $user = User::findOrFail($id);
        // $data['user'] = $user;
        // $data['role'] = Role::all();
        // $data['group_user'] = GroupUser::all();
        // return view("user.edit", $data);

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
        // $validatedData = $request->validate([
        //     'name' => 'required|max:100',
        //     'email' => 'required|max:100',
        //     'password' => 'required|max:100',
        //     'username' => 'required|max:100',
        //     'kontak' => 'required|max:100',

        //     'role_id' => 'exists:roles,id',
        //     'group_user_id' => 'exists:group_users,id'

        // ]);

        // $user= User::findOrFail($id);  
        // $user->name=$request->get('name');
        // $user->email=$request->get('email');
        // $user->password=$request->get('password');
        // $user->username=$request->get('username');
        // $user->kontak=$request->get('kontak');
        // $user->role_id=$request->get('role_id');
        // $user->group_user_id=$request->get('group_user_id');
        // $user->save();
        // return redirect()->action('UserController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->action('UserController@index');
    }
}
