<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    
    protected $geralbase;
public function list(){
    return response()->json($this->geralbase::all(),200);
}

public function Exibir($id){
$recurso=$this->geralbase::find($id);
if (is_null($recurso)) {
    return response()->json('', 204);
}
else return response()->json($recurso);
}

public function Criar(Request $request){
    $recurso = $this->geralbase::create($request->all());
    if($recurso){
        return response()->json($recurso, 201);
    }
    return response()->json('Erro ao criar', 400);
}

public function Editar($id, Request $request)
    {
        $recurso = $this->geralbase::find($id);
        if (is_null($recurso)) {
            return response()->json([
                'erro' => 'Recurso não encontrado'
            ], 404);
        }
        $recurso->fill($request->all());
        $recurso->save();

        return $recurso;
    }
    public function Deletar($id)
    {
        $qtdRecursosRemovidos = $this->geralbase::destroy($id);
        if ($qtdRecursosRemovidos === 0) {
            return response()->json([
                'erro' => 'Recurso não encontrado.'
            ], 404);
        }
        return response()->json([
            'mensagem' => 'Excluído com sucesso.'
        ], 204);
    }
}
