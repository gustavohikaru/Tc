<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use Illuminate\Foundation\Validation\ValidatesRequests;
class AlunoController extends BaseController

{
    public function __construct(){
        $this->geralbase = aluno::class;
    }

    public function ExibirAlunos(){
        return parent::list();
      
     }

<<<<<<< Updated upstream
    public function Index(){
    $Alunos=Aluno::all();
    return $Alunos;
  //  return view('company',['Alunos'=>$Alunos]);
=======
    public function ExibirAluno($id){
   return parent::ExibirAluno($id);
 
>>>>>>> Stashed changes
}


    public function CriarAluno(Request $request)
    {
        $this->validate($request, [
            'matricula' => 'required',
            'nome' => 'required',
            'datadenascimento' => 'required',
            'email' => 'required',
        ]);
        return parent::Criar($request);
    }

    public function EditarAluno($matricula, Request $request){
        $this->validate($request, [
            
            'nome' => 'required',
            'datadenascimento' => 'required',
            'email' => 'required',
        ]);

        return parent::Editar($matricula, $request);
    }

 
    public function DeletarAluno($matricula){

        return parent::Deletar($matricula);
    }

}
