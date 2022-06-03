

@extends('layouts.app')

@section('content')
    <main class="w-full h-full">
        <div class="lg:flex h-full">
            
            <div class="w-full mx-auto lg:w-1/2 h-screen flex place-items-center">
                <a href="/" style="left:45%;top:100px" class="hidden w-auto left-20 h-8 absolute md:flex justify-start">
                    <img class="mx-auto" src="{{ URL('image/logo.png') }}" alt="">
                </a>
                
                <section
                    class=" px-4 w-full md:mt-16 md:px-12 py-4 h-full md:h-auto flex items-center justify-center flex-col break-words bg-white mx-auto">
                   
                    <div class="w-full cardbox">
                        {{-- BACK BUTTON --}}
                        <div class="back hidden form-active my-5 w-full text-2xl text-eko-blue  ">
                            <a href="javascript:void(0)"  class="w-auto h-3 flex justify-start items-start">
                                <img src="{{ URL('image/auth/5.png') }}" alt="">
                            </a>
                        </div>
                        <div class="back hidden my-5 w-full text-2xl text-eko-blue  ">
                            <a href="javascript:void(0)"  class="w-auto h-3 flex justify-start items-start">
                                <img src="{{ URL('image/auth/5.png') }}" alt="">
                            </a>
                        </div>
                        <div class="back hidden my-5 w-full text-2xl text-eko-blue  ">
                            <a href="javascript:void(0)"  class="w-auto h-3 flex justify-start items-start">
                                <img src="{{ URL('image/auth/5.png') }}" alt="">
                            </a>
                        </div>

                        {{-- TEXT CAPTIONS --}}
                        <div class="w-full ">
                            <div class="caption hidden form-active my-5 md:my-12 text-2xl text-eko-blue leading-8 text-left ">
                                <h1 class="font-bold">24 Hours Delivery Services</h1>
                                <label class="font-normal text-eko-blue text-center text-sm leading-5">
                                    One Time Service (Local, Interstate, International Courier)
                                </label>
                            </div>
                            <div class="caption hidden my-5 md:my-12 text-2xl text-eko-blue leading-8 text-left ">
                                <h1 class="font-bold">Pick-up Details</h1>
                                <label class="font-normal text-eko-blue text-center text-sm leading-5">
                                    Please enter the correct details of your information in the fields correctly
                                </label>
                            </div>
                            <div class="caption hidden my-5 md:my-12 text-2xl text-eko-blue leading-8 text-left ">
                                <h1 class="font-bold">Drop-off Details</h1>
                                <label class="font-normal text-eko-blue text-center text-sm leading-5">
                                    Please enter the correct details of your information in the fields correctly
                                </label>
                            </div>
                            <div class="caption hidden my-5 md:my-12 text-2xl text-eko-blue leading-8 text-left ">
                                <h1 class="font-bold">Package Details</h1>
                                <label class="font-normal text-eko-blue text-center text-sm leading-5">
                                    Please enter the correct details of your information in the fields correctly
                                </label>
                            </div>
                            {{-- <div class="caption hidden my-5 md:my-12 text-2xl text-eko-blue leading-8 text-left ">
                                <h1 class="font-bold">Pick-up Details</h1>
                                <label class="font-normal text-eko-blue text-center text-sm leading-5">
                                    Please enter the correct details of your information in the fields correctly
                                </label>
                            </div> --}}
                        </div>

                        {{-- progressbars indecator --}}
                        <div id="capIndex" class=" hidden relative z-10">
                            <div class="flex my-6 z-10">
                                 <label for="tab1" class=" flex-1 gap-3 font-medium ">
                                    <div class="w-full flex items-center">
                                         <div  style="transition: .5s ease-in-out" class="tab bar-active mr-2 tab transition-transform duration-300 rounded-full cursor-pointer w-6 p-2 h-6 flex justify-centent items-center text-center text-white border-none ">
                                             <h1 class="mx-auto">1</h1>
                                         </div>
                                         {{-- <h3 class="text-eko-blue font-meduim text-center text-xs md:text-sm">Customer’s Information</h3> --}}
                                    </div>
                                 </label>
                                 <label for="tab2" class=" flex-1 gap-3 font-medium items-center">
                                     <div class="w-full flex items-center place-content-center">
                                         <div  style="transition: .5s ease-in-out" class="tab bg-gray-200 mr-2 tab transition-transform duration-300 rounded-full cursor-pointer w-6 p-2 h-6 flex justify-centent items-center text-center text-white border-none ">
                                             <h1 class="mx-auto">2</h1>
                                         </div>
                                         {{-- <h3 class="text-eko-blue font-meduim text-center text-xs md:text-sm">Business Information</h3> --}}
                                     </div>
                                 </label>
                                 <label for="tab3" class=" flex-1 gap-3 font-medium items-center">
                                     <div class="w-full flex items-center place-content-end">
                                         <div  style="transition: .5s ease-in-out" class="tab bg-gray-200 mr-2 tab transition-transform duration-300 rounded-full cursor-pointer w-6 p-2 h-6 flex justify-centent items-center text-center text-white border-none ">
                                             <h1 class="mx-auto">3</h1>
                                         </div>
                                         {{-- <h3 class="text-eko-blue font-meduim text-center text-xs md:text-sm">Business Information</h3> --}}
                                     </div>
                                 </label>
                             </div>
                             <div style="transition: .5s ease-in-out;z-index:-1;top:10px" class="barcardline absolute w-1/2 bg-eko-green  h-1 border-none"></div>
                        </div>

                        {{-- FOEMS CARDS --}}
                        <div class="w-full ">
                            <form  method="POST" action="javascript:void(0)" class="cardform hidden form-active my-4 mx-auto">
                                @csrf
                                
                                <div class=" w-full my-2">
                                   <div class="flex gap-3 items-center">
                                        <input  type="radio"  checked
                                        required  name="service"
                                        autocomplete="new-pickup"
                                        autofocus id="pickup"
                                        class="@error('pickup') border-red-500 @enderror  text-sm  
                                            font-normal text-left p-3  bg-white border-2  outline-none my-2 
                                             appearance-none rounded-full h-2 w-2 checked:bg-yellow-300 focus:outline-none transition duration-200 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"  
                                        aria-describedby="helpId">
                                
                                        <label class="font-normal  text-eko-blue text-left text-sm" for="pickup">Pick-up Details</label>
                                   </div>
                                    @error('pickup')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                                <div class=" w-full my-2">
                                   <div class="flex gap-3 items-center">
                                        <input  type="radio"
                                        required  name="service"
                                        autocomplete="new-interstate"
                                        autofocus id="interstate"
                                        class="@error('interstate') border-red-500 @enderror  text-sm font-normal text-left p-3  bg-white border-2  outline-none my-2 form-check-input appearance-none rounded-full h-4 w-4  checked:bg-eko-yellow checked:border-eko-yellow focus:outline-none transition duration-200 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" 
                                        aria-describedby="helpId">
                                
                                        <label class="font-normal  text-eko-blue text-left text-sm" for="interstate">Interstate Courier Services</label>
                                   </div>
                                    @error('interstate')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
                                <div class=" w-full my-2">
                                   <div class="flex gap-3 items-center">
                                        <input  type="radio"
                                        required  name="service"
                                        autocomplete="new-international"
                                        autofocus id="international"
                                        class="@error('international') border-red-500 @enderror  text-sm  
                                            font-normal text-left p-3  bg-white border-2  outline-none my-2 
                                            form-check-input appearance-none rounded-full h-4 w-4  checked:bg-eko-yellow checked:border-eko-yellow focus:outline-none transition duration-200 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" 
                                        aria-describedby="helpId">
                                
                                        <label class="font-normal  text-eko-blue text-left text-sm" for="international">International Courier Services</label>
                                   </div>
                                    @error('international')
                                    <p class="text-red-500 text-xs italic mt-4">
                                        {{ $message }}
                                    </p>
                                    @enderror
                                </div>
    
                                <div id="subbtn"
                                    class="next mt-6 mx-auto text-center w-full cursor-pointer text-eko-blue text-sm py-2 px-4 bg-yellow-300 hover:bg-transparent border border-yellow-300">
                                    <input id="submit" type="submit" value="Continue" style="background: none"
                                        class="next bg-none w-full text-sm text-center cursor-pointer font-bold" name="sevice">
                                </div>
            
                            </form>

                            <form action="javascript:void(0)" method="post" class="cardform hidden my-4 wow animate__animated animate__fadeInUp">
                                @csrf
        
                                <div class="md:flex w-full items-center md:gap-4">
                                    <div class="mb-2 w-full ">
                                        <label class="font-normal  text-eko-blue text-left text-sm" for="first_name">First Name</label>
                                        <input type="text"
                                            class="text-sm w-full font-normal text-left p-3  bg-white border-2 border-gray-200 outline-none my-2 " name="first_name" id="first_name" aria-describedby="helpId" placeholder="First Name">
                                        <small id="helpId" class="text-xs text-red-500 text-left">Help text</small>
                                    </div>
                                    <div class="mb-2 w-full ">
                                        <label class="font-normal  text-eko-blue text-left text-sm" for="last_name">Last Name</label>
                                        <input type="text"
                                            class="text-sm w-full font-normal text-left p-3  bg-white border-2 border-gray-200 outline-none my-2 " name="last_name" id="last_name" aria-describedby="helpId" placeholder="Last Name">
                                        <small id="helpId" class="text-xs text-red-500 text-left">Help text</small>
                                    </div>
                                </div>
                                <div class="mb-2 w-full ">
                                  <label class="font-normal  text-eko-blue text-left text-sm" for="address">Address</label>
                                  <input type="text"
                                        class="text-sm w-full font-normal text-left p-3  bg-white border-2 border-gray-200 outline-none my-2 " name="address" id="address" aria-describedby="helpId" 
                                        placeholder="Landmarks, nearest b/stop, LCDA’S & LG’S">
                                  <small id="helpId" class="text-xs text-red-500 text-left">Help text</small>
                                </div>
                                <div class="mb-2 w-full ">
                                    <label class="font-normal text-eko-blue text-left text-sm" for="phone">Phone Number</label>
                                    <input type="number"
                                          class="text-sm w-full font-normal text-left p-3  bg-white border-2 border-gray-200 outline-none my-2 " name="phone" id="phone" 
                                          aria-describedby="helpId" placeholder="Phone number">
                                    <small id="helpId" class="text-xs text-red-500 text-left">Help text</small>
                                  </div>
                                <div class="my-4 w-full md:flex items-center justify-between">
                                    <div class="w-full flex-1 text-center md:text-left"><a href="#" class="text-sm font-medium cursor-pointer text-blue-400 hover:text-eko-blue">Forgot password?</a></div>
                                    <div class="w-full flex-1 text-center md:flex-end md:items-end md:text-right"><a href="{{ route('phonelogin') }}" class="text-sm font-medium text-right cursor-pointer text-eko-blue hover:text-eko-yellow" >Sign In with Phone Number</a></div>
                                </div>
                                <div id="subbtn" class="next mt-2 text-center w-full cursor-pointer text-eko-blue text-sm py-2 px-4 bg-yellow-300 hover:bg-transparent border border-yellow-300">
                                    {{-- <input id="submit" type="submit" value="Login" style="background: none" class="bg-none w-full text-sm text-center cursor-pointer font-bold" name="login"> --}}
                                    <button type="button" style="background: none;outline:none" class="next bg-none outline-none cursor-pointer w-full text-sm text-center border-none font-bold">Continue</button>
                                </div>
                            </form>

                            <form action="javascript:void(0)" method="post" class="cardform hidden my-4 wow animate__animated animate__fadeInUp">
                                @csrf
        
                                <div class="md:flex w-full items-center md:gap-4">
                                    <div class="mb-2 w-full ">
                                        <label class="font-normal  text-eko-blue text-left text-sm" for="first_name">First Name</label>
                                        <input type="text"
                                            class="text-sm w-full font-normal text-left p-3  bg-white border-2 border-gray-200 outline-none my-2 " name="first_name" id="first_name" aria-describedby="helpId" placeholder="First Name">
                                        <small id="helpId" class="text-xs text-red-500 text-left">Help text</small>
                                    </div>
                                    <div class="mb-2 w-full ">
                                        <label class="font-normal  text-eko-blue text-left text-sm" for="last_name">Last Name</label>
                                        <input type="text"
                                            class="text-sm w-full font-normal text-left p-3  bg-white border-2 border-gray-200 outline-none my-2 " name="last_name" id="last_name" aria-describedby="helpId" placeholder="Last Name">
                                        <small id="helpId" class="text-xs text-red-500 text-left">Help text</small>
                                    </div>
                                </div>
                                <div class="mb-2 w-full ">
                                  <label class="font-normal  text-eko-blue text-left text-sm" for="address">Address</label>
                                  <input type="text"
                                        class="text-sm w-full font-normal text-left p-3  bg-white border-2 border-gray-200 outline-none my-2 " name="address" id="address" aria-describedby="helpId" 
                                        placeholder="Landmarks, nearest b/stop, LCDA’S & LG’S">
                                  <small id="helpId" class="text-xs text-red-500 text-left">Help text</small>
                                </div>
                                <div class="mb-2 w-full ">
                                    <label class="font-normal text-eko-blue text-left text-sm" for="phone">Phone Number</label>
                                    <input type="number"
                                          class="text-sm w-full font-normal text-left p-3  bg-white border-2 border-gray-200 outline-none my-2 " name="phone" id="phone" 
                                          aria-describedby="helpId" placeholder="Phone number">
                                    <small id="helpId" class="text-xs text-red-500 text-left">Help text</small>
                                  </div>
                                <div class="my-4 w-full md:flex items-center justify-between">
                                    <div class="w-full flex-1 text-center md:text-left"><a href="#" class="text-sm font-medium cursor-pointer text-blue-400 hover:text-eko-blue">Forgot password?</a></div>
                                    <div class="w-full flex-1 text-center md:flex-end md:items-end md:text-right"><a href="{{ route('phonelogin') }}" class="text-sm font-medium text-right cursor-pointer text-eko-blue hover:text-eko-yellow" >Sign In with Phone Number</a></div>
                                </div>
                                <div id="subbtn" class="next mt-2 text-center w-full cursor-pointer text-eko-blue text-sm py-2 px-4 bg-yellow-300 hover:bg-transparent border border-yellow-300">
                                    {{-- <input id="submit" type="submit" value="Login" style="background: none" class="bg-none w-full text-sm text-center cursor-pointer font-bold" name="login"> --}}
                                    <button type="button" style="background: none;outline:none" class="next bg-none outline-none cursor-pointer w-full text-sm text-center border-none font-bold">Continue</button>
                                </div>
                            </form>

                            <form action="javascript:void(0)" method="post" class="cardform hidden my-4 wow animate__animated animate__fadeInUp">
                                @csrf
        
                                <div class="md:flex w-full items-center md:gap-4">
                                    <div class="mb-2 w-full ">
                                        <label class="font-normal  text-eko-blue text-left text-sm" for="first_name">First Name</label>
                                        <input type="text"
                                            class="text-sm w-full font-normal text-left p-3  bg-white border-2 border-gray-200 outline-none my-2 " name="first_name" id="first_name" aria-describedby="helpId" placeholder="First Name">
                                        <small id="helpId" class="text-xs text-red-500 text-left">Help text</small>
                                    </div>
                                    <div class="mb-2 w-full ">
                                        <label class="font-normal  text-eko-blue text-left text-sm" for="last_name">Last Name</label>
                                        <input type="text"
                                            class="text-sm w-full font-normal text-left p-3  bg-white border-2 border-gray-200 outline-none my-2 " name="last_name" id="last_name" aria-describedby="helpId" placeholder="Last Name">
                                        <small id="helpId" class="text-xs text-red-500 text-left">Help text</small>
                                    </div>
                                </div>
                                <div class="mb-2 w-full ">
                                  <label class="font-normal  text-eko-blue text-left text-sm" for="address">Address</label>
                                  <input type="text"
                                        class="text-sm w-full font-normal text-left p-3  bg-white border-2 border-gray-200 outline-none my-2 " name="address" id="address" aria-describedby="helpId" 
                                        placeholder="Landmarks, nearest b/stop, LCDA’S & LG’S">
                                  <small id="helpId" class="text-xs text-red-500 text-left">Help text</small>
                                </div>
                                <div class="mb-2 w-full ">
                                    <label class="font-normal text-eko-blue text-left text-sm" for="phone">Phone Number</label>
                                    <input type="number"
                                          class="text-sm w-full font-normal text-left p-3  bg-white border-2 border-gray-200 outline-none my-2 " name="phone" id="phone" 
                                          aria-describedby="helpId" placeholder="Phone number">
                                    <small id="helpId" class="text-xs text-red-500 text-left">Help text</small>
                                  </div>
                                <div class="my-4 w-full md:flex items-center justify-between">
                                    <div class="w-full flex-1 text-center md:text-left"><a href="#" class="text-sm font-medium cursor-pointer text-blue-400 hover:text-eko-blue">Forgot password?</a></div>
                                    <div class="w-full flex-1 text-center md:flex-end md:items-end md:text-right"><a href="{{ route('phonelogin') }}" class="text-sm font-medium text-right cursor-pointer text-eko-blue hover:text-eko-yellow" >Sign In with Phone Number</a></div>
                                </div>
                                <div id="subbtn" class="next mt-2 text-center w-full cursor-pointer text-eko-blue text-sm py-2 px-4 bg-yellow-300 hover:bg-transparent border border-yellow-300">
                                    {{-- <input id="submit" type="submit" value="Login" style="background: none" class="bg-none w-full text-sm text-center cursor-pointer font-bold" name="login"> --}}
                                    <button type="button" style="background: none;outline:none" class="next bg-none outline-none cursor-pointer w-full text-sm text-center border-none font-bold">Continue</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </main>
@endsection
