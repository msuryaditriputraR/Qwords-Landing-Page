<?php

use App\Models\Domain;
use Illuminate\Support\Facades\Route;
use App\Models\menu;
use App\Models\Services;

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
    $menu = menu::orderBy('urutan')->get();
    $domains = Domain::orderBy('nama_domain')->get();
    $services = Services::all();
    return view('index', ['title' => 'Qwords', 'menu' => $menu, 'domains' => $domains, 'services' => $services]);
});
