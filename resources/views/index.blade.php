
<x-layout>
   @auth
   <div class="my-10 mx-auto w-full flex justify-center items-center">
    <a href="{{ route('create') }}" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Add Todo</a>
</div>
   @endauth
    <div class="container mx-auto mt-10">
        @if($notes->isEmpty())
        <p>No notes found.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mx-20">
            @foreach ($notes as $note)
                <div class="p-4 border rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold">{{ $note->title }}</h2>
                    <p>{{ $note->description }}</p>
                    <div class="mt-2">
                        <a href="#" class="text-blue-500 hover:underline">View</a>
                       
                       @auth
                       <a href="#}" class="text-green-500 hover:underline ml-2">Edit</a>
                       <form action="{{ route('destroy', $note->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline ml-2">Delete</button>
                    </form>
                       @endauth
                    </div>
                </div>
            @endforeach
        </div>
    @endif
    </div>
</x-layout>