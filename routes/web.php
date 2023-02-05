<?php

use Illuminate\Support\Facades\Route;
use App\Mail\Contactanos;
use App\Models\Contacto;
use Illuminate\Support\Facades\Mail;

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

Route::get('contactanos',function(){
    $correo = new Contactanos;
    Mail::to('mpucheta1977@gmail.com')->send($correo);

    return "Mensaje Enviado";

});
