@extends('layouts.admin')
@section('contenido')

    <div class="properties">
        <ul class="pic-grid">
            @foreach($propiedades as $pro)
                <li>
                <div class="pic-box " style="background: linear-gradient( rgba(0, 0, 0, 0.50), rgba(0, 0, 0, 0.10)), /* bottom, image */
	url('{{asset('imagenes/propiedades/'.$pro->ruta)}}');">
                <a href="#">
                    <div class="pic-info">
                        <h3>{{$pro->nombre}}</h3>
                        <p class="overflow"><b>{{$pro->descripcion}}<br>Ubicación: {{$pro->nombre_ubicacion}}<br><i>{{$pro->estado}}</i></b></p>
                        <a href="{{URL::action('PropiedadController@show', $pro->id)}}" class="button">Ver detalles</a> 
                    </div></a>
                </div>
                </li>
            @endforeach
        </ul>
    </div>

@endsection