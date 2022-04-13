<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use Illuminate\Foundation\Validation\ValidatesRequests;
class AlunoController extends Controller

{

    public function Index(){
    $Alunos=Aluno::all();
    return view('company',['Alunos'=>$Alunos]);
}
    public function Create(){
        return view('alunos.create');
    }


    public function StoreCreate(Request $request)
    {

       $aluno = new Aluno;
       $aluno->nome='gustavo';
       $aluno->email='gusg2012@gmail.com';
       $aluno->matrícula='12312';

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
