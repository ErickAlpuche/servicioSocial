<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Registros</title>
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

        .course_link_style {
            color:rgb(50, 50, 201)
        }

        .course_link_style:hover {
            text-decoration: underline;
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



    <div class="container">

        <div style="display: flex; justify-content:center">
            {{-- <div style="" id="inside_left_click"><h6 class="" style="margin-top: 480px;font-size:20px; cursor: pointer; margin-right: 50px;"><i class="fa-solid fa-arrow-left"></i></h6></div> --}}
            <div class="container" id="appending_my_data">

            </div>
            {{-- <div style="" id="inside_right_click"><h6 class="" style="margin-top: 480px;font-size:20px; cursor: pointer; margin-left: 50px;"><i class="fa-solid fa-arrow-right"></i></h6></div> --}}
        </div>
        <div class="row">
            <div class="col-12">
                <div style="display: flex; justify-content:space-between;background-color: #e8e8e8;">
                    <h6 id="inside_left_click" style="padding:10px;padding-bottom: 5px;font-size:25px; cursor: pointer;"><i class="hover_effect fa-solid fa-arrow-left"></i></h6>
                    {{-- <h6 class="save-btn" style="padding:10px;padding-bottom: 5px;font-size:25px; cursor: pointer;"><i class="fa-solid fa-clipboard-check"></i></h6> --}}

                    <div style="display:flex">
                        <h6 class="add_asignatura" style="margin-right:40px;padding:10px;padding-bottom: 5px;font-size:25px; cursor: pointer;"><i class="hover_effect fa-solid fa-plus"></i></h6>
                        <h6 class="delete_get_done" style="margin-left:40px;padding:10px;padding-bottom: 5px;font-size:25px; cursor: pointer;"><i class="hover_effect fa-solid fa-minus"></i></h6>
                    </div>


                    <h6 id="inside_right_click" style="padding:10px;padding-bottom: 5px;font-size:25px; cursor: pointer;"><i class="hover_effect fa-solid fa-arrow-right"></i></h6>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="add_asignatura_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Anadir Materia</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="CERRAR">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="new_subject_name_id">Clave de la materia</label>
                    <input type="number" min="0" class="form-control" id="asignatura_clave" aria-describedby="emailHelp" placeholder="Introduzca la clave">
                </div>
                <div class="form-group">
                    <label for="new_subject_name_id">Nombre de la materia</label>
                    <input type="text" class="form-control" id="asignatura_nombre" aria-describedby="emailHelp" placeholder="Introduzca el nombre">
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
              <button type="button" class="add_asignatura_done btn btn-primary">ANADIR</button>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="show_message_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <img id="my_message_image" src="" alt="" style="margin-top:100px;width:100%">
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>

        $(document).ready(function(){

            //Lista de variables utilizadas en nuestro sistema

            let global_deleting_value = "";
            var str = ``;
            var paginate_index = 0;
            var min_page = 1;
            var pagina_actual = 1;
            var max_page = 1;

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            console.log("JQUERY ESTA FUNCIONANDO");

            //Esta es nuestra función mayor donde la estamos ocupando para hacerle Append a nuestra data.
            //En esta función obtenemos toda la data de todas las materias y las mostramos en la página en la que podremos
            //visualizar hasta 7 registros hasta que se cree una nueva pag.

            function get_data_inside(data)
            {
                str = ``;
                paginate_index = 0;
                min_page = 1;
                pagina_actual = 1;
                max_page = 1;

                i = 1;
                data.data.forEach(element => {
                    str +=
                    `<tr class="delete_get hover_effect_row" deleting_click="${element.id}" style="cursor:pointer">
                        <td scope="row">${element.clave}</td>
                        <td class="course_link_style">
                            <span style="display:flex;justify-content:space-between">
                                <span style="cursor:pointer" class="open_course_check" open_course_id="${element.id}">
                                    ${element.nombre}
                                </span>
                            </span>
                        </td>
                        <td scope="row">${element.teoricas}</td>
                        <td scope="row">${element.practicas}</td>
                        <td scope="row">G</td>
                    </tr>`;

                    if(i == 7)
                    {
                        $("#appending_my_data").append(`
                            <div class="row paginate_check" style="margin-top:30px" paginate_index="${++paginate_index}">
                                <div class="col-12" style="justify-content: center;display: flex;">
                                    <table class="table table-bordered" class="text-center" style="max-width:900px">
                                        <thead>
                                        <tr>
                                            <th scope="col" width="15%" style="background-color: #c9e9f2;">Clave</th>
                                            <th scope="col" style="background-color: #c9e9f2;">Nombre de la materia</th>
                                            <th scope="col" width="10%" style="background-color: #c9e9f2;">Hrs. Teóricas</th>
                                            <th scope="col" width="10%" style="background-color: #c9e9f2;">Hrs. Prácticas</th>
                                            <th scope="col" width="10%" style="background-color: #c9e9f2;">Tipo</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            ${str}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        `);
                        i = 0;
                        str = ``;
                    }
                    i++;

                });

                $("#appending_my_data").append(`
                    <div class="row paginate_check" style="margin-top:30px" paginate_index="${++paginate_index}">
                        <div class="col-12" style="justify-content: center;display: flex;">
                            <table class="table table-bordered" class="text-center" style="max-width:900px">
                                <thead>
                                    <tr>
                                        <th scope="col" width="15%" style="background-color: #c9e9f2;">Clave</th>
                                        <th scope="col" style="background-color: #c9e9f2;">Nombre de la materia</th>
                                        <th scope="col" width="10%" style="background-color: #c9e9f2;">Hrs. Teóricas</th>
                                        <th scope="col" width="10%" style="background-color: #c9e9f2;">Hrs. Prácticas</th>
                                        <th scope="col" width="10%" style="background-color: #c9e9f2;">Tipo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ${str}
                                </tbody>
                            </table>
                        </div>
                    </div>
                `);

                max_page = paginate_index;

                //Aquí habilitamos solamente la primera pag mientras deshabilitamos las demás
                document.querySelectorAll('.paginate_check').forEach(function(value) {
                    if(value.getAttribute('paginate_index') == pagina_actual)
                    {
                        value.style.display = "";
                    } else {
                        value.style.display = "none";
                    }
                });
            }

            //Aquí hacemos nuestro llamado a Ajax para que nos traiga la data de todas nuestras materias en la BDD

            $.ajax({
                type:"GET",
                url:'http://127.0.0.1:8000/fetch_all_courses',
            }).done(function(data){
                if(data.status == true)
                {
                    console.log(data);

                    get_data_inside(data);
                    //Esta es la función para cambiar pantallas entre paginas de la lista de materias
                    $(document).on('click',"#inside_left_click",function(){
                        var temp = pagina_actual;
                        if(--temp < 1)
                        {
                            pagina_actual = 1;
                        }
                        else
                        {
                            --pagina_actual;
                        }

                        document.querySelectorAll('.paginate_check').forEach(function(value) {

                            if(value.getAttribute('paginate_index') == pagina_actual)
                            {
                                value.style.display = "";
                            }
                            else
                            {
                                value.style.display = "none";
                            }
                        });
                    });

                    //Esta función se usa para cambiar las vistas 
                    //correspondientes a las paginas en la lista de materias

                    $(document).on('click',"#inside_right_click",function(){
                        var temp = pagina_actual;
                        if(++temp > 1 && ++temp <= max_page)
                        {
                            pagina_actual++;
                        }
                        else
                        {
                            pagina_actual = max_page;
                        }

                        document.querySelectorAll('.paginate_check').forEach(function(value) {

                            if(value.getAttribute('paginate_index') == pagina_actual)
                            {
                                value.style.display = "";
                            }
                            else
                            {
                                value.style.display = "none";
                            }
                        });
                    });

                    //Esta es la función para abrir la materia seleccionada en la lista 
                    //cuando hacemos doble click
                    $(document).on('dblclick',".open_course_check",function(){
                        console.log($(this).attr('open_course_id'));
                        var opening_id = $(this).attr('open_course_id');

                        window.location.href = `http://127.0.0.1:8000/nueva/update?edit_id=${opening_id}`;
                    });

                    //Aquí abrimos la ventana para añadir una nueva materia
                    $(document).on('click',".add_asignatura",function(){

                        $("#add_asignatura_modal").modal("show");

                        $("#asignatura_clave").val("");
                        $("#asignatura_nombre").val("");
                    });

                    //En esta función añadimos una nueva materia al sistema, de manera predeterminada
                    //Aparecerá todo en blanco así que solo será creada, una vez la edites se actualizará el registro
                    $(document).on('click',".add_asignatura_done",function(){

                        console.log("ADDING NEW");

                        var formData = {
                            main_one: document.getElementById("asignatura_clave").value,
                            main_two: document.getElementById("asignatura_nombre").value,
                            big_object: JSON.stringify([]),
                            big_object_two: JSON.stringify([]),
                            big_object_three: JSON.stringify([]),
                        };

                        $.ajax({
                            type: 'POST',
                            url: "http://127.0.0.1:8000/nueva",
                            data: formData,
                            success: function(data3) {
                                if(data3.status == true)
                                {
                                    $("#add_asignatura_modal").modal("hide");
                                    $("#appending_my_data").empty();
                                    get_data_inside(data3);
                                }
                                else if(data3.status == false)
                                {
                                    alert(data3.message);
                                }
                            },
                        });
                    });

                    //Función con la que obtenemos el ID de la materia que queremos eliminar 
                    //y resalta el sombreado de selección
                    $(document).on('click',".delete_get",function(){
                        let current_row = $(this).attr('deleting_click');

                        document.querySelectorAll('.delete_get').forEach(function(value) {
                            if(current_row == value.getAttribute('deleting_click'))
                            {
                                value.style.backgroundColor = `rgb(236, 236, 236)`;
                                global_deleting_value = current_row;
                            }
                            else
                            {
                                value.style.backgroundColor = `white`;
                            }
                        });

                    });

                    //Request en el que le mandamos el ID para borrar una materia de la BDD

                    $(document).on('click',".delete_get_done",function(){

                        console.log(global_deleting_value);

                        $.ajax({
                            type:"GET",
                            url:`http://127.0.0.1:8000/delete_course?id=${global_deleting_value}`,
                        }).done(function(data2){
                            console.log(data2);
                            if(data2.status == true)
                            {
                                $("#appending_my_data").empty();
                                get_data_inside(data2);
                                $("#show_message_modal").modal("show");
                                document.getElementById('my_message_image').src = "http://127.0.0.1:8000/images/picture1.png";
                            }
                            else
                            {
                                $("#show_message_modal").modal("show");
                                document.getElementById('my_message_image').src = "http://127.0.0.1:8000/images/picture2.png";
                            }
                        });
                    });

                }
            });

        });

    </script>

</body>
</html>
