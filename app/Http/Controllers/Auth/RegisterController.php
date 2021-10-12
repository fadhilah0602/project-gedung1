<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\GroupUser;
use App\Jurusan;
use App\Ormawa;
use App\Unit;
use App\Role;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
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
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     * @return \App\GroupUser
     */
    protected function create(array $data)
    {
        $user =  User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'kontak' => $data['kontak'],
            'status' => $data['status'],
            'file' => $data['file'],
            'role_id' => "3",
            'group_user_id' => "1",
        ]);

        // return $user;

        $group_user =  GroupUser::create([
            'nama_group' => $data['name'],
            'role_id' => "3",
        ]);

        $user->assignRole('group_user');
        return $user;

        // return Jurusan::create([
        //     'user_id'=>$user->id,
        //     'group_user_id'=> "1",
        //     'image' => $data['image'],
        //     'kajur' => $data['kajur'],
        // ]);

        // return Ormawa::create([
        //     'user_id'=>$user->id,
        //     'group_user_id'=>"2",
        //     'image' => $data['image'],
        //     'pembina' => $data['pembina'],
        //     'ketua' => $data['ketua'],
        // ]);

        // return Unit::create([
        //     'user_id'=>$user->id,
        //     'group_user_id'=>"3",
        //     'kepala_unit' => $data['kepala_unit'],
        //     'admin_unit' => $data['admin_unit'],
        // ]);

        


        
    }

    // public function index()
    // {
    //     $user = User::get();
    //     $data['user'] = $user;
    //     return view('user.index');
    // }
}
