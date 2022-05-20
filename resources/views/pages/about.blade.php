@extends('master.app')

@section('contents')
    <main class="w-full flex px-8 sm:px-20">
        <div style="margin-top: 45px;margin-bottom: 100px" class="mt-28  sm:flex items-center justify-between gap-8 w-full h-auto mx-auto">
            <div class="w-full flex-1 mt-20 py-4">
                <div class="w-full">
                    <h1 class="text-5xl text-gray-600 font-semibold">
                        Your plug for quick and fast end-to
                        -end same-day delivery service 
                    </h1>
                </div>
               <div class="w-full my-8">
                    <h3 class="text-lg text-gray-700 font-normal">
                        We make it possible for merchants and customers to conclude same-day 
                        <br>buying and selling remotely.
                    </h3>
               </div>
                
            </div>
            <div class=" flex-1 mt-4 py-4 w-auto">
                <img style="width: 510px" src="{{ URL('image/aboutimage/1.png') }}" alt="">
            </div>
        </div>
    </main>

    <main class="w-full flex px-8 sm:px-20 " style="background: #21334F;">
        <div style="margin-top: 45px;margin-bottom: 100px" class="mt-28  sm:flex items-center justify-between gap-8 w-full h-auto mx-auto">
            <div class="w-full flex-1 mt-20 py-4">
                <div class="w-full">
                    <h1 class="text-lg text-yellow-300 font-semibold">
                        OUR STORY
                    </h1>
                    <div style="width: 39px;height: 4px;" class="mt-4 bg-yellow-300"></div>
                </div>
               <div class="w-10/12 my-8 leading-9">
                    <p class="text-lg text-gray-100 font-light" style="font-weight: 100">
                        Ekodrop began operations in June 2021 with just two bikes and organically grew its fleet to twenty bikes within the space of nine months. We grew revenue at an expedited pace of over 85% by the 9th month of doing business. We got  registered in November 2020 and undertook a pilot phase for 6 months. Ekodrop Logistics officially opened its corporate operations in June 2021. It has extended its reach to food, laundry, and e-commerce. All of which are centered around its core business of logistics.
                        <br><br>
                        In recent times, we  have been taking up corporate clients coupled with the ever-growing individual customer base. This dovetailed with a need to grow our fleets to haulage vehicles. This expansion is projected to cover a vast category of consumers, customer and corporate partner’s needs, the growth will be facilitated by the launch and onboarding of our Website, Mobile Application and the offline customer base.
                        <br><br>
                        Currently serving over seven hundred and fifty customers (corporates and Individuals), we unvaryingly welcome interested  individuals, equity partners, asset financiers, businesses and vendors in our adventure to the top 
                    </p>
               </div>
                
            </div>
            <div class=" mt-4 py-4 w-auto absolute right-0">
                <img src="{{ URL('image/aboutimage/9.png') }}" alt="">
            </div>
        </div>
    </main>

    <main class="w-full flex px-8 sm:px-20" style="background: rgba(255, 204, 41, 0.1);">
        <div class="mt-28  sm:flex items-center justify-center gap-8 w-full h-auto mx-auto">
            <div class="w-full flex-1 py-4">
                <div class="mx-auto w-10/12">
                    <div class="w-full flex gap-4 items-center ">
                        <div class=" w-auto">
                            <img src="{{ URL('image/aboutimage/3.png') }}" alt="">
                        </div>
                        <h1 class="text-3xl font-semibold" style="color: #21334F;">
                            Mission
                        </h1>
                    </div>
                   <div class="w-10/12 my-4 leading-9">
                        <p class="text-lg  font-light" style="font-weight: 100;color: #21334F;">
                            To simplify the art of moving goods from point A to point B effortlessly, at a remarkable turnaround time.
                        </p>
                   </div>
                </div>
            </div>
            <div class="w-full flex-1 py-4">
                <div class="mx-auto w-10/12">
                    <div class="w-full flex gap-4 items-center ">
                        <div class="w-auto">
                            <img src="{{ URL('image/aboutimage/8.png') }}" alt="">
                        </div>
                        <h1 class="text-3xl font-semibold" style="color: #21334F;">
                            Vision
                        </h1>
                    </div>
                   <div class="w-10/12 my-4 leading-9">
                        <p class="text-lg  font-light" style="font-weight: 100;color: #21334F;">
                            To be one of the leading and foremost logistics firms on the global frontline. 
                        </p>
                   </div>
                </div>
            </div>
        </div>
    </main>

    <main class="w-full md:flex px-8 sm:px-20">
        <div style="margin-top: 45px;margin-bottom: 100px" class="mt-28  md:flex items-center justify-between gap-8 w-full h-auto mx-auto">
            <div class="w-full flex-1 py-4">
               <div class="w-full my-8">
                    <p class="text-sm text-gray-700 font-normal leading-9">
                        EKODROP Logistics is a courier, pick-up, and delivery service company with a mission  to safely meet our customer’s logistic needs within agreed timelines.
                        <br><br>
                        We pride ourselves in our effective transport system and business process flow, which affords our clients seamless transitions of their goods, within and outside Lagos State. In today’s fast world of social and e-commerce, we are your plugs for quick and fast end-to-end same-day delivery service. We make it possible for merchants and customers to conclude same-day buying and selling remotely.
                    </p>
               </div>
            </div>
            <div class=" flex-1 mt-4 py-4 w-auto ">
                <img class="mx-auto" src="{{ URL('image/aboutimage/2.png') }}" alt="">
            </div>
        </div>
    </main>

    
    <main class="w-full px-8 sm:px-20 ">
        <div class="  w-full h-auto mx-auto">
            <div class="flex items-start w-full flex-1 p-8 text-left">
                <h1 class="text-4xl font-bold"  style="color: #21334F;"> 
                    Meet the Team
                </h1>
            </div>

            <div class="w-full md:flex gap-8">
                <div class="p-8 mb-4 flex-1 text-center rounded-lg ">
                    <div class="w-full text-center flex">
                        <img class="mx-auto" src="{{ URL('image/aboutimage/4.png') }}" alt="">
                    </div>
                    <h1 class="text-gray-800 my-2 font-bold">BABAJIDE ABIOLA </h1>
                    <h3 class="text-gray-400 my-2 text-sm">Co-founder & Chief Executive Officer</h3>
                    <p class="text-sm flex text-gray-300  mt-2 gap-4 justify-center ">
                        View details  <img src="{{ URL('image/aboutimage/10.svg') }}" alt="">
                    </p>
                </div>
                <div class="p-8 mb-4 flex-1 text-center rounded-lg ">
                    <div class="w-full text-center flex">
                        <img class="mx-auto" src="{{ URL('image/aboutimage/5.png') }}" alt="">
                    </div>
                    <h1 class="text-gray-800 my-2 font-bold">IFEOMA IWEGBU </h1>
                    <h3 class="text-gray-400 my-2 text-sm">Business Manager</h3>
                    <p class="text-sm flex text-gray-300 mt-2 gap-4 items-center justify-center text-center">
                        View details  <img  src="{{ URL('image/aboutimage/10.svg') }}" alt="">
                    </p>
                </div>
                <div class="p-8 mb-4 flex-1 text-center rounded-lg ">
                    <div class="w-full text-center flex">
                        <img class="mx-auto" src="{{ URL('image/aboutimage/6.png') }}" alt="">
                    </div>
                    <h1 class="text-gray-800 my-2 font-bold">EVENTUS AGWU</h1>
                    <h3 class="text-gray-400 my-2 text-sm">Co-fonder & Chief Operating Officer</h3>
                    <p class="text-sm flex justify-center text-gray-300 mt-2 gap-1 items-center text-center">
                        View details  <img src="{{ URL('image/aboutimage/10.svg') }}" alt="">
                    </p>
                </div>
               
                
            </div>
        </div>
    </main>
@endsection