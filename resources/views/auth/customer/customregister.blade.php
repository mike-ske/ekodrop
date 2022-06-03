
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
  
                    <div class="my-10 md:my-10 text-2xl text-eko-blue leading-8 text-left ">
                        <h1 class="font-bold">Customer’s Registration</h1>
                    </div>
                    <div class="form1 w-full h-1/2" style="overflow:auto;height:70%">
                   
                        <form id="customerReg" action="{{ route('customregister') }}" method="post" class="my-4">
                            @csrf
    
                            <div class="mb-2 w-full ">
                              <label class="font-normal  text-eko-blue text-left text-sm" for="first_name">First Name</label>
                              <input type="text"
                                    class="text-sm w-full font-normal text-left p-3  bg-white border-2 border-gray-200 outline-none my-2 " name="first_name" id="first_name" aria-describedby="msg1" placeholder="First Name">
                              <small id="msg1" class="helpId text-xs text-red-500 text-left"></small>
                            </div>
                            <div class="mb-2 w-full ">
                              <label class="font-normal text-eko-blue text-left text-sm" for="last_name">Last Name</label>
                              <input type="text"
                                    class="text-sm w-full font-normal text-left p-3  bg-white border-2 border-gray-200 outline-none my-2 " name="last_name" id="last_name" aria-describedby="msg1" placeholder="Last Name">
                              <small id="msg2" class="helpId text-xs text-red-500 text-left"></small>
                            </div>
                            <div class="mb-2 w-full ">
                              <label class="font-normal  text-eko-blue text-left text-sm" for="email">Email</label>
                              <input type="email"
                                    class="text-sm w-full font-normal text-left p-3  bg-white border-2 border-gray-200 outline-none my-2 " name="email" id="email" aria-describedby="msg1" placeholder="Enter Email">
                              <small id="msg3" class="helpId text-xs text-red-500 text-left"></small>
                            </div>
                            <div class="mb-2 w-full ">
                                <label class="font-normal  text-eko-blue text-left text-sm" for="phone">Phone</label>
                                <input type="number"
                                    class="text-sm w-full font-normal text-left p-3  bg-white border-2 border-gray-200 outline-none my-2 " name="phone" id="phone" aria-describedby="helpId" placeholder="Enter phone number">
                                <small id="msg4" class="helpId text-xs text-red-500 text-left"></small>
                            </div>
                            <div class="mb-2 w-full ">
                              <label class="font-normal  text-eko-blue text-left text-sm" for="address">Address</label>
                              <input type="address"
                                    class="text-sm w-full font-normal text-left p-3  bg-white border-2 border-gray-200 outline-none my-2 " name="address" id="address" aria-describedby="msg1" placeholder="Enter Address">
                              <small id="msg5" class="helpId text-xs text-red-500 text-left"></small>
                            </div>
                            <div class="mb-2 w-full ">
                              <label class="font-normal  text-eko-blue text-left text-sm" for="password">Password</label>
                              <input type="password"
                                    class="text-sm w-full font-normal text-left p-3  bg-white border-2 border-gray-200 outline-none my-2 " name="password" id="password" aria-describedby="msg1" placeholder="************">
                              <small id="msg6" class="helpId text-xs text-red-500 text-left"></small>
                            </div>
                            
                            <div class="my-4 w-full md:flex items-center justify-between">
                                <div class="w-full flex justify-center items-start flex-1 gap-3 text-left">
                                    <div class="w-auto">
                                        <input id="check" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 " type="checkbox" name="aggree" >
                                    </div>
                                    <label for="check" class="text-xs font-normal text-eko-blue">Creating an account means your’re okay with our 
                                        <a href="#" class="text-xs font-normal text-right cursor-pointer  text-eko-yellow hover:text-eko-blue" > Terms of services</a>
                                         and <a href="#" class="text-xs font-normal text-right cursor-pointer  text-eko-yellow hover:text-eko-blue" > Privacy Policy</a> 
                                         <small id="msg7" class="helpId text-xs text-red-500 text-left"></small>
                                    </label>
                                </div>
                            </div>

                            <div id="success"></div>

                            <div id="sendbtn" class="mt-2 text-center w-full cursor-pointer text-eko-blue text-sm py-2 px-4 bg-yellow-300 hover:bg-transparent border border-yellow-300">
                                <input id="submit" type="submit" value="Submit" style="background: none" class="bg-none w-full text-sm text-center cursor-pointer font-bold" name="submitcustomer">
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
