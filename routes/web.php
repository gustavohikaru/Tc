<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlunoController;
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
Route::get('/', function () {
    return view('welcome');
});
*/
//Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
//Route::get('/company', 'App\Http\Controllers\HomeController@company')->name('company');
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    protected $except = [
        'stripe/*',
        'http://127.0.0.1:8000/Alunos/Delete',
        'http://127.0.0.1:8000/Alunos/update',
        'http://127.0.0.1:8000/Alunos/Delete',
        'http://127.0.0.1:8000/*',

    ];
}
//alunos
Route::post('/Alunos/Create','App\Http\Controllers\AlunoController@CriarAluno')->name('Create');
Route::get('/Alunos', 'App\Http\Controllers\AlunoController@ExibirAlunos')->name('Read');
Route::put('/Alunos/Update/{matricula}','App\Http\Controllers\AlunoController@EditarAluno')->name('Update');
Route::delete('/Alunos/Delete/{matricula}','App\Http\Controllers\AlunoController@DeletarAluno')->name('delete');
//alunosPacientes
Route::post('/alunopaciente/Create','App\Http\Controllers\PacienteAlunoController@CriarAlunoPaciente')->name('Create');
Route::get('/alunopaciente', 'App\Http\Controllers\PacienteAlunoController@ExibirAlunoPaciente')->name('Read');
Route::put('/alunopaciente/Update/{idPaciente}','App\Http\Controllers\PacienteAlunoController@EditarAlunoPaciente')->name('Update');
Route::delete('/alunopaciente/Delete/{idPaciente}','App\Http\Controllers\PacienteAlunoController@DeletarPacienteAluno')->name('delete');
//atendimento
Route::post('/atendimento/Create','App\Http\Controllers\PacienteAlunoController@CriarAtendimento')->name('Create');
Route::get('/atendimento', 'App\Http\Controllers\PacienteAlunoController@ExibirAtendimentos')->name('Read');
Route::put('/atendimento/Update/{id}','App\Http\Controllers\PacienteAlunoController@EditarAtendimento')->name('Update');
Route::delete('/atendimento/Delete/{id}','App\Http\Controllers\PacienteAlunoController@DeletarAtendimento')->name('delete');
//Psicologos
Route::post('/atendimento/Create','App\Http\Controllers\PacienteAlunoController@CriarPsicologo')->name('Create');
Route::get('/atendimento', 'App\Http\Controllers\PacienteAlunoController@ExibirPsicologos')->name('Read');
Route::put('/atendimento/Update/{idpsicologa}','App\Http\Controllers\PacienteAlunoController@EditarPsicologo')->name('Update');
Route::delete('/atendimento/Delete/{idpsicologa}','App\Http\Controllers\PacienteAlunoController@DeletarPsicologo')->name('delete');