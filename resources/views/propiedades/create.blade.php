@extends ('layouts.admin')
@section ('contenido')

        
        <!--Left Sidebar-->
        <div class="contain body-form">
            <div class="wrapper">
                <div class="sidebar-info color-side">
                    <h3><br>PROPIEDADES<br></h3>
                    <ul>
                        <li><i class="fa fa-user-circle"></i> admin</li>
                    </ul>
                </div>

                <!--Form-->
                <div class="house-info body-form">
                    <h3>Propiedad</h3>
                   {!!Form::open(array('url'=>'app/propiedades','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
                    {{Form::token()}}
                        <p class="name">
                            <label>Nombre</label>
                            <input name="nombre" type="text" required>
                        </p>
                        <p></p>
                        <p>
                            <label>Ubicación</label>
                                <select name="id_ubicacion" class="dropdown-form" required>
                                @foreach($ubicaciones as $ubi)
                                    <option value="{{$ubi->id}}">{{$ubi->nombre}}</option>
                                @endforeach
                            </select>
                        </p>
                        <p>
                            <label>Estado</label>
                            <select name="id_estado" class="dropdown-form" required>
                                @foreach($estados as $est)
                                    <option value="{{$est->id}}">{{$est->nombre}}</option>
                                @endforeach
                            </select>
                        </p>
                        <p class="name">
                            <label>Precio</label>
                            <input name="precio" type="number" placeholder="Bs.S" required>
                        </p>
                        <p class="full">
                            <label>Descripción</label>
                            <textarea  name="descripcion" rows="4" cols="50" required></textarea>
                        </p>
                        <p>
                            <label for="fileupload">Foto de Referencia</label>
                            <input type="file" name="imagen" value="fileupload" id="fileupload">
                        </p>
                        <p class="full">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <button type="submit"><b>REGISTRAR</b></button>
                        </p>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
@endsection

