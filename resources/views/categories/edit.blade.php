@extends('layouts.guest-personal')

@section('content')
    <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Editar Categoría</h1>
    <x-category-form :category="$category" />
@endsection