<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use Illuminate\Foundation\Validation\ValidatesRequests;
class AlunoController extends Controller

{

    public function Index(){
    $Alunos=Aluno::all();
    return $Alunos;
  //  return view('company',['Alunos'=>$Alunos]);
}
    public function Create(){
        return view('alunos.create');
    }


    public function StoreCreate(Request $request)
    {

       $aluno = new Aluno;
       $aluno->nome=$request->nome;
       $aluno->email= $request->email;
       $aluno->matrícula=$request->matricula;

       $aluno->save();



    }
    public function StoreUpdate(Request $request)
    {
        $aluno = Aluno::find(1);

       $aluno->nome = 'Paris';

       $aluno->save();
    }

    public function StoreDelete(Request $request)
    {
        $aluno = Aluno::find(1);
        $aluno->forceDelete();
    }

}
