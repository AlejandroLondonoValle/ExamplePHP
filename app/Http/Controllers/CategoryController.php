<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::All();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Muestra el formulario de Crear
        return ("Muestra el formulario de Crear");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Guarda la informacion en la base de datos
        return ("Guarda la informacion en la base de datos");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Muestra el elemento puntual de la base de datos
        return ("Muestra el elemento puntual de la base de datos");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Busca los datos de un elemento y los organiza en un formulario para su posterior edicion
        return ("Busca los datos de un elemento y los organiza en un formulario para su posterior edicion");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Este metodo actualiza los datos en la base de datos
        return ("Este metodo actualiza los datos en la base de datos");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Este metodo se encarga de eliminar un elemento en la base de datos
        return ("Este metodo se encarga de eliminar un elemento en la base de datos");
    }
}
