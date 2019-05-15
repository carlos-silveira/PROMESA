<?php

namespace App\Http\Controllers\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonalController extends Controller
{
  public function __construct(){
      $this->middleware('auth');
  }
  public function index()
  {
    $alumnos=\DB::table('personal')
          ->select('personal.*')
          ->get();
      return view('frontend.dashboard.personal')
      ->with('Personal',$alumnos);;
  }
  public function store(Request $request){
        $validator=Validator::make($request->all(),[

          'codigo_personal'=>'required|max:255',
          'nombre'=>'required|max:255',
          'apellidos'=>'required|max:255',
          'direccion'=>'required|max:255',
          'fecha_de_nacimiento'=>'required|max:255',
          'grado_de_estudio'=>'required|max:255',
          'cargo'=>'required|max:255',
          'fecha_de_inicio'=>'required|max:255',
          'antiguedad'=>'required|max:255',
          'curp'=>'required|max:255',

        ]);
        if($validator->fails()){
          return back()
          ->withInput()
          ->withErrors($validator);
        }else {


        //Insertar
        $last_id= intval(Alumno::OrderBy('id','desc')->first()->id);

        $alu=Alumno::create([
          'codigo_personal'=>'19CNC'.($last_id+1),
          'nombre'=>$request->nombre,
          'apellidos'=>$request->apellidos,
          'direccion'=>$request->direccion,
          'fecha_de_nacimiento'=>$request->fecha_de_nacimiento,
          'grado_de_estudio'=>$request->grado_de_estudio,
          'cargo'=>$request->cargo,
          'fecha_de_inicio'=>$request->fecha_de_inicio,
          'antiguedad'=>$request->antiguedad,
          'curp'=>$request->curp

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
