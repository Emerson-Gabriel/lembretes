<?php

namespace App\Http\Controllers;

use App\Models\Lembrete;
use App\Http\Resources\Lembrete as LembreteResource;
use Illuminate\Http\Request;

class LembreteController extends Controller
{
    public function index(){
        /* $lembretes = Lembrete::paginate(15);
        return LembreteResource::collection($lembretes); */
        $lembretes = Lembrete::all();
        return json_encode($lembretes);
      }
    
      public function show($id){
        $lembrete = Lembrete::findOrFail($id);
        return new LembreteResource($lembrete);
      }
    
      public function store(Request $request){
        $lembrete = new Lembrete;
        $lembrete->titulo = $request->input('titulo');
        $lembrete->descricao = $request->input('descricao');
        $lembrete->status = $request->input('status');
    
        if($lembrete->save()){
          return new LembreteResource($lembrete);
        }
      }
    
       public function update(Request $request){
        $lembrete = Lembrete::findOrFail( $request->id );
        $lembrete->titulo = $request->input('titulo');
        $lembrete->descricao = $request->input('descricao');
        $lembrete->status = $request->input('status');
    
        if($lembrete->save()){
          return new LembreteResource($lembrete);
        }
      } 
    
      public function destroy($id){
        $lembrete = Lembrete::findOrFail($id);
        if($lembrete->delete()){
          return new LembreteResource($lembrete);
        }
      }
}
