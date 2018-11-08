@extends ('layouts.admin')
@section ('contenido')   
        <!--Left Sidebar-->
        <div class="contain body-form">
            <div class="wrapper">
                <div class="sidebar-info color-side">
                    <h3><br>PROPIEDADES<br></h3>
                    <ul>
                        <li><i class="fa fa-user-circle"></i> Detalles</li>
                    </ul>
                </div>

                <!--Form-->
                <div class="house-info body-form">
                    <h3>Propiedad</h3>

                        <p>
                            <label>Foto :</label>
                            <img src="{{asset('imagenes/propiedades/'.$propiedad->ruta)}}" alt="" height="400px" >
                        </p>
                        <hr>
                        <p class="name">
                            <label> <b> Nombre: </b> </label>{{$propiedad->nombre}}
                        </p>
                        <p></p>
                        <p>
                            <label> <b>Ubicación: </b> </label>{{$propiedad->nombre_ubicacion}}     
                        </p>
                        <p>
                            <label> <b>Estado: </b> </label>{{$propiedad->estado}}
                        </p>
                        <p>
                            <label> <b>Precio: </b> </label>{{$propiedad->precio}}
                        </p>
                        <p class="full">
                            <label><b>Descripción: </b></label>{{$propiedad->descripcion}}
                        </p>
                        
                        <p class="full">
                            <a href="{{URL::previous()}}" class="button">Regresar</a> 
                        </p>
                </div>
            </div>
        </div>
@endsection

