<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesionalController extends Controller
{
    public function index(){
        //return "Bienvenido web de profesional";
        $citas= array("Extraccion","Consulta", "Implante");
        return view('index', ['AA'=>$citas]);
    }

    public function create(){
        //return "Pagina  donde se creara el formulario para crear Horas";
        return view('create');
    }

    public function help($name_profesional, $categoria=null){
        if($categoria){
            return "Bienvenido Profesional" .$name_profesional. "que pertenece a la catergoria" .$categoria;

        }else{
            return "Bienvenido Proefesional" .$name_profesional;
        }
    }

}
