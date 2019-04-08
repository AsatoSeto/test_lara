<?php
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

Route::get('/user', function () {

    return view('users', [
        'users' => User::orderBy('created_at')->get()
    ]);
});

Route::delete('/user/{id}', function ($id) {
    User::findOrFail($id)->delete();
    return redirect('/');
});

Route::post('/user/{id}',function($id){
    $user = User::findOrFail($id);
    echo $user->name;
   
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
