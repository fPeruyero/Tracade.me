<?php

namespace App\Http\Controllers\Grupos;
use App\Alumno;
use App\Aula;
use App\Disciplina;
use App\DisciplinaAlumno;
use App\Grupo;
use App\GrupoAlumno;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Sodium\add;

class GruposController extends Controller
{
    public function read(){
        $Grupos = Grupo::select('*')->paginate(5);
        $alu_gru = GrupoAlumno::all();
        $alumnos = Alumno::all();
        return view('Instructor.grupos',compact('Grupos', 'alu_gru', 'alumnos') );
    }
    public function showCreate(){
        $aulas = Aula::all();
        $disciplinas = Disciplina::all();
        return view('Instructor.CrearGrupos', compact('aulas', 'disciplinas'));
    }
    public function create(Request $request){
        //return $request;
        $grupo = new Grupo();
        $grupo->gru_nombre = $request->gru_nombre;
        $grupo->gr_dia = $request->gru_dia;
        $grupo->gru_hora = "2000-01-01 ".$request->hora.":".$request->min.":00";
        $grupo->dis_id = $request->dis_id;
        $grupo->aul_id = 1;
        $grupo->save();
        return redirect()->route('grupos');
    }

    public function delete($id){
        Grupo::all()->find($id)->delete();
        $alumnos = GrupoAlumno::all()->where('gru_id', $id);
        foreach ($alumnos as $alumno){
            $alumno->delete();
        }
        return redirect()->route('grupos');
    }

    public function showUpdate($id){
        $grupo = Grupo::all()->find($id);
        $aulas = Aula::all();
        $disciplinas = Disciplina::all();
        return view('Instructor.ModGrupos', compact('grupo', 'aulas', 'disciplinas', 'id'));
    }

    public function update(Request $request, $id){
        $grupo = Grupo::all()->find($id);
        $grupo->gru_nombre = $request->gru_nombre;
        $grupo->gr_dia = $request->gru_dia;
        //$grupo->gru_hora = "2000-01-01 ".$request->hora.":".$request->min.":00";
        $grupo->dis_id = $request->dis_id;
        $grupo->aul_id = 1;
        $grupo->save();
        return redirect()->route('grupos');
    }

    public function showAgregarAlumnos($id){
        $alumnos = Alumno::all();

        $disciplinas = Disciplina::all();
        $dis_alu = DisciplinaAlumno::all();
        $grupo = Grupo::all()->find($id);
        $alumnosGrupo = GrupoAlumno::select('*')->where('gru_id', $id)->paginate(5,['+'], 'alumnos');
        $alumnosNuevos = DB::table('alumno')
            ->leftJoin('grupo_alumno', function($join)
            {
                $join->on('alumno.id', '=', 'grupo_alumno.alu_id')
                    ->where('grupo_alumno.deleted_at', null);

            })
            ->where('grupo_alumno.alu_id',null)
            ->where('alumno.deleted_at', null)
            ->select('alumno.*')
            ->paginate(5,['+'], 'disponibles');
        return view('Instructor.agregarAlumnos', compact('alumnos', 'disciplinas', 'dis_alu', 'id', 'grupo', 'alumnosGrupo', 'alumnosNuevos'));
    }

    public function add($id, $alu_id){
        $grupoAlumno = new GrupoAlumno();
        $grupoAlumno->gru_id = $id;
        $grupoAlumno->alu_id = $alu_id;
        $grupoAlumno->save();
        return redirect()->route('agregar-alumnos', $id);
    }


    public function deleteAlumno($id, $gId){
        GrupoAlumno::all()->find($id)->delete();
        return redirect()->route('agregar-alumnos', $gId);
    }


    public function multipleDelte(Request $request){
        foreach ($request->borrar as $borrar){
            Grupo::all()->find($borrar)->delete();
            $alumnos = GrupoAlumno::all()->where('gru_id', $borrar);
            foreach ($alumnos as $alumno){
                $alumno->delete();
            }
        }
        return redirect()->route('grupos');
    }

}
