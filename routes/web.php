<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AiController;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Route;
// use Barryvdh\

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
GET - Request a resource
POST - Creating a new resource
PUT - Update a resource
PATCH - Modify a resource
DELETE - Delete a resource
OPTIONS - Ask the serve which verbs are allowed
*/

// Route::get('/', function () {
    // Debugbar::startMeasure('Wohoo', 'Rendering my first message');
    //info,addMessage,warning,error

    // try {
    //     throw new Exception('Try message!');
    // } catch (Exception $e){
    //     Debugbar::addException($e);
    // }

    // $name = "Code with Ruxy";

    // return view('welcome', [
    //     'name' => $name
    // ]);

    // dd(config('services.mailgun.domain'));
    // dd(env('DB_HOST'));



//     return view('welcome');
// });

//GET
Route::get('/blog', [PostsController::class, 'index']);
// Route::get('/blog/{id}', [PostsController::class, 'show'])->whereNumber('id'); //('id', '[0-9]+');
Route::get('/blog/{name}', [PostsController::class, 'show'])->whereAlpha('name'); //('id', '[0-9]+');

// Route::get('/blog/{name}', [PostsController::class, 'show'])->where('id', '[A-Za-z]+');
// Route::get('/blog/{id}/{name}', [PostsController::class, 'show'])
//     ->where([
//         'id' => '[0-9]+',
//         'name', '[A-Za-z]+'
//     ]);



//POST
Route::post('/blog/create', [PostsController::class, 'create']);
Route::post('/blog', [PostsController::class, 'store']);

//PUT OR PATCH
Route::get('/blog/edit/{id}', [PostsController::class, 'edit']);
Route::patch('/blog/{id}', [PostsController::class, 'update']);

//DELETE
Route::delete('/blog/{1}', [PostsController::class, 'destroy']);

//Multiple HTTP verbs
// Route::match(['GET', 'POST'], '/blog', [PostsController::class, 'index']);
// Route::any('/blog', [PostsController::class, 'index']);

//To return a view only
// Route::view('/blog', 'blog.index', ['name' => 'Code with Ruxy']);


// Route::resource('blog', PostsController::class);

//Route for invoke method
Route::get('/', [HomeController::class, 'index']);

Route::get('/ai', [AiController::class, 'index']);
Route::post('/ai', [AiController::class, 'result'])->name('result');