@extends('master.app')

@section('contents')
    <main class="w-full flex px-4 sm:px-20">
        <div class="sm:flex items-start justify-between gap-20 w-full h-auto mx-auto">
            <div class="w-full flex-1 mt-20 mb-20 py-6 sm:py-20 border border-gray-300 px-6 sm:px-20">
                <div class="w-full wow animate__animated animate__fadeInUp">
                    <h1 class="text-3xl text-eko-blue font-semibold">
                        Get in touch
                    </h1>
                </div>
               <div class="w-full my-8 wow animate__animated animate__fadeInUp">
                    <h3 class="text-sm md:text-lg text-eko-blue font-semibold">
                        Fill out the form and we will get back to you promptly.
                    </h3>
               </div>
                
               <div class="w-full my-8">
                    <form id="contact" action="{{ route('contact') }}" method="post">
                        @csrf

                        <div class="form-group mb-4 wow animate__animated animate__fadeInUp">
                          <label for="first_name" class="text-eko-blue mb-4 text-sm font-semibold">Your Name</label>
                          <input  type="text" class=" @error('first_name') border-red-500 @enderror w-full border-none px-4 py-2 bg-gray-100 outline-none border input-style form-control" name="first_name" id="first_name" placeholder="Your Name">
                            {{-- @error('first_name') --}}
                                <div id="msg1" class="w-full text-xs text-red-500 text-left mt-2">
                                    {{-- {{ $message }} --}}
                                </div>
                            {{-- @enderror --}}
                        </div>
                        <div class="form-group mb-4 wow animate__animated animate__fadeInUp">
                          <label for="email" class="text-eko-blue mb-4 text-sm font-semibold">Your Email</label>
                          <input type="email" class=" @error('email') border-red-500 @enderror w-full border-none px-4 py-2 bg-gray-100 outline-none border input-style form-control" name="email" id="email" placeholder="Your Email">
                            {{-- @error('email') --}}
                                <div id="msg2" class="w-full text-xs text-red-500 text-left mt-2">
                                    {{-- {{ $message }} --}}
                                </div>
                            {{-- @enderror --}}
                        </div>
                        <div class="form-group mb-4 wow animate__animated animate__fadeInUp">
                          <label for="message" class="text-eko-blue mb-4 text-sm font-semibold"> Your Message</label>
                          <textarea  placeholder="Your Message" name="message" id="message" style="resize:none;height:150px" class="size-none @error('message') border-red-500 @enderror w-full border-none px-4 py-2 bg-gray-100 outline-none border input-style form-control" rows="3"></textarea>
                            {{-- @error('message') --}}
                                <div id="msg3" class="w-full text-xs text-red-500 text-left mt-2">
                                    {{-- {{ $message }} --}}
                                </div>
                            {{-- @enderror --}}
                        </div>
                   
                        <div id="subbtn" class=" wow animate__animated animate__fadeInUp text-center w-full cursor-pointer text-gray-800 text-sm py-2 px-4 bg-yellow-300 hover:bg-transparent border border-yellow-300">
                            <input id="submit" type="submit" value="Send Message" style="background: none" class="bg-none w-full text-lg text-center cursor-pointer font-bold" name="submit">
                        </div>
                        <div id="alert" class="hidden justify-center items-center font-normal w-full bg-green-100 border border-green-400 rounded-full text-green-900 text-left py-2 px-4 mt-3"></div>
                        <div id="danger" class="hidden font-bold w-full bg-red-100 border border-red-400 rounded-full text-red-900 text-left py-2 px-4 mt-3"></div>
                    </form>
                </div>
            </div>

            <div class="w-full flex-1 mt-20">
                <div class=" flex-1 mt-4 py-4 w-auto wow animate__animated animate__fadeInRight">
                    <img src="{{ URL('image/serviceimage/2.png') }}" alt="">
                </div>
                <div class="flex-1 mt-4 py-4 w-auto">
                    <div class="mx-auto w-full">
                        <div class="w-full flex gap-4 items-center wow animate__animated animate__fadeInRight">
                            <div class="w-auto">
                                <img src="{{ URL('image/serviceimage/4.png') }}" alt="">
                            </div>
                            <h1 class="text-lg font-semibold text-eko-blue" >
                                Address
                            </h1>
                        </div>
                       <div class="w-10/12 my-1 leading-9 wow animate__animated animate__fadeInRight">
                            <p class="text-sm  font-semibold text-eko-blue " >
                                38, Diya Street, Ifako Gbagada, Lagos
                            </p>
                       </div>
                    </div>
                    <div class="mx-auto w-full mt-4">
                        <div class="w-full flex gap-4 items-center wow animate__animated animate__fadeInRight">
                            <div class="w-auto">
                                <img src="{{ URL('image/serviceimage/3.png') }}" alt="">
                            </div>
                            <h1 class="text-lg font-semibold text-eko-blue" >
                                Phone Number
                            </h1>
                        </div>
                       <div class="w-10/12 my-1 leading-9 wow animate__animated animate__fadeInRight">
                            <p class="text-sm  font-semibold text-eko-blue " >
                                +234 913 327 4488
                            </p>
                       </div>
                    </div>
                    <div class="mx-auto w-full mt-4">
                        <div class="w-full flex gap-4 items-center wow animate__animated animate__fadeInRight">
                            <div class="w-auto">
                                <img src="{{ URL('image/serviceimage/5.png') }}" alt="">
                            </div>
                            <h1 class="text-lg font-semibold text-eko-blue" >
                                Opening Hours
                            </h1>
                        </div>
                       <div class="w-10/12 my-1 leading-9 wow animate__animated animate__fadeInRight">
                            <p class="text-sm  font-semibold text-eko-blue " >
                                Mon - Sat: 8AM - 5PM
                            </p>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection