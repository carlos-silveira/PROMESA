<?php

namespace App\Http\Controllers\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Models\Docente;
use DB;
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
  public function cleanup($table_name){
      DB::statement("SET @count = 0;");
      DB::statement("UPDATE `$table_name` SET `$table_name`.`codigo_de_maestro` = @count:= @count + 1;");
      DB::statement("ALTER TABLE `$table_name` AUTO_INCREMENT = 1;");
  }
  public function store(Request $request){
        $validator=Validator::make($request->all(),[


          'nombre'=>'required|max:255',
          'apellidos'=>'required|max:255',
          'especialidad'=>'required|max:255',
          'telefono'=>'required|max:255',
          'fecha_de_nacimiento'=>'required|max:255',
          'direccion'=>'required|max:255',
          'email'=>'required|max:255',

        ]);
        if($validator->fails()){
          return back()
          ->withInput()
          ->withErrors($validator);
        }else {
          if(!empty(Docente::OrderBy('codigo_de_maestro','desc')->first()->id)){
            self::cleanup('docentes');
          $pre_last_id=intval(Docente::OrderBy('codigo_de_maestro','desc')->first()->id);
          $mat = date('y').'CNCD' . str_pad($pre_last_id + 1, 3, 0, STR_PAD_LEFT);

          } else{
          $mat='19CNCD001';
          self::cleanup('docentes');
          }

        $alu=Docente::create([
          'codigo_de_maestro'=>$mat,
          'nombre'=>$request->nombre,
          'apellidos'=>$request->apellidos,
          'especialidad'=>$request->especialidad,
          'telefono'=>$request->telefono,
          'fecha_de_nacimiento'=>$request->fecha_de_nacimiento,
          'direccion'=>$request->direccion,
          'email'=>$request->email
        ]);
        return back()
        ->with('Listo','Se ha insertado correctamente');
        }
    }
    public function destroy($matricula){
    $alumno=Docente::find($matricula);

      $alumno->delete();
      return back()
      ->with('Listo',"Se ha eliminado correctamente");
    }
    public function update(Request $request){
          $validator=Validator::make($request->all(),[


            'nombre'=>'required|max:255',
            'apellidos'=>'required|max:255',
            'especialidad'=>'required|max:255',
            'telefono'=>'required|max:255',
            'fecha_de_nacimiento'=>'required|max:255',
            'direccion'=>'required|max:255',
            'email'=>'required|max:255',

          ]);
          if($validator->fails()){
            return back()
            ->withInput()
            ->withErrors($validator);
          }else {
            if(!empty(Docente::OrderBy('codigo_de_maestro','desc')->first()->id)){
              self::cleanup('docentes');
            $pre_last_id=intval(Docente::OrderBy('codigo_de_maestro','desc')->first()->id);
            $mat = date('y').'CNCD' . str_pad($pre_last_id , 3, 0, STR_PAD_LEFT);

            } else{
            $mat='19CNCD001';
            self::cleanup('docentes');
            }


          $alumno = Docente::find($request->idsent);
          $alumno->codigo_de_maestro=$request->idsent;
          $alumno->nombre=$request->nombre;
          $alumno->apellidos=$request->apellidos;
          $alumno->direccion=$request->direccion;
          $alumno->fecha_de_nacimiento=$request->fecha_de_nacimiento;
          $alumno->email=$request->email;
          $alumno->telefono=$request->telefono;
          $alumno->especialidad=$request->especialidad;
          $alumno->save();
    return back()
->with('Listo','Se ha modificado correctamente '.$request->idsent);
          }
}
}
