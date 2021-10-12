<?php

use App\Http\Controllers\RoleController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\User;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    // return view('beranda');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/', 'LoginController@index')->name('login');

Route::middleware('role:admin')->get('/beranda','BerandaController@index')->name('beranda');
Route::middleware('role:group_user')->get('/dashboard-user','DashboardUserController@index')->name('dashboard-user');

Route::group(['middleware' => 'auth'], function(){
    
    
    Route::get('/ruang', 'RuangController@index')->name('ruang.index');
    Route::get('ruang/create', 'RuangController@create')->name('ruang.create');
    Route::post('ruang/store', 'RuangController@store')->name('ruang.store');
    Route::get('ruang/edit/{id}', 'RuangController@edit')->name('ruang.edit');
    Route::post('ruang/update/{id}', 'RuangController@update')->name('ruang.update');
    Route::get('ruang/delete/{id}', 'RuangController@destroy')->name('ruang.delete');
    Route::get('ruang/show/{id}', 'RuangController@show')->name('ruang.show');

    // cetak data ruang
    Route::get('ruang/cetakRuang','RuangController@cetakRuang')->name('ruang.cetak');

    Route::get('/group_user', 'GroupUserController@index')->name('group_user.index');
    Route::get('group_user/create', 'GroupUserController@create')->name('group_user.create');
    Route::post('group_user/store', 'GroupUserController@store')->name('group_user.store');
    Route::get('group_user/edit/{id}', 'GroupUserController@edit')->name('group_user.edit');
    Route::post('group_user/update/{id}', 'GroupUserController@update')->name('group_user.update');
    Route::get('group_user/delete/{id}', 'GroupUserController@destroy')->name('group_user.delete');
    Route::get('group_user/show/{id}', 'GroupUserController@show')->name('group_user.show');

    Route::get('/role', 'RoleController@index')->name('role.index');
    Route::get('role/create', 'RoleController@create')->name('role.create');
    Route::post('role/store', 'RoleController@store')->name('role.store');
    Route::get('role/edit/{id}', 'RoleController@edit')->name('role.edit');
    Route::post('role/update/{id}', 'RoleController@update')->name('role.update');
    Route::get('role/delete/{id}', 'RoleController@destroy')->name('role.delete');
    Route::get('role/show/{id}', 'RoleController@show')->name('role.show');

    Route::get('/konfirmasi', 'KonfirmasiController@index')->name('konfirmasi.index');
    Route::get('konfirmasi/create', 'KonfirmasiController@create')->name('konfirmasi.create');
    Route::post('konfirmasi/store', 'KonfirmasiController@store')->name('konfirmasi.store');
    Route::get('konfirmasi/edit/{id}', 'KonfirmasiController@edit')->name('konfirmasi.edit');
    Route::post('konfirmasi/update/{id}', 'KonfirmasiController@update')->name('konfirmasi.update');
    Route::get('konfirmasi/delete/{id}', 'KonfirmasiController@destroy')->name('konfirmasi.delete');

    // cetak data 
    Route::get('ruang/cetakRuang','RuangController@cetakRuang')->name('ruang.cetak');

    Route::get('/user', 'UserController@index')->name('user.index');
    Route::get('user/create', 'UserController@create')->name('user.create');
    Route::post('user/store', 'UserController@store')->name('user.store');
    // Route::get('user/edit/{id}', 'UserController@edit')->name('user.edit');
    // Route::post('user/update/{id}', 'UserController@update')->name('user.update');
    Route::get('user/delete/{id}', 'UserController@destroy')->name('user.delete');
    Route::get('user/show/{id}', 'UserController@show')->name('user.show');

    Route::get('/jurusan', 'JurusanController@index')->name('jurusan.index');
    Route::get('jurusan/create', 'JurusanController@create')->name('jurusan.create');
    Route::post('jurusan/store', 'JurusanController@store')->name('jurusan.store');
    Route::get('jurusan/edit/{id}', 'JurusanController@edit')->name('jurusan.edit');
    Route::post('jurusan/update/{id}', 'JurusanController@update')->name('jurusan.update');
    Route::get('jurusan/delete/{id}', 'JurusanController@destroy')->name('jurusan.delete');
    Route::get('jurusan/show/{id}', 'JurusanController@show')->name('jurusan.show');

    Route::get('/ormawa', 'OrmawaController@index')->name('ormawa.index');
    Route::get('ormawa/create', 'OrmawaController@create')->name('ormawa.create');
    Route::post('ormawa/store', 'OrmawaController@store')->name('ormawa.store');
    Route::get('ormawa/edit/{id}', 'OrmawaController@edit')->name('ormawa.edit');
    Route::post('ormawa/update/{id}', 'OrmawaController@update')->name('ormawa.update');
    Route::get('ormawa/delete/{id}', 'OrmawaController@destroy')->name('ormawa.delete');
    Route::get('ormawa/show/{id}', 'OrmawaController@show')->name('ormawa.show');

    Route::get('/unit', 'UnitController@index')->name('unit.index');
    Route::get('unit/create', 'UnitController@create')->name('unit.create');
    Route::post('unit/store', 'UnitController@store')->name('unit.store');
    Route::get('unit/edit/{id}', 'UnitController@edit')->name('unit.edit');
    Route::post('unit/update/{id}', 'UnitController@update')->name('unit.update');
    Route::get('unit/delete/{id}', 'UnitController@destroy')->name('unit.delete');
    Route::get('unit/show/{id}', 'UnitController@show')->name('unit.show');

    Route::get('/home_user', 'HomeUserController@index')->name('home_user.index');

    // user
    Route::get('/responden_user', 'RespondenUserController@index')->name('responden_user.index');
    Route::get('responden_user/create', 'RespondenUserController@create')->name('responden_user.create');
    Route::post('responden_user/store', 'RespondenUserController@store')->name('responden_user.store');

    //admin
    Route::get('/responden', 'RespondenController@index')->name('responden.index');
    // Route::get('responden/edit/{id}', 'RespondenController@edit')->name('responden.edit');
    // Route::post('responden/update/{id}', 'RespondenController@update')->name('responden.update');

    //user
    Route::get('/peminjaman', 'PeminjamanController@index')->name('peminjaman.index');
    Route::get('peminjaman/create', 'PeminjamanController@create')->name('peminjaman.create');
    Route::post('peminjaman/store', 'PeminjamanController@store')->name('peminjaman.store');

    //admin
    Route::get('/data_reservasi', 'DataReservasiController@index')->name('data_reservasi.index');
    Route::get('data_reservasi/edit/{id}', 'DataReservasiController@edit')->name('data_reservasi.edit');
    Route::post('data_reservasi/update/{id}', 'DataReservasiController@update')->name('data_reservasi.update');

    Route::get('/galeri', 'GaleriController@index')->name('galeri.index');

    Route::get('/list_reservasi', 'ListReservasiController@index')->name('list_reservasi.index');

    Route::get('/profile', 'ProfileController@index')->name('profile.index');
    Route::get('profile/create', 'ProfileController@create')->name('profile.edit_profile');
    Route::post('profile/store', 'ProfileController@store')->name('profile.store');

    // Route::get('/jadwal_reservasi','JadwalReservasiController@index')->name('jadwal_reservasi.index');

    Route::get('/data_reservasi', 'DataReservasiController@index')->name('data_reservasi.index');

    Route::get('/laporan_peruang', 'LaporanPeruangController@index')->name('laporan_peruang.index');

    Route::get('/lap_periode', 'LaporanPeriodeController@index')->name('laporan.lap_periode');

    Route::get('/dashboard_admin', 'DashboardAdminController@index')->name('dashboard_admin.index');

    // Route::get('/permohonan_reservasi', 'PermohonanReservasiController@index')->name('permohonan_reservasi.index');

    // konfirmasi admin
    Route::get('/konfirmasi_admin', 'KonfirmasiAdminController@index')->name('konfirmasi_admin.index');
    Route::get('konfirmasi_admin/edit/{id}', 'KonfirmasiAdminController@edit')->name('konfirmasi_admin.edit');
    Route::post('konfirmasi_admin/update/{id}', 'KonfirmasiAdminController@update')->name('konfirmasi_admin.update');

    // konfirmasi user
    Route::get('/konfirmasi_user', 'KonfirmasiUserController@index')->name('konfirmasi_user.index');

    //laporan peminjaman gedung
    Route::get('/laporan_peminjaman', 'LaporanPeminjamanController@index')->name('laporan_peminjaman.index');
    Route::get('laporan_peminjaman/cetakPeminjaman','LaporanPeminjamanController@cetakPeminjaman')->name('laporan_peminjaman.cetak');
});

\PWA::routes();
