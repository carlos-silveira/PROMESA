<?php

namespace App\Http\Controllers\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use DB;
use App\Models\Alumno;
$table_name='alumnos';
class AlumnosController extends Controller {
public function __construct(){
      $this->middleware('auth');
  }
public function index(){
    $alumnos=\DB::table('alumnos')
          ->select('alumnos.*')
          ->get();
      return view('frontend.dashboard.alumnos')
      ->with('Alumnos',$alumnos);;
  }
public function cleanup($table_name){
    DB::statement("SET @count = 0;");
    DB::statement("UPDATE `$table_name` SET `$table_name`.`id` = @count:= @count + 1;");
    DB::statement("ALTER TABLE `$table_name` AUTO_INCREMENT = 1;");
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
            if(!empty(Alumno::OrderBy('id','desc')->first()->id)){
              self::cleanup('alumnos');
            $pre_last_id=intval(Alumno::OrderBy('id','desc')->first()->id);
            $mat = date('y').'CNC' . str_pad($pre_last_id + 1, 3, 0, STR_PAD_LEFT);

            } else{
            $mat='19CNC001';
            self::cleanup('alumnos');
            }

          $imagen= $request->file("imagen");
          $image_name=$mat.'.'.$imagen->getClientOriginalExtension();
          $destino= public_path('/img/alumnos');
          $request->imagen->move($destino,$image_name);

        //Insertar


        $alu=Alumno::create([
          'matricula'=>$mat,
          'nombre'=>$request->nombre,
          'apellidos'=>$request->apellidos,
          'direccion'=>$request->direccion,
          'imagen'=>$image_name,
          'fecha_de_nacimiento'=>$request->fecha_de_nacimiento,
          'sexo'=>$request->sexo,
          'tutor'=>$request->tutor,
          'codigo_de_curso'=>$request->codigo_de_curso
        ]);
        return back()
        ->with('Listo','Se ha insertado correctamente '.$alu->matricula);
        }
    }
public function destroy($id){
    $alumno = Alumno::find($id);
    if(file_exists(public_path('/img/alumnos')."/".$alumno->imagen)){
      unlink(public_path('/img/alumnos')."/".$alumno->imagen);
    }
      $alumno->delete();
      return back()
      ->with('Listo',"Se ha eliminado correctamente ".$alumno->nombre);
    }
public function update(Request $request){

  $validator=Validator::make($request->all(),[

    'nombre'=>'required|max:255',
    'apellidos'=>'required|max:255',
    'direccion'=>'required|max:255',
    'imagen'=>'required|file|max:1024',
    'fecha_de_nacimiento'=>'required|max:255',
    'sexo'=>'required|max:255',
    'tutor'=>'required|max:255',
    'idsent'=>'required|max:255',
    'codigo_de_curso'=>'required|max:255',

    ]);
  if($validator->fails()){
    return back()
    ->withInput()
    ->withErrors($validator);
  }else {


    $imagen= $request->file("imagen");
    $image_name=$request->idsent.'.'.$imagen->getClientOriginalExtension();
    $destino= public_path('/img/alumnos');
    $request->imagen->move($destino,$image_name);

    $alumno = Alumno::find($request->idsent);
    $alumno->matricula=$request->idsent;
    $alumno->nombre=$request->nombre;
    $alumno->apellidos=$request->apellidos;
    $alumno->direccion=$request->direccion;
    $alumno->imagen=$image_name;
    $alumno->fecha_de_nacimiento=$request->fecha_de_nacimiento;
    $alumno->sexo=$request->sexo;
    $alumno->tutor=$request->tutor;
    $alumno->codigo_de_curso=$request->codigo_de_curso;
    $alumno->save();
    return back()
    ->with('Listo','Se ha modificado correctamente '.$request->idsent);
}
}
}
