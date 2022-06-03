@extends('layouts.app')

@section('content')
<main class="w-full h-full">
    <div class="lg:flex h-full">
        <div class="w-full lg:w-2/3 h-full ">
            <section class="px-4 md:px-12 py-4 md:py-16 h-full flex items-center justify-center flex-col break-words bg-white mx-auto">
               
                <div class="w-full ">
                    <div class="w-full h-8 flex justify-start">
                        <img src="{{ URL('image/logo.png') }}" alt="">
                    </div>
                    <div class="my-10 md:my-16 text-2xl text-eko-blue leading-8 text-left ">
                        <h1 class="font-bold">Welcome back, <br> Login to your account</h1>
                    </div>
                    <form  action="{{ route('login') }}" method="post" class="my-4">
                        @csrf

                        <div class="mb-2 w-full ">
                          <label class="font-normal  text-eko-blue text-left text-sm" for="email">Email</label>
                          <input type="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                class="text-sm w-full font-normal text-left p-3  bg-white border-2 border-gray-200 outline-none my-2 " name="email" id="email" aria-describedby="helpId" placeholder="Enter email">
                            @error('email')
                            <p class="text-red-500 text-xs">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class="mb-2 w-full ">
                          <label class="font-normal  text-eko-blue text-left text-sm" for="email">Password</label>
                          <input type="password" required autofocus
                                class="text-sm w-full font-normal text-left p-3 @error('password') border-red-500 @enderror bg-white border-2 border-gray-200 outline-none my-2 " name="password" id="password" aria-describedby="helpId" placeholder="Enter password">
                          
                            @error('password')
                            <p class="text-red-500 text-xs">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class="flex items-center">
                            <label class="inline-flex items-center text-sm text-gray-700" for="remember">
                                <input type="checkbox" name="remember" id="remember" class="form-checkbox"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <span class="ml-2">{{ __('Remember Me') }}</span>
                            </label>
                        </div>
                        <div class="my-4 w-full md:flex items-center justify-between">
                            <div class="w-full flex-1 text-center md:text-left"><a href="{{ route('password.request') }}" class="text-sm font-medium cursor-pointer text-blue-400 hover:text-eko-blue">Forgot password?</a></div>
                            <div class="w-full flex-1 text-center md:flex-end md:items-end md:text-right"><a href="/phonelogin" class="text-sm font-medium text-right cursor-pointer text-eko-blue hover:text-eko-yellow" >Sign In with Phone Number</a></div>
                        </div>
                        <div id="subbtn" class="mt-2 wow animate__animated animate__fadeInUp text-center w-full cursor-pointer text-eko-blue text-sm py-2 px-4 bg-yellow-300 hover:bg-transparent border border-yellow-300">
                            <input id="submit" type="submit" value="Login" style="background: none" class="bg-none w-full text-sm text-center cursor-pointer font-bold" name="login">
                        </div>
                        <div class="mb-2 w-full md:flex items-center justify-between mt-4">
                            <p class="text-eko-blue text-sm text-left font-medium">Sign Up as a <a href="{{ route('vendregister') }}" class="text-eko-yellow font-semibold cursor-pointer focus:text-eko-blue text-md ">Vendor</a> or <a href="{{ route('customregister') }}" class="text-eko-yellow  text-md font-semibold cursor-pointer focus:text-eko-blue">Customer</a></p>
                        </div>
                    </form>
                </div>
            </section>
        </div>
        <div class="hidden pl-20 w-full bg-login-image bg-cover bg-no-repeat lg:flex h-full">
            <section style="bottom:70px" class="w-1/4 left-4 absolute flex gap-4 items-start">
                <div class="w-auto flex items-center h-full justify-center">
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
