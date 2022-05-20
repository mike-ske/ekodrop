<main class="w-full flex px-20 shadow-sm">
    <div class="w-full mx-auto bg-white   py-4">
        <nav class="flex justify-between items-center">
            <div class="flex-1 w-auto" >
                <img style="width: 179px;height: 43px;" class="w-auto" src="{{ URL('image/logo.png') }}" alt="">
            </div>

            <div class=" hidden lg:flex flex-1 w-full  justify-between items-center">
                <div class="a1 h-full w-auto leading-3">
                    <a href="/" class=" font-light text-sm text-gray-800 hover:text-yellow-300">Home</a>
                </div>
                <div class="a1 h-full w-auto leading-3">
                    <a href="{{ route('about') }}" class="font-light text-sm text-gray-800 hover:text-yellow-300">About Us</a>
                </div>
                <div class="a1 h-full w-auto leading-3">
                    <a href="{{ route('service') }}" class="font-light text-sm text-gray-800 hover:text-yellow-300">Services</a>
                </div>
                <div class="a1 h-full w-auto leading-3">
                    <a href="{{ route('contact') }}" class=" font-light text-sm text-gray-800 hover:text-yellow-300">Contact</a>
                </div>
            </div>

            <div class=" hidden sm:flex flex-1 w-full justify-end items-center gap-4">
                <div class="a2 flex  items-center gap-4 w-auto">
                    <a href="#" class="font-light text-sm text-gray-800 hover:text-yellow-300">Login</a>
                </div>
                <div class="a2 flex w-auto px-6 py-2 border  bg-yellow-300 rounded hover:bg-transparent hover:border-yellow-300 ">
                    <a href="#" class="font-semibold text-sm  h-full w-full text-gray-800">Sign Up</a>
                </div>
            </div>
            <div class="w-auto sm:hidden flex">
                <div class="w-full">
                    <div class="w-10 p-2">
                        <span class="bg-gray-800  h-1 flex rounded w-full"></span>
                        <span class="bg-gray-800 mt-1 mb-1 h-1 flex rounded w-full"></span>
                        <span class="bg-gray-800  h-1 flex rounded w-full"></span>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</main>