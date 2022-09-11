<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
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
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produto', [EventController::class, 'produto']);
Route::get('/events/create', [EventController::class, 'create']);

Route::get('/prudutos/{id?}', function ($id) {

    $arr = [1, 2, 3, 4, 5];

    return view('products',
                [
                    'nome' => "Eduarda",
                    'idade' => "24",
                    'profissao' => "Analista",
                    'arr' => $arr,
                    'id' => $id
                ]);
});