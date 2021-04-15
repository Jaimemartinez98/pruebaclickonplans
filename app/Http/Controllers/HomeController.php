<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $respuesta = HTTP::get('https://www.etnassoft.com/api/v1/get/?category=libros_programacion');
        $programacion = $respuesta->json(); 

        $respuesta2 = HTTP::get('https://www.etnassoft.com/api/v1/get/?category=libros_programacion');
        $programacion2 = $respuesta2->json(); 

        return view('home', compact('programacion','programacion2')); 
    }
    public function filtro(Request $request)
    {
        $respuesta = HTTP::get('https://www.etnassoft.com/api/v1/get/?category=libros_programacion');
        $programacion = $respuesta->json();        
       
        return view('filtrover', compact('programacion')); 
    }

    public function index1()
    {
      
        return view('agregar'); 
    }

    public function index2()
    {
      
        return view('filtro'); 
    }
    public function edit1($ID)
    {
        $respuesta = HTTP::get("https://www.etnassoft.com/api/v1/get/?id={$ID}");      
        $programacion = $respuesta->json(); 
       // dd($programacion, $name);        
        return view('verlibro', compact('programacion'));
    }
}
