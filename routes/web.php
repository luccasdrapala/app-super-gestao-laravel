<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PrincipalController@principal');

Route::get('/sobre-nos', 'SobreNosController@sobreNos');

Route::get('/contato', 'ContatoController@contato');

Route::get('/contato/{nome}/{numero_id}', 
    function(
        string $nome, 
        int $numero_id = 1
    ) {
        echo 'Estamos aqui !<br>' . $nome . ' Numero: ' . $numero_id;
    }
)->where('numero_id','[0-9]+')->where('nome', '[A-Za-z]+');
