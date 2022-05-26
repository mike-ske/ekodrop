@extends('master.app')

@section('contents')
    <main class="w-full flex px-4 sm:px-20 bg-hero-image ">
        <div style="margin-top: 40px;" class="md:mt-28 md:mb-6 mt-0  md:flex items-center justify-between gap-8 w-full h-auto mx-auto">
            <div class="w-full flex-1 md:mt-8 py-4 wow animate__animated animate__fadeInLeft">
                <div class="w-full">
                    <h1 class="text-4xl md:text-5xl text-eko-blue font-black leading-tight">
                        Swift, reliable,<br>
                        seamless delivery service
                        {{-- Your trusted delivery 
                        partner providing top 
                        quality services --}}
                    </h1>
                </div>
               <div class="w-full my-8">
                    <h3 class="text-sm text-eko-blue font-semibold">
                        Your sure plug for speedy deliveries, we deliver round the clock.
                        No hassle! No stress!
                    </h3>
               </div>
                {{-- <div class="text-center md:w-64 cursor-pointer text-eko-blue text-sm py-2 px-4 bg-eko-yellow hover:bg-transparent border border-eko-yellow">
                    <a href="#" class="text-lg text-center cursor-pointer text-eko-blue font-semibold">One Time Service</a>
                </div> --}}
            </div>
            <div class=" flex-1 mt-4 py-4 w-auto wow animate__animated animate__fadeInRight">
                <img style="width: 510px" class="w-full md:w-auto" src="{{ URL('image/1.png') }}" alt="">
            </div>
        </div>
    </main>

    <main class="w-full px-4 sm:px-20 ">
        <div style="margin-top: 10px;margin-bottom: 20px" class="mt-28  sm:flex items-center justify-between gap-8 w-full h-auto mx-auto">
            <div class="w-full flex-1 py-2 text-center wow animate__animated animate__fadeInUp">
                <h1 class="font-bold text-eko-blue text-2xl md:text-4xl mb-2">Topnotch logistics services</h1>
                <h3 class="w-full text-eko-blue font-normal text-sm wow animate__animated animate__fadeInUp">Meeting all your logistics needs in no time!</h3>
            </div>
        </div>

        <div class="w-full mt-4 sm:flex gap-10 ">
            <div  style="filter: drop-shadow(0px 4px 28px rgba(0, 0, 0, 0.04)); transition:.5s" data-wow-delay="1s" class="wow animate__animated animate__fadeInUp mb-8 hover:bg-eko-yellow hover:text-black transition-transform duration-200 hover:transition-transform hover:duration- cursor-pointer flex-1 p-10 bg-white text-center md:text-left hover:shadow-2xl-lg">
                <div class="w-auto flex">
                    <img class="mx-auto md:mx-0" style="height: 100px" src="{{ URL('image/icoimage/2.png') }}" alt="">
                </div>
                <div class="w-full font-black text-xl text-eko-blue my-8">
                    <h3>24 hour pick up & delivery</h3>
                </div>
                <div class="w-full text-sm text-eko-blue mb-10">
                    <h3>Wherever you are in Lagos, We've got you covered.</h3>
                </div>
            </div>
            <div style="filter: drop-shadow(0px 4px 28px rgba(0, 0, 0, 0.04)); transition:.5s" data-wow-delay="1.5s" class="wow animate__animated animate__fadeInUp mb-8 hover:bg-eko-yellow hover:text-black transition-transform duration-200 hover:transition-transform hover:duration- cursor-pointer flex-1 p-10 bg-white text-center md:text-left  hover:shadow-2xl-lg">
                <div class="w-auto flex">
                    <img class="mx-auto md:mx-0" style="height: 100px" src="{{ URL('image/icoimage/1.png') }}" alt="">
                </div>
                <div class="w-full font-black text-xl text-eko-blue my-8">
                    <h3>International Couriers</h3>
                </div>
                <div class="w-full text-sm text-eko-blue mb-10">
                    <h3>We currently deliver to The United States, Canada, and The United Kingdom and back to Nigeria.</h3>
                </div>
            </div>
            <div style="filter: drop-shadow(0px 4px 28px rgba(0, 0, 0, 0.04)); transition:.5s" data-wow-delay="2s" class="wow animate__animated animate__fadeInUp mb-8 hover:bg-eko-yellow hover:text-black transition-transform duration-200 hover:transition-transform hover:duration- cursor-pointer flex-1 p-10 bg-white text-center md:text-left  hover:shadow-2xl-lg">
                <div class="w-auto flex">
                    <img class="mx-auto md:mx-0" style="height: 100px" src="{{ URL('image/icoimage/3.png') }}" alt="">
                </div>
                <div class="w-full font-black text-xl text-eko-blue my-8">
                    <h3>Errand Services</h3>
                </div>
                <div class="w-full text-sm text-eko-blue mb-10">
                    <h3>We offer quick and safe escort for all your collections and delivery.</h3>
                </div>
            </div>
          
        </div>

        <div class="w-full sm:flex gap-10 mt-20">
            <div style="filter: drop-shadow(0px 4px 28px rgba(0, 0, 0, 0.04)); transition:.5s" data-wow-delay="2.5s" class="wow animate__animated animate__fadeInUp mb-8 hover:bg-eko-yellow text-center  hover:text-black transition-transform duration-200 hover:transition-transform hover:duration- cursor-pointer  flex-1 p-10 bg-white md:text-left  hover:shadow-2xl-lg">
                <div class="w-auto flex">
                    <img class="mx-auto md:mx-0" style="height: 100px" src="{{ URL('image/icoimage/4.png') }}" alt="">
                </div>
                <div class="w-full font-black text-xl text-eko-blue my-8">
                    <h3>Interstate Couriers</h3>
                </div>
                <div class="w-full text-sm text-eko-blue mb-10">
                    <h3>Give us the location and we are there in a flash. </h3>
                </div>
            </div>
            <div style="filter: drop-shadow(0px 4px 28px rgba(0, 0, 0, 0.04)); transition:.5s" data-wow-delay="1.5s" class="wow animate__animated animate__fadeInUp mb-8 hover:bg-eko-yellow  text-center hover:text-black transition-transform duration-200 hover:transition-transform hover:duration- cursor-pointer  flex-1 p-10 bg-white md:text-left  hover:shadow-2xl-lg">
                <div class="w-auto flex">
                    <img class="mx-auto md:mx-0" style="height: 100px" src="{{ URL('image/icoimage/15.png') }}" alt="">
                </div>
                <div class="w-full font-black text-xl text-eko-blue my-8">
                    <h3>Haulage </h3>
                </div>
                <div class="w-full text-sm text-eko-blue mb-10">
                    <h3>With our intricate networks of trucks and vans, we can move your heavy goods within the country</h3>
                </div>
            </div>
            <div style="filter: drop-shadow(0px 4px 28px rgba(0, 0, 0, 0.04)); transition:.5s" data-wow-delay="1s" class="wow animate__animated animate__fadeInUp  mb-8 hover:bg-eko-yellow  text-center hover:text-black transition-transform duration-200 hover:transition-transform hover:duration- cursor-pointer flex-1 p-10 bg-white md:text-left  hover:shadow-2xl-lg">
                <div class="w-auto flex">
                    <img class="mx-auto md:mx-0" style="height: 100px" src="{{ URL('image/icoimage/6.png') }}" alt="">
                </div>
                <div class="w-full font-black text-xl text-eko-blue my-8">
                    <h3>Packaging & Storage</h3>
                </div>
                <div class="w-full text-sm text-eko-blue mb-10">
                    <h3>Offering quality package and storage services for all your items</h3>
                </div>
            </div>
        </div>
    </main>

    <main class="w-full px-4 sm:px-20 ">
        <div class="mt-28 w-full h-auto mx-auto">
            <div class="w-full flex-1 mt-20 py-4 text-center wow animate__animated animate__fadeInUp ">
                <h3 class="w-full text-eko-blue font-semibold text-sm">Companies that trust us</h3>
            </div>
            <div class="md:flex items-center mt-10 gap-20 mx-auto justify-center">
               <div class="mb-4 md:mb-0 flex items-center gap-8 md:gap-20 justify-center">
                    <div class="w-auto flex wow animate__animated animate__fadeInUp " >
                        <img src="{{ URL('image/icoimage/10.png') }}" alt="">
                    </div>
                    <div class="w-auto flex wow animate__animated animate__fadeInUp " data-wow-delay="1s">
                        <img src="{{ URL('image/icoimage/11.png') }}" alt="">
                    </div>
                    <div class="w-auto flex wow animate__animated animate__fadeInUp " data-wow-delay="1.5s">
                        <img src="{{ URL('image/icoimage/12.png') }}" alt="">
                    </div>
               </div>
               <div class=" flex items-center gap-8 md:gap-20 justify-center">
                    <div class="w-auto flex wow animate__animated animate__fadeInUp " data-wow-delay="2s">
                        <img src="{{ URL('image/icoimage/9.png') }}" alt="">
                    </div>
                    <div class="w-auto flex wow animate__animated animate__fadeInUp " data-wow-delay="2s">
                        <img src="{{ URL('image/icoimage/27.png') }}" alt="">
                    </div>
                    <div class="w-auto flex wow animate__animated animate__fadeInUp " data-wow-delay="2s">
                        <img src="{{ URL('image/icoimage/28.png') }}" alt="">
                    </div>
               </div>
            </div>
        </div>
    </main>

    <main class="w-full">
        <div style="margin-top: 45px;margin-bottom: 20px" class="mt-28 sm:flex w-full h-auto mx-auto">
            <div class="w-full flex-1 p-8 md:py-8 md:px-20 bg-eko-blue">
               <div class="w-full py-10  wow animate__animated animate__fadeInLeft">
                   <h1 class="text-gray-100 font-bold text-4xl">
                    The swiftest logistics brand in Africa
                   </h1>
               </div>
               <div class="w-auto flex  wow animate__animated animate__fadeInUp">
                    <img src="{{ URL('image/icoimage/17.png') }}" alt="">
                </div>
            </div>
            <div class="w-full flex-1 p-4 md:py-8 md:px-20 bg-eko-yellow">
               <div class="w-full md:p-10 gap-4 md:gap-12 mb-6 md:mb-0 flex">
                   <div style="background: rgba(0, 0, 0, 0.04);" class="wow animate__animated animate__fadeInUp w-full flex-col text-center items-center justify-center p-4">
                        <div class="w-full flex items-center ">
                            <img class="mx-auto" src="{{ URL('image/ekoicon/7.png') }}" alt="">
                        </div>
                        <div class="text-eko-blue font-bold text-4xl mt-2 mb-2">
                            <h1>7000</h1>
                        </div>
                        <div class="text-eko-blue text-sm ">
                            <h1>Delivered Package</h1>
                        </div>
                   </div>
                   <div style="background: rgba(0, 0, 0, 0.04);" data-wow-delay="1s" class="wow animate__animated animate__fadeInUp w-full flex-col text-center  items-center justify-center p-4">
                        <div class="w-auto flex">
                            <img class="mx-auto" src="{{ URL('image/ekoicon/8.png') }}" alt="">
                        </div>
                        <div class="text-eko-blue font-bold text-4xl mt-2 mb-2">
                            <h1>1</h1>
                        </div>
                        <div class="text-eko-blue text-sm ">
                            <h1>Office Wordwide</h1>
                        </div>
                   </div>
  
               </div>
               <div class="w-full md:p-10 gap-4 md:gap-12 flex">
                   <div style="background: rgba(0, 0, 0, 0.04);" data-wow-delay="1.5s" class="wow animate__animated animate__fadeInUp w-full flex-col text-center items-center justify-center p-4">
                        <div class="w-full flex items-center ">
                            <img class="mx-auto" src="{{ URL('image/ekoicon/10.png') }}" alt="">
                        </div>
                        <div class="text-eko-blue font-bold text-4xl mt-2 mb-2">
                            <h1>21</h1>
                        </div>
                        <div class="text-eko-blue text-sm ">
                            <h1>Employees</h1>
                        </div>
                   </div>
                   <div style="background: rgba(0, 0, 0, 0.04);" data-wow-delay="2s" class="wow animate__animated animate__fadeInUp w-full flex-col text-center  items-center justify-center p-4">
                        <div class="w-auto flex">
                            <img class="mx-auto" src="{{ URL('image/ekoicon/9.png') }}" alt="">
                        </div>
                        <div class="text-eko-blue font-bold text-4xl mt-2 mb-2">
                            <h1>1000</h1>
                        </div>
                        <div class="text-eko-blue text-sm ">
                            <h1>Customers</h1>
                        </div>
                   </div>
  
               </div>
               
            </div>
        </div>
    </main>

    <main class="w-full sm:px-20">
        <div class="mb-8 bg-white flex w-full h-auto mx-auto ">
            <div class="w-full flex-1 px-4 md:py-8 md:px-4">
               <div class="w-full py-8 mb-4 wow animate__animated animate__fadeInLeft">
                   <h1 class="text-eko-blue font-bold text-3xl sm:text-4xl">
                    Why should you use <br>  our services
                   </h1>
               </div>

               <div class="lg:flex gap-24">
                    <div class="flex gap-6 items-start">
                        <div class="h-full w-auto flex">
                            <img src="{{ URL('image/ekoicon/11.png') }}" alt="">
                        </div>
                        <div class="flex-1 w-full">
                            <div class="text-eko-blue text-md md:text-lg wow animate__animated animate__fadeInUp">
                                <h1 class="font-black md:text-xl">Affordable pricing</h1>
                                <p class="md:text-lg font-semibold text-eko-blue text-left mt-2">
                                Have your goods delivered at budget friendly prices, get amazing discounts/offers 
                                </p>
                            </div>
                            <div class="wow animate__animated animate__fadeInUp text-eko-blue text-md mt-6 sm:mt-12">
                                <h1 class="font-black md:text-xl">Prompt service</h1>
                                <p class="md:text-lg font-semibold text-eko-blue text-left mt-2">
                                    Start up your own logistics service with us. Buy and pay later
                                </p>
                            </div>
                            <div class="text-eko-blue text-md md:text-lg mt-10  sm:mt-12 wow animate__animated animate__fadeInUp">
                                <h1 class="font-black md:text-xl">Trusted logistics</h1>
                                <p class="md:text-lg font-semibold text-eko-blue text-left mt-2">
                                    We deliver with no hassle, no worries, your  goods are in the best hands
                                </p>
                            </div>
                            <div class="text-eko-blue text-md md:text-lg mt-6  sm:mt-12 wow animate__animated animate__fadeInUp">
                                <h1 class="font-black md:text-xl">Own your own dispatch bike</h1>
                                <p class="md:text-lg font-semibold text-eko-blue text-left mt-2">
                                    Say goodbye to slow deliveries, we are always on time.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=" w-auto flex sm:mt-0 mt-4 wow animate__animated animate__fadeInRight">
                        <img src="{{ URL('image/icoimage/7.png') }}" alt="">
                    </div>
               </div>
            </div>
        </div>
    </main>

    <main class="w-full px-4 md:px-4 sm:px-20 bg-dispatch-image">
        <div class=" md:flex md:flex-row w-full h-auto mx-auto mt-28 flex-col-reverse flex">
            <div class="w-full flex-1">
                <div class=" w-auto flex wow animate__animated animate__fadeInLeft">
                    <img src="{{ URL('image/icoimage/14.png') }}" alt="">
                </div>
            </div>
            <div class="w-full flex-1 ">
                <div class="w-full py-10 text-center md:text-left">
                    <h1 class="text-eko-blue text-3xl sm:text-4xl font-black wow animate__animated animate__fadeInUp">
                        Own your own dispatch <br> bike with
                        <span class="bg-eko-yellow px-1">
                            CADNA 
                        </span>
                    </h1>
                    <p class="text-lg text-eko-blue md:text-left mt-3 wow animate__animated animate__fadeInUp">
                        Get a dispatch bike at very affordable rates, pay in installments, earn on the go.
                    </p>
                </div>
            </div>
        </div>
    </main>

    <main class="w-full px-4 ">
        <div class="  w-full h-auto mx-auto mt-10">
            <div class="flex items-center w-full flex-1 text-center wow animate__animated animate__fadeInUp">
                <h1 class="mx-auto text-eko-blue text-3xl sm:text-4xl font-bold md:font-black">
                    What customers say about Ekodrop
                </h1>
            </div>

            <div id="splide1" class="splide w-full md:flex gap-8" role="group">
              
                <div class="splide__arrows">
                    <button style="outline:none" class="sm:w-16 sm:h-16 h-10 w-10 focus:bg-eko-yellow outline-none  focus:border-yellow-400 border-yellow-200 border-none splide__arrow splide__arrow--prev your-class-prev">
                        <div class=" w-auto flex">
                            <img style="filter: brightness(0.5);" src="{{ URL('image/icoimage/ar2.png') }}" alt="">
                        </div>
                    </button>
                    <button style="outline:none" class="sm:w-16 sm:h-16 h-10 w-10 focus:bg-eko-yellow  outline-none focus:border-yellow-400 border-yellow-200 border-none splide__arrow splide__arrow--next your-class-next">
                        <div class=" w-auto flex">
                            <img src="{{ URL('image/icoimage/ar1.png') }}" alt="">
                        </div>
                    </button>
                </div>
                <div class="splide__track">
                    <ul class="splide__list flex items-center  text-center md:text-left">
                        <li style="max-width: 500px;" class="splide__slide">
                            <div style="height:318px;width:530px;margin:100px auto;padding:0 30px">
                                <div id="slidebx" style="width:100%;height:100%;min-heigw-1/2 ht:100%" class="mx-auto p-8 mb-4 flex-1 text-center-lg bg-gray-100">
                                    <div class="w-full text-c100%r flex">
                                        <img class="mx-auto" src="{{ URL('image/icoimage/19.png') }}" alt="">
                                    </div>
                                    <h1 class="text-eko-blue my-6 font-bold">Damilola Olaribigbe</h1>
                                    <p class="text-sm text-eko-blue text-left mt-2">
                                        Ekodrop Logistics is simply the BEST. I have had issues searching for a dispatch company I could rely on as a business owner and I must say Ekodrop Logistics has saved me the stress of looking further. They are super efficient, always on time and their customer service is topnotch.
                                        I strongly recommend them to everyone. You will be glad you did.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li style="max-width: 500px;" class="splide__slide">
                            <div style="height:318px;width:530px;margin:100px auto;padding:0 30px">
                                <div id="slidebx" style="width:100%;height:100%" class="w-1/2 mx-auto p-8 mb-4 flex-1 text-center-lg bg-gray-100">
                                    <div class="w-full text-center flex">
                                        <img class="mx-auto" src="{{ URL('image/icoimage/19.png') }}" alt="">
                                    </div>
                                    <h1 class="text-eko-blue my-6 font-bold">Omonike adetimehin-Omlan Global Service</h1>
                                    <p class="text-sm text-eko-blue text-left mt-2">
                                        I am so happy to use Ekodrop logistics for my deliveries. As a virtual assistant I have a lot of errands assigned to me and Ekodrop just makes my work more efficient. Thank you for helping me build good business relations with my clients
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li style="max-width: 500px;" class="splide__slide">
                            <div style="height:318px;width:530px;margin:100px auto;padding:0 30px">
                                <div id="slidebx" style="width:100%;height:100%" class="w-1/2 mx-auto p-8 mb-4 flex-1 text-center-lg bg-gray-100">
                                    <div class="w-full text-center flex">
                                        <img class="mx-auto" src="{{ URL('image/icoimage/19.png') }}" alt="">
                                    </div>
                                    <h1 class="text-eko-blue my-6 font-bold">Yetunde</h1>
                                    <p class="text-sm text-eko-blue text-left mt-2">
                                        Thank you for going above and beyond to ensure I get my package on time. It speaks volumes about you and your business. I will definitely be saving your contact and recommending your services.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li style="max-width: 500px;" class="splide__slide">
                            <div style="height:318px;width:530px;margin:100px auto;padding:0 30px">
                                <div id="slidebx" style="width:100%;height:100%;min-height:100%" class="w-1/2 mx-auto p-8 mb-4 flex-1 text-center-lg bg-gray-100">
                                    <div class="w-full text-center flex">
                                        <img class="mx-auto" src="{{ URL('image/icoimage/19.png') }}" alt="">
                                    </div>
                                    <h1 class="text-eko-blue my-6 font-bold">Damilola Olaribigbe</h1>
                                    <p class="text-sm text-eko-blue text-left mt-2">
                                        Ekodrop Logistics is simply the BEST. I have had issues searching for a dispatch company I could rely on as a business owner and I must say Ekodrop Logistics has saved me the stress of looking further. They are super efficient, always on time and their customer service is topnotch.
                                        I strongly recommend them to everyone. You will be glad you did.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li style="max-width: 500px;" class="splide__slide">
                            <div style="height:318px;width:530px;margin:100px auto;padding:0 30px">
                                <div id="slidebx" style="width:100%;height:100%" class="w-1/2 mx-auto p-8 mb-4 flex-1 text-center-lg bg-gray-100">
                                    <div class="w-full text-center flex">
                                        <img class="mx-auto" src="{{ URL('image/icoimage/19.png') }}" alt="">
                                    </div>
                                    <h1 class="text-eko-blue my-6 font-bold">Omonike adetimehin-Omlan Global Service</h1>
                                    <p class="text-sm text-eko-blue text-left mt-2">
                                        I am so happy to use Ekodrop logistics for my deliveries. As a virtual assistant I have a lot of errands assigned to me and Ekodrop just makes my work more efficient. Thank you for helping me build good business relations with my clients
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li style="max-width: 500px;" class="splide__slide">
                            <div style="height:318px;width:530px;margin:100px auto;padding:0 30px">
                                <div id="slidebx" style="width:100%;height:100%" class="w-1/2 mx-auto p-8 mb-4 flex-1 text-center-lg bg-gray-100">
                                    <div class="w-full text-center flex">
                                        <img class="mx-auto" src="{{ URL('image/icoimage/19.png') }}" alt="">
                                    </div>
                                    <h1 class="text-eko-blue my-6 font-bold">Yetunde</h1>
                                    <p class="text-sm text-eko-blue text-left mt-2">
                                        Thank you for going above and beyond to ensure I get my package on time. It speaks volumes about you and your business. I will definitely be saving your contact and recommending your services.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <main class="w-full px-4 sm:px-20 ">
        <div class="  w-full h-auto mx-auto mt-4">
            <div class="flex items-center w-full flex-1 p-4 text-center wow animate__animated animate__fadeInUp">
                <h1 class="mx-auto text-eko-blue text-2xl sm:text-4xl font-bold">
                    Frequently Asked Questions
                </h1>
            </div>

            <div id="accordion" class=" w-full sm:w-2/3 flex-col gap-8 mx-auto">
                <div onclick="OpenAcc(0)" class="drop1 p-3 sm:p-6 w-full bg-gray-100 ">
                    <div class="w-full flex items-center justify-between cursor-pointer gap-8">
                        <h1 class="text-eko-blue my-1 font-bold text-sm ">What are your delivery rates ?</h1>
                        <div  class="flex  items-center justify-center">
                            {{-- <img id="img2" src="{{ URL('image/icoimage/navigation/Minus.png') }}" alt=""> --}}
                            <span class="ui-icon ui-icon-plus-1-n"></span>
                        </div>
                    </div>
                </div>
                <div  class="drop2 p-3 sm:p-6 w-full bg-gray-100 ">
                    <p class="text-sm text-eko-blue text-left mt-2">
                        The pickup/drop off location and the weight of goods determines the rate at which you will be charged.
                    </p>
                </div>
                <div onclick="OpenAcc(1)" class="drop1  p-3 sm:p-6 w-full mt-3 bg-gray-100 wow animate__animated animate__fadeInUp">
                    <div class="w-full flex items-center justify-between cursor-pointer gap-8">
                        <h1 class="text-eko-blue my-1 font-bold text-sm">Do you deliver outside lagos?</h1>
                        <div class="flex items-end justify-end">
                            <img id="img2" src="{{ URL('image/icoimage/navigation/Plus.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="drop2 p-3 sm:p-6 w-full bg-gray-100 ">
                    <p class="text-sm text-eko-blue text-left mt-2">
                        The pickup/drop off location and the weight of goods determines the rate at which you will be charged.
                    </p>
                </div>
                <div onclick="OpenAcc(2)" class="drop1 p-3 sm:p-6 w-full mt-3 bg-gray-100 wow animate__animated animate__fadeInUp">
                    <div class="w-full flex items-center justify-between cursor-pointer gap-8">
                        <h1 class="text-eko-blue my-1 font-bold text-sm ">Do you deliver outside lagos?</h1>
                        <div class="flex items-end justify-end">
                            <img id="img2" src="{{ URL('image/icoimage/navigation/Plus.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="drop2 p-3 sm:p-6 w-full bg-gray-100 ">

                    <p class="text-sm text-eko-blue text-left mt-2">
                        The pickup/drop off location and the weight of goods determines the rate at which you will be charged.
                    </p>
                </div>
                <div onclick="OpenAcc(3)" class="drop1 p-3 sm:p-6 w-full mt-3 bg-gray-100 wow animate__animated animate__fadeInUp">
                    <div class="w-full flex items-center justify-between cursor-pointer gap-8">
                        <h1 class="text-eko-blue my-1 font-bold text-sm">How long would it take to deliver my goods ?</h1>
                        <div class=" flex items-end justify-end">
                              <img id="img2" src="{{ URL('image/icoimage/navigation/Plus.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="drop2 p-3 sm:p-6 w-full bg-gray-100 ">
                    <p class="text-sm text-eko-blue text-left mt-2">
                        The pickup/drop off location and the weight of goods determines the rate at which you will be charged.
                    </p>
                </div>
                <div onclick="OpenAcc(4)" class="drop1 p-3 sm:p-6 w-full mt-3 bg-gray-100 wow animate__animated animate__fadeInUp">
                    <div class="w-full flex items-center justify-between cursor-pointer gap-8">
                        <h1 class="text-eko-blue my-1 font-bold text-sm ">Can I track the delivery process? </h1>
                        <div class=" flex  items-end justify-end">
                              <img id="img2" src="{{ URL('image/icoimage/navigation/Plus.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="drop2 p-3 sm:p-6 w-full bg-gray-100 ">
                    <p class="text-sm text-eko-blue text-left mt-2">
                        The pickup/drop off location and the weight of goods determines the rate at which you will be charged.
                    </p>
                </div>
                <div onclick="OpenAcc(5)" class="drop1 p-3 sm:p-6 w-full mt-3 bg-gray-100 wow animate__animated animate__fadeInUp">
                    <div class="w-full flex items-center justify-between cursor-pointer gp-8">
                        <h1 class="text-eko-blue my-1 font-bold text-sm ">Do you do express deliveries?</h1>
                        <div class=" flex  items-end justify-end">
                              <img id="img2" src="{{ URL('image/icoimage/navigation/Plus.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="drop2 p-3 sm:p-6 w-full bg-gray-100 ">
                    <p class="text-sm text-eko-blue text-left mt-2">
                        The pickup/drop off location and the weight of goods determines the rate at which you will be charged.
                    </p>
                </div>
                <div onclick="OpenAcc(6)" class="drop1 p-3 sm:p-6 w-full mt-3 bg-gray-100 wow animate__animated animate__fadeInUp">
                    <div class="w-full flex items-center justify-between cursor-pointer">
                        <h1 class="text-eko-blue my-1 font-bold text-sm flex-1">Are there discounts for bulk deliveries?</h1>
                        <div class="w-full flex flex-1 items-end justify-end">
                              <img id="img2" src="{{ URL('image/icoimage/navigation/Plus.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="drop2 p-3 sm:p-6 w-full bg-gray-100 ">

                    <p class="text-sm text-eko-blue text-left mt-2">
                        The pickup/drop off location and the weight of goods determines the rate at which you will be charged.
                    </p>
                </div>
                <div onclick="OpenAcc(7)" class="drop1 p-3 sm:p-6 w-full mt-3 bg-gray-100 wow animate__animated animate__fadeInUp">
                    <div class="w-full flex items-center justify-between cursor-pointer gap-8">
                        <h1 class="text-eko-blue my-1 font-bold text-sm ">Are there rewards for  customer referrals?</h1>
                        <div class=" flex items-end justify-end">
                              <img id="img2" src="{{ URL('image/icoimage/navigation/Plus.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="drop2 p-3 sm:p-6 w-full bg-gray-100 ">

                    <p class="text-sm text-eko-blue text-left mt-2">
                        The pickup/drop off location and the weight of goods determines the rate at which you will be charged.
                    </p>
                </div>
                <div onclick="OpenAcc(8)" class="drop1 p-3 sm:p-6 w-full mt-3 bg-gray-100 wow animate__animated animate__fadeInUp">
                    <div class="w-full flex items-center justify-between cursor-pointer gap-8">
                        <h1 class="text-eko-blue my-1 font-bold text-sm ">Do you accept cash on delivery ?</h1>
                        <div class="flex items-end justify-end">
                              <img id="img2" src="{{ URL('image/icoimage/navigation/Plus.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="drop2 p-3 sm:p-6 w-full bg-gray-100 ">
                    <p class="text-sm text-eko-blue text-left mt-2">
                        The pickup/drop off location and the weight of goods determines the rate at which you will be charged.
                    </p>
                </div>
                <div onclick="OpenAcc(9)" class="drop1 p-3 sm:p-6 w-full mt-3 bg-gray-100 wow animate__animated animate__fadeInUp">
                    <div class="w-full flex items-center justify-between cursor-pointer gap-8">
                        <h1 class="text-eko-blue my-1 font-bold text-sm ">Is it possible for riders to confirm payment of goods on delivery?</h1>
                        <div class=" flex items-end justify-end">
                              <img id="img2" src="{{ URL('image/icoimage/navigation/Plus.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="drop2 p-3 sm:p-6 w-full bg-gray-100 ">

                    <p class="text-sm text-eko-blue text-left mt-2">
                        The pickup/drop off location and the weight of goods determines the rate at which you will be charged.
                    </p>
                </div>
            </div>
        </div>
    </main>

    <main class="w-full px-4 sm:px-20 wow animate__animated animate__fadeInUp">
        <div style="background-position: top;background-size: cover;" class="rounded-2xl sm-none-md w-full h-auto mx-auto mt-20 mb-24 bg-phone-image bg-no-repeat">
            <div class="md:flex w-full pb-0 p-8 text-center justify-center items-center">
                <div class="w-full text-center flex-1 md:text-left sm:pl-8">
                    <h3 class="mx-auto text-eko-blue text-2xl sm:text-3xl wow animate__animated animate__fadeInUp">
                        Our Mobile App
                    </h3>
                    <h1 class="mx-auto mt-2 text-eko-blue text-3xl sm:text-6xl font-black wow animate__animated animate__fadeInLeft">
                        Coming Soon
                    </h1>
                    <div class="w-full flex-1 mt-2 wow animate__animated animate__fadeInUp">
                        <div class=" w-auto flex justify-center  items-center  md:items-start">
                            <img src="{{ URL('image/icoimage/5.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="w-full flex-1 mt-10">
                    <div class="w-auto flex">
                        <img src="{{ URL('image/icoimage/8.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection