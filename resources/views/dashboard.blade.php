<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-full">
                <div class="bg-white p-4 rounded-2xl shadow-lg flex flex-col sm:flex-row gap-5 h-full select-none">
                    <!-- Cambios aquí -->
                    <div class="flex sm:flex-1 flex-col gap-2 p-4"> <!-- Ajuste en padding -->
                        <h1 class="text-lg sm:text-xl font-semibold text-gray-600 text-center">
                            Categorias
                        </h1>
                        <p class="text-gray-500 text-sm sm:text-base line-clamp-3">
                            En la siguiente sección, tendrás la oportunidad de administrar todas tus categorías de
                            manera sencilla y eficiente. ¡Explora, organiza y gestiona tus elementos con total
                            facilidad! Podrás realizar operaciones de creación, lectura, actualización y eliminación
                            (CRUD) para asegurarte de que todo esté en su lugar. ¡Tu experiencia de gestión de
                            categorías nunca ha sido tan fluida y agradable! </p>
                        <div class="flex gap-4 mt-auto" >
                            <a href="{{ route('categories.index') }}"
                                class='ml-auto flex items-center gap-1 sm:text-lg border border-gray-300 px-3 py-1 rounded-full hover:bg-gray-50 transition-colors focus:bg-gray-100 focus:outline-none focus-visible:border-gray-500'>
                                <span>Llevame allí</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>
