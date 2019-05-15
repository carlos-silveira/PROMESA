<?php

namespace App\Http\Controllers\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Aspirante;
use Validator;
class AspirantesController extends Controller
{
  public function __construct(){
      $this->middleware('auth');
  }
  public function index()
  {
    $alumnos=\DB::table('aspirantes')
          ->select('aspirantes.*')
          ->get();
      return view('frontend.dashboard.aspirantes')
      ->with('Aspirantes',$alumnos);;
  }
  public function store(Request $request){
        $validator=Validator::make($request->all(),[

          'nombre'=>'required|max:255',
          'apellidos'=>'required|max:255',
          'direccion'=>'required|max:255',
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


        $alu=Aspirante::create([
          'nombre'=>$request->nombre,
          'apellidos'=>$request->apellidos,
          'direccion'=>$request->direccion,
          'fecha_de_nacimiento'=>$request->fecha_de_nacimiento,
          'sexo'=>$request->sexo,
          'tutor'=>$request->tutor,
          'codigo_de_curso'=>$request->codigo_de_curso,
          'fecha_matricula'=>'01/01/2001',
          'status'=>'SN'
        ]);
        return back()
        ->with('Listo','Se ha insertado correctamente');
        }
    }
    public function destroy($codigo_de_ficha){
    $alumno=Alumno::find($codigo_de_ficha);

      $alumno->delete();
      return back()
      ->with('Listo',"Se ha eliminado correctamente");
    }

}
