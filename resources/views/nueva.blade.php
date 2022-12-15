<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Registro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script async src="https://kit.fontawesome.com/d983c357f6.js" crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <style>
        .nav-link {
            color: white !important
        }

        .hover_effect:hover {
            color:red
        }

        .hover_effect_row:hover {
            background-color:rgb(236, 236, 236)
        }
    </style>

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color:#287a93 !important">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Carrera <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Asignatura
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="nueva">Nueva</a>
                    <a class="dropdown-item" href="abrir">Abrir</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Periodo escolar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cargas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Seguimiento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Administración</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Salir</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container" style="">

        <div class="row no-gutters" style="margin-top:30px">
            <div class="col-2">
                <div style="display: flex;padding: 9.5px; padding-bottom:1px; background-color: #c9e9f2;">
                    <h6 style="">Clave</h6>
                </div>
            </div>
            <div class="col-5">
                <div style="display: flex;padding: 9.5px; padding-bottom:1px; background-color: #c9e9f2;">
                    <h6 style="">Nombre</h6>
                </div>
            </div>
            <div class="col-1">
                <div style="display: flex;padding: 9.5px; padding-bottom:1px; background-color: #c9e9f2;">
                    <h6 style="">HT</h6>
                </div>
            </div>
            <div class="col-1">
                <div style="display: flex;padding: 9.5px; padding-bottom:1px; background-color: #c9e9f2;">
                    <h6 style="">HP</h6>
                </div>
            </div>
            <div class="col-3">
                <div style="display: flex;padding: 9.5px; padding-bottom:1px; background-color: #c9e9f2;">
                    <h6 style="">Fecha Programa Estudios</h6>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-2">
                <div style=" padding-bottom:1px;">
                    <input type="number"min="0" class="form-control" id="main_one_id">
                </div>
            </div>
            <div class="col-5">
                <div style=" padding-bottom:1px;">
                    <input type="text" class="form-control" id="main_two_id">
                </div>
            </div>
            <div class="col-1">
                <div style=" padding-bottom:1px;">
                    <input type="number" min="0" class="form-control" id="main_four_id">
                </div>
            </div>
            <div class="col-1">
                <div style=" padding-bottom:1px;">
                    <input type="number" min="0" class="form-control" id="main_five_id">
                </div>
            </div>
            <div class="col-3">
                <div style=" padding-bottom:1px; display:flex;">
                    <input type="date" class="form-control" id="main_fourteen_id">
                    <div style="border: 1px solid;width: 38px;height: 38px;padding: 7px;padding-left: 9px;"><i class="fa-solid fa-magnifying-glass"></i></div>
                </div>
            </div>
        </div>

        <div id="current_screen_id">

            <div class="row" id="current_screen_inside_one" style="margin-top:30px;display: none">
                <div class="col-12">
                    <div style="background-color: #c9e9f2;" class="text-center">
                        <h6 style="padding: 10px">Caracterización</h6>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control" id="main_six_id" rows="7"></textarea>
                    </div>
                </div>
            </div>

            <div class="row" id="current_screen_inside_two" style="margin-top:30px;display: none">
                <div class="col-12">
                    <div style="background-color: #c9e9f2;" class="text-center">
                        <h6 style="padding: 10px">Intención didáctica</h6>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control" id="main_seven_id" rows="7"></textarea>
                    </div>
                </div>
            </div>

            <div class="row" id="current_screen_inside_three" style="margin-top:30px;display: none">
                <div class="col-12">
                    <div style="background-color: #c9e9f2;" class="text-center">
                        <h6 style="padding: 10px">Competencias generales</h6>
                    </div>
                </div>  
                <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control" id="main_eight_id" rows="7"></textarea>
                    </div>
                </div>
            </div>

            <div class="row" id="current_screen_inside_four" style= "margin-top:30px;display: none">
                <div class="col-12">
                    <div style="background-color: #c9e9f2;" class="text-center">
                        <h6 style="padding: 10px">Competencias previas</h6>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control" id="main_nine_id" rows="7"></textarea>
                    </div>
                </div>
            </div>

            <div id="current_screen_inside_five" style="display: none">

                <div class="row" style="margin-top:30px">
                    <div class="col-12" style="justify-content: center;display: flex;">
                        <div style="margin-right:15px; margin-top:13px; cursor:pointer; display:none" class="add_subject_handler"><i class="fa-solid fa-square-plus"></i></div>
                        <table class="table table-bordered" class="text-center" style="max-width:900px">
                            <thead>
                            <tr>
                                <th scope="col" width="8%" style="text-align:center;background-color: #c9e9f2;">Csc</th>
                                <th scope="col" style="text-align:center;background-color: #c9e9f2;">Tema</th>
                            </tr>
                            </thead>
                            <tbody id="my_subjects_names_list">
                            </tbody>
                        </table>
                    </div>
                </div>

                <div style="display: flex; justify-content:center">
                    <div style="display: none" id="inside_left_click"><h6 class="" style="margin-top: 180px;font-size:20px; cursor: pointer; margin-right: 50px;"><i class="fa-solid fa-arrow-left"></i></h6></div>
                    <div id="appending_more_detail_id">

                    </div>
                    <div style="display: none" id="inside_right_click"><h6 class="" style="margin-top: 180px;font-size:20px; cursor: pointer; margin-left: 50px;"><i class="fa-solid fa-arrow-right"></i></h6></div>
                </div>

            </div>

            <div id="current_screen_inside_six" style="display: none">

                <div class="row" style="margin-top:30px">
                    <div class="col-12" style="justify-content: center;display: flex;">
                        <div style="margin-right:15px; margin-top:13px; cursor:pointer;display:none" class="add_institucion_handler"><i class="fa-solid fa-square-plus"></i></div>
                        <table class="table table-bordered" class="text-center" style="max-width:900px">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="4" width="100%" style="text-align:center;background-color: #d3caff;">Actualizaciones</th>
                                </tr>
                                <tr>
                                    <th scope="col" width="50%" colspan="2" style="text-align:center;background-color: #c9e9f2;">Periodo</th>
                                    <th scope="col" width="50%" colspan="2" style="text-align:center;background-color: #c9e9f2;">Lugar de la reunión</th>
                                </tr>
                                <tr>
                                    <th scope="col" width="15%" style="text-align:center;background-color: #c9e9f2;">Inicio</th>
                                    <th scope="col" width="15%" style="text-align:center;background-color: #c9e9f2;">fin</th>
                                    <th scope="col" width="15%" style="text-align:center;background-color: #c9e9f2;">Clave</th>
                                    <th scope="col" style="text-align:center; background-color: #c9e9f2;">Institución</th>
                                </tr>
                            </thead>
                            <tbody id="my_institucions_names_list">
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <div id="current_screen_inside_seven" style="display: none">

                <div class="row" style="margin-top:30px">
                    <div class="col-12" style="">
                        <table class="table table-bordered" class="text-center" style="margin-bottom: 8px;">
                            <thead>
                                <tr><th scope="col" width="8%" style="text-align:center;background-color: #c9e9f2;">Evento</th> </tr>
                            </thead>
                        </table>
                        <textarea class="form-control" id="main_fifteen_id" rows="7"></textarea>
                    </div>
                </div>

                <div class="row" style="margin-top:30px">
                    <div class="col-12" style="justify-content: center;display: flex;">
                        <div style="margin-right:15px; margin-top:13px; cursor:pointer;display:none" class="add_evento_handler"><i class="fa-solid fa-square-plus"></i></div>
                        <table class="table table-bordered" class="text-center" style="max-width:900px">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="4" width="100%" style="text-align:center;background-color: #d3caff;">Institucions Participantes</th>
                                </tr>
                                <tr>
                                    <th scope="col" width="30%" style="text-align:center;background-color: #c9e9f2; ">Clave</th>
                                    <th scope="col" width="70%" style="text-align:center;background-color: #c9e9f2;">Nombre</th>
                                </tr>
                            </thead>
                            <tbody id="my_eventos_names_list">
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <div id="current_screen_inside_eight" style="display: none">

                <div class="row" style="margin-top:30px">
                    <div class="col-12" style="justify-content: center;display: flex;">
                        <div style="margin-right:15px; margin-top:13px; cursor:pointer; display:none" class=""><i class="fa-solid fa-square-plus"></i></div>
                        <div style="width: 900px">
                            <table class="table table-bordered" class="text-center">
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="4" width="100%" style="text-align:center;background-color: #d3caff;">Caracteristicas de los temas</th>
                                    </tr>
                                    <tr>
                                        <th scope="col" colspan="2" width="25%" style="text-align:center;background-color: #c9e9f2;">Consecutivo</th>
                                        <th scope="col" colspan="2" style="text-align:center;background-color: #c9e9f2;">Nombre</th>
                                    </tr>
                                    <tr>
                                        <th id="eight_iterate_left_id" scope="col" width="6%" style="cursor:pointer; text-align:center;background-color: white;"><i class="fa-solid fa-caret-left"></i></th>
                                        <th id="eight_subject_clave_id" scope="col" width="19%" style="text-align:center;background-color: #e7e7e7;">1</th>
                                        <th id="eight_subject_nombre_id" scope="col" width="" style="text-align:center;background-color: #e7e7e7;">Subject Name</th>
                                        <th id="eight_iterate_right_id" scope="col"  width="6%" style="cursor:pointer; text-align:center; background-color: white;"><i class="fa-solid fa-caret-right"></i></th>
                                    </tr>
                                </thead>
                            </table>

                            <div id="appending_more_detail_two_id">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row" id="current_screen_inside_nine" style="margin-top:30px;display: none">
                <div class="col-12">
                    <div style="background-color: #c9e9f2;" class="text-center">
                        <h6 style="padding: 10px">Prácticas de laboratorio</h6>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control" id="main_ten_id" rows="7"></textarea>
                    </div>
                </div>
            </div>

            <div class="row" id="current_screen_inside_ten" style="margin-top:30px;display: none">
                <div class="col-12">
                    <div style="background-color: #c9e9f2;" class="text-center">
                        <h6 style="padding: 10px">Proyecto de asignatura</h6>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control" id="main_eleven_id" rows="7"></textarea>
                    </div>
                </div>
            </div>

            <div class="row" id="current_screen_inside_eleven" style="margin-top:30px;display: none">
                <div class="col-12">
                    <div style="background-color: #c9e9f2;" class="text-center">
                        <h6 style="padding: 10px">Evaluación por competencias (específicas y genéricas de la asignatura)</h6>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control" id="main_twelve_id" rows="7"></textarea>
                    </div>
                </div>
            </div>

            <div class="row" id="current_screen_inside_twelve" style="margin-top:30px;display: none">
                <div class="col-12">
                    <div style="background-color: #c9e9f2;" class="text-center">
                        <h6 style="padding: 10px">Fuentes de información</h6>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control" id="main_thirteen_id" rows="7"></textarea>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-12">
                <div style="display: flex; justify-content:space-between;background-color: #e8e8e8;">
                    <h6 class="prev-btn" style="padding:10px;padding-bottom: 5px;font-size:25px; cursor: pointer;"><i class="hover_effect fa-solid fa-arrow-left"></i></h6>

                    <div style="display:flex;visibility: hidden" id="add_remove_thing">
                        <h6 class="add_thing_handler" style="margin-right:10px;padding:10px;padding-bottom: 5px;font-size:25px; cursor: pointer;"><i class="hover_effect fa-solid fa-plus"></i></h6>
                        <h6 class="remove_thing_handler" style="margin-left:10px;padding:10px;padding-bottom: 5px;font-size:25px; cursor: pointer;"><i class="hover_effect fa-solid fa-minus"></i></h6>
                    </div>

                    <div style="display:flex">
                        <h6 class="" style="margin-right:10px;padding:10px;padding-bottom: 5px;font-size:25px; cursor: pointer;"><i class="hover_effect fa-solid fa-file-import"></i></h6>
                        <h6 class="save-btn" style="margin-left:10px;padding:10px;padding-bottom: 5px;font-size:25px; cursor: pointer;"><i class="hover_effect fa-solid fa-floppy-disk"></i></h6>
                    </div>

                    <div style="display:flex;visibility: hidden" id="asc_desc_order">
                        <h6 class="asc_order" style="margin-right:10px;padding:10px;padding-bottom: 5px;font-size:25px; cursor: pointer;"><i class="hover_effect fa-solid fa-caret-up"></i></h6>
                        <h6 class="desc_order" style="margin-left:10px;padding:10px;padding-bottom: 5px;font-size:25px; cursor: pointer;"><i class=" hover_effect fa-solid fa-caret-down"></i></h6>
                    </div>

                    <h6 class="next-btn" style="padding:10px;padding-bottom: 5px;font-size:25px; cursor: pointer;"><i class="hover_effect fa-solid fa-arrow-right"></i></h6>
                </div>
            </div>
        </div>

    </div>

    <div class="modal fade" id="add_subject_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Anadir tema</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="CERRAR">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="new_subject_name_id">Nombre del tema</label>
                    <input type="text" class="form-control" id="new_subject_name_id" aria-describedby="emailHelp" placeholder="Introduzca el nombre">
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
              <button type="button" class="add_subject_detail btn btn-primary">ANADIR</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="add_institucion_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Anadir Institución</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="CERRAR">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div style="display: flex; justify-content:space-between">
                    <div class="form-group">
                        <label for="new_institucion_inicio_id">Inicio</label>
                        <input type="date" class="form-control" id="new_institucion_inicio_id" aria-describedby="emailHelp" placeholder="Enter Inicio">
                    </div>
                    <div class="form-group">
                        <label for="new_institucion_fin_id">Fin</label>
                        <input type="date" class="form-control" id="new_institucion_fin_id" aria-describedby="emailHelp" placeholder="Enter Fin">
                    </div>
                </div>
                <div class="form-group">
                    <label for="new_institucion_clave_id">Clave</label>
                    <input type="number" min="0" class="form-control" id="new_institucion_clave_id" aria-describedby="emailHelp" placeholder="Introduzca la clave">
                </div>
                <div class="form-group">
                    <label for="new_institucion_nombre_id">Institución</label>
                    <input type="text" class="form-control" id="new_institucion_nombre_id" aria-describedby="emailHelp" placeholder="Introduzca el nombre">
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
              <button type="button" class="add_institucion_detail btn btn-primary">ANADIR</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="add_evento_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Anadir Evento</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="CERRAR">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="new_evento_clave_id">Clave</label>
                    <input type="number" min="0" class="form-control" id="new_evento_clave_id" aria-describedby="emailHelp" placeholder="Introduzca la clave">
                </div>
                <div class="form-group">
                    <label for="new_evento_nombre_id">Nombre</label>
                    <input type="text" class="form-control" id="new_evento_nombre_id" aria-describedby="emailHelp" placeholder="Introduzca el nombre">
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
              <button type="button" class="add_evento_detail btn btn-primary">ANADIR</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="show_message_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <img id="my_message_image" src="http://127.0.0.1:8000/images/picture3.png" alt="" style="margin-top:100px;width:100%">
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>

        $(document).ready(function(){

            //Lo mismo que en las otras vistas, la request de ajax que inclufe el csrf
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            //Lista de variables utilizadas
            var pantalla_actual = 1;
            var id_sujeto_actual = 0;
            var sujetos_matriz = [];
            var institucion_matriz = [];
            var evento_matriz = [];

            var ocho_tema_actual = 0;
            var ocho_pantalla_actual = 1;

            var elemento_sujeto_actual = "";

            var indice_de_eliminacion_subject_new = "";
            var indice_de_eliminacion_evento_new = "";
            var indice_de_eliminacion_institucion_new = "";

            //Con este función estamos juntando los detalles de cada tema que cada uno tiene 4 propiedades
            //este proceso lo repetimos una y otra vez mientras estemos manejando kla información en arrays por que
            //necesitamos guardar y luego hacer el get de nuestra data multiples veces
            //Esta funcion cuando es ejecutada actualiza los temas y su data dentro de ellos
            function append_subject_detail()
            {
                $("#appending_more_detail_two_id").empty();

                let str5 = ``;

                sujetos_matriz.forEach((element,index) => {
                    str5 += `
                    <div class="inside_index_two" inside_index_two_value="${index}" style="display:none">
                        <div class="eight_current_inside_one">
                            <table class="table table-bordered" class="text-center" style="margin-top:40px">
                                <tbody  >
                                    <tr>
                                        <th class="eight_current_inside_left" scope="col" width="6%" style="cursor: pointer;text-align:center;background-color: white;"><i class="fa-solid fa-caret-left"></i></th>
                                        <th scope="col" width="" style="text-align:center;background-color: #c9e9f2;">Subtemas</th>
                                        <th class="eight_current_inside_right" scope="col"  width="6%" style="cursor:pointer;text-align:center; background-color: white;"><i class="fa-solid fa-caret-right"></i></th>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="form-group">
                                <textarea class="subject_third_property_check form-control" rows="7">${element.subject_property_three}</textarea>
                            </div>
                        </div>
                        <div class="eight_current_inside_two" style="display: none">
                            <table class="table table-bordered" class="text-center" style="margin-top:40px">
                                <tbody  >
                                    <tr>
                                        <th class="eight_current_inside_left" scope="col" width="6%" style="cursor: pointer;text-align:center;background-color: white;"><i class="fa-solid fa-caret-left"></i></th>
                                        <th scope="col" width="" style="text-align:center;background-color: #c9e9f2;">Competencias especificas a desarrollar</th>
                                        <th class="eight_current_inside_right" scope="col"  width="6%" style="cursor:pointer;text-align:center; background-color: white;"><i class="fa-solid fa-caret-right"></i></th>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="form-group">
                                <textarea class="subject_fourth_property_check form-control" rows="7">${element.subject_property_four}</textarea>
                            </div>
                        </div>
                        <div class="eight_current_inside_three" style="display: none">
                            <table class="table table-bordered" class="text-center" style="margin-top:40px">
                                <tbody  >
                                    <tr>
                                        <th class="eight_current_inside_left" scope="col" width="6%" style="cursor: pointer;text-align:center;background-color: white;"><i class="fa-solid fa-caret-left"></i></th>
                                        <th scope="col" width="" style="text-align:center;background-color: #c9e9f2;">Competencias genericas a desarrollar</th>
                                        <th class="eight_current_inside_right" scope="col"  width="6%" style="cursor:pointer;text-align:center; background-color: white;"><i class="fa-solid fa-caret-right"></i></th>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="form-group">
                                <textarea class="subject_fifth_property_check form-control" rows="7">${element.subject_property_five}</textarea>
                            </div>
                        </div>
                        <div class="eight_current_inside_four" style="display: none">
                            <table class="table table-bordered" class="text-center" style="margin-top:40px">
                                <tbody  >
                                    <tr>
                                        <th class="eight_current_inside_left" scope="col" width="6%" style="cursor: pointer;text-align:center;background-color: white;"><i class="fa-solid fa-caret-left"></i></th>
                                        <th scope="col" width="" style="text-align:center;background-color: #c9e9f2;">Actividades de aprendizaje</th>
                                        <th class="eight_current_inside_right" scope="col"  width="6%" style="cursor:pointer;text-align:center; background-color: white;"><i class="fa-solid fa-caret-right"></i></th>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="form-group">
                                <textarea class="subject_sixth_property_check form-control" rows="7">${element.subject_property_six}</textarea>
                            </div>
                        </div>
                    </div>`;
                });

                $("#appending_more_detail_two_id").append(str5);

                document.querySelectorAll('.inside_index_two').forEach(function(value) {

                    if(value.getAttribute('inside_index_two_value') == ocho_tema_actual)
                    {
                        value.style.display = "";
                        elemento_sujeto_actual = value;
                    }
                    else
                    {
                        value.style.display = "none";
                    }
                });

                cambiar_ocho_pantalla(1);
            }

            //Esta función de aquí abajo se utiliza para abrir cada detalle del tema
            //osease sus 4 propiedades de cada uno            
            function octavo_cambio_de_sujeto(current_subject_inside)
            {
                if(sujetos_matriz.length != 0)
                {
                    if(current_subject_inside <= 0)
                        ocho_tema_actual = 0;
                    else if(current_subject_inside <= sujetos_matriz.length-1)
                        ocho_tema_actual = current_subject_inside;
                    else
                        ocho_tema_actual = sujetos_matriz.length-1;

                    document.getElementById("eight_subject_clave_id").innerHTML = ocho_tema_actual+1;
                    document.getElementById("eight_subject_nombre_id").innerHTML = sujetos_matriz[ocho_tema_actual].subject_name;

                    append_subject_detail();
                }
            }

            //Esta es la función principal donde nostros selecionamos el display para ver en nuestro front
            //por ejemplo si el numero de pantalla es '1' entonces la pantalla de 'Caracterización' será
            //la que se muestre en la pag mientras las otras permaneceran ocultas, de igual manera si fuera al revés
            function cambiar_pantalla_principal(current_screen_inside)
            {
                if(current_screen_inside > 11)
                    pantalla_actual = 11;
                if(current_screen_inside < 1)
                    pantalla_actual = 1;

                if(current_screen_inside == 1){
                    document.getElementById('current_screen_inside_one').style.display = "";
                    document.getElementById('current_screen_inside_two').style.display = "none";
                    document.getElementById('current_screen_inside_three').style.display = "none";
                    document.getElementById('current_screen_inside_four').style.display = "none";
                    document.getElementById('current_screen_inside_five').style.display = "none";
                    document.getElementById('current_screen_inside_six').style.display = "none";
                    document.getElementById('current_screen_inside_seven').style.display = "none";
                    document.getElementById('current_screen_inside_eight').style.display = "none";
                    document.getElementById('current_screen_inside_nine').style.display = "none";
                    document.getElementById('current_screen_inside_ten').style.display = "none";
                    document.getElementById('current_screen_inside_eleven').style.display = "none";
                    document.getElementById('current_screen_inside_twelve').style.display = "none";
                }
                if(current_screen_inside == 2){
                    document.getElementById('current_screen_inside_one').style.display = "none";
                    document.getElementById('current_screen_inside_two').style.display = "";
                    document.getElementById('current_screen_inside_three').style.display = "none";
                    document.getElementById('current_screen_inside_four').style.display = "none";
                    document.getElementById('current_screen_inside_five').style.display = "none";
                    document.getElementById('current_screen_inside_six').style.display = "none";
                    document.getElementById('current_screen_inside_seven').style.display = "none";
                    document.getElementById('current_screen_inside_eight').style.display = "none";
                    document.getElementById('current_screen_inside_nine').style.display = "none";
                    document.getElementById('current_screen_inside_ten').style.display = "none";
                    document.getElementById('current_screen_inside_eleven').style.display = "none";
                    document.getElementById('current_screen_inside_twelve').style.display = "none";
                }
                if(current_screen_inside == 3){
                    document.getElementById('current_screen_inside_one').style.display = "none";
                    document.getElementById('current_screen_inside_two').style.display = "none";
                    document.getElementById('current_screen_inside_three').style.display = "none";
                    document.getElementById('current_screen_inside_four').style.display = "none";
                    document.getElementById('current_screen_inside_five').style.display = "none";
                    document.getElementById('current_screen_inside_six').style.display = "";
                    document.getElementById('current_screen_inside_seven').style.display = "none";
                    document.getElementById('current_screen_inside_eight').style.display = "none";
                    document.getElementById('current_screen_inside_nine').style.display = "none";
                    document.getElementById('current_screen_inside_ten').style.display = "none";
                    document.getElementById('current_screen_inside_eleven').style.display = "none";
                    document.getElementById('current_screen_inside_twelve').style.display = "none";
                }
                if(current_screen_inside == 4){
                    document.getElementById('current_screen_inside_one').style.display = "none";
                    document.getElementById('current_screen_inside_two').style.display = "none";
                    document.getElementById('current_screen_inside_three').style.display = "none";
                    document.getElementById('current_screen_inside_four').style.display = "none";
                    document.getElementById('current_screen_inside_five').style.display = "none";
                    document.getElementById('current_screen_inside_six').style.display = "none";
                    document.getElementById('current_screen_inside_seven').style.display = "";
                    document.getElementById('current_screen_inside_eight').style.display = "none";
                    document.getElementById('current_screen_inside_nine').style.display = "none";
                    document.getElementById('current_screen_inside_ten').style.display = "none";
                    document.getElementById('current_screen_inside_eleven').style.display = "none";
                    document.getElementById('current_screen_inside_twelve').style.display = "none";
                }
                if(current_screen_inside == 5){
                    document.getElementById('current_screen_inside_one').style.display = "none";
                    document.getElementById('current_screen_inside_two').style.display = "none";
                    document.getElementById('current_screen_inside_three').style.display = "";
                    document.getElementById('current_screen_inside_four').style.display = "";
                    document.getElementById('current_screen_inside_five').style.display = "none";
                    document.getElementById('current_screen_inside_six').style.display = "none";
                    document.getElementById('current_screen_inside_seven').style.display = "none";
                    document.getElementById('current_screen_inside_eight').style.display = "none";
                    document.getElementById('current_screen_inside_nine').style.display = "none";
                    document.getElementById('current_screen_inside_ten').style.display = "none";
                    document.getElementById('current_screen_inside_eleven').style.display = "none";
                    document.getElementById('current_screen_inside_twelve').style.display = "none";
                }
                if(current_screen_inside == 6){
                    document.getElementById('current_screen_inside_one').style.display = "none";
                    document.getElementById('current_screen_inside_two').style.display = "none";
                    document.getElementById('current_screen_inside_three').style.display = "none";
                    document.getElementById('current_screen_inside_four').style.display = "none";
                    document.getElementById('current_screen_inside_five').style.display = "";
                    document.getElementById('current_screen_inside_six').style.display = "none";
                    document.getElementById('current_screen_inside_seven').style.display = "none";
                    document.getElementById('current_screen_inside_eight').style.display = "none";
                    document.getElementById('current_screen_inside_nine').style.display = "none";
                    document.getElementById('current_screen_inside_ten').style.display = "none";
                    document.getElementById('current_screen_inside_eleven').style.display = "none";
                    document.getElementById('current_screen_inside_twelve').style.display = "none";
                }
                if(current_screen_inside == 7){
                    document.getElementById('current_screen_inside_one').style.display = "none";
                    document.getElementById('current_screen_inside_two').style.display = "none";
                    document.getElementById('current_screen_inside_three').style.display = "none";
                    document.getElementById('current_screen_inside_four').style.display = "none";
                    document.getElementById('current_screen_inside_five').style.display = "none";
                    document.getElementById('current_screen_inside_six').style.display = "none";
                    document.getElementById('current_screen_inside_seven').style.display = "none";
                    document.getElementById('current_screen_inside_eight').style.display = "";
                    document.getElementById('current_screen_inside_nine').style.display = "none";
                    document.getElementById('current_screen_inside_ten').style.display = "none";
                    document.getElementById('current_screen_inside_eleven').style.display = "none";
                    document.getElementById('current_screen_inside_twelve').style.display = "none";

                    //En esta pantalla necesitamos inializar los detalles de los temas
                    //y lo hacemos llamando a esta función
                    octavo_cambio_de_sujeto(0);
                }
                if(current_screen_inside == 8){
                    document.getElementById('current_screen_inside_one').style.display = "none";
                    document.getElementById('current_screen_inside_two').style.display = "none";
                    document.getElementById('current_screen_inside_three').style.display = "none";
                    document.getElementById('current_screen_inside_four').style.display = "none";
                    document.getElementById('current_screen_inside_five').style.display = "none";
                    document.getElementById('current_screen_inside_six').style.display = "none";
                    document.getElementById('current_screen_inside_seven').style.display = "none";
                    document.getElementById('current_screen_inside_eight').style.display = "none";
                    document.getElementById('current_screen_inside_nine').style.display = "";
                    document.getElementById('current_screen_inside_ten').style.display = "none";
                    document.getElementById('current_screen_inside_eleven').style.display = "none";
                    document.getElementById('current_screen_inside_twelve').style.display = "none";
                }
                if(current_screen_inside == 9){
                    document.getElementById('current_screen_inside_one').style.display = "none";
                    document.getElementById('current_screen_inside_two').style.display = "none";
                    document.getElementById('current_screen_inside_three').style.display = "none";
                    document.getElementById('current_screen_inside_four').style.display = "none";
                    document.getElementById('current_screen_inside_five').style.display = "none";
                    document.getElementById('current_screen_inside_six').style.display = "none";
                    document.getElementById('current_screen_inside_seven').style.display = "none";
                    document.getElementById('current_screen_inside_eight').style.display = "none";
                    document.getElementById('current_screen_inside_nine').style.display = "none";
                    document.getElementById('current_screen_inside_ten').style.display = "";
                    document.getElementById('current_screen_inside_eleven').style.display = "none";
                    document.getElementById('current_screen_inside_twelve').style.display = "none";
                }
                if(current_screen_inside == 10){
                    document.getElementById('current_screen_inside_one').style.display = "none";
                    document.getElementById('current_screen_inside_two').style.display = "none";
                    document.getElementById('current_screen_inside_three').style.display = "none";
                    document.getElementById('current_screen_inside_four').style.display = "none";
                    document.getElementById('current_screen_inside_five').style.display = "none";
                    document.getElementById('current_screen_inside_six').style.display = "none";
                    document.getElementById('current_screen_inside_seven').style.display = "none";
                    document.getElementById('current_screen_inside_eight').style.display = "none";
                    document.getElementById('current_screen_inside_nine').style.display = "none";
                    document.getElementById('current_screen_inside_ten').style.display = "none";
                    document.getElementById('current_screen_inside_eleven').style.display = "";
                    document.getElementById('current_screen_inside_twelve').style.display = "none";
                }
                if(current_screen_inside == 11){
                    document.getElementById('current_screen_inside_one').style.display = "none";
                    document.getElementById('current_screen_inside_two').style.display = "none";
                    document.getElementById('current_screen_inside_three').style.display = "none";
                    document.getElementById('current_screen_inside_four').style.display = "none";
                    document.getElementById('current_screen_inside_five').style.display = "none";
                    document.getElementById('current_screen_inside_six').style.display = "none";
                    document.getElementById('current_screen_inside_seven').style.display = "none";
                    document.getElementById('current_screen_inside_eight').style.display = "none";
                    document.getElementById('current_screen_inside_nine').style.display = "none";
                    document.getElementById('current_screen_inside_ten').style.display = "none";
                    document.getElementById('current_screen_inside_eleven').style.display = "none";
                    document.getElementById('current_screen_inside_twelve').style.display = "";
                }
            }

            //Esta función es usada para cambiar la pantalla entre las propiedades de cada tema seleccionado
            function cambiar_ocho_pantalla(current_screen_inside)
            {
                if(current_screen_inside > 4)
                    ocho_pantalla_actual = 4;
                if(current_screen_inside < 1)
                    ocho_pantalla_actual = 1;

                if(ocho_pantalla_actual == 1){
                    elemento_sujeto_actual.querySelector('.eight_current_inside_one').style.display = "";
                    elemento_sujeto_actual.querySelector('.eight_current_inside_two').style.display = "none";
                    elemento_sujeto_actual.querySelector('.eight_current_inside_three').style.display = "none";
                    elemento_sujeto_actual.querySelector('.eight_current_inside_four').style.display = "none";

                }
                if(ocho_pantalla_actual == 2){
                    elemento_sujeto_actual.querySelector('.eight_current_inside_one').style.display = "none";
                    elemento_sujeto_actual.querySelector('.eight_current_inside_two').style.display = "";
                    elemento_sujeto_actual.querySelector('.eight_current_inside_three').style.display = "none";
                    elemento_sujeto_actual.querySelector('.eight_current_inside_four').style.display = "none";
                }
                if(ocho_pantalla_actual == 3){
                    elemento_sujeto_actual.querySelector('.eight_current_inside_one').style.display = "none";
                    elemento_sujeto_actual.querySelector('.eight_current_inside_two').style.display = "none";
                    elemento_sujeto_actual.querySelector('.eight_current_inside_three').style.display = "";
                    elemento_sujeto_actual.querySelector('.eight_current_inside_four').style.display = "none";
                }
                if(ocho_pantalla_actual == 4){
                    elemento_sujeto_actual.querySelector('.eight_current_inside_one').style.display = "none";
                    elemento_sujeto_actual.querySelector('.eight_current_inside_two').style.display = "none";
                    elemento_sujeto_actual.querySelector('.eight_current_inside_three').style.display = "none";
                    elemento_sujeto_actual.querySelector('.eight_current_inside_four').style.display = "";
                }
            }

            //Esta función se usa para actualizar los temas y su data
            //Cuando llamamos a esta función todos los datos relacionados a los temas se actualizan
            function actualizar_productos()
            {
                $("#my_subjects_names_list").empty();
                $("#appending_more_detail_id").empty();

                var str = ``;
                var str2 = ``;

                sujetos_matriz.forEach((element,index) => {
                    str +=
                    `<tr class="subject_delete_get hover_effect_row" subject_deleting_click="${index}">
                        <th scope="row" style="background-color: #f2f2f2;">${index+1}</th>
                        <td style="cursor:pointer" class="show_subject_detail" check_index="${index}">${element.subject_name}</td>
                    </tr>`;

                    str2 += `
                    <div class="inside_index" inside_index_value="${index}" style="display:none">
                        <div class="row" style="margin-top:30px;" second_screen_inside_index="1">
                            <div class="col-12">
                                <table class="table table-bordered" class="text-center" style="margin-bottom:0px">
                                    <thead>
                                        <tr>
                                        <th scope="col" width="8%" style="background-color: #c9e9f2;">Csc</th>
                                        <th scope="col" style="background-color: #c9e9f2;">Nombre del tema</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="row" style="background-color: #f2f2f2;">${index+1}</th>
                                        <td style="background-color: #f2f2f2;">${element.subject_name}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12">
                                <div style="background-color: #c9e9f2;" class="text-center">
                                    <h6 style="padding: 10px">Competencias previas</h6>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="subject_first_property_check form-control" rows="7">${element.subject_property_one}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="margin-top:30px; display:none" second_screen_inside_index="2">
                            <div class="col-12">
                                <table class="table table-bordered" class="text-center" style="margin-bottom:0px">
                                    <thead>
                                        <tr>
                                        <th scope="col" width="8%" style="background-color: #c9e9f2;">Csc</th>
                                        <th scope="col" style="background-color: #c9e9f2;">Nombre del tema</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="row" style="background-color: #f2f2f2;">${index+1}</th>
                                        <td style="background-color: #f2f2f2;">${element.subject_name}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12">
                                <div style="background-color: #c9e9f2;" class="text-center">
                                    <h6 style="padding: 10px">Competencias especificas</h6>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="subject_second_property_check form-control" rows="7">${element.subject_property_two}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    `;
                });

                $("#my_subjects_names_list").append(str);

                $("#appending_more_detail_id").append(str2);
            }

            //Esta funcion se utiliza para actualizar las instituciones y sus datos cuando es llamada

            function actualizar_productos_instituciones()
            {
                $("#my_institucions_names_list").empty();

                var str = ``;
                var str2 = ``;

                institucion_matriz.forEach((element,index) => {
                    str +=
                    `<tr class="institucion_delete_get hover_effect_row" institucion_deleting_click="${index}">
                        <td scope="row">${element.inicio}</td>
                        <td scope="row">${element.fin}</td>
                        <td scope="row">${element.clave}</td>
                        <td scope="row">${element.institucion}</td>

                    </tr>`;
                });

                $("#my_institucions_names_list").append(str);
            }

            //Esta funcion se utiliza para actualizar los eventos y sus datos cuando es llamada
            function refresco_productos_eventos()
            {
                $("#my_eventos_names_list").empty();

                var str = ``;
                var str2 = ``;

                evento_matriz.forEach((element,index) => {
                    str +=
                    `<tr class="evento_delete_get hover_effect_row" evento_deleting_click="${index}">
                        <td scope="row">${element.clave}</td>
                        <td scope="row">${element.nombre}</td>
                    </tr>`;
                });

                $("#my_eventos_names_list").append(str);
            }

            $(".prev-btn").on("click",function(){
                cambiar_pantalla_principal(--pantalla_actual);
                if(pantalla_actual == 3 || pantalla_actual == 4 || pantalla_actual == 6) {
                    document.getElementById('asc_desc_order').style.visibility = "visible";
                    document.getElementById('add_remove_thing').style.visibility = "visible";
                } else {
                    document.getElementById('asc_desc_order').style.visibility = "hidden";
                    document.getElementById('add_remove_thing').style.visibility = "hidden";
                }
            });

            //De aquí para abajo se encuentran nuestras funciones de JQUERY (Nuestra librería de Javascript)
            //Las funciones de jquery son prácticamente links que ponemos a los que les daremos doble click en este caso
            //nos proporcionan funcionalidad para eventos.

            //Función utilizada para cambiar las pantallas principales
            $(".next-btn").on("click",function(){
                cambiar_pantalla_principal(++pantalla_actual);
                if(pantalla_actual == 3 || pantalla_actual == 4 || pantalla_actual == 6) {
                    document.getElementById('asc_desc_order').style.visibility = "visible";
                    document.getElementById('add_remove_thing').style.visibility = "visible";
                } else {
                    document.getElementById('asc_desc_order').style.visibility = "hidden";
                    document.getElementById('add_remove_thing').style.visibility = "hidden";
                }
            });

            //La función de abajo se utiliza para abrir la ventana de añadir tema
            $(".add_subject_handler").on("click",function(){
                $("#add_subject_modal").modal("show");

                $("#new_subject_name_id").val("");
            });

            //La función de abajo se utiliza para añadir un tema a materias YA existentes.
            $(".add_subject_detail").on("click",function(){

                sujetos_matriz.push(
                    {
                        subject_name: document.getElementById('new_subject_name_id').value,
                        subject_property_one: "",
                        subject_property_two: "",
                        subject_property_three: "",
                        subject_property_four: "",
                        subject_property_five: "",
                        subject_property_six: "",
                    }
                );

                actualizar_productos();

                $("#add_subject_modal").modal("hide");

                document.getElementById('inside_left_click').style.display = "none";
                document.getElementById('inside_right_click').style.display = "none";
            });

            //Esta es la función principal en la que le enviamos nuestros datos al 
            //controlador mediante peticiones de ajax y jquery
            $(".save-btn").on("click",function(){

                //Primero nosotros creamos un formulario con los datos donde ponemos todos los valores como propiedades
                //de objetos, así lo podemos enviar en un array como 'formdata' al parsearlo con la ayuda de un json
                var formData = {
                    main_one: document.getElementById("main_one_id").value,
                    main_two: document.getElementById("main_two_id").value,
                    main_four: document.getElementById("main_four_id").value,
                    main_five: document.getElementById("main_five_id").value,
                    main_six: document.getElementById("main_six_id").value,
                    main_seven: document.getElementById("main_seven_id").value,
                    main_eight: document.getElementById("main_eight_id").value,
                    main_nine: document.getElementById("main_nine_id").value,
                    main_ten: document.getElementById("main_ten_id").value,
                    main_eleven: document.getElementById("main_eleven_id").value,
                    main_twelve: document.getElementById("main_twelve_id").value,
                    main_thirteen: document.getElementById("main_thirteen_id").value,
                    main_fourteen: document.getElementById("main_fourteen_id").value,
                    main_fifteen: document.getElementById("main_fifteen_id").value,
                    big_object: JSON.stringify(sujetos_matriz),
                    big_object_two: JSON.stringify(evento_matriz),
                    big_object_three: JSON.stringify(institucion_matriz),
                };

                //Este es el método de Jquery ajax post request (tuve que leer la documentación 
                //para maso entender qué hace)
                $.ajax({
                    type: 'POST',
                    url: "http://127.0.0.1:8000/nueva",
                    data: formData,
                    success: function(data) {
                        console.log(data);

                        if(data.status == true)
                        {
                            $("#show_message_modal").modal("show");

                            setTimeout(function(){
                                window.location.href = "http://127.0.0.1:8000/abrir";
                            }, 2000);

                        }
                        else if(data.status == false)
                        {
                            alert(data.message);
                        }
                    },
                });

            });

            //Abajo se encuentra la función utilizada para mostrar los 2 primeros detalles 
            //(propiedades) que están guardadas en la pag de añadir o remover temas
            $(document).on('click',".show_subject_detail",function(){
                id_sujeto_actual = $(this).attr('check_index');

                document.querySelectorAll('.inside_index').forEach(function(value) {


                    if(value.getAttribute('inside_index_value') == id_sujeto_actual)
                    {
                        value.style.display = "";
                        document.getElementById('inside_left_click').style.display = "";
                        document.getElementById('inside_right_click').style.display = "";
                    }
                    else
                    {
                        value.style.display = "none";
                    }
                });

            });

            //La función de abajo se utiliza para cambiar vistas entre las 2 propiedades
            $(document).on('click',"#inside_left_click",function(){
                document.querySelector(`[inside_index_value="${id_sujeto_actual}"]`).children[0].style.display = "";
                document.querySelector(`[inside_index_value="${id_sujeto_actual}"]`).children[1].style.display = "none";
            });

            //La función de abajo se utiliza para cambiar vistas entre las 2 propiedades
            $(document).on('click',"#inside_right_click",function(){
                document.querySelector(`[inside_index_value="${id_sujeto_actual}"]`).children[0].style.display = "none";
                document.querySelector(`[inside_index_value="${id_sujeto_actual}"]`).children[1].style.display = "";
            });

            //Esta es la función la cual guarda el valor de la primera propiedad del tema
            $(document).on('change',".subject_first_property_check",function(){
                sujetos_matriz[id_sujeto_actual].subject_property_one = $(this)[0].value;
            });

            //Esta es la función la cual guarda el valor de la segunda propiedad del tema
            $(document).on('change',".subject_second_property_check",function(){
                sujetos_matriz[id_sujeto_actual].subject_property_two = $(this)[0].value;
            });


            //Esta es la función utilizada para abrir la ventana en la que se puede agregar una nueva institución
            $(".add_institucion_handler").on("click",function(){
                $("#add_institucion_modal").modal("show");

                $("#new_institucion_inicio_id").val("");
                $("#new_institucion_fin_id").val("");
                $("#new_institucion_clave_id").val("");
                $("#new_institucion_nombre_id").val("");
            });

            //Función utilizada para añadir esa nueva institución al array
            $(".add_institucion_detail").on("click",function(){

                institucion_matriz.push(
                    {
                        inicio: document.getElementById('new_institucion_inicio_id').value,
                        fin: document.getElementById('new_institucion_fin_id').value,
                        clave: document.getElementById('new_institucion_clave_id').value,
                        institucion: document.getElementById('new_institucion_nombre_id').value,
                    }
                );

                actualizar_productos_instituciones();

                $("#add_institucion_modal").modal("hide");
            });

            //Función que abre la ventana para añadir un evento
            $(".add_evento_handler").on("click",function(){
                $("#add_evento_modal").modal("show");

                $("#new_evento_clave_id").val("");
                $("#new_evento_nombre_id").val("");
            });

            //Función que añade el nuevo evento al array
            $(".add_evento_detail").on("click",function(){

                evento_matriz.push(
                    {
                        clave: document.getElementById('new_evento_clave_id').value,
                        nombre: document.getElementById('new_evento_nombre_id').value,
                    }
                );

                refresco_productos_eventos();

                $("#add_evento_modal").modal("hide");
            });

            //Función en la que iteramos entre temas con nuestras paginas que muestran las 4 propiedades
            $("#eight_iterate_left_id").on("click",function(){
                octavo_cambio_de_sujeto(--ocho_tema_actual)
            });

            //Función en la que iteramos entre temas con nuestras paginas que muestran las 4 propiedades
            $("#eight_iterate_right_id").on("click",function(){
                octavo_cambio_de_sujeto(++ocho_tema_actual)
            });

            //Función usada para iterar entre las propiedades de los temas
            $(document).on('click',".eight_current_inside_left",function(){
                cambiar_ocho_pantalla(--ocho_pantalla_actual);
            });

            //Función usada para iterar entre las propiedades de los temas
            $(document).on('click',".eight_current_inside_right",function(){
                cambiar_ocho_pantalla(++ocho_pantalla_actual);
            });

            //Función usada para guardar el valor de la tercera propiedad del tema
            $(document).on('change',".subject_third_property_check",function(){
                sujetos_matriz[ocho_tema_actual].subject_property_three = $(this)[0].value;
            });

            //Función usada para guardar el valor de la cuarta propiedad del tema
            $(document).on('change',".subject_fourth_property_check",function(){
                // console.log($(this)[0].value);
                // console.log(id_sujeto_actual);
                // console.log(sujetos_matriz)
                sujetos_matriz[ocho_tema_actual].subject_property_four = $(this)[0].value;
            });

            //Función usada para guardar el valor de la quinta propiedad del tema
            $(document).on('change',".subject_fifth_property_check",function(){
                // console.log($(this)[0].value);
                // console.log(id_sujeto_actual);
                // console.log(sujetos_matriz)
                sujetos_matriz[ocho_tema_actual].subject_property_five = $(this)[0].value;
            });

            //Función usada para guardar el valor de la sexta propiedad del tema
            $(document).on('change',".subject_sixth_property_check",function(){
                // console.log($(this)[0].value);
                // console.log(id_sujeto_actual);
                // console.log(sujetos_matriz)
                sujetos_matriz[ocho_tema_actual].subject_property_six = $(this)[0].value;
            });

            //Función on click usada para cambiar el sort del array cuando una pantalla 
            //en especifico sea abierta, entonces el sort cambia a orden ascendente
            $(document).on('click',".asc_order",function(){
                if(pantalla_actual == 3){
                    institucion_matriz.sort((a,b) => (a.institucion > b.institucion) ? 1 : ((b.institucion > a.institucion) ? -1 : 0));
                    actualizar_productos_instituciones();
                } else if(pantalla_actual == 4){
                    evento_matriz.sort((a,b) => (a.nombre > b.nombre) ? 1 : ((b.nombre > a.nombre) ? -1 : 0));
                    refresco_productos_eventos();
                } else if(pantalla_actual == 6){
                    sujetos_matriz.sort((a,b) => (a.subject_name > b.subject_name) ? 1 : ((b.subject_name > a.subject_name) ? -1 : 0));
                    actualizar_productos();
                }
            });

            //Función on click usada para cambiar el sort del array cuando una pantalla 
            //en especifico sea abierta, entonces el sort cambia a orden descendente
            $(document).on('click',".desc_order",function(){
                if(pantalla_actual == 3){
                    institucion_matriz.sort((a,b) => (a.institucion < b.institucion) ? 1 : ((b.institucion < a.institucion) ? -1 : 0));
                    actualizar_productos_instituciones();
                } else if(pantalla_actual == 4){
                    evento_matriz.sort((a,b) => (a.nombre < b.nombre) ? 1 : ((b.nombre < a.nombre) ? -1 : 0));
                    refresco_productos_eventos();
                } else if(pantalla_actual == 6){
                    sujetos_matriz.sort((a,b) => (a.subject_name < b.subject_name) ? 1 : ((b.subject_name < a.subject_name) ? -1 : 0));
                    actualizar_productos();
                }
            });

            //Esta es la función para añadir datos al array al precionar el botón '+' cuando estamos en una pantalla en especifico.
            $(document).on('click',".add_thing_handler",function(){
                if(pantalla_actual == 3){
                    document.getElementsByClassName("add_institucion_handler")[0].click();
                } else if(pantalla_actual == 4){
                    document.getElementsByClassName("add_evento_handler")[0].click();
                } else if(pantalla_actual == 6){
                    document.getElementsByClassName("add_subject_handler")[0].click();
                }
            });

            //Esta es la función usada para quitar cosas del array al apretar el botón '-' cuando estemos en una pantalla en especifico.
            //Primero identificamos el numero del index con la ayuda de otra función, una vez lo obtengamos solo lo removemos del array en especifico
            $(document).on('click',".remove_thing_handler",function(){
                if(pantalla_actual == 3){
                    if (indice_de_eliminacion_institucion_new > -1 && indice_de_eliminacion_institucion_new != "") {
                        institucion_matriz.splice(indice_de_eliminacion_institucion_new, 1);
                        indice_de_eliminacion_institucion_new = "";
                        actualizar_productos_instituciones();
                    }
                } else if(pantalla_actual == 4){
                    if (indice_de_eliminacion_evento_new > -1 && indice_de_eliminacion_evento_new != "") {
                        evento_matriz.splice(indice_de_eliminacion_evento_new, 1);
                        indice_de_eliminacion_evento_new = "";
                        refresco_productos_eventos();
                    }
                } else if(pantalla_actual == 6){
                    if (indice_de_eliminacion_subject_new > -1 && indice_de_eliminacion_subject_new != "") {
                        sujetos_matriz.splice(indice_de_eliminacion_subject_new, 1);
                        document.getElementById('inside_left_click').style.display = "none";
                        document.getElementById('inside_right_click').style.display = "none";
                        indice_de_eliminacion_subject_new = "";
                        actualizar_productos();
                    }
                }
            });

            //Estos son las funciones helper de el array con los temas, con esta función obtenemos el index del array que queremos eliminar
            //Y lo hacemos con ayuda de la función de arriba
            $(document).on('click',".subject_delete_get",function(){
                let current_row = $(this).attr('subject_deleting_click');
                indice_de_eliminacion_subject_new = current_row;
                document.querySelectorAll('.subject_delete_get').forEach(function(value) {
                    if(current_row == value.getAttribute('subject_deleting_click')) {
                        value.style.backgroundColor = `rgb(236, 236, 236)`;
                        global_deleting_value = current_row;
                    } else {
                        value.style.backgroundColor = `white`;
                    }
                });
            });

            //Estos son las funciones helper de el array con los temas, con esta función obtenemos el index del array que queremos eliminar
            //Y lo hacemos con ayuda de la función de arriba
            $(document).on('click',".institucion_delete_get",function(){
                let current_row = $(this).attr('institucion_deleting_click');
                indice_de_eliminacion_institucion_new = current_row;
                document.querySelectorAll('.institucion_delete_get').forEach(function(value) {
                    if(current_row == value.getAttribute('institucion_deleting_click')) {
                        value.style.backgroundColor = `rgb(236, 236, 236)`;
                        global_deleting_value = current_row;
                    } else {
                        value.style.backgroundColor = `white`;
                    }
                });
            });

            //Estos son las funciones helper de el array con los temas, con esta función obtenemos el index del array que queremos eliminar
            //Y lo hacemos con ayuda de la función de arriba
            $(document).on('click',".evento_delete_get",function(){
                let current_row = $(this).attr('evento_deleting_click');
                indice_de_eliminacion_evento_new = current_row;
                document.querySelectorAll('.evento_delete_get').forEach(function(value) {
                    if(current_row == value.getAttribute('evento_deleting_click')) {
                        value.style.backgroundColor = `rgb(236, 236, 236)`;
                        global_deleting_value = current_row;
                    } else {
                        value.style.backgroundColor = `white`;
                    }
                });
            });

            //Esta función llama a la primera pantalla para mostrarla hasta el frente.
            cambiar_pantalla_principal(1);

        })

    </script>

</body>
</html>
