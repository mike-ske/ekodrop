@extends('layouts.app')

@section('content')
    <main class="w-full h-full">
        <div class="lg:flex h-full">
            <div class="w-full mx-auto lg:w-1/2 h-screen flex place-items-center">
                <section
                    class="px-4 shadow-eko-shadow md:px-12 py-4 h-full md:h-auto flex items-center justify-center flex-col break-words bg-white mx-auto">
             
                    <div class="w-full ">
                        <div class="my-5 md:my-12 text-2xl text-eko-blue leading-8 text-center ">
                            <h1 class="font-bold">Please enter the one time password to verify your account</h1>
                            <label class="font-normal mt-3 text-eko-blue text-center text-sm">
                                A one time password has been sent to 09079857466
                            </label>
                        </div>

                        <form action="#" method="post" class="my-4 mx-auto">
                            @csrf
                            
                            <div class="flex items-center gap-2 my-10 md:gap-6 w-full lg:w-10/12 mx-auto justify-center">
                                <div class="mb-2 w-full ">
                                    
                                    <input type="text" maxlength="1" onkeyup="clickEvent(this, '', 'sec', 'third')"
                                        class="text-sm text-center  w-full font-normal p-3  bg-white border-2 border-gray-200 outline-none my-2 "
                                        name="code1" id="sec" aria-describedby="helpId">
                                </div>
                                <div class="mb-2 w-full ">
                                    <input type="text" maxlength="1" onkeyup="clickEvent(this, 'sec', 'third', 'forth')"
                                        class="text-sm text-center  w-full font-normal p-3  bg-white border-2 border-gray-200 outline-none my-2 "
                                        name="code2" id="third" aria-describedby="helpId">
                                </div>
                                <div class="mb-2 w-full ">
                                    <input type="text" maxlength="1" onkeyup="clickEvent(this, 'third', 'forth', 'fifth')"
                                        class="text-sm text-center  w-full font-normal p-3  bg-white border-2 border-gray-200 outline-none my-2 "
                                        name="code3" id="forth" aria-describedby="helpId">
                                </div>
                                <div class="mb-2 w-full ">
                                    <input type="text" maxlength="1" onkeyup="clickEvent(this, 'forth', 'fifth', 'sixth')"
                                        class="text-sm text-center  w-full font-normal p-3  bg-white border-2 border-gray-200 outline-none my-2 "
                                        name="code4" id="fifth" aria-describedby="helpId">
                                </div>
                                <div class="mb-2 w-full ">
                                    <input type="text" maxlength="1" onkeyup="clickEvent(this, 'fifth', 'sixth', 'seventh')"
                                        class="text-sm text-center  w-full font-normal p-3  bg-white border-2 border-gray-200 outline-none my-2 "
                                        name="code5" id="sixth" aria-describedby="helpId">
                                </div>
                                <div class="mb-2 w-full ">
                                    <input type="text" maxlength="1" onkeyup="clickEvent(this, 'sixth', 'seventh', '')"
                                        class="text-sm text-center  w-full font-normal p-3  bg-white border-2 border-gray-200 outline-none my-2 "
                                        name="code6" id="seventh" aria-describedby="helpId">
                                </div>
                            </div>
                            <div id="subbtn"
                                class="mt-2 mx-auto text-center w-1/2 cursor-pointer text-eko-blue text-sm py-2 px-4 bg-yellow-300 hover:bg-transparent border border-yellow-300">
                                <input id="submit" type="submit" value="Validate" style="background: none"
                                    class="bg-none w-full text-sm text-center cursor-pointer font-bold" name="validate">
                            </div>
                            <div class="mb-2 w-full md:flex items-center justify-center mt-4">
                                <p class="text-eko-blue text-sm text-center font-medium">
                                    <a href="#"
                                        class="text-center w-full hover:text-eko-yellow font-medium cursor-pointer focus:text-eko-blue focus:underline text-md ">
                                        {{ __('Resend one time password') }}
                                    </a>
                                </p>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </main>
@endsection
