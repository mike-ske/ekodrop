<main class="w-full flex px-4 justify-center sm:px-20  shadow-sm">
     {{-- MAIN MENU   --}}
    <div class="w-full mx-auto bg-white   py-4">
        <nav class="flex justify-between items-center">
            <a href="/" class="flex-1 w-auto" >
                <img style="width: 120px;" class="w-auto" src="{{ URL('image/logo.png') }}" alt="">
            </a>

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
            <div id="menuicon1" class="w-auto sm:hidden flex">
                <div class="w-full">
                    <div class="w-10 p-2 cursor-pointer">
                        <span class="bg-gray-800  h-1 flex rounded w-full"></span>
                        <span class="bg-gray-800 mt-1 mb-1 h-1 flex rounded w-full"></span>
                        <span class="bg-gray-800  h-1 flex rounded w-full"></span>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    {{-- DROP DOWN DESKTOP MENU   --}}
    <div id="submenu" style="z-index:1;border-radius: 50px;max-width:95%;box-shadow: 0px 0px 10px #ccc;top:10px" class="hidden w-full mx-auto bg-white shadow-sm fixed top-6 py-4 px-6">
        <nav  class="w-full flex justify-between items-center z-index  top-0  mx-auto">
            <a href="/" class="flex-1 w-auto" >
                <img style="width: 120px;" class="w-2/5" src="{{ URL('image/logo.png') }}" alt="">
            </a>

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
                <div id="menuicon2" class="w-full">
                    <div class="w-10 p-2 cursor-pointer">
                        <span class="bg-gray-800  h-1 flex rounded w-full"></span>
                        <span class="bg-gray-800 mt-1 mb-1 h-1 flex rounded w-full"></span>
                        <span class="bg-gray-800  h-1 flex rounded w-full"></span>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    {{-- MOBILE MENU   --}}
    <div id="dropmenu" style="top:0px" class="hidden sm:hidden w-full z-10 bg-white px-4 py-8 fixed top-0 wow slideInLeft" data-wow-duration="2s" data-wow-delay="5s" >
        <nav class="w-full">
            <div class="flex items-center justify-between">
                <a href="/" class="flex-1 w-auto" >
                    <img style="width: 120px;" class="w-auto" src="{{ URL('image/logo.png') }}" alt="">
                </a>
                <div id="close" class="flex-1 w-auto flex-end text-right flex items-end cursor-pointer" style="justify-content: end">
                    <img class="w-auto" style="width: 16%" src="{{ URL('image/icoimage/Close.png') }}" alt="">
                </div>
            </div>
            <div class="w-full mt-4 flex-col gap-10 h-full">
                <div class="py-2 my-6 a1 h-full w-auto leading-3">
                    <a href="/" class=" font-light text-sm text-gray-800 hover:text-yellow-300">Home</a>
                </div>
                <div class="py-2 my-6 a1 h-full w-auto leading-3">
                    <a href="{{ route('about') }}" class="font-light text-sm text-gray-800 hover:text-yellow-300">About Us</a>
                </div>
                <div class="py-2 my-6 a1 h-full w-auto leading-3">
                    <a href="{{ route('service') }}" class="font-light text-sm text-gray-800 hover:text-yellow-300">Services</a>
                </div>
                <div class="py-2 my-6 a1 h-full w-auto leading-3">
                    <a href="{{ route('contact') }}" class=" font-light text-sm text-gray-800 hover:text-yellow-300">Contact</a>
                </div>
            </div>
            
            <div class="flex-col flex-1 w-full justify-end items-center gap-4">
                <div class="py-2 my-6 flex  items-center gap-4 w-auto">
                    <a href="#" class="font-light text-sm text-gray-800 hover:text-yellow-300">Login</a>
                </div>
                <div class="my-6 text-center flex w-1/2 px-6 py-2 border  bg-yellow-300 rounded hover:bg-transparent hover:border-yellow-300 ">
                    <a href="#" class="text-center font-semibold text-sm  h-full w-full text-gray-800">Sign Up</a>
                </div>
            </div>
        </nav>
    </div>
</main>