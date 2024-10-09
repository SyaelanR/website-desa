<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\main;

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/dashboard', [main::class, 'dashboard']);
route::get('/tes', [main::class, 'tes']);
route::get('/Profile-desa/visi-misi', [main::class, 'visiMisi']);
