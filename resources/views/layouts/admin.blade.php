<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link rel="stylesheet" href="{{url('https://use.fontawesome.com/releases/v5.3.1/css/all.css')}}" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Ingresar Propiedades</title>
   <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
 
</head>

<body >
  
    <div id="lista">
        <header>
            <nav class='cf'>
                <ul class='cf'>
                    <!--Header menu-->
                    <li class="hide-on-small">
                        <a href="{{url('/')}}">Inicio</a>
                    </li>
                    <li>
                        <a href="{{url('app/propiedades')}}">Propiedades</a>
                    </li>
                    <li>
                        <a href="{{url('app/propiedades/create')}}">Ingresar</a>
                    </li>
                </ul>
                <!--Responsive Dropdown-->
                <li class="drop">
                    <a href='#' id='openup'><i class="fas fa-bars"></i></a>
                    <div class="dropdown-menu">
                        <a href="index.html">Inicio</a>
                        <a href="propiedades.html">Propiedades</a>
                    </div>
                </li>
            </nav>
        </header>

        <!--Contenido-->
        @yield('contenido')
        <!--Fin Contenido-->

        <!--Footer-->
        <footer>
            <div class="footer-bottom text-center">
                <a href='#'>Agencia Inmobiliaria</a>
            </div>
        </footer>

    </div>

</body>
@stack('scripts')
<script>

</script>

</html>