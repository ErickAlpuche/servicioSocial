<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use App\Models\AsignaturaTema;
use App\Models\Evento;
use App\Models\Institucion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CrudController extends Controller
{
    //Esta función sirve para abrir la página "Nueva Materia"
    public function new_register()
    {
        return view('nueva');
    }

    //Esta función sirve para abrir la página de la materia ya guardada
    public function update_register()
    {
        return view('nueva_update');
    }

    //Esta función se usa para guardar la nueva materia en la BDD
    public function new_register_save(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'main_one'=> 'required',
            'main_two'=> 'required',

        ],[
            'main_one.required'=> 'Clave is required',
            'main_two.required'=> 'Nombre is required',

        ]);
        if ($validator->fails())
        {
            $str['status']=false;
            $error=$validator->errors()->toArray();
            foreach($error as $x_value){
                $err[]=$x_value[0];
            }
             $str['message'] =$err['0'];
            return $str;
        }
        else
        {
            $big_object = json_decode($request->big_object);
            $big_object_two = json_decode($request->big_object_two);
            $big_object_three = json_decode($request->big_object_three);

            if($request->main_one < 0)
            {
                $str['status']=false;
                $str['message'] = "La clave de la materia no puede ser menor a 0";
                return $str;
            }

            if(isset($request->main_four))
            {
                if($request->main_four < 0)
                {
                    $str['status']=false;
                    $str['message'] = "Las horas teóricas no pueden ser menores a 0";
                    return $str;
                }
            }

            if(isset($request->main_five))
            {
                if($request->main_five < 0)
                {
                    $str['status']=false;
                    $str['message'] = "Las horas prácticas no pueden ser menores a 0";
                    return $str;
                }
            }

            if(count($big_object) > 0)
            {
                foreach ($big_object as $key => $value) {

                    if($value->subject_name == "")
                    {
                        $str['status']=false;
                        $str['message'] = "El campo - Nombre del tema - no puede estar vacío";
                        return $str;
                    }

                    if($value->subject_property_one == "")
                    {
                        $str['status']=false;
                        $str['message'] = "El campo - Competencias previas del tema - no puede estar vacío";
                        return $str;
                    }

                    else if($value->subject_property_two == "")
                    {
                        $str['status']=false;
                        $str['message'] = "El campo - Competencias específicas del tema - no puede estar vacío";
                        return $str;
                    }

                    else if($value->subject_property_three == "")
                    {
                        $str['status']=false;
                        $str['message'] = "El campo - Subtemas - no puede estar vacío";
                        return $str;
                    }

                    else if($value->subject_property_four == "")
                    {
                        $str['status']=false;
                        $str['message'] = "El campo - Competencias específicas a desarrollar - no puede estar vacío";
                        return $str;
                    }

                    else if($value->subject_property_five == "")
                    {
                        $str['status']=false;
                        $str['message'] = "El campo - Competencias genericas a desarrollar - no puede estar vacío";
                        return $str;
                    }

                    else if($value->subject_property_six == "")
                    {
                        $str['status']=false;
                        $str['message'] = "El campo - Actividades de aprendizaje - no puede estar vacío";
                        return $str;
                    }
                }
            }

            if(count($big_object_two) > 0)
            {
                foreach ($big_object_two as $key => $value) {
                    if($value->clave == "")
                    {
                        $str['status']=false;
                        $str['message'] = "El campo - Clave del evento - no puede estar vacío";
                        return $str;
                    }

                    else if($value->clave < 0)
                    {
                        $str['status']=false;
                        $str['message'] = "El campo - Clave del evento - no puede ser menor a 0";
                        return $str;
                    }

                    else if($value->nombre == "")
                    {
                        $str['status']=false;
                        $str['message'] = "El campo - Nombre  del evento - no puede estar vacío";
                        return $str;
                    }
                }
            }

            if(count($big_object_three) > 0)
            {
                foreach ($big_object_three as $key => $value) {
                    if($value->inicio == "")
                    {
                        $str['status']=false;
                        $str['message'] = "El campo - Inicio del periodo de actualización - no puede estar vacío";
                        return $str;
                    }

                    else if($value->fin == "")
                    {
                        $str['status']=false;
                        $str['message'] = "El campo - Fin del periodo de actualización - no puede estar vacío";
                        return $str;
                    }

                    else if($value->clave == "")
                    {
                        $str['status']=false;
                        $str['message'] = "El campo - Clave de la institución - no puede estar vacío";
                        return $str;
                    }

                    else if($value->clave < 0)
                    {
                        $str['status']=false;
                        $str['message'] = "La clave de la institución no puede ser menor a 0";
                        return $str;
                    }

                    else if($value->institucion == "")
                    {
                        $str['status']=false;
                        $str['message'] = "El campo - Nombre de la institución - no puede estar vacío";
                        return $str;
                    }
                }
            }


            $new_course = new Asignatura;
            $new_course->clave = $request->main_one;
            $new_course->nombre = $request->main_two;
            $new_course->programa_date = $request->main_fourteen;
            $new_course->detalle_evento = $request->main_fifteen;

            if(isset($request->main_four) && isset($request->main_five))
            {
                $new_course->teoricas = $request->main_four;
                $new_course->practicas = $request->main_five;
            }

            $new_course->caracterizacion = $request->main_six;
            $new_course->didactia = $request->main_seven;
            $new_course->general = $request->main_eight;
            $new_course->previas = $request->main_nine;

            $new_course->laboratorio = $request->main_ten;
            $new_course->proyecto = $request->main_eleven;
            $new_course->evaluacion_competencias = $request->main_twelve;
            $new_course->fuentes = $request->main_thirteen;

            $new_course->whole_object = $request->big_object;
            $new_course->whole_object_two = $request->big_object_two;
            $new_course->whole_object_three = $request->big_object_three;
            $new_course->save();

            foreach ($big_object as $value) {
                $new_course_subject = new AsignaturaTema;
                $new_course_subject->course_id = $new_course->id;
                $new_course_subject->tema = $value->subject_name;
                $new_course_subject->tema_previas = $value->subject_property_one;
                $new_course_subject->tema_especificas = $value->subject_property_two;

                $new_course_subject->subtemas = $value->subject_property_three;
                $new_course_subject->especificas_desarrollar = $value->subject_property_four;
                $new_course_subject->genericas_desarrollar = $value->subject_property_five;
                $new_course_subject->aprendizaje = $value->subject_property_six;
                $new_course_subject->save();
            }

            foreach ($big_object_two as $value) {
                $new_course_subject = new Evento;
                $new_course_subject->course_id = $new_course->id;
                $new_course_subject->clave = $value->clave;
                $new_course_subject->nombre = $value->nombre;
                $new_course_subject->save();
            }

            foreach ($big_object_three as $value) {
                $new_course_subject = new Institucion;
                $new_course_subject->course_id = $new_course->id;
                $new_course_subject->inicio = $value->inicio;
                $new_course_subject->fin = $value->fin;
                $new_course_subject->clave = $value->clave;
                $new_course_subject->institucion = $value->institucion;
                $new_course_subject->save();
            }

            $courses = Asignatura::orderBy('id','desc')->get();

            $str['status']=true;
            $str['message'] = "Un nuevo curso, sus temas, eventos e instituciones han sido añadidos correctamente";
            $str['data'] = $courses;
            return $str;
        }
    }

    //Esta función es utilizada para actualizar la ya existente materia en la BDD
    public function update_register_save(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'edit_id'=> 'required',
            'main_one'=> 'required',
            'main_two'=> 'required',
            'main_one.required'=> 'Clave is required',
            'main_two.required'=> 'Nombre is required',
        ]);
        if ($validator->fails())
        {
            $str['status']=false;
            $error=$validator->errors()->toArray();
            foreach($error as $x_value){
                $err[]=$x_value[0];
            }
             $str['message'] =$err['0'];
            return $str;
        }
        else
        {
            $big_object = json_decode($request->big_object);
            $big_object_two = json_decode($request->big_object_two);
            $big_object_three = json_decode($request->big_object_three);

            if(isset($request->main_four))
            {
                if($request->main_four < 0)
                {
                    $str['status']=false;
                    $str['message'] = "Las horas teóricas no pueden ser menores a 0";
                    return $str;
                }
            }

            if($request->main_one < 0)
            {
                $str['status']=false;
                $str['message'] = "La Clave de la materia no puede ser menor a 0";
                return $str;
            }

            if(isset($request->main_five))
            {
                if($request->main_five < 0)
                {
                    $str['status']=false;
                    $str['message'] = "Las horas prácticas no pueden ser menores a 0";
                    return $str;
                }
            }

            if(count($big_object) > 0)
            {
                foreach ($big_object as $key => $value) {

                    if($value->subject_name == "")
                    {
                        $str['status']=false;
                        $str['message'] = "El campo - Nombre del tema - no puede estar vacío";
                        return $str;
                    }

                    if($value->subject_property_one == "")
                    {
                        $str['status']=false;
                        $str['message'] = "Tema competencias previas no puede ser nula";
                        return $str;
                    }

                    else if($value->subject_property_two == "")
                    {
                        $str['status']=false;
                        $str['message'] = "El campo - Competencias previas del tema - no puede estar vacío";
                        return $str;
                    }

                    else if($value->subject_property_three == "")
                    {
                        $str['status']=false;
                        $str['message'] = "El campo - Subtemas - no puede estar vacío";
                        return $str;
                    }

                    else if($value->subject_property_four == "")
                    {
                        $str['status']=false;
                        $str['message'] = "El campo - Competencias específicas a desarrollar - no puede estar vacío";
                        return $str;
                    }

                    else if($value->subject_property_five == "")
                    {
                        $str['status']=false;
                        $str['message'] = "El campo - Competencias genéricas a desarrollar - no puede estar vacío";
                        return $str;
                    }

                    else if($value->subject_property_six == "")
                    {
                        $str['status']=false;
                        $str['message'] = "El campo - Actividades de aprendizaje - no puede estar vacío";
                        return $str;
                    }
                }
            }

            if(count($big_object_two) > 0)
            {
                foreach ($big_object_two as $key => $value) {
                    if($value->clave == "")
                    {
                        $str['status']=false;
                        $str['message'] = "El campo - Clave del evento - no puede estar vacío";
                        return $str;
                    }

                    else if($value->clave < 0)
                    {
                        $str['status']=false;
                        $str['message'] = "La clave del evento no puede ser menor que 0";
                        return $str;
                    }

                    else if($value->nombre == "")
                    {
                        $str['status']=false;
                        $str['message'] = "El campo - Nombre del evento - no puede estar vacío";
                        return $str;
                    }
                }
            }

            if(count($big_object_three) > 0)
            {
                foreach ($big_object_three as $key => $value) {
                    if($value->inicio == "")
                    {
                        $str['status']=false;
                        $str['message'] = "El campo - Inicio del periodo de actualización - no puede estar vacío";
                        return $str;
                    }

                    else if($value->fin == "")
                    {
                        $str['status']=false;
                        $str['message'] = "El campo - Fin del periodo de actualización - no puede estar vacío";
                        return $str;
                    }

                    else if($value->clave == "")
                    {
                        $str['status']=false;
                        $str['message'] = "El campo Clave de la institución - no puede estar vacío";
                        return $str;
                    }

                    else if($value->clave < 0)
                    {
                        $str['status']=false;
                        $str['message'] = "La clave de la institución no puede ser menor que 0";
                        return $str;
                    }

                    else if($value->institucion == "")
                    {
                        $str['status']=false;
                        $str['message'] = "El campo Nombre de la institución - no puede estar vacío";
                        return $str;
                    }
                }
            }

            $new_course = Asignatura::find($request->edit_id);
            $new_course->clave = $request->main_one;
            $new_course->nombre = $request->main_two;
            $new_course->programa_date = $request->main_fourteen;
            $new_course->detalle_evento = $request->main_fifteen;
            $new_course->teoricas = $request->main_four;
            $new_course->practicas = $request->main_five;
            $new_course->caracterizacion = $request->main_six;
            $new_course->didactia = $request->main_seven;
            $new_course->general = $request->main_eight;
            $new_course->previas = $request->main_nine;

            $new_course->laboratorio = $request->main_ten;
            $new_course->proyecto = $request->main_eleven;
            $new_course->evaluacion_competencias = $request->main_twelve;
            $new_course->fuentes = $request->main_thirteen;

            $new_course->whole_object = $request->big_object;
            $new_course->whole_object_two = $request->big_object_two;
            $new_course->whole_object_three = $request->big_object_three;
            $new_course->save();

            AsignaturaTema::where('course_id',$request->edit_id)->delete();
            Evento::where('course_id',$request->edit_id)->delete();
            Institucion::where('course_id',$request->edit_id)->delete();

            foreach ($big_object as $value) {
                $new_course_subject = new AsignaturaTema;
                $new_course_subject->course_id = $new_course->id;
                $new_course_subject->tema = $value->subject_name;
                $new_course_subject->tema_previas = $value->subject_property_one;
                $new_course_subject->tema_especificas = $value->subject_property_two;

                $new_course_subject->subtemas = $value->subject_property_three;
                $new_course_subject->especificas_desarrollar = $value->subject_property_four;
                $new_course_subject->genericas_desarrollar = $value->subject_property_five;
                $new_course_subject->aprendizaje = $value->subject_property_six;
                $new_course_subject->save();
            }

            foreach ($big_object_two as $value) {
                $new_course_subject = new Evento;
                $new_course_subject->course_id = $new_course->id;
                $new_course_subject->clave = $value->clave;
                $new_course_subject->nombre = $value->nombre;
                $new_course_subject->save();
            }

            foreach ($big_object_three as $value) {
                $new_course_subject = new Institucion;
                $new_course_subject->course_id = $new_course->id;
                $new_course_subject->inicio = $value->inicio;
                $new_course_subject->fin = $value->fin;
                $new_course_subject->clave = $value->clave;
                $new_course_subject->institucion = $value->institucion;
                $new_course_subject->save();
            }

            $str['status']=true;
            $str['message'] = "Se ha actualizado la materia y sus temas";
            return $str;
        }
    }

    //Esta función sirve para mostrar la página de la materia ya existente guardada en la BDD
    public function registers_list()
    {
        return view('abrir');
    }

    //Esta es la función para hacer fetch a todas las materias guardadas en la BDD
    public function fetch_all_courses()
    {
        $courses = Asignatura::orderBy('id','desc')->get();

        $str['status']=true;
        $str['message'] = "all courses shown";
        $str['data'] = $courses;
        return $str;
    }

    //En esta función eliminamos una materia de la BDD, lo hacemos obteniendo el ID de dicha
    //materia en la variable a la que hacemos request.
    public function delete_course(Request $request)
    {
        $courses_check = AsignaturaTema::where('course_id',$request->id)->first();
        $evento_check = AsignaturaTema::where('course_id',$request->id)->first();
        $institution_check = AsignaturaTema::where('course_id',$request->id)->first();

        if(empty($courses_check) && empty($evento_check) && empty($institution_check))
        {
            $course = Asignatura::find($request->id);
            $course->delete();

            $courses = Asignatura::orderBy('id','desc')->get();

            $str['status']=true;
            $str['message'] = "Materia eliminada correctamente";
            $str['data'] = $courses;
            return $str;
        }
        else
        {
            $str['status']=false;
            $str['message'] = "Esta materia todavía tiene temas asignados";
            return $str;
        }
    }

    //Esta es la función para abrir una materia en particular
    public function open_one_course(Request $request)
    {
        $course = Asignatura::find($request->id);

        $course->whole_object = json_decode($course->whole_object);
        $course->whole_object_two = json_decode($course->whole_object_two);
        $course->whole_object_three = json_decode($course->whole_object_three);

        $str['status']=true;
        $str['message'] = "Todas las materias se están mostrando";
        $str['data'] = $course;
        return $str;
    }
}
