<?php

namespace App\Http\Controllers;

use App\Models\PacienteAluno;
use Illuminate\Http\Request;

class PacienteAlunoController extends BaseController
{
    public function __construct(){
        $this->geralbase = PacienteAluno::class;
    }

    public function ExibirAlunosPacientes(){
        return parent::list();
      
     }

    public function ExibirAlunoPaciente($id){
   return parent::ExibirAlunoPaciente($id);
 
}


    public function CriarAlunoPaciente(Request $request)
    {
        $this->validate($request, [
             // 'idaluno' => 'required',
            'stats' => 'required',
            'avaliacaofinal' => 'required',
            
        ]);
        return parent::Criar($request);
    }

    public function EditarAlunoPaciente($idPaciente, Request $request){
        $this->validate($request, [
            
         
            'stats' => 'required',
            'avaliacaofinal' => 'required',
        ]);

        return parent::Editar($idPaciente, $request);
    }

 
    public function DeletarPacienteAluno($idPaciente){

        return parent::Deletar($idPaciente);
    }

}
