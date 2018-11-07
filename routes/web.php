<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Cache;
use Illuminate\Redis;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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

Route::group(['namespace' => 'V1'], function () {

    Route::get('/', 'HomeController@index');
    Route::get('/dangky', 'HomeController@dangky');
    Route::post('/add-user', 'UserController@addUser');
});
Route::get('check', 'LoginController@getLogin')->name('login');
Route::post('login', 'LoginController@postLogin');

//Route::get('/', function () {
//    return view('welcome',['name' => 'nguyễn bá bảy']);
//});
Route::get('/chao', 'ProductController@chao');
Route::get('/save_cache', function () {
    Cache::put("chao", "chào mày", 5);
    Cache::store('redis')->put('aaa:bbb', 'con mẹ mày', 5);
    echo "đã lưu cache thành công";
});
Route::get('/get_cache', function () {
    echo 'chào :' . Cache::get('chao');
    echo '<br>';
    echo 'aaa :' . Cache::store('redis')->get('aaa:bbb');
});

Route::get('/all_user', function () {
//    $user = App\Users::all()->where('name','Tevin Kassulke')->toArray();
    $list_user = DB::table('users')->get();
    return view('user', ['list_user' => $list_user]);
});

Route::get('delete/{id}', function ($id) {
    App\Users::destroy($id);
    return redirect('/all_user');
})->name('delete_user');

Route::group(['namespace' => 'Product'], function () {
    Route::get('/product', 'ProductController@chao');
});


Route::get("/create_user", function () {
    return view('create_user');
});
Route::get('/create', function (Request $request) {

})->middleware();

