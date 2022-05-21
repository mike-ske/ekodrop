@extends('master.app')

@section('contents')
    <main class="w-full flex px-8 sm:px-20  bg-hero-image ">
        <div style="margin-top: 45px;margin-bottom: 100px" class="mt-28  sm:flex items-center justify-between gap-8 w-full h-auto mx-auto">
            <div class="w-full flex-1 mt-20 py-4">
                <div class="w-full">
                    <h1 class="text-4xl md:text-5xl text-gray-600 font-semibold">
                        Swift, reliable, <br>
                        seamless delivery service
                    </h1>
                </div>
               <div class="w-full my-8">
                    <h3 class="text-lg text-gray-700 font-normal">
                        Your sure plug for speedy deliveries, we deliver round the clock.
                        <br>No hassle! No stress!
                    </h3>
               </div>
                <div class="text-center w-64 cursor-pointer rounded text-gray-800 text-sm py-2 px-4 bg-yellow-300 hover:bg-transparent border border-yellow-300">
                    <a href="#" class="text-lg text-center cursor-pointer text-gray-800 font-bold">One Time Service</a>
                </div>
            </div>
            <div class=" flex-1 mt-4 py-4 w-auto">
                <img style="width: 510px" src="{{ URL('image/1.png') }}" alt="">
            </div>
        </div>
    </main>

    <main class="w-full px-8 sm:px-20 ">
        <div style="margin-top: 45px;margin-bottom: 100px" class="mt-28  sm:flex items-center justify-between gap-8 w-full h-auto mx-auto">
            <div class="w-full flex-1 mt-20 py-4 text-center">
                <h1 class="font-bold text-gray-800 text-2xl md:text-4xl mb-2">Topnotch logistics services</h1>
                <h3 class="w-full text-gray-600 font-normal text-sm">Meeting all your logistics needs in no time!</h3>
            </div>
        </div>

        <div class="w-full mt-4 sm:flex gap-10">
            <div  style="filter: drop-shadow(0px 4px 28px rgba(0, 0, 0, 0.04));" class="flex-1 p-10 bg-white text-left hover:shadow-2xl rounded-lg">
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
            <div style="filter: drop-shadow(0px 4px 28px rgba(0, 0, 0, 0.04));"  class="flex-1 p-10 bg-white text-left  hover:shadow-2xl rounded-lg">
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
            <div style="filter: drop-shadow(0px 4px 28px rgba(0, 0, 0, 0.04));"  class="flex-1 p-10 bg-white text-left  hover:shadow-2xl rounded-lg">
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
          
        </div>

        <div class="w-full sm:flex gap-10 mt-20">
            <div style="filter: drop-shadow(0px 4px 28px rgba(0, 0, 0, 0.04));"  class="flex-1 p-10 bg-white text-left  hover:shadow-2xl rounded-lg">
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
            <div style="filter: drop-shadow(0px 4px 28px rgba(0, 0, 0, 0.04));"  class="flex-1 p-10 bg-white text-left  hover:shadow-2xl rounded-lg">
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
            <div style="filter: drop-shadow(0px 4px 28px rgba(0, 0, 0, 0.04));"  class="flex-1 p-10 bg-white text-left  hover:shadow-2xl rounded-lg">
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
    </main>

    <main class="w-full px-8 sm:px-20 ">
        <div style="margin-top: 45px;margin-bottom: 100px" class="mt-28 w-full h-auto mx-auto">
            <div class="w-full flex-1 mt-20 py-4 text-center">
                <h3 class="w-full text-gray-800 font-normal text-sm">Companies that trust us</h3>
            </div>
            <div class="flex items-center mt-10">
               <div class="mx-auto flex items-center gap-20">
                    <div class="w-auto flex">
                        <img src="{{ URL('image/icoimage/10.png') }}" alt="">
                    </div>
                    <div class="w-auto flex">
                        <img src="{{ URL('image/icoimage/11.png') }}" alt="">
                    </div>
                    <div class="w-auto flex">
                        <img src="{{ URL('image/icoimage/12.png') }}" alt="">
                    </div>
                    <div class="w-auto flex">
                        <img src="{{ URL('image/icoimage/9.png') }}" alt="">
                    </div>
               </div>
            </div>
        </div>
    </main>

    
    <main class="w-full">
        <div style="margin-top: 45px;margin-bottom: 20px" class="mt-28 sm:flex w-full h-auto mx-auto">
            <div class="w-full flex-1 p-8 " style="background: #21334F;">
               <div class="w-full py-10">
                   <h1 class="text-gray-100 text-4xl">
                    The swiftest logistics brand <br> in Africa
                   </h1>
               </div>
               <div class="w-auto flex">
                    <img src="{{ URL('image/icoimage/17.png') }}" alt="">
                </div>
            </div>
            <div class="w-full flex-1 p-8 bg-yellow-300">
               <div class="w-full p-10 gap-12 sm:flex">
                   <div style="background: rgba(0, 0, 0, 0.04);" class=" w-full flex-col text-center items-center justify-center p-4">
                        <div class="w-full flex items-center ">
                            <img class="mx-auto" src="{{ URL('image/ekoicon/7.png') }}" alt="">
                        </div>
                        <div class="text-gray-800 font-bold text-4xl mt-2 mb-2">
                            <h1>7000</h1>
                        </div>
                        <div class="text-gray-600 text-sm ">
                            <h1>Delivered Package</h1>
                        </div>
                   </div>
                   <div style="background: rgba(0, 0, 0, 0.04);" class=" w-full flex-col text-center  items-center justify-center p-4">
                        <div class="w-auto flex">
                            <img class="mx-auto" src="{{ URL('image/ekoicon/8.png') }}" alt="">
                        </div>
                        <div class="text-gray-800 font-bold text-4xl mt-2 mb-2">
                            <h1>1</h1>
                        </div>
                        <div class="text-gray-600 text-sm ">
                            <h1>Office Wordwide</h1>
                        </div>
                   </div>
  
               </div>
               <div class="w-full p-10 gap-12 sm:flex">
                   <div style="background: rgba(0, 0, 0, 0.04);" class=" w-full flex-col text-center items-center justify-center p-4">
                        <div class="w-full flex items-center ">
                            <img class="mx-auto" src="{{ URL('image/ekoicon/10.png') }}" alt="">
                        </div>
                        <div class="text-gray-800 font-bold text-4xl mt-2 mb-2">
                            <h1>21</h1>
                        </div>
                        <div class="text-gray-600 text-sm ">
                            <h1>Employees</h1>
                        </div>
                   </div>
                   <div style="background: rgba(0, 0, 0, 0.04);" class=" w-full flex-col text-center  items-center justify-center p-4">
                        <div class="w-auto flex">
                            <img class="mx-auto" src="{{ URL('image/ekoicon/9.png') }}" alt="">
                        </div>
                        <div class="text-gray-800 font-bold text-4xl mt-2 mb-2">
                            <h1>1000</h1>
                        </div>
                        <div class="text-gray-600 text-sm ">
                            <h1>Customers</h1>
                        </div>
                   </div>
  
               </div>
               
            </div>
        </div>
    </main>

    <main class="w-full px-20">
        <div class="bg-white flex w-full h-auto mx-auto ">
            <div class="w-full flex-1 p-8 ">
               <div class="w-full py-10">
                   <h1 class="text-gray-800 text-2xl sm:text-4xl">
                    Why should you use <br>  our services
                   </h1>
               </div>

               <div class="sm:flex gap-24">
                    <div class="flex gap-6 items-center">
                        <div class=" w-auto flex">
                            <img src="{{ URL('image/ekoicon/11.png') }}" alt="">
                        </div>
                        <div class="flex-1 w-full">
                            <div class="text-gray-800 text-lg ">
                                <h1>Affordable pricing</h1>
                                <p class="text-sm text-gray-600 text-left mt-2">
                                Have your goods delivered at budget friendly prices, get amazing discounts/offers 
                                </p>
                            </div>
                            <div class="text-gray-800 text-lg mt-8 sm:mt-16">
                                <h1>Get a dispatch bike</h1>
                                <p class="text-sm text-gray-600 text-left mt-2">
                                    Start up your own logistics service with us. Buy and pay later
                                </p>
                            </div>
                            <div class="text-gray-800 text-lg mt-8 sm:mt-16">
                                <h1>Trusted logistics services</h1>
                                <p class="text-sm text-gray-600 text-left mt-2">
                                    We deliver with no hassle, no worries, your  goods are in the best hands
                                </p>
                            </div>
                            <div class="text-gray-800 text-lg mt-8 sm:mt-16">
                                <h1>Prompt service</h1>
                                <p class="text-sm text-gray-600 text-left mt-2">
                                    Say goodbye to slow deliveries, we are always on time.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=" w-auto flex sm:mt-0 mt-4">
                        <img src="{{ URL('image/icoimage/7.png') }}" alt="">
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
                    <h1 class="text-blue-900 text-2xl sm:text-4xl font-bold">
                        Own your own dispatch <br> bike with
                        <span class="bg-yellow-300 px-1">
                            CADNA 
                        </span>
                    </h1>
                    <p class="text-lg text-gray-600 text-left mt-3">
                        Get a dispatch bike at very affordable rates, pay in installments, <br> earn on the go.
                    </p>
                </div>
            </div>
        </div>
    </main>

    <main class="w-full px-8 sm:px-20 ">
        <div class="  w-full h-auto mx-auto mt-20">
            <div class="flex items-center w-full flex-1 p-8 text-center">
                <h1 class="mx-auto text-gray-900 text-2xl sm:text-4xl font-bold">
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
        <div class="  w-full h-auto mx-auto mt-20">
            <div class="flex items-center w-full flex-1 p-8 text-center">
                <h1 class="mx-auto text-gray-900 text-2xl sm:text-4xl font-bold">
                    Frequently Asked Questions
                </h1>
            </div>

            <div class="w-full sm:w-2/3 flex-col gap-8 mx-auto">
                <div class="p-3 smp:p-6 flex-1 bg-gray-100 ">
                    <div class="w-full flex items-center justify-between cursor-pointer">
                        <h1 class="text-gray-800 my-1 font-bold text-sm flex-1">What are your delivery rates ?</h1>
                        <div class="w-full flex flex-1 items-end justify-end">
                            <img  src="{{ URL('image/icoimage/navigation/Minus.png') }}" alt="">
                        </div>
                    </div>
                    
                    <p class="text-sm text-gray-600 text-left mt-2">
                        The pickup/drop off location and the weight of goods determines the rate at which you will be charged.
                    </p>
                </div>
                <div class="p-3 smp:p-6 flex-1 mt-3 bg-gray-100 ">
                    <div class="w-full flex items-center justify-between cursor-pointer">
                        <h1 class="text-gray-800 my-1 font-bold text-sm flex-1">Do you deliver outside lagos?</h1>
                        <div class="w-full flex flex-1 items-end justify-end">
                            <img  src="{{ URL('image/icoimage/navigation/Plus.png') }}" alt="">
                        </div>
                    </div>
                    {{-- <p class="text-sm text-gray-600 text-left mt-2">
                        The pickup/drop off location and the weight of goods determines the rate at which you will be charged.
                    </p> --}}
                </div>
                <div class="p-3 smp:p-6 flex-1 mt-3 bg-gray-100 ">
                    <div class="w-full flex items-center justify-between cursor-pointer">
                        <h1 class="text-gray-800 my-1 font-bold text-sm flex-1">Do you deliver outside lagos?</h1>
                        <div class="w-full flex flex-1 items-end justify-end">
                            <img  src="{{ URL('image/icoimage/navigation/Plus.png') }}" alt="">
                        </div>
                    </div>
                    {{-- <p class="text-sm text-gray-600 text-left mt-2">
                        The pickup/drop off location and the weight of goods determines the rate at which you will be charged.
                    </p> --}}
                </div>
                <div class="p-3 smp:p-6 flex-1 mt-3 bg-gray-100 ">
                    <div class="w-full flex items-center justify-between cursor-pointer">
                        <h1 class="text-gray-800 my-1 font-bold text-sm flex-1">How long would it take to deliver my goods ?</h1>
                        <div class="w-full flex flex-1 items-end justify-end">
                            <img  src="{{ URL('image/icoimage/navigation/Plus.png') }}" alt="">
                        </div>
                    </div>
                    {{-- <p class="text-sm text-gray-600 text-left mt-2">
                        The pickup/drop off location and the weight of goods determines the rate at which you will be charged.
                    </p> --}}
                </div>
                <div class="p-3 smp:p-6 flex-1 mt-3 bg-gray-100 ">
                    <div class="w-full flex items-center justify-between cursor-pointer">
                        <h1 class="text-gray-800 my-1 font-bold text-sm flex-1">Can I track the delivery process? </h1>
                        <div class="w-full flex flex-1 items-end justify-end">
                            <img  src="{{ URL('image/icoimage/navigation/Plus.png') }}" alt="">
                        </div>
                    </div>
                    {{-- <p class="text-sm text-gray-600 text-left mt-2">
                        The pickup/drop off location and the weight of goods determines the rate at which you will be charged.
                    </p> --}}
                </div>
                <div class="p-3 smp:p-6 flex-1 mt-3 bg-gray-100 ">
                    <div class="w-full flex items-center justify-between cursor-pointer">
                        <h1 class="text-gray-800 my-1 font-bold text-sm flex-1">Do you do express deliveries?</h1>
                        <div class="w-full flex flex-1 items-end justify-end">
                            <img  src="{{ URL('image/icoimage/navigation/Plus.png') }}" alt="">
                        </div>
                    </div>
                    {{-- <p class="text-sm text-gray-600 text-left mt-2">
                        The pickup/drop off location and the weight of goods determines the rate at which you will be charged.
                    </p> --}}
                </div>
                <div class="p-3 smp:p-6 flex-1 mt-3 bg-gray-100 ">
                    <div class="w-full flex items-center justify-between cursor-pointer">
                        <h1 class="text-gray-800 my-1 font-bold text-sm flex-1">Are there discounts for bulk deliveries?</h1>
                        <div class="w-full flex flex-1 items-end justify-end">
                            <img  src="{{ URL('image/icoimage/navigation/Plus.png') }}" alt="">
                        </div>
                    </div>
                    {{-- <p class="text-sm text-gray-600 text-left mt-2">
                        The pickup/drop off location and the weight of goods determines the rate at which you will be charged.
                    </p> --}}
                </div>
                <div class="p-3 smp:p-6 flex-1 mt-3 bg-gray-100 ">
                    <div class="w-full flex items-center justify-between cursor-pointer">
                        <h1 class="text-gray-800 my-1 font-bold text-sm flex-1">Are there rewards for  customer referrals?</h1>
                        <div class="w-full flex flex-1 items-end justify-end">
                            <img  src="{{ URL('image/icoimage/navigation/Plus.png') }}" alt="">
                        </div>
                    </div>
                    {{-- <p class="text-sm text-gray-600 text-left mt-2">
                        The pickup/drop off location and the weight of goods determines the rate at which you will be charged.
                    </p> --}}
                </div>
                <div class="p-3 smp:p-6 flex-1 mt-3 bg-gray-100 ">
                    <div class="w-full flex items-center justify-between cursor-pointer">
                        <h1 class="text-gray-800 my-1 font-bold text-sm flex-1">Do you accept cash on delivery ?</h1>
                        <div class="w-full flex flex-1 items-end justify-end">
                            <img  src="{{ URL('image/icoimage/navigation/Plus.png') }}" alt="">
                        </div>
                    </div>
                    {{-- <p class="text-sm text-gray-600 text-left mt-2">
                        The pickup/drop off location and the weight of goods determines the rate at which you will be charged.
                    </p> --}}
                </div>
                <div class="p-3 flex-1 mt-3 bg-gray-100 ">
                    <div class="w-full flex items-center justify-between cursor-pointer">
                        <h1 class="text-gray-800 my-1 font-bold text-sm flex-1">Is it possible for riders to confirm payment of goods on delivery?</h1>
                        <div class="w-full flex flex-1 items-end justify-end">
                            <img  src="{{ URL('image/icoimage/navigation/Plus.png') }}" alt="">
                        </div>
                    </div>
                    {{-- <p class="text-sm text-gray-600 text-left mt-2">
                        The pickup/drop off location and the weight of goods determines the rate at which you will be charged.
                    </p> --}}
                </div>
            </div>
        </div>
    </main>

    <main class="w-full px-8 sm:px-20 ">
        <div style="background-position: top;background-size: cover;" class="sm:rounded-none rounded-md w-full h-auto mx-auto mt-20 mb-24 bg-phone-image bg-no-repeat">
            <div class="flex w-full  p-8 text-center">
                <div class="w-full flex-1 text-left sm:pl-8">
                    <h3 class="mx-auto text-gray-900 text-2xl sm:text-3xl ">
                        Our Mobile App
                    </h3>
                    <h1 class="mx-auto mt-2 text-gray-900 text-3xl sm:text-6xl font-black">
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