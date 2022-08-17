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

Route::get('/contato/{nome}/{numero}/{opcional?}', function(string $nome, int $numero, string $mensagem = 'Mensagem não informada') {
    echo 'Estamos aqui !' . $nome . ' Numero: ' . $numero;
    echo '<br>';
    echo 'parametro opcional: ' . $mensagem;
});
