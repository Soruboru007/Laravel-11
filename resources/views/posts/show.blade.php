<x-layout>
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 mt-8 bg-slate-50 rounded-lg">
        <h1 class="text3x1 text-indigo-800 font-semibold"> {{$post->title}} </h1>
        <main class="max-w-6x1 mx-auto mt-6 lg:mt-20 space-y-6">
            <p class="test-gray-700 p-4 mb-4"> {{$post->content}} </p>
        </main>

    </div>
</x-layout>
