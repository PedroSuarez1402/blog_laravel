<x-app-layout>
    <div class="relative max-w-3xl mx-auto px-10 py-10">
        <!-- Botones Editar y Eliminar fuera del div principal, alineados a la izquierda -->
        <div class="absolute top-0 left-0 mt-4 ml-4 flex space-x-3">
            <!-- Botón Editar -->
            <a href="{{route('posts.edit', $post)}}" class="px-6 py-3 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Editar post
            </a>

            <!-- Botón Eliminar -->
            <form action="{{route('posts.destroy', $post)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-6 py-3 bg-red-600 text-white rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                    Eliminar post
                </button>
            </form>
        </div>

        <!-- Contenido del post -->
        <div class="shadow-2xl bg-gray-200 rounded-2xl px-10 py-10">
            <h1 class="text-3xl font-bold text-center mb-6">Titulo: {{$post->title}}</h1>
            <p class="text-sm py-4 font-sans italic">
                <b>Categoria: </b>{{$post->categoria}}
            </p>
            <p class="text-lg font-sans">
                {{$post->content}}
            </p>
        </div>
    </div>
</x-app-layout>
