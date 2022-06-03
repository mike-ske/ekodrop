
@extends('layouts.app')

@section('content')
<main class="w-full h-full">
    <div class="lg:flex h-full">
        <div class="w-full lg:w-2/3 h-full ">
            <section class="px-4 md:px-12 py-4 md:py-16 h-full flex items-center justify-center flex-col break-words bg-white mx-auto">
                {{-- <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST"
                    action="{{ route('register') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Name') }}:
                        </label>

                        <input id="name" type="text" class="form-input w-full @error('name')  border-red-500 @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('E-Mail Address') }}:
                        </label>

                        <input id="email" type="email"
                            class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Password') }}:
                        </label>

                        <input id="password" type="password"
                            class="form-input w-full @error('password') border-red-500 @enderror" name="password"
                            required autocomplete="new-password">

                        @error('password')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Confirm Password') }}:
                        </label>

                        <input id="password-confirm" type="password" class="form-input w-full"
                            name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                            {{ __('Register') }}
                        </button>

                        <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                            {{ __('Already have an account?') }}
                            <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline" href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>
                        </p>
                    </div>
                </form> --}}
                <div class="w-full scrolling-auto" style="overflow:auto">
                    <div class="w-full h-8 flex justify-start">
                        <img src="{{ URL('image/logo.png') }}" alt="">
                    </div>
                    <div class="tabsect relative">
                       <div class="flex my-6">
                            <label for="tab1" class=" flex-1 gap-3 font-medium ">
                               <div class="w-full flex items-center">
                                    <div  style="transition: .5s ease-in-out" class="bar-active mr-2 tab transition-transform duration-300 rounded-full cursor-pointer w-6 p-2 h-6 flex justify-centent items-center text-center text-white border-none ">
                                        <h1 class="mx-auto">1</h1>
                                    </div>
                                    <h3 class="text-eko-blue font-meduim text-center text-xs md:text-sm">Customer’s Information</h3>
                               </div>
                            </label>
                            <label for="tab2" class=" flex-1 gap-3 font-medium items-center">
                                <div class="w-full flex items-center">
                                    <div  style="transition: .5s ease-in-out" class="bg-gray-200 mr-2 tab transition-transform duration-300 rounded-full cursor-pointer w-6 p-2 h-6 flex justify-centent items-center text-center text-white border-none ">
                                        <h1 class="mx-auto">2</h1>
                                    </div>
                                    <h3 class="text-eko-blue font-meduim text-center text-xs md:text-sm">Business Information</h3>
                                </div>
                            </label>
                        </div>
                        <div style="transition: .5s ease-in-out" class="barline absolute w-1/2 bg-eko-green  h-1 border-none"></div>
                    </div>
                    <div class="my-10 md:my-10 text-2xl text-eko-blue leading-8 text-left ">
                        <h1 class="font-bold">Vendor’s Registration</h1>
                    </div>
                    <div class="form1 w-full h-1/2" style="overflow:auto;height:70%">
                        
                        <form id="vendor1" action="{{ route('register') }}" method="post" class="form my-4 form-active wow animate__animated animate__fadeInUp">
                            @csrf
    
                            <div class="mb-2 w-full ">
                              <label class="font-normal  text-eko-blue text-left text-sm" for="email">Email</label>
                              <input type="email"
                                    class="text-sm w-full font-normal text-left p-3  bg-white border-2 border-gray-200 outline-none my-2 " name="email" id="email" aria-describedby="helpId" placeholder="Enter email">
                               <small id="msg1" class="helpId text-xs text-red-500 text-left"></small>
                            </div>
                            <div class="mb-2 w-full ">
                              <label class="font-normal  text-eko-blue text-left text-sm" for="phone">Phone number</label>
                              <input type="number"
                                    class="text-sm w-full font-normal text-left p-3  bg-white border-2 border-gray-200 outline-none my-2 " name="phone" id="phone" aria-describedby="helpId" placeholder="Enter phone">
                              <small id="msg2" class="helpId text-xs text-red-500 text-left"></small>
                            </div>
                            <div class="mb-2 w-full ">
                              <label class="font-normal  text-eko-blue text-left text-sm" for="email">Password</label>
                              <input type="password"
                                    class="text-sm w-full font-normal text-left p-3  bg-white border-2 border-gray-200 outline-none my-2 " name="password" id="password" aria-describedby="helpId" placeholder="Enter password">
                              <small id="msg3" class="helpId text-xs text-red-500 text-left"></small>
                            </div>
                            <div class="mb-2 w-full ">
                                <label class="font-normal  text-eko-blue text-left text-sm" for="email">Address</label>
                                <input type="text"
                                      class="text-sm w-full font-normal text-left p-3  bg-white border-2 border-gray-200 outline-none my-2 " name="address" id="address" aria-describedby="helpId" placeholder="Enter address">
                                 <small id="msg4" class="helpId text-xs text-red-500 text-left"></small>
                              </div>
                            <div class="my-4 w-full md:flex items-center justify-between">
                                <div class="w-full flex-1 text-center md:text-left"><a href="#" class="text-sm font-medium cursor-pointer text-blue-400 hover:text-eko-blue">Forgot password?</a></div>
                                <div class="w-full flex-1 text-center md:flex-end md:items-end md:text-right"><a href="/phonelogin" class="text-sm font-medium text-right cursor-pointer text-eko-blue hover:text-eko-yellow" >Sign In with Phone Number</a></div>
                            </div>
                            <div id="subbtn" class="mt-2 text-center w-full cursor-pointer text-eko-blue text-sm py-2 px-4 bg-yellow-300 hover:bg-transparent border border-yellow-300">
                                {{-- <input id="submit" type="submit" value="Continue" style="background: none" class="bg-none w-full text-sm text-center cursor-pointer font-bold" name="register1"> --}}
                                <div style="background: none;outline:none" class="next bg-none outline-none cursor-pointer w-full text-sm text-center border-none font-bold">Continue</div>
                            </div>
                            <div class="mb-2 w-full md:flex items-center justify-between mt-4">
                                <p class="text-eko-blue text-sm text-left font-medium">Already have an account? <a href="#" class="text-eko-yellow font-semibold cursor-pointer focus:text-eko-blue text-md ">Sign in</a> </p>
                            </div>
                        </form>
                        <form id="vendor2" action="{{ route('register') }}" method="post" class="form my-4 wow animate__animated animate__fadeInUp">
                            @csrf
    
                            <div class="mb-2 w-full ">
                              <label class="font-normal  text-eko-blue text-left text-sm" for="bizname">Business Name</label>
                              <input type="text"
                                    class="text-sm w-full font-normal text-left p-3  bg-white border-2 border-gray-200 outline-none my-2 " name="bizname" id="bizname" aria-describedby="helpId" placeholder="Business Name">
                              <small id="helpId" class="text-xs text-red-500 text-left">Help text</small>
                            </div>
                            <div class="mb-2 w-full ">
                              <label class="font-normal  text-eko-blue text-left text-sm" for="phone">Business Type</label>
                              <input type="text"
                                    class="text-sm w-full font-normal text-left p-3  bg-white border-2 border-gray-200 outline-none my-2 " name="biztype" id="biztype" aria-describedby="helpId" placeholder="Business Type">
                              <small id="helpId" class="text-xs text-red-500 text-left">Help text</small>
                            </div>
                            <div class="mb-2 w-full ">
                              <label class="font-normal  text-eko-blue text-left text-sm" for="bizdescrp">Business Description</label>
                              <input type="text"
                                    class="text-sm w-full font-normal text-left p-3  bg-white border-2 border-gray-200 outline-none my-2 " name="bizdescrp" id="bizdescrp" aria-describedby="helpId" placeholder="Business Description">
                              <small id="helpId" class="text-xs text-red-500 text-left">Help text</small>
                            </div>
                            <div class="mb-2 w-full flex flex-col">
                                <span class="font-normal  text-eko-blue text-left text-sm" for="photo">Profile Photo</span>
                                <label class="text-sm w-full font-normal text-left p-3  bg-white border-2 border-gray-200 outline-none my-2 " for="photo">
                                    <div class="w-full flex gap-2 items-center">
                                        <img src="{{ URL('image/auth/4.png') }}" alt="">
                                        <p id="profile" class="text-gray-500 font-medium text-sm">Upload profile</p>
                                    </div>  
                                </label>
                                <input class="hidden" type="file" name="photo" id="photo" aria-describedby="helpId" >
                                <small id="helpId" class="text-xs text-red-500 text-left">Help text</small>
                              </div>
                            <div class="my-4 w-full md:flex items-center justify-between">
                                <div class="w-full flex justify-center items-start flex-1 gap-3 text-left">
                                    <div class="w-auto">
                                        <input id="check" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 " type="checkbox" name="" id="">
                                    </div>
                                    <label for="check" class="text-xs font-normal text-eko-blue">Creating an account means your’re okay with our 
                                        <a href="#" class="text-xs font-normal text-right cursor-pointer  text-eko-yellow hover:text-eko-blue" > Terms of services</a>
                                         and <a href="#" class="text-xs font-normal text-right cursor-pointer  text-eko-yellow hover:text-eko-blue" > Privacy Policy</a> 
                                    </label>
                                    
                                </div>
                            </div>
                            <div id="sendbtn" class=" mt-2 text-center w-full cursor-pointer text-eko-blue text-sm py-2 px-4 bg-yellow-300 hover:bg-transparent border border-yellow-300">
                                <input id="submit" type="submit" value="Submit" style="background: none" class="next bg-nonew-full text-sm text-center cursor-pointer font-bold" name="send">
                                {{-- <button style="background: none" class="bg-none w-full text-sm text-center cursor-pointer font-bold">Continue</button> --}}
                            </div>
                            <div class="mb-2 w-full md:flex items-center justify-between mt-4">
                                <p class="text-eko-blue text-sm text-left font-medium">Already have an account? <a href="{{ route('login') }}" class="text-eko-yellow font-semibold cursor-pointer focus:text-eko-blue text-md ">Sign in</a> </p>
                            </div>
                        </form>

                    </div>
                </div>
            </section>
        </div>
        <div class="hidden pl-20 w-full bg-register-image bg-cover bg-no-repeat lg:flex h-full">
            <section style="bottom:70px" class="w-1/4 left-4 absolute flex gap-4 items-start">
                <div class="w-auto flex items-center h-full justify-center">
                    {{-- <img src="{{ URL('image/auth/2.png') }}" class="mx-auto max-h-full h-full" /> --}}
                    <div class="w-2 absolute bottom-0 bg-eko-yellow h-full rounded-full"></div>
                </div>
                <div class=" text-white ">
                    <h1 class="font-bold mb-2 sm:text-3xl">Quick delivery just got easier with Ekodrop</h1>
                    <p class="leading-6 font-normal text-sm text-gray-100">
                        Looking for the best delivery company? Look no further than Ekodrop Logistics got you covered.
                    </p>
                </div>
            </section>
        </div>

    </div>
</main>
@endsection
