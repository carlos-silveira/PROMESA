<?php

namespace App\Http\Controllers\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use DB;
use App\Models\Calificacion;

class CalificacionesController extends Controller
{
  public function __construct(){
      $this->middleware('auth');
  }
  public function index()
  {
    $alumnos=\DB::table('calificaciones')
          ->select('calificaciones.*')
          ->get();
      return view('frontend.dashboard.calificaciones')
      ->with('Calificaciones',$alumnos);;
  }
  public function store(Request $request){
        $validator=Validator::make($request->all(),[

          'codigo_materia'=>'required|max:255',
          'codigo_curso'=>'required|max:255',
          'anio'=>'required|max:255',
          'p1'=>'required|max:255',
          'p2'=>'required|max:255',
          'p3'=>'required|max:255',
          'p4'=>'required|max:255',
          'prommedio'=>'required|max:255',

        ]);
        if($validator->fails()){
          return back()
          ->withInput()
          ->withErrors($validator);
        }else {


        //Insertar
        $last_id= intval(Alumno::OrderBy('id','desc')->first()->id);

        $alu=Calificacion::create([
          'codigo_materia'=>'19CNC'.($last_id+1),
          'codigo_curso'=>$request->codigo_curso,
          'anio'=>$request->anio,
          'p1'=>$request->p1,
          'p2'=>$request->p2,
          'p3'=>$request->p3,
          'p4'=>$request->p4,
          'promedio'=>$request->promedio
        ]);
        return back()
        ->with('Listo','Se ha insertado correctamente');
        }
    }
    public function destroy($matricula){
    $alumno=Calificacion::find($matricula);

      $alumno->delete();
      return back()
      ->with('Listo',"Se ha eliminado correctamente");
    }

}
