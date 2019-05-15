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

          'nombre'=>'required|max:255',
          'apellidos'=>'required|max:255',
          'direccion'=>'required|max:255',
          'imagen'=>'required|file|max:1024',
          'fecha_de_nacimiento'=>'required|max:255',
          'sexo'=>'required|max:255',
          'tutor'=>'required|max:255',
          'codigo_de_curso'=>'required|max:255',

        ]);
        if($validator->fails()){
          return back()
          ->withInput()
          ->withErrors($validator);
        }else {


        //Insertar
        $last_id= intval(Alumno::OrderBy('id','desc')->first()->id);

        $alu=Alumno::create([
          'n_matricula'=>'19CNC'.($last_id+1),
          'nombre'=>$request->nombre,
          'apellidos'=>$request->apellidos,
          'img'=>$image_name,
          'fecha_de_nacimiento'=>$request->fecha_de_nacimiento,
          'sexo'=>$request->sexo,
          'tutor'=>$request->tutor,
          'codigo_de_curso'=>$request->codigo_de_curso
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
