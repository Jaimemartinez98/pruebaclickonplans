<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use Illuminate\Http\Request;


class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users['libros']=Libros::all();
        return view ('mislibros', $users); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $libroAgregar= new Libros;
        $request->validate(
            [
                'nombre'=>'required',
                'descripcion'=>'required',
                'autor' => 'required',
                'paginas' => 'required'           
                
            ]
            );
        $libroAgregar->nombre = $request->nombre;  
        $libroAgregar->descripcion = $request->descripcion;
        $libroAgregar->autor = $request->autor;
        $libroAgregar->paginas = $request->paginas;   
        $libroAgregar->user_id = auth()->id();   
        $libroAgregar->save();
      
        return back()->with('agregar','El libro se agrego correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function show(Libros $libros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function edit(Libros $libros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libros $libros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        

        $libro= Libros::find($id);
        $libro->delete();
        $users['libros']=Libros::all();
        return view ('mislibros', $users); 
    }
}
