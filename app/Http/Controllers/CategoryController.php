<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
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

    public function store(CategoryRequest $request)
    {
        $validatedData = $request->validated();

        // Crear la categoría con los datos validados
        Category::create($validatedData);
        
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
        // Validar los datos con la solicitud
        $validatedData = $request->validated();

        // Buscar la categoría por ID y actualizar sus datos con los datos validados
        $category = Category::findOrFail($id);
        $category->update($validatedData);

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
