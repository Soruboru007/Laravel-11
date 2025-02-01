<x-layout>
    <section>
        <div class="flex justify-end">
            <a href="/posts/create" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
            font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700
            focus:outline-none dark:focus:ring-blue-800">Create</a>
        </div>
    </section>
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 mt-8 bg-slate-50 rounded-lg">
        <h1 class="text3x1 text-indigo-800 font-semibold"> {{$post->title}} </h1>
        <main class="max-w-6x1 mx-auto mt-6 lg:mt-20 space-y-6">
            <p class="test-gray-700 p-4 mb-4"> {{$post->content}} </p>
        </main>

    </div>
</x-layout>
