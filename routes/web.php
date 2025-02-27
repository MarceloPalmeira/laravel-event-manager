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

//index() = Listar todos os registros de uma entidade no banco de dados.
//create() =  Ele não salva nada. Apenas retorna uma view com os campos de um formulário para o usuário preencher.
//store() =Tem como objetivo receber os dados do formulário (enviados via POST), validá-los e criar efetivamente um novo registro no banco.
//show($id) = Exibir os detalhes de um registro específico.
//edit($id) =  Exibir um formulário de edição de um registro.
//update($id) = Receber os dados do formulário de edição (geralmente via PUT ou PATCH), validá-los e atualizar o registro no banco.

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
Route::get('/events/{id}', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);
Route::delete('/events/{id}', [EventController::class, 'destroy'])->middleware('auth');
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->middleware('auth');
Route::put('/events/update/{id}', [EventController::class, 'update'])->middleware('auth');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');

Route:: post ('/events/join/{id}', [EventController::class, 'joinEvent'])->middleware('auth');

Route:: delete ('/events/leave/{id}', [EventController::class, 'leaveEvent'])->middleware('auth');
