<?php

use App\Models\Company;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use Symfony\Component\HttpFoundation\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return response(
        'Hello World
        <a href="/hello">Anuraag</a> <a href="/posts/new">Posts</a>', 200
    )
    // ->header('Content-Type', 'text/plain')
    ;
});

Route::get('/hello', function () {
    return view('anuraag', [
        'title' => 'Moharana',
        'role'=> [
            'scope' => 'Junior',
            'now'=> 'Software Developer'
        ]
    ]);
});

Route::get('/posts/{id}', function($id) {
 return response('post bar'. $id);
});

Route::get('/search', function(Request $requesting){
    // dd($requesting);
    // /search?name=sdfvds&city=dfgbdfd
    return $requesting->name.' '.$requesting->city;
});

// Convention
// index, show, [create, store], [edit, update], delete


// All Companies
Route::get('/companies', [CompanyController::class, 'index'])->name('home');
// Route::get('/companies', function () {
//     return view('companies', [
//         'companies' => Company::all()
//     ]);
// });

// Single Company
Route::get('/company/{id}', [CompanyController::class, 'show']);
// Route::get('/company/{id}', function ($id) {
//     return view('company', [
//         'company' => Company::find($id)
//     ]);
// });
// following will not work in new laravels - put them in controller function
// Route::get('/company/{$id}', function (Company $id) {
//     return view('company', [
//         'company' => $id
//     ]);
// });
// Dependency injection improved security in new laravels

Route::get('/companies/create', [CompanyController::class, 'create']);
Route::post('/companies/store', [CompanyController::class, 'store']);

Route::get('/companies/edit/{id}', [CompanyController::class, 'edit'])->middleware('auth');
Route::put('/companies/update/{id}', [CompanyController::class, 'update']);

Route::delete('/companies/destroy/{id}', [CompanyController::class, 'destroy']);

Route::get('/users/create', [UserController::class, 'create'])->middleware('guest');
Route::post('/users/store', [UserController::class, 'store']);

Route::post('/users/logout', [UserController::class, 'logout']);

Route::get('/users/login', [UserController::class, 'login'])->name('login');
Route::post('/users/auth', [UserController::class, 'auth']);

Route::get('/users/manage', [UserController::class, 'manage'])->middleware('auth');
