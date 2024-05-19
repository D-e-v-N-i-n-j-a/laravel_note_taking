<x-layout>


    <div class="my-20 flex flex-col justify-center items-center  mx-auto max-w-screen-sm shadow-md">

        <h1>REGISTER USER </h1>
        <form class="w-4/5 mb-5" method="post" action="{{route('register')}}">
            @csrf 
            <div class="mb-5">
                <label for="username" class="block mb-2 text-sm font-medium ">Your Full Name</label>
                <input type="text" id="username"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('username') ring-red-500    
                    @enderror"
                    placeholder="James kojo"
                    name="username"
                    value="{{ old('username') }}"
                    />

                    @error('username') 
                      <p class="text-red-500">  {{ $message }}</p>
                    @enderror
            </div>
            <div class="mb-5">
                <label for="text" class="block mb-2 text-sm font-medium ">Your
                    email</label>
                <input type="text" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="name@flowbite.com"
                    name="email"
                    value="{{old('email')}}"
                    />

                    @error('email') 
                    <p class="text-red-500">  {{ $message }}</p>
                  @enderror
            </div>
            <div class="mb-5">
                <label for="password" class="block mb-2 text-sm font-medium ">Your
                    password</label>
                <input type="password" id="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    
                    name="password"
                    value="{{old('password')}}"
                    />
                    @error('password') 
                    <p class="text-red-500">  {{ $message }}</p>
                  @enderror
            </div>
            <div class="mb-5">
                <label for="password" class="block mb-2 text-sm font-medium ">Confirm Password</label>
                <input type="password" id="password"
                    class="bg-gray-50 bor der border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   
                    name="password_confirmation"
                    />
            </div>
           
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>

    </div>

</x-layout>
