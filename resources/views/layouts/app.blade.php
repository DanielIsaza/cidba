<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />

    <!-- Scripts -->
    <!-- Styles -->
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
    
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Planea CIDBA
                    </a>
                </div>
                @if (Auth::check())
                <div class="navbar-collapse collapse navbar-responsive-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                   Información universidad <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/universidades') }}">Universidades</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/facultades') }}">Facultades</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/programasacademicos') }}">Programas académicos</a>
                                    </li>
                               </ul>
                        </li>
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                   Programa académico <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/semestres') }}">Semestres</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/estados') }}">Estados planes académicos</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/planesacademicos') }}">Planes académicos</a>
                                    </li>   
                               </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Espacios académicos <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/naturaleza') }}">Tipos de naturaleza</a>
                                </li>
                                <li>
                                    <a href="{{ url('/tiposmetodologias') }}">Tipos de metodologías</a>
                                </li>
                                <li>
                                    <a href="{{ url('/tiposevaluaciones') }}">Tipos de evaluación</a>
                                </li>
                                <li>
                                    <a href="{{ url('/areasconocimiento') }}">Áreas de conocimiento</a>
                                </li>
                                <li>
                                    <a href="{{ url('/actividadesacademicas') }}">Actividades académicas</a>
                                </li>
                                <li>
                                    <a href="{{ url('/espaciosacademicos') }}">Espacios académicos</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                   Usuarios <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/register') }}">Usuarios</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/roles') }}">Roles</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/autoriza') }}">Permisos</a>
                                    </li>
                               </ul>
                        </li>
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                   Habilidades <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/tiposhabilidad') }}">Tipos de habilidad</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/habilidades') }}">Habilidades</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/objetivos') }}">Objetivos</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/asignacion') }}">Asignar Pesos</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/asignacionTeorica') }}">Asignar Pesos teóricos</a>
                                    </li>
                               </ul>
                        </li><li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                   Estadísticas <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/estadisticaAreaConocimiento') }}">Por área de conocimiento</a>
                                    </li>
                                     <li>
                                        <a href="{{ url('/estadistica') }}">Por plan de estudios</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/tablaResumen') }}">Tabla resumen</a>
                                    </li>
                               </ul>
                        </li>
                    </ul>
                    @endif
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Ingreso</a></li>
                            <li><a href="{{ url('/register') }}">Registro</a></li>
                        @else
                            <li>
                                <a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

    </div>
    <!-- En está parte se ingresan los form -->
    <div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
    {!! Alert::render() !!}
        @yield('content')
        </div>
        </div>
        </div>
        
    <!-- Scripts -->
    <script
        src="http://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/ripples.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $.fn.populateSelect = function (values) {
                var options = '';
                options += '<option value = "'+-1+'"> Seleccione una opción </option>';
                $.each(values, function (key, row) {
                    options += '<option value="' + row.value + '">' + row.text + '</option>';
                });
                $(this).html(options);
            }

            $('#university_id').change(function(){
                $('#academicprogram_id').empty().change();
                $('#tabla > tbody').remove();
                var universidad = $(this).val();
                if(universidad == ''){
                    $('#faculty_id').empty().change();
                    $('#academicprogram_id').empty().change();
                }else{
                    $.getJSON('{{ route('facultad/' )}}/'+universidad,null,function(values){
                        $('#faculty_id').populateSelect(values);
                    });
                }
            });
            $('#faculty_id').change(function(){
                $('#academicprogram_id').empty().change();
                $('#tabla > tbody').remove();
                var facultad = $(this).val();
                if(facultad == -1){
                    $('#academicprogram_id').empty().change();
                }else{
                      if( $('#academicprogram_id').length ){
                        $.getJSON('{{ route('programa/' )}}/'+facultad,null,function(values){
                            $('#academicprogram_id').populateSelect(values);
                        });    
                      }else{
                        $.getJSON('{{ route('programa/' )}}/'+facultad,null,function(values){
                            $('#tabla').populateTable(values);
                        });
                      }     
                }
            });

            $('#academicprogram_id').change(function(){
                if($('#academicprogram_id').length){
                    $('#tabla > tbody').remove();
                }
                $('#academicplan_id').empty().change();
                var programa = $(this).val();
                if(programa != null){

                if(programa == -1){
                    $('#tabla > tbody').remove();
                }else{
                    if($('#academicplan_id').length){
                        $.getJSON('{{ route('planes/') }}/'+programa,null,function(values){
                            $('#academicplan_id').populateSelect(values);
                        });
                    }else {
                        $.getJSON('{{ route('planes/') }}/'+programa,null,function(values){
                            $('#tabla').populateTable(values);
                        });
                    }    
                }
                }
            });  

            $('#academicplan_id').change(function(){
                $('#tabla > tbody').remove();
                var plan = $(this).val();
                if(plan != null){
                    if(plan == -1){
                        $('#tabla > tbody').remove();
                    }
                else{
                    if($("#academicspace_id").length){
                        $.getJSON('{{ route('materia') }}/'+plan,null,function(values){
                            $('#academicspace_id').populateSelect(values);
                        });
                    }
                    if($("#ability_id").length){
                        $.getJSON('{{ route('habilidad') }}/'+plan,null,function(values){
                            $("#ability_id").populateSelect(values);
                        });
                    }
                    if(!$("#semester_id").length && $("#tabla").length && !$("#ability_id").length) {
                        $.getJSON('{{ route('habilidad') }}/'+plan,null,function(values){
                            $('#tabla').populateTable(values);
                        });
                    }
                }
            }
            });

            $('#semester_id').change(function(){
                $('#tabla > tbody').remove();
                var semestre = $("#semester_id").val();
                var plan = $("#academicplan_id").val();
                if( semestre > 0 && plan > 0){
                    $.getJSON('{{ route('materias') }}/'+semestre+'/'+plan,null,function(values){
                        $("#tabla").populateTable(values);
                    });
                }
            });

            $('#typeability_id').change(function(){
                $('#tabla > tbody').remove();
                var tipoHabilidad = $('#typeability_id').val();
                if(tipoHabilidad > 0){
                    $.getJSON('{{route('habilidad')}}/'+tipoHabilidad,null,function(values){
                        $("#ability_id").populateSelect(values);
                    });
                }
            });

            $('#ability_id').change(function(){
                $('#tabla > tbody').remove();
                $('#tablaO > tbody').remove();
                $('#tablaT > tbody').remove();

                var habilidad = $('#ability_id').val();
                if(habilidad > 0){
                    if($('#tablaO').length){
                        $.getJSON('{{ route('objetivosreal') }}/'+habilidad,null,function(values){
                            $('#tablaO').populateTable(values);
                        });
                    }else{
                    if($('#tablaT').length){
                        $.getJSON('{{ route('objetivosteo') }}/'+habilidad,null,function(values){
                            $('#tablaT').populateTable(values);
                        });
                    }    
                    if($('#objective_id').length){
                        $.getJSON('{{ route('objetivo/')}}/'+habilidad,null,function(values){
                            $('#objective_id').populateSelect(values);
                        });
                    }else{
                        console.log('{{ route('objetivo/')}}/'+habilidad);
                        $.getJSON('{{ route('objetivo/')}}/'+habilidad,null,function(values){
                            $("#tabla").populateTable(values);
                        });
                    }
                    }
                }
            });

            $.material.init();
        });
    </script>
    @yield('tabla')
    <script src="/js/app.js"></script>
</body>
</html>