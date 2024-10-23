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
        //Obtenemos todas las categorias
        $categories = Category::All();
        //Compactamos y enviamos esos datos a categories.index
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        //Muestra el formulario de Crear
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'nullable|string|max:600',
        ]);

        // Crear la nueva categoría
        Category::create($request->all());
        
        // Redirigir a la lista de categorías con un mensaje
        return redirect()->route('categories.index')->with('success', 'Categoría creada exitosamente.');
    }

    public function show(string $id)
    {
        $category = Category::findOrFail($id); // Busca la categoría por ID
        return view('categories.show', compact('category'));
    }

    public function edit(string $id)
    {
        $category = Category::findOrFail($id); 
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, string $id)
    {
        // Validar la solicitud
        $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'nullable|string|max:600',
        ]);

        // Buscar la categoría
        $category = Category::findOrFail($id);

        // Actualizar la categoría
        $category->update($request->all());

        // Redirigir a la lista de categorías con un mensaje
        return redirect()->route('categories.index')->with('success', 'Categoría actualizada exitosamente.');
    }

    public function destroy(string $id)
    {
        // Buscar la categoría
        $category = Category::findOrFail($id);

        // Eliminar la categoría
        $category->delete();

        // Redirigir a la lista de categorías con un mensaje
        return redirect()->route('categories.index')->with('success', 'Categoría eliminada exitosamente.');
    }
}
