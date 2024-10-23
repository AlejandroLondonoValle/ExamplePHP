<div class="py-8 px-4 sm:px-6 lg:px-18">
    <form id="category-form" action="{{ $category ? route('categories.update', $category->id) : route('categories.store') }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
        @csrf
        @if($category)
            @method('PUT')
        @endif

        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-semibold mb-2">Nombre:</label>
            <input type="text" name="name" id="name" value="{{ $category ? $category->name : '' }}" class="form-control border border-gray-300 rounded-md p-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            
            <label for="description" class="block text-gray-700 text-sm font-semibold mb-2">Descripción:</label>
            <input type="text" name="description" id="description" value="{{ $category ? $category->description : '' }}" class="form-control border border-gray-300 rounded-md p-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>

        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md transition duration-200">
            {{ $category ? 'Actualizar' : 'Crear' }}
        </button>
    </form>
</div>


{{-- <script>
    //Descomentar en caso de que se necesite
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('category-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Evitar el envío inmediato del formulario

            Swal.fire({
                title: "¿Quieres guardar los cambios?",
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: "Guardar",
                denyButtonText: `No guardar`
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire("Cambios guardados con éxito!", "", "success").then(() => {
                        this.submit(); // Enviar el formulario
                    });
                } else if (result.isDenied) {
                    Swal.fire("Se cancelaron los cambios", "", "info");
                }
            });
        });
    });
</script> --}}
