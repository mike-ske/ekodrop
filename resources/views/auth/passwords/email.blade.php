
@extends('layouts.app')

@section('content')
    <main class="w-full h-full">
        <div class="lg:flex h-full">
            
            <div class="w-full mx-auto lg:w-1/2 h-screen flex place-items-center">
                <a href="/" style="left:45%;top:100px" class="hidden w-auto left-20 h-8 absolute md:flex justify-start">
                    <img class="mx-auto" src="{{ URL('image/logo.png') }}" alt="">
                </a>
                <a href="/" style="left:25%;top:100px" class="w-auto left-20 h-8 absolute flex md:hidden justify-start">
                    <img class="mx-auto" src="{{ URL('image/logo.png') }}" alt="">
                </a>
                <section 
                    class="shadow-eko-shadow h-full md:h-auto px-4 md:px-12 py-4 flex items-center justify-center flex-col break-words bg-white mx-auto">
                    
                    @if (session('status'))
                        <div  class="text-sm text-green-700 bg-green-100 px-5 py-6 sm:rounded sm:border sm:border-green-400 sm:mb-6"
                            role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="w-full">
                        <div class="my-5 md:my-8 text-2xl text-eko-blue text-left ">
                            <h1 class="font-bold mb-4">Reset Password</h1>
                            <label class="font-normal text-eko-blue text-center text-sm leading-5">
                                Enter the email associated with your account and we’ll send an email with instruction to reset your password
                            </label>
                        </div>

                        <form method="POST" action="{{ route('password.email') }}" class="my-4 mx-auto">
                            @csrf
                            
                            <div class="mb-2 w-full my-6">
                                <label class="font-normal  text-eko-blue text-left text-sm" for="email">Email</label>
                                <input type="email" 
                                        value="{{ $email ?? old('email') }}" 
                                        required  id="email"
                                        autocomplete="email" 
                                        autofocus
                                        class="@error('email') border-red-500 @enderror text-sm w-full font-normal text-left p-3  bg-white border-2  outline-none my-2 " 
                                        name="email" id="email" aria-describedby="helpId" placeholder="Enter email">
                                @error('email')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            
                            <div id="subbtn"
                                class="mt-2 mx-auto text-center w-full cursor-pointer text-eko-blue text-sm py-2 px-4 bg-yellow-300 hover:bg-transparent border border-yellow-300">
                                <input id="submit" type="submit" value="Send Password Reset Link" style="background: none"
                                    class="bg-none w-full text-sm text-center cursor-pointer font-bold" name="reset">
                            </div>
                            <p class="mt-4 text-xs text-blue-500 hover:text-blue-700 whitespace-no-wrap no-underline hover:underline sm:text-sm sm:order-0">
                                <a class="text-blue-500 hover:text-blue-700 no-underline" href="{{ route('login') }}">
                                    {{ __('Back to login') }}
                                </a>
                            </p>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </main>
@endsection
