@extends('master.app')

@section('contents')
  
    <main class="w-full px-4 sm:px-20 ">
        <div class="w-full sm:flex gap-4 items-start">
            <div class="sm:bg-service-image bg-service-image2 bg-no-repeat  flex z-0 absolute left-0 items-center w-2/6" style="z-index:-1;max-height:250vh;height:250vh;"></div>
            <div class="md:hidden bg-service-image2 bg-no-repeat bg-cover flex z-0 absolute left-0 items-center w-full" style="z-index:-1;;height:50%;"></div>
            <div class="w-full md:w-1/2 flex max-h-screen items-start relative">
                <div class="w-auto flex mx-auto mt-20 wow animate__animated animate__fadeInLeft">
                    <h1 class="hidden md:flex text-3xl md:text-6xl font-bold text-eko-blue" > 
                        WHAT <br>
                        WE <br>
                        DO <br>
                    </h1>
                </div>
                <div class="w-full flex text-center justify-center my-40 mx-auto wow animate__animated animate__fadeInLeft">
                    <h1 class=" md:hidden text-4xl md:text-6xl font-black text-eko-blue" > 
                        WHAT WE DO 
                    </h1>
                </div>
            </div>
            <div class="w-auto mt-20 -z-10" style="z-index: -3">
                <div class="w-full mt-4 sm:flex gap-10">
                    <div style=" transition:.5s" class="text-center flex-1 p-10 mb-10 bg-white md:text-left hover:shadow-2xl rounded-lg wow animate__animated animate__fadeInUp hover:bg-eko-yellow hover:text-black transition-transform duration-200 hover:transition-transform hover:duration-8 cursor-pointer">
                        <div class="w-auto flex">
                            <img class="mx-auto" src="{{ URL('image/icoimage/2.png') }}" alt="">
                        </div>
                        <div class="w-full font-black text-xl text-eko-blue my-8">
                            <h3>24 hour pick up & delivery</h3>
                        </div>
                        <div class="w-full text-sm font-semibold text-eko-blue mb-10">
                            <h3>Wherever you are in Lagos, We've got you covered.</h3>
                        </div>
                    </div>
                    <div style=" transition:.5s" class="text-center flex-1 p-10 bg-white md:text-left  hover:shadow-2xl rounded-lg wow animate__animated animate__fadeInRight hover:bg-eko-yellow hover:text-black transition-transform duration-200 hover:transition-transform hover:duration-8 cursor-pointer">
                        <div class="w-auto flex">
                            <img class="mx-auto" src="{{ URL('image/icoimage/1.png') }}" alt="">
                        </div>
                        <div class="w-full font-black text-xl text-eko-blue my-8">
                            <h3>International Couriers</h3>
                        </div>
                        <div class="w-full text-sm font-semibold text-eko-blue mb-10">
                            <h3>We currently deliver to The United States, Canada, and The United Kingdom and back to Nigeria.</h3>
                        </div>
                    </div>
                </div>
        
                <div class="w-full sm:flex gap-10 mt-20">
                    <div  style=" transition:.5s" class="text-center flex-1 p-10 mb-10 bg-white md:text-left  hover:shadow-2xl rounded-lg wow animate__animated animate__fadeInUp hover:bg-eko-yellow hover:text-black transition-transform duration-200 hover:transition-transform hover:duration- cursor-pointer">
                        <div class="w-auto flex">
                            <img class="mx-auto md:mx-0" src="{{ URL('image/icoimage/3.png') }}" alt="">
                        </div>
                        <div class="w-full font-black text-xl text-eko-blue my-8">
                            <h3>Errand Services</h3>
                        </div>
                        <div class="w-full text-sm font-semibold text-eko-blue mb-10">
                            <h3>We offer quick and safe escort for all your collections and delivery.</h3>
                        </div>
                    </div>
                    <div  style=" transition:.5s"  class="text-center flex-1 p-10 bg-white md:text-left  hover:shadow-2xl rounded-lg wow animate__animated animate__fadeInRight hover:bg-eko-yellow hover:text-black transition-transform duration-200 hover:transition-transform hover:duration- cursor-pointer">
                        <div class="w-auto flex">
                            <img class="mx-auto md:mx-0" src="{{ URL('image/icoimage/4.png') }}" alt="">
                        </div>
                        <div class="w-full font-black text-xl text-eko-blue my-8">
                            <h3>Interstate Couriers</h3>
                        </div>
                        <div class="w-full text-sm font-semibold text-eko-blue mb-10">
                            <h3>Give us the location and we are there in a flash. </h3>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:flex gap-10 mt-20">
                
                    <div  style=" transition:.5s"  class="text-center flex-1 p-10 mb-10 bg-white md:text-left  hover:shadow-2xl rounded-lg wow animate__animated animate__fadeInUp hover:bg-eko-yellow hover:text-black transition-transform duration-200 hover:transition-transform hover:duration- cursor-pointer">
                        <div class="w-auto flex">
                            <img class="mx-auto md:mx-0" src="{{ URL('image/icoimage/15.png') }}" alt="">
                        </div>
                        <div class="w-full font-black text-xl text-eko-blue my-8">
                            <h3>Haulage </h3>
                        </div>
                        <div class="w-full text-sm font-semibold text-eko-blue mb-10">
                            <h3>With our intricate networks of trucks and vans, we can move your heavy goods within the country</h3>
                        </div>
                    </div>
                    <div  style=" transition:.5s"  class="text-center flex-1 p-10 bg-white md:text-left  hover:shadow-2xl rounded-lg wow animate__animated animate__fadeInRight hover:bg-eko-yellow hover:text-black transition-transform duration-200 hover:transition-transform hover:duration- cursor-pointer">
                        <div class="w-auto flex">
                            <img class="mx-auto md:mx-0" src="{{ URL('image/icoimage/6.png') }}" alt="">
                        </div>
                        <div class="w-full font-black text-xl text-eko-blue my-8">
                            <h3>Packaging & Storage</h3>
                        </div>
                        <div class="w-full text-sm font-semibold text-eko-blue mb-10">
                            <h3>Offering quality package and storage services for all your items</h3>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>

    </main>


    <main class="w-full px-4 sm:px-20 bg-dispatch-image">
        <div class="md:flex md:flex-row w-full h-auto mx-auto mt-28 flex-col-reverse flex">
            <div class="w-full flex-1">
                <div class=" w-auto flex wow animate__animated animate__fadeInLeft">
                    <img src="{{ URL('image/icoimage/14.png') }}" alt="">
                </div>
            </div>
            <div class="w-full flex-1  wow animate__animated animate__fadeInRight">
                <div class="w-full py-10 text-center md:text-left">
                    <h1 class="text-eko-blue text-3xl  md:text-4xl font-bold wow animate__animated animate__fadeInUp">
                        Own your own dispatch <br> bike with
                        <span class="bg-eko-yellow px-1">
                            CADNA 
                        </span>
                    </h1>
                    <p class="text-sm md:text-lg text-eko-blue font-semibold md: mt-3 wow animate__animated animate__fadeInUp" data-wow-delay="1.5s">
                        Get a dispatch bike at very affordable rates, pay in installments, earn on the go.
                    </p>
                </div>
            </div>
        </div>
    </main>

    <main class="w-full px-4 ">
        <div class="  w-full h-auto mx-auto mt-8">
            <div class="flex items-center w-full flex-1 text-center wow animate__animated animate__fadeInUp">
                <h1 class="mx-auto text-eko-blue text-2xl sm:text-4xl font-bold">
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
                    <ul class="splide__list flex items-center">
                        <li style="max-width: 500px;" class="splide__slide">
                            <div style="height:318px;width:530px;margin:100px auto;padding:0 30px">
                                <div id="slidebx" style="width:100%;height:100%;min-heigw-1/2 ht:100%" class="rounded-xl mx-auto p-8 mb-4 flex-1 text-center bg-gray-100">
                                    <div class="w-full text-c100%r flex">
                                        <img class="mx-auto" src="{{ URL('image/icoimage/19.png') }}" alt="">
                                    </div>
                                    <h1 class="text-eko-blue my-6 font-bold">Damilola Olaribigbe</h1>
                                    <p class="text-sm text-eko-blue md: mt-2">
                                        Ekodrop Logistics is simply the BEST. I have had issues searching for a dispatch company I could rely on as a business owner and I must say Ekodrop Logistics has saved me the stress of looking further. They are super efficient, always on time and their customer service is topnotch.
                                        I strongly recommend them to everyone. You will be glad you did.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li style="max-width: 500px;" class="splide__slide">
                            <div style="height:318px;width:530px;margin:100px auto;padding:0 30px">
                                <div id="slidebx" style="width:100%;height:100%" class="rounded-xl w-1/2 mx-auto p-8 mb-4 flex-1 text-center bg-gray-100">
                                    <div class="w-full text-center flex">
                                        <img class="mx-auto" src="{{ URL('image/icoimage/19.png') }}" alt="">
                                    </div>
                                    <h1 class="text-eko-blue my-6 font-bold">Omonike adetimehin-Omlan Global Service</h1>
                                    <p class="text-sm text-eko-blue text-center mt-2">
                                        I am so happy to use Ekodrop logistics for my deliveries. As a virtual assistant I have a lot of errands assigned to me and Ekodrop just makes my work more efficient. Thank you for helping me build good business relations with my clients
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li style="max-width: 500px;" class="splide__slide">
                            <div style="height:318px;width:530px;margin:100px auto;padding:0 30px">
                                <div id="slidebx" style="width:100%;height:100%" class="rounded-xl w-1/2 mx-auto p-8 mb-4 flex-1 text-center bg-gray-100">
                                    <div class="w-full text-center flex">
                                        <img class="mx-auto" src="{{ URL('image/icoimage/19.png') }}" alt="">
                                    </div>
                                    <h1 class="text-eko-blue my-6 font-bold">Yetunde</h1>
                                    <p class="text-sm text-eko-blue text-center mt-2">
                                        Thank you for going above and beyond to ensure I get my package on time. It speaks volumes about you and your business. I will definitely be saving your contact and recommending your services.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li style="max-width: 500px;" class="splide__slide">
                            <div style="height:318px;width:530px;margin:100px auto;padding:0 30px">
                                <div id="slidebx" style="width:100%;height:100%;min-height:100%" class="rounded-xl w-1/2 mx-auto p-8 mb-4 flex-1 text-center bg-gray-100">
                                    <div class="w-full text-center flex">
                                        <img class="mx-auto" src="{{ URL('image/icoimage/19.png') }}" alt="">
                                    </div>
                                    <h1 class="text-eko-blue my-6 font-bold">Damilola Olaribigbe</h1>
                                    <p class="text-sm text-eko-blue text-center mt-2">
                                        Ekodrop Logistics is simply the BEST. I have had issues searching for a dispatch company I could rely on as a business owner and I must say Ekodrop Logistics has saved me the stress of looking further. They are super efficient, always on time and their customer service is topnotch.
                                        I strongly recommend them to everyone. You will be glad you did.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li style="max-width: 500px;" class="splide__slide">
                            <div style="height:318px;width:530px;margin:100px auto;padding:0 30px">
                                <div id="slidebx" style="width:100%;height:100%" class="rounded-xl w-1/2 mx-auto p-8 mb-4 flex-1 text-center bg-gray-100">
                                    <div class="w-full text-center flex">
                                        <img class="mx-auto" src="{{ URL('image/icoimage/19.png') }}" alt="">
                                    </div>
                                    <h1 class="text-eko-blue my-6 font-bold">Omonike adetimehin-Omlan Global Service</h1>
                                    <p class="text-sm text-eko-blue text-center mt-2">
                                        I am so happy to use Ekodrop logistics for my deliveries. As a virtual assistant I have a lot of errands assigned to me and Ekodrop just makes my work more efficient. Thank you for helping me build good business relations with my clients
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li style="max-width: 500px;" class="splide__slide">
                            <div style="height:318px;width:530px;margin:100px auto;padding:0 30px">
                                <div id="slidebx" style="width:100%;height:100%" class="rounded-xl w-1/2 mx-auto p-8 mb-4 flex-1 text-center bg-gray-100">
                                    <div class="w-full text-center flex">
                                        <img class="mx-auto" src="{{ URL('image/icoimage/19.png') }}" alt="">
                                    </div>
                                    <h1 class="text-eko-blue my-6 font-bold">Yetunde</h1>
                                    <p class="text-sm text-eko-blue text-center mt-2">
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
    
    <main class="w-full px-4 sm:px-20 wow animate__animated animate__fadeInUp">
        <div style="background-position: top;background-size: cover;" class="rounded-2xl md:rounded-xl sm-none-md w-full h-auto mx-auto mt-20 mb-24 bg-phone-image bg-no-repeat">
            <div class="md:flex w-full pb-0 p-8 text-center justify-center items-center md:items-start">
                <div class="w-full text-center md:text-left md:flexl flex-1 md:justify-start sm:pl-8">
                    <h3 class="md:mx-0 mx-auto text-eko-blue text-2xl sm:text-3xl wow animate__animated animate__fadeInUp">
                        Our Mobile App
                    </h3>
                    <h1 class="md:mx-0 mx-auto mt-2 text-eko-blue text-3xl sm:text-5xl font-bold wow animate__animated animate__fadeInLeft">
                        Coming Soon
                    </h1>
                    <div class="w-full flex-1 mt-2 wow animate__animated animate__fadeInUp">
                        <div class=" w-auto flex justify-center md:justify-start items-center  md:items-start">
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