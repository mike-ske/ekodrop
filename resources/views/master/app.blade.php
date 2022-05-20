@include('layout.header')

<div class="flex h-screen" :class="{ 'overflow-hidden': isSideMenuOpen }">

    {{-- @include('layout.side') --}}

    <div class="flex flex-col flex-1 w-full">

        {{-- ALL CONTENTS ARE INJECTED HERE --}}
        @yield('contents')

        {{-- @include('pages.modal') --}}


        <main class="w-full px-8 sm:px-20 bg-black">
            <div class="  w-full h-auto mx-auto mt-20">
                <div class="flex items-center w-full flex-1 p-8 my-10 text-center">
                    <div class=" w-full flex mx-auto">
                        <img class="mx-auto" src="{{ URL('image/icoimage/20.png') }}" alt="">
                    </div>
                </div>

                <hr class="my-4">
                <div class="w-full my-4 sm:flex justify-between items-center gap-8 mx-auto">
                    <div class="flex-1 text-white font-normal sm:mb-0 mb-8 text-sm text-center sm:text-left">
                        <p>Copyright 2022. Ekodrop</p>
                    </div>
                    <div class="flex-1 w-auto flex justify-center sm:justify-end ">
                        <div class="flex gap-8 items-center">
                            <a href="#">
                                <img src="{{ URL('image/icoimage/22.png') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ URL('image/icoimage/21.png') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ URL('image/icoimage/23.png') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ URL('image/icoimage/25.png') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ URL('image/icoimage/24.png') }}" alt="">
                            </a>
                            <a href="#">
                                <img src="{{ URL('image/icoimage/26.png') }}" alt="">
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>
</div>


@include('layout.footer')
