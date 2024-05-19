
<x-layout>
   @auth
   <div class="my-10 mx-auto w-full flex justify-center items-center">
    <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Add Todo</button>
</div>
   @endauth
    <div class="container mx-auto mt-10">
        <div class="max-w-sm mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Todo Title</div>
                <p class="text-gray-700 text-base">
                    This is a description of the todo item. It contains details about the task.
                </p>
            </div>
            <div class="px-6 pt-4 pb-2 flex ">
                <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-700 focus:outline-none mx-3">View</button>
                <button class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-700 focus:outline-none">Edit</button>
               @auth
               <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-700 focus:outline-none mx-3">Delete</button>
               @endauth
            </div>
        </div>
    </div>
</x-layout>