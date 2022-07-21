<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');
//alunos
Route::post('/Alunos/criar','App\Http\Controllers\AlunoController@CriarAluno')->name('Create');
Route::get('/Alunos', 'App\Http\Controllers\AlunoController@ExibirAlunos')->name('Read');
Route::put('/Alunos/Update/{matricula}','App\Http\Controllers\AlunoController@EditarAluno')->name('Update');
Route::delete('/Alunos/Delete/{matricula}','App\Http\Controllers\AlunoController@DeletarAluno')->name('delete');
//paciente

Route::post('/alunopaciente/Create','App\Http\Controllers\PacienteAlunoController@CriarAlunoPaciente')->name('Create');
Route::get('/alunopaciente', 'App\Http\Controllers\PacienteAlunoController@ExibirAlunoPaciente')->name('Read');
Route::put('/alunopaciente/Update/{idPaciente}','App\Http\Controllers\PacienteAlunoController@EditarAtendimento')->name('Update');
Route::delete('/alunopaciente/Delete/{idPaciente}','App\Http\Controllers\PacienteAlunoController@DeletarPacienteAluno')->name('delete');

//atendimentos
Route::post('/atendimento/Create','App\Http\Controllers\PacienteAlunoController@CriarAtendimento')->name('Create');
Route::get('/atendimento', 'App\Http\Controllers\PacienteAlunoController@ExibirAtendimentos')->name('Read');
Route::put('/atendimento/Update/{id}','App\Http\Controllers\PacienteAlunoController@EditarAtendimento')->name('Update');
Route::delete('/atendimento/Delete/{id}','App\Http\Controllers\PacienteAlunoController@DeletarAtendimento')->name('delete');

//Psicologos
Route::post('/atendimento/Create','App\Http\Controllers\PacienteAlunoController@CriarPsicologo')->name('Create');
Route::get('/atendimento', 'App\Http\Controllers\PacienteAlunoController@ExibirPsicologos')->name('Read');
Route::put('/atendimento/Update/{idpsicologa}','App\Http\Controllers\PacienteAlunoController@EditarPsicologo')->name('Update');
Route::delete('/atendimento/Delete/{idpsicologa}','App\Http\Controllers\PacienteAlunoController@DeletarPsicologo')->name('delete');
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
