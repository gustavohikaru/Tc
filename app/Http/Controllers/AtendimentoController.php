<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtendimentoController extends BaseController
{
     public function __construct(){
        $this->geralbase = Atendimento::class;
    }

    public function ExibirAtendimentos(){
        return parent::list();
      
     }

    public function ExibirAtendimento($id){
   return parent::ExibirAtendimento($id);
 
}


    public function CriarAtendimento(Request $request)
    {
        $this->validate($request, [
            //'idpacientealuno' => 'required',
            //'idpsi' => 'required',
            'data' => 'required',
            'horario' => 'required',
            'indicacao' => 'required',
            'bservacoes' => 'required',
        ]);
        return parent::Criar($request);
    }

    public function EditarAtendimento($id, Request $request){
        $this->validate($request, [
            
            'data' => 'required',
            'horario' => 'required',
            'indicacao' => 'required',
            'bservacoes' => 'required',
        ]);

        return parent::Editar($id, $request);
    }

 
    public function DeletarAtendimento($id){

        return parent::Deletar($id);
    }
}
