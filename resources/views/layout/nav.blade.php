<main class="w-full flex px-4 justify-center lg:px-20  shadow-sm">
     {{-- MAIN MENU   --}}
    <div class="w-full mx-auto bg-white   py-4">
        <nav class="flex justify-between items-center">
            <a href="/" class="flex-1 w-auto ">
                <img style="width: 120px;" class="w-auto" src="{{ URL('image/logo.png') }}" alt="">
            </a>

            <div class="hidden md:flex flex-1 w-full  justify-between items-center">
                <div class="a1 h-full w-auto leading-3">
                    <a href="/" class="{{ request()->is('/') ? 'active' : '' }} font-semibold text-sm text-eko-blue hover:text-eko-yellow">Home</a>
                </div>
                <div class="a1 h-full w-auto leading-3">
                    <a href="{{ route('about') }}" class="{{ request()->is('about') ? 'active' : '' }} font-semibold text-sm text-eko-blue hover:text-eko-yellow">About Us</a>
                </div>
                <div class="a1 h-full w-auto leading-3">
                    <a href="/#service" class=" font-semibold text-sm text-eko-blue hover:text-eko-yellow">Services</a>
                </div>
                <div class="a1 h-full w-auto leading-3">
                    <a href="{{ route('contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}  font-semibold text-sm text-eko-blue hover:text-eko-yellow">Contact</a>
                </div>
            </div>

            {{-- <div class=" hidden sm:flex flex-1 w-full justify-end items-center gap-4">
                <div class="a2 flex  items-center gap-4 w-auto">
                    <a href="#" class="font-semibold text-sm text-eko-blue hover:text-eko-yellow">Login</a>
                </div>
                <div class="a2 flex w-auto px-6 py-2 border  bg-eko-yellow rounded hover:bg-transparent hover:border-eko-yellow ">
                    <a href="#" class="font-semibold text-sm  h-full w-full text-gray-800">Sign Up</a>
                </div>
            </div> --}}
            <div id="menuicon1" class="w-auto sm:hidden md:hidden  flex">
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
    <div id="submenu" style="z-index:2;border-radius: 50px;max-width:95%;box-shadow: 0px 0px 10px #ccc;top:10px" class="hidden w-full mx-auto bg-white shadow-sm fixed top-6 py-4 px-6">
        <nav  class="w-full flex justify-between items-center z-index  top-0  mx-auto">
            <a href="/" class="flex-1 w-auto" >
                <img style="width: 120px;" class="w-2/5" src="{{ URL('image/logo.png') }}" alt="">
            </a>

            <div class="hidden md:flex flex-1 w-full justify-between items-center">
                <div class="a1 h-full w-auto leading-3">
                    <a href="/" class="{{ request()->is('/') ? 'active' : '' }}  font-semibold text-sm text-eko-blue hover:text-eko-yellow">Home</a>
                </div>
                <div class="a1 h-full w-auto leading-3">
                    <a href="{{ route('about') }}" class="{{ request()->is('about') ? 'active' : '' }} font-semibold text-sm text-eko-blue hover:text-eko-yellow">About Us</a>
                </div>
                <div class="a1 h-full w-auto leading-3">
                    <a href="/#service" class="font-semibold text-sm text-eko-blue hover:text-eko-yellow">Services</a>
                </div>
                <div class="a1 h-full w-auto leading-3">
                    <a href="{{ route('contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}  font-semibold text-sm text-eko-blue hover:text-eko-yellow">Contact</a>
                </div>
            </div>

            {{-- <div class=" hidden sm:flex flex-1 w-full justify-end items-center gap-4">
                <div class="a2 flex  items-center gap-4 w-auto">
                    <a href="#" class="font-semibold text-sm text-eko-blue hover:text-eko-yellow">Login</a>
                </div>
                <div class="a2 flex w-auto px-6 py-2 border  bg-eko-yellow rounded hover:bg-transparent hover:border-eko-yellow ">
                    <a href="#" class="font-semibold text-sm  h-full w-full text-gray-800">Sign Up</a>
                </div>
            </div> --}}
            <div class="w-auto sm:hidden md:hidden flex">
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
    <div id="dropmenu" style="top:0px;z-index:2" class="hidden sm:hidden w-full z-20 bg-white px-4 pt-4 pb-8 fixed top-0 wow slideInLeft" data-wow-duration="2s" data-wow-delay="5s" >
        <nav class="w-full">
            <div class="flex items-center justify-between">
                <a href="/" class=" w-auto" >
                    <img style="width: 120px;" class="w-auto" src="{{ URL('image/logo.png') }}" alt="">
                </a>
                <div id="close" class="w-auto flex-end text-right flex items-end cursor-pointer" style="justify-content: end">
                    <img class="w-auto" style="width: 100%;height:30px" src="{{ URL('image/icoimage/Close.svg') }}" alt="">
                </div>
            </div>
            <div class="w-full mt-4 flex-col gap-10 h-full">
                <div class="py-2 my-6 a1 h-full w-auto leading-3">
                    <a href="/" class="{{ request()->is('/') ? 'active2' : '' }}  font-semibold text-sm text-eko-blue hover:text-eko-yellow">Home</a>
                </div>
                <div class="py-2 my-6 a1 h-full w-auto leading-3">
                    <a href="{{ route('about') }}" class="{{ request()->is('about') ? 'active2' : '' }} font-semibold text-sm text-eko-blue hover:text-eko-yellow">About Us</a>
                </div>
                <div class="py-2 my-6 a1 h-full w-auto leading-3">
                    <a href="/#service" class="font-semibold text-sm text-eko-blue hover:text-eko-yellow">Services</a>
                </div>
                <div class="py-2 my-6 a1 h-full w-auto leading-3">
                    <a href="{{ route('contact') }}" class="{{ request()->is('contact') ? 'active2' : '' }}  font-semibold text-sm text-eko-blue hover:text-eko-yellow">Contact</a>
                </div>
            </div>
            
            {{-- <div class="flex-col flex-1 w-full justify-end items-center gap-4">
                <div class="my-6 text-center flex w-full px-6 py-2 border  bg-eko-yellow hover:bg-transparent hover:border-eko-yellow ">
                    <a href="#" class="text-center font-semibold text-sm  h-full w-full text-gray-800">Sign Up</a>
                </div>
                <div class="py-2 text-center my-6 justify-center flex w-full items-center gap-4 border border-eko-yellow hover:bg-eko-yellow bg-transparent">
                    <a href="#" class="text-center font-semibold text-sm text-eko-blue md:hover:text-eko-yellow">Login</a>
                </div>
            </div> --}}

        </nav>
    </div>
</main>