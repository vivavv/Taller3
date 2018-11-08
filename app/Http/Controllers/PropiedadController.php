<?php

namespace hoteles\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Collection; 
use hoteles\models\Propiedad;
use hoteles\models\Estado;                               
use hoteles\models\Ubicacion;
use Carbon\Carbon; // Control de fechas
use Response;
use DB;

class PropiedadController extends Controller
{
    public function __construct()
    {
        
    }

    # Función index.

     public function index(Request $request)
    {
        if ($request)
        {
           $query=trim($request->get("searchText"));
           $propiedades=DB::table("propiedades as pro")
            ->select("pro.*")
            ->where("pro.nombre","LIKE","%".$query."%")
            ->orderBy("pro.id","desc")
            ->get();
          return view("propiedades.index",["propiedades"=>$propiedades,"searchText"=>$query]);
        }
    }


    public function create()
    {
        $ubicaciones=DB::table("ubicaciones as ubi")->select("ubi.*")->get();
        $estados=DB::table("estados as est")->select("est.*")->get();

        return view("propiedades.create",["ubicaciones"=>$ubicaciones,"estados"=>$estados]);
    }

    public function store (Request $request)
    {
        $propiedad = new Propiedad;
        $ubicacion = new Ubicacion;
        $estados = new Estado;

        $ubicaciones= Ubicacion::findOrFail($request->get("id_ubicacion"));
        $estados= Estado::findOrFail($request->get("id_estado"));
        
        $propiedad->nombre = $request->get("nombre");
        $propiedad->id_ubicacion = $request->get("id_ubicacion");
        $propiedad->nombre_ubicacion = $ubicaciones->nombre;
        $propiedad->estado = $estados->nombre;
        $propiedad->id_estado = $request->get("id_estado");
        $propiedad->precio = $request->get("precio");
        $propiedad->descripcion = $request->get("descripcion");

        
        if ($request->hasFile('imagen')) {
            $image = $request->file('imagen');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/imagenes/propiedades/');
            $image->move($destinationPath, $name);
            $propiedad->ruta = $name;;
        }else{
             $propiedad->ruta = "default.jpg";
        } 
       
        $propiedad->save();

       
      
        return Redirect::to("app/propiedades/create");
    }

    public function show($id)
    {
        $propiedad= Propiedad::findOrFail($id);
        return view("propiedades.show",["propiedad"=>$propiedad]);
    }
    
}
