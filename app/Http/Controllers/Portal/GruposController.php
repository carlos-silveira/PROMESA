<?php

namespace App\Http\Controllers\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GruposController extends Controller
{
  public function __construct(){
      $this->middleware('auth');
  }
  public function index()
  {
    $alumnos=\DB::table('grupos')
          ->select('grupos.*')
          ->get();
      return view('frontend.dashboard.grupos')
      ->with('Grupos',$alumnos);;
  }
  public function store(Request $request){
        $validator=Validator::make($request->all(),[

          'cod_grupo'=>'required|max:255',
          'curso'=>'required|max:255',
          'modalidad'=>'required|max:255',

        ]);
        if($validator->fails()){
          return back()
          ->withInput()
          ->withErrors($validator);
        }else {


        //Insertar
        $last_id= intval(Alumno::OrderBy('id','desc')->first()->id);

        $alu=Alumno::create([
          'cod_grupo'=>'19CNC'.($last_id+1),
          'curso'=>$request->curso,
          'modalidad'=>$request->modalidad,
        ]);
        return back()
        ->with('Listo','Se ha insertado correctamente');
        }
    }
    public function destroy($matricula){
    $alumno=Alumno::find($matricula);

      $alumno->delete();
      return back()
      ->with('Listo',"Se ha eliminado correctamente");
    }

}
