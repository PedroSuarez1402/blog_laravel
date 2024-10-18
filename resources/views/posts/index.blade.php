<x-app-layout>
    <h1 class="text-3xl font-bold text-center mb-6">Aqui se mostraran los post</h1>

    <div class="shadow-2xl bg-gray-200 rounded-2xl max-w-3xl mx-auto px-10 py-10">
        <ul class="space-y-3">
            @foreach ($posts as $post)
                <li>
                    <a href="{{route('posts.show', $post)}}" class="block p-3 bg-white hover:bg-gray-100 rounded-2xl shadow-2xl hover:shadow-lg transition-shadow">
                        <h4 class="text-base font-semibold text-gray-800">{{$post->title}}</h4>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    {{$posts->links()}}

    
</x-app-layout>
