<x-app-layout>
    <div class="shadow-2xl bg-gray-200 rounded-2xl max-w-3xl mx-auto px-10 py-10">
        <h1 class="text-2xl font-bold mb-6 text-center">Crear un Nuevo Post</h1>
        @if ($errors->any())
            <div id="error-messages" >
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="bg-red-600 text-white font-bold p-1 mb-2 max-w-96 mx-auto text-center shadow-lg">
                            {{$error}}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('posts.store')}}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Título</label>
                <input type="text" name="title" id="title" placeholder="Título del post" value="{{old('title')}}"
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div>
                <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                <input type="text" name="slug" id="slug" placeholder="Slug" value="{{old('slug')}}"
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div>
                <label for="categoria" class="block text-sm font-medium text-gray-700">Categoría</label>
                <input type="text" name="categoria" id="categoria" placeholder="Categoría del post" value="{{old('categoria')}}"
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div>
                <label for="content" class="block text-sm font-medium text-gray-700">Contenido</label>
                <textarea name="content" id="content" rows="5" placeholder="Contenido del post..." 
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">{{old('content')}}</textarea>
            </div>
            <div>
                <label for="autor" class="block text-sm font-medium text-gray-700">Autor</label>
                <input type="text" name="autor" id="autor" placeholder="Autor" value="{{old('autor')}}"
                    class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div class="flex justify-center">
                <button type="submit"
                    class="px-6 py-3 bg-indigo-600 text-white rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Crear Post
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
