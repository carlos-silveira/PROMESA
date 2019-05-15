<?php

namespace App\Http\Controllers\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DocentesController extends Controller
{
  public function __construct(){
      $this->middleware('auth');
  }
  public function index()
  {
    $alumnos=\DB::table('docentes')
          ->select('docentes.*')
          ->get();
      return view('frontend.dashboard.docentes')
      ->with('Docentes',$alumnos);;
  }
  public function store(Request $request){
        $validator=Validator::make($request->all(),[

          'codigo_de_maestro'=>'required|max:255',
          'nombre'=>'required|max:255',
          'apellidos'=>'required|max:255',
          'especialidad'=>'required|max:255',
          'telefono'=>'required|max:255',
          'fecha_de_nacimiento'=>'required|max:255',
          'curp'=>'required|max:255',
          'email'=>'required|max:255',

        ]);
        if($validator->fails()){
          return back()
          ->withInput()
          ->withErrors($validator);
        }else {


        //Insertar
        $last_id= intval(Alumno::OrderBy('id','desc')->first()->id);

        $alu=Alumno::create([
          'codigo_de_maestro'=>'19CNC'.($last_id+1),
          'nombre'=>$request->nombre,
          'apellidos'=>$request->apellidos,
          'especialidad'=>$request->especialidad,
          'telefono'=>$request->telefono,
          'fecha_de_nacimiento'=>$request->fecha_de_nacimiento,
          'curp'=>$request->curp,
          'email'=>$request->email
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
