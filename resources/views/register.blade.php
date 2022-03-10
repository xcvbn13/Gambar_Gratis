<x-guest-layout>
    <!-- Container -->
    <div class="container mx-auto">
        <div class="flex justify-center px-6 my-12">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                <!-- Col -->
                <div
                    class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg"
                    style="background-image: url('/img/register_img.jpg');background-position:50% 10%"
                ></div>
                <!-- Col -->
                <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
                <h3 class="pt-4 text-2xl text-center">Welcome to <span class="uppercase" style="font-family: 'Roboto', sans-serif;color: rgb(59 130 246);">Gambar Gratis</span></h3>
                    
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- nama  -->
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="nama">
                                Nama
                            </label>
                            <x-input
                                class="block w-full"
                                id="name"
                                type="text"
                                name="name" 
                                :value="old('name')" 
                                required 
                                autofocus
                            />
                        </div>
                        <!-- username  -->

                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="username">
                                Username
                            </label>
                            <x-input
                                class="block w-full"
                                id="username"
                                type="text"
                                name="username" 
                                :value="old('username')" 
                                required 
                                autofocus
                            />
                        </div>

                        <!-- email  -->
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                Email
                            </label>
                            <x-input
                                class="block w-full"
                                id="email"
                                type="email"
                                name="email" 
                                :value="old('email')" 
                                required 
                                autofocus
                            />
                        </div>
                        <!-- password  -->

                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                Password
                            </label>
                            <x-input
                                class="block w-full"
                                id="password"
                                type="password"
                                name="password" 
                                required 
                                autocomplete="new-password"
                            />
                        </div>

                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="confirm_password">
                                Confirm Password
                            </label>
                            <x-input
                                class="block w-full"
                                id="password_confirmation"
                                type="password"
                                name="password_confirmation" 
                                required 
                            />
                        </div>
                        
                        <div class="my-12 text-center">
                            <button
                                class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                                type="submit"
                            >
                                Sign Up
                            </button>
                        </div>
                        <hr class="mb-6 border-t" />
                        <div class="text-center">
                            <a
                                class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                href="{{ route('login') }}"
                            >
                                Already registered?
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>