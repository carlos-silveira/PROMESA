<?php

namespace App\Http\Controllers\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Alumno;

class AlumnosController extends Controller
{
  public function __construct(){
      $this->middleware('auth');
  }
  public function index()
  {
    $alumnos=\DB::table('alumnos')
          ->select('alumnos.*')
          ->get();
      return view('frontend.dashboard.alumnos')
      ->with('Alumnos',$alumnos);;
  }
  public function store(Request $request){
        $validator=Validator::make($request->all(),[
          'matricula'=>'required|max:8',
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
          $imagen= $request->file("imagen");
          $image_name=time().'.'.$imagen->getClientOriginalExtension();
          $destino= public_path('/img/alumnos');
          $request->imagen->move($destino,$image_name);

        //Insertar
        $alu=Alumno::create([
          'matricula'=>$request->matricula,
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
    if(file_exists(public_path('/img/alumnos')."/".$alumno->img)){
      unlink(public_path('/img/alumnos')."/".$alumno->img);
    }
      $alumno->delete();
      return back()
      ->with('Listo',"Se ha eliminado correctamente");
    }

}
