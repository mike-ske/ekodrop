@extends('master.app')

@section('contents')
    <main class="w-full flex px-4 lg:px-20">
        <div style="margin-top: 40px;" class="md:mt-28 md:mb-10 mt-0 sm:flex items-center justify-between gap-8 w-full h-auto mx-auto">
            <div class="w-full flex-1 md:mt-10 py-4 wow animate__animated animate__fadeInLeft">
                <div class="w-full">
                    <h1 class="text-2xl md:text-3xl lg:text-5xl text-eko-blue font-black">
                        Your plug for quick and fast end-to
                        -end same-day delivery service 
                    </h1>
                </div>
               <div class="w-full my-8">
                    <h3 class="text-sm md:text-sm text-eko-blue font-semibold">
                        We make it possible for merchants and customers to conclude same-day 
                        buying and selling remotely.
                    </h3>
               </div>
                
            </div>
            <div class=" flex-1 mt-4 py-4 w-auto wow animate__animated animate__fadeInRight">
                <img style="width: 510px" src="{{ URL('image/aboutimage/1.png') }}" alt="">
            </div>
        </div>
    </main>

    <main class="w-full flex px-4 lg:px-20 bg-eko-blue" >
        <div class="mt-28 md:flex items-center justify-between gap-8 w-full h-auto mx-auto">
            <div class="w-full flex-1 mt-8 py-4">
                <div class="w-full wow animate__animated animate__fadeInUp">
                    <h1 class="text-lg text-eko-yellow font-semibold">
                        OUR STORY
                    </h1>
                    <div style="width: 39px;height: 4px;" class="mt-4 bg-eko-yellow wow animate__animated animate__fadeInLeft"></div>
                </div>
               <div class="w-full font-semibold md:w-10/12 my-8 leading-9 wow animate__animated animate__fadeInUp">
                    <p class="md:text-md text-white  font-semibold md:font-light" style="font-weight: 400">
                        Ekodrop began operations in June 2021 with just two bikes and organically grew its fleet to twenty bikes within the space of nine months. We grew revenue at an expedited pace of over 85% by the 9th month of doing business. We got  registered in November 2020 and undertook a pilot phase for 6 months. Ekodrop Logistics officially opened its corporate operations in June 2021. It has extended its reach to food, laundry, and e-commerce. All of which are centered around its core business of logistics.
                        <br><br>
                        In recent times, we  have been taking up corporate clients coupled with the ever-growing individual customer base. This dovetailed with a need to grow our fleets to haulage vehicles. This expansion is projected to cover a vast category of consumers, customer and corporate partner’s needs, the growth will be facilitated by the launch and onboarding of our Website, Mobile Application and the offline customer base.
                        <br><br>
                        Currently serving over seven hundred and fifty customers (corporates and Individuals), we unvaryingly welcome interested  individuals, equity partners, asset financiers, businesses and vendors in our adventure to the top 
                    </p>
               </div>
                
            </div>
            <div class="md:hidden mx-auto w-full mt-4 md:rotate-0 wow animate__animated animate__fadeInLeft">
                <img class="mx-auto" src="{{ URL('image/aboutimage/11.png') }}" alt="">
            </div>
            <div class="hidden md:flex mt-4 py-4 w-auto md:rotate-0 absolute md:right-0 wow animate__animated animate__fadeInLeft">
                <img src="{{ URL('image/aboutimage/9.png') }}" alt="">
            </div>
        </div>
    </main>

    <main class="w-full flex px-4 lg:px-20" style="background: rgba(255, 204, 41, 0.1);">
        <div class="mt-28  sm:flex items-center justify-center gap-8 w-full h-auto mx-auto">
            <div class="w-full flex-1 py-4 wow animate__animated animate__fadeInLeft">
                <div class="mx-auto w-full md:w-10/12">
                    <div class="w-full flex gap-4 items-center wow animate__animated animate__fadeInUp">
                        <div class="w-auto">
                            <img src="{{ URL('image/aboutimage/3.png') }}" alt="">
                        </div>
                        <h1 class="text-2xl md:text-3xl font-semibold text-eko-blue">
                            Mission
                        </h1>
                    </div>
                   <div class="w-full md:w-10/12 my-4 md:leading-9  wow animate__animated animate__fadeInUp">
                        <p class="text-md md:text-sm  font-semibold md:font-normal leading-6 text-eko-blue" >
                            To simplify the art of moving goods from point A to point B effortlessly, at a remarkable turnaround time.
                        </p>
                   </div>
                </div>
            </div>
            <div class="w-full flex-1 py-4 wow animate__animated animate__fadeInRight">
                <div class="mx-auto w-full md:w-10/12">
                    <div class="w-full flex gap-4 items-center wow animate__animated animate__fadeInUp">
                        <div class="w-auto">
                            <img src="{{ URL('image/aboutimage/8.png') }}" alt="">
                        </div>
                        <h1 class="text-2xl md:text-3xl font-semibold text-eko-blue">
                            Vision
                        </h1>
                    </div>
                   <div class="w-full md:w-10/12 my-4 md:leading-9">
                        <p class="text-md md:text-sm leading-6 font-semibold md:font-normal wow animate__animated animate__fadeInUp text-eko-blue" >
                            To be one of the leading and foremost logistics firms on the global frontline. 
                        </p>
                   </div>
                </div>
            </div>
        </div>
    </main>

    <main class="w-full md:flex px-4 lg:px-20">
        <div class="mt-28  md:flex items-center justify-between gap-8 w-full h-auto mx-auto">
            <div class="w-full flex-1 py-4 wow animate__animated animate__fadeInLeft">
               <div class="w-full my-8">
                    <p class="text-sm text-eko-blue font-semibold leading-6">
                        EKODROP Logistics is a courier, pick-up, and delivery service company with a mission  to safely meet our customer’s logistic needs within agreed timelines.
                        <br><br>
                        We pride ourselves in our effective transport system and business process flow, which affords our clients seamless transitions of their goods, within and outside Lagos State. In today’s fast world of social and e-commerce, we are your plugs for quick and fast end-to-end same-day delivery service. We make it possible for merchants and customers to conclude same-day buying and selling remotely.
                    </p>
               </div>
            </div>
            <div class=" flex-1 mt-4 py-4 w-auto wow animate__animated animate__fadeInRight">
                <img class="mx-auto" src="{{ URL('image/aboutimage/2.png') }}" alt="">
            </div>
        </div>
    </main>

    
    <main class="w-full px-4 lg:px-20 ">
        <div class="  w-full h-auto mx-auto">
            <div class="flex items-center md:items-start w-full flex-1 p-8 text-center md:text-left wow animate__animated animate__fadeInUp">
                <h1 class="text-4xl md:text-4xl font-bold md:font-bold text-eko-blue"  > 
                    Meet the Team
                </h1>
            </div>

            <div class="w-full md:flex gap-8">
                <div class="p-8 mb-4 flex-1 text-center rounded-lg ">
                    <div class="w-full text-center flex wow animate__animated animate__fadeInUp">
                        <img class="mx-auto" src="{{ URL('image/aboutimage/4.png') }}" alt="">
                    </div>
                    <h1 class="text-eko-blue my-2 font-bold wow animate__animated animate__fadeInUp">BABAJIDE ABIOLA </h1>
                    <h3 class="text-eko-blue my-2 text-sm wow animate__animated animate__fadeInUp font-semibold">Co-founder & Chief Executive Officer</h3>
                </div>
                <div class="p-8 mb-4 flex-1 text-center rounded-lg ">
                    <div class="w-full text-center flex wow animate__animated animate__fadeInUp">
                        <img class="mx-auto" src="{{ URL('image/aboutimage/5.png') }}" alt="">
                    </div>
                    <h1 class="text-eko-blue my-2 font-bold wow animate__animated animate__fadeInUp">IFEOMA IWEGBU </h1>
                    <h3 class="text-eko-blue my-2 text-sm wow animate__animated animate__fadeInUp font-semibold">Business Manager</h3>
                </div>
                <div class="p-8 mb-4 flex-1 text-center rounded-lg ">
                    <div class="w-full text-center flex wow animate__animated animate__fadeInUp">
                        <img class="mx-auto" src="{{ URL('image/aboutimage/6.png') }}" alt="">
                    </div>
                    <h1 class="text-eko-blue my-2 font-bold wow animate__animated animate__fadeInUp">EVENTUS AGWU</h1>
                    <h3 class="text-eko-blue my-2 text-sm wow animate__animated animate__fadeInUp font-semibold">Co-fonder & Chief Operating Officer</h3>
                </div>
               
                
            </div>
        </div>
    </main>
@endsection