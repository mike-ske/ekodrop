@extends('master.app')

@section('contents')
  
    <main class="w-full px-8 sm:px-20 ">
        <div class="w-full sm:flex gap-4 items-start">
            <div class="sm:bg-service-image flex z-0 absolute left-0 items-center w-2/6" style="z-index:-1;max-height:200vh;height:200vh;"></div>
            <div class="w-1/2 flex max-h-screen items-start relative">
                <div class="w-auto flex mx-auto mt-20">
                    <h1 class="text-3xl md:text-6xl font-bold"  style="color: #21334F;"> 
                        WHAT <br>
                        WE <br>
                        DO <br>
                    </h1>
                </div>
            </div>
            <div class="w-auto mt-20">
                <div class="w-full mt-4 sm:flex gap-10">
                    <div class="flex-1 p-10 mb-10 bg-white text-left hover:shadow-2xl rounded-lg">
                        <div class="w-auto flex">
                            <img src="{{ URL('image/icoimage/2.png') }}" alt="">
                        </div>
                        <div class="w-full font-bold text-sm text-gray-800 my-8">
                            <h3>24 hour pick up & delivery</h3>
                        </div>
                        <div class="w-full text-sm text-gray-400 mb-10">
                            <h3>Wherever you are in Lagos, We've got you covered.</h3>
                        </div>
                    </div>
                    <div class="flex-1 p-10 bg-white text-left  hover:shadow-2xl rounded-lg">
                        <div class="w-auto flex">
                            <img src="{{ URL('image/icoimage/1.png') }}" alt="">
                        </div>
                        <div class="w-full font-bold text-sm text-gray-800 my-8">
                            <h3>International Couriers</h3>
                        </div>
                        <div class="w-full text-sm text-gray-400 mb-10">
                            <h3>We currently deliver to The United States, Canada, and The United Kingdom and back to Nigeria.</h3>
                        </div>
                    </div>
                </div>
        
                <div class="w-full sm:flex gap-10 mt-20">
                    <div   class="flex-1 p-10 mb-10 bg-white text-left  hover:shadow-2xl rounded-lg">
                        <div class="w-auto flex">
                            <img src="{{ URL('image/icoimage/3.png') }}" alt="">
                        </div>
                        <div class="w-full font-bold text-sm text-gray-800 my-8">
                            <h3>Errand Services</h3>
                        </div>
                        <div class="w-full text-sm text-gray-400 mb-10">
                            <h3>We offer quick and safe escort for all your collections and delivery.</h3>
                        </div>
                    </div>
                    <div   class="flex-1 p-10 bg-white text-left  hover:shadow-2xl rounded-lg">
                        <div class="w-auto flex">
                            <img src="{{ URL('image/icoimage/4.png') }}" alt="">
                        </div>
                        <div class="w-full font-bold text-sm text-gray-800 my-8">
                            <h3>Interstate Couriers</h3>
                        </div>
                        <div class="w-full text-sm text-gray-400 mb-10">
                            <h3>Give us the location and we are there in a flash. </h3>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:flex gap-10 mt-20">
                
                    <div   class="flex-1 p-10 mb-10 bg-white text-left  hover:shadow-2xl rounded-lg">
                        <div class="w-auto flex">
                            <img src="{{ URL('image/icoimage/15.png') }}" alt="">
                        </div>
                        <div class="w-full font-bold text-sm text-gray-800 my-8">
                            <h3>Haulage </h3>
                        </div>
                        <div class="w-full text-sm text-gray-400 mb-10">
                            <h3>With our intricate networks of trucks and vans, we can move your heavy goods within the country</h3>
                        </div>
                    </div>
                    <div   class="flex-1 p-10 bg-white text-left  hover:shadow-2xl rounded-lg">
                        <div class="w-auto flex">
                            <img src="{{ URL('image/icoimage/6.png') }}" alt="">
                        </div>
                        <div class="w-full font-bold text-sm text-gray-800 my-8">
                            <h3>Packaging & Storage</h3>
                        </div>
                        <div class="w-full text-sm text-gray-400 mb-10">
                            <h3>Offering quality package and storage services for all your items</h3>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>

    </main>


    <main class="w-full px-8 sm:px-20 bg-dispatch-image">
        <div class=" sm:flex w-full h-auto mx-auto mt-28">
            <div class="w-full flex-1 p-8">
                <div class=" w-auto flex">
                    <img src="{{ URL('image/icoimage/14.png') }}" alt="">
                </div>
            </div>
            <div class="w-full flex-1 p-8">
                <div class="w-full py-10">
                    <h1 class="text-blue-900 text-2xl md:text-4xl font-bold">
                        Own your own dispatch <br> bike with
                        <span class="bg-yellow-300 px-1">
                            CADNA 
                        </span>
                    </h1>
                    <p class="text-sm md:text-lg text-gray-600 text-left mt-3">
                        Get a dispatch bike at very affordable rates, pay in installments, <br> earn on the go.
                    </p>
                </div>
            </div>
        </div>
    </main>

    <main class="w-full px-8 sm:px-20 ">
        <div class="  w-full h-auto mx-auto mt-20">
            <div class="flex items-center w-full flex-1 p-8 text-center">
                <h1 class="mx-auto text-gray-900 text-2xl md:text-4xl font-bold">
                    What customers say about Ekodrop
                </h1>
            </div>

            <div class="w-full md:flex gap-8">
                <div class="p-8 mb-4 flex-1 text-center rounded-lg bg-gray-100">
                    <div class="w-full text-center flex">
                        <img class="mx-auto" src="{{ URL('image/icoimage/19.png') }}" alt="">
                    </div>
                    <h1 class="text-gray-800 my-6 font-bold">Damilola Olaribigbe</h1>
                    <p class="text-sm text-gray-600 text-left mt-2">
                        Ekodrop Logistics is simply the BEST. I have had issues searching for a dispatch company I could rely on as a business owner and I must say Ekodrop Logistics has saved me the stress of looking further. They are super efficient, always on time and their customer service is topnotch.
                        I strongly recommend them to everyone. You will be glad you did.
                    </p>
                </div>
                <div class="p-8 mb-4 flex-1 text-center rounded-lg bg-gray-100">
                    <div class="w-full text-center flex">
                        <img class="mx-auto" src="{{ URL('image/icoimage/19.png') }}" alt="">
                    </div>
                    <h1 class="text-gray-800 my-6 font-bold">Omonike adetimehin-Omlan Global Service</h1>
                    <p class="text-sm text-gray-600 text-left mt-2">
                        I am so happy to use Ekodrop logistics for my deliveries. As a virtual assistant I have a lot of errands assigned to me and Ekodrop just makes my work more efficient. Thank you for helping me build good business relations with my clients
                    </p>
                </div>
                <div class="p-8 mb-4 flex-1 text-center rounded-lg bg-gray-100">
                    <div class="w-full text-center flex">
                        <img class="mx-auto" src="{{ URL('image/icoimage/19.png') }}" alt="">
                    </div>
                    <h1 class="text-gray-800 my-6 font-bold">Yetunde</h1>
                    <p class="text-sm text-gray-600 text-left mt-2">
                        Thank you for going above and beyond to ensure I get my package on time. It speaks volumes about you and your business. I will definitely be saving your contact and recommending your services.
                    </p>
                </div>
                
            </div>
        </div>
    </main>

    <main class="w-full px-8 sm:px-20 ">
        <div style="background-position: top;background-size: cover;" class="w-full h-auto mx-auto mt-20 mb-24 bg-phone-image bg-no-repeat sm:rounded-none rounded-md">
            <div class="flex w-full  p-8 text-center">
                <div class="w-full flex-1 text-left sm:pl-8">
                    <h3 class="mx-auto text-gray-900 text-2xl sm:text-3xl ">
                        Our Mobile App
                    </h3>
                    <h1 class="mx-auto mt-2 text-gray-900 text-3xl sm:text-6xl  font-black">
                        Coming Soon
                    </h1>
                    <div class="w-full flex-1 mt-2">
                        <div class=" w-auto flex">
                            <img src="{{ URL('image/icoimage/5.png') }}" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection