

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
                    class="px-4 w-full md:mt-16 md:px-12 py-4 h-full md:h-auto flex items-center justify-center flex-col break-words bg-white mx-auto">
                   
                    <div class="w-full ">
                        <div class="my-5 md:my-12 text-2xl text-eko-blue leading-8 text-left ">
                            <h1 class="font-bold">Reset Password</h1>
                        </div>

                        <form  method="POST" action="{{ route('password.update') }}" class="my-4 mx-auto">
                            @csrf
                            
                            <div class="mb-2 w-full my-10">
                                <label class="font-normal  text-eko-blue text-left text-sm" for="password">New Password</label>
                                <input  type="password"
                                        required  name="password"
                                        autocomplete="new-password"
                                        autofocus id="password"
                                        class="@error('password') border-red-500 @enderror  text-sm w-full font-normal text-left p-3  bg-white border-2  outline-none my-2 " 
                                        aria-describedby="helpId" placeholder="**************">
                                @error('password')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                         
                                </p>
                                @enderror
                            </div>
                            <div class="mb-2 w-full my-10">
                                <label class="font-normal  text-eko-blue text-left text-sm" for="password-confirm">Confirm Password</label>
                                <input  type="password" 
                                        required  name="password_confirmation"
                                        autocomplete="new-password"
                                        autofocus
                                        id="password-confirm"
                                        class="@error('password') border-red-500 @enderror  text-sm w-full font-normal text-left p-3  bg-white border-2  outline-none my-2 " 
                                        aria-describedby="helpId" placeholder="**************">
                            </div>

                            <div id="subbtn"
                                class="mt-2 mx-auto text-center w-full cursor-pointer text-eko-blue text-sm py-2 px-4 bg-yellow-300 hover:bg-transparent border border-yellow-300">
                                <input id="submit" type="submit" value="Reset password" style="background: none"
                                    class="bg-none w-full text-sm text-center cursor-pointer font-bold" name="validate">
                            </div>
                            <div class="mb-2 w-full md:flex items-center justify-center mt-4">
                                <p class="text-eko-blue text-sm text-center font-medium">
                                    Don’t have an account?
                                    <a href="{{ route('vendregister') }}"
                                        class="text-center w-full text-eko-yellow hover:text-eko-blue font-medium cursor-pointer focus:text-eko-blue focus:underline text-md ">
                                        Sign Up
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
