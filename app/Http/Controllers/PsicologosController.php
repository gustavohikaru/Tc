<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PsicologosController extends BaseController
{
    public function __construct(){
        $this->geralbase = Psicologo::class;
    }

    public function ExibirPsicologos(){
        return parent::list();
      
     }

    public function ExibirPsicologo($id){
   return parent::ExibirPsicologo($id);
 
}


    public function CriarPsicologo(Request $request)
    {
        $this->validate($request, [
           
            'nome' => 'required',
        
            
        ]);
        return parent::Criar($request);
    }

    public function EditarPsicologo($idpsicologa, Request $request){
        $this->validate($request, [
            
            'nome' => 'required',
          
        ]);

        return parent::EditarPsicologo($idpsicologa, $request);
    }

 
    public function DeletarPsicologo($idpsicologa){

        return parent::Deletar($idpsicologa);
    }

}
