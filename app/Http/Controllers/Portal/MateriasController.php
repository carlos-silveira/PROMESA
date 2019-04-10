<?php

namespace App\Http\Controllers\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MateriasController extends Controller
{
  public function __construct(){
      $this->middleware('auth');
  }
  public function index()
  {
    $alumnos=\DB::table('materias')
          ->select('materias.*')
          ->get();
      return view('frontend.dashboard.materias')
      ->with('Materias',$alumnos);;
  }
  public function store(Request $request){
        $validator=Validator::make($request->all(),[

          'codigo_materia'=>'required|max:255',
          'materia'=>'required|max:255',
          'codigo_curso'=>'required|max:255',
          'codigo_maestro'=>'required|max:255',

        ]);
        if($validator->fails()){
          return back()
          ->withInput()
          ->withErrors($validator);
        }else {


        //Insertar
        $last_id= intval(Alumno::OrderBy('id','desc')->first()->id);

        $alu=Alumno::create([
          'codigo_materia'=>'19CNC'.($last_id+1),
          'materia'=>$request->materia,
          'codigo_curso'=>$request->codigo_curso,
          'codigo_maestro'=>$request->codigo_maestro,
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
