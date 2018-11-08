@extends('layouts.admin')
@section('contenido')


    <div id="home">   
        <div class="section container">
            <h1>AGENCIA INMOBILIARIA</h1>
                <h2 class="lead hide-on-small">Encuentra las mejores propiedades en un solo sitio</h2>
                <p class="lead hide-on-small">
                    Presentamos la mejor variedad de Propiedades en Venta y en Alquiler en las ciudades de Valencia y Caracas
                </p>
        </div>
    </div>

    <!--House Icon-->   
    <section id="house-icon">
        <div class="container">
            <h2 class="section-head"><i class="fas fa-home"></i></h2>       
        </div>       
    </section>  
        
    <!--Propiedades-->   
    <section id="houses" class="section text-second">
        <div class="container">
            <h2 class="section-head hide-on-small">Propiedades</h2> 
            <img src="img/thing.jpg" alt"" class="center aux"> 
               <h3 class="lead hide-on-small">¡Descubre las Propiedades Disponibles!</h3>
                <p class="lead hide-on-small">
                    Aquí podrás encontrar la propiedad que mejor se adapte a tus necesidades
                </p>
            <a href="{{url('app/propiedades')}}" class="btn btn-primary"><b>Ver Todas</b></a>
        </div>        
   </section>
             
   <!--Bottom Section--> 
   <section id="bottomsection" class="section bg-light">                        
   </section>
        
   <!--Ingresar--> 
   <section id="ingresar" class="section bg-light">
       <div class="container">
            <h3>Ingresar al sistema</h3>
                <p class="lead"><i>Registre nuevas propiedades</i></p>
            <a href="{{url('app/propiedades/create')}}" class="btn btn-secondary"><b>Ingresar</b></a>         
       </div>                      
   </section>
@endsection