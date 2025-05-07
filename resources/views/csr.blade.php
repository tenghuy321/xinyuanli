@extends('layouts.master')

@section('css')
    <style>
        .custom-scrollbar::-webkit-scrollbar {
            width: 8px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background-color: #1e1e1e;
            border-radius: 10px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background-color: #050505;
            border-radius: 10px;
        }
    </style>
@endsection

@section('content')
    <x-loading />
    <x-scroll-top-button />
    <section class="bg-[#1E1E1E]">
        <div class="pt-[5rem] md:pt-[7rem] lg:pt-[12rem] min-h-screen max-w-7xl mx-auto px-4">

            {{-- CSR --}}
            <div id='csr' class='pb-10 md:pb-20 px-4'>
                <div class="flex items-end leading-none">
                    <h1 class="text-[20px] md:text-[30px] text-gradient font-[700] w-full md:w-[25%] lg:w-[20%]">
                        {{ __('messages.csr_activities') }}</h1>
                    <hr class='w-full md:w-[75%] lg:w-[80%] ml-2'
                        style="height: 4px; border: none; background: linear-gradient(90deg, #EBB81B 0%, #DFAD16 45.5%, #FAF088 100%)" />
                </div>

                <div class="overflow-y-auto custom-scrollbar max-h-[530px] lg:max-h-[580px] mt-10 md:mt-20"
                    style="padding-right: 10px">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <img src={{ asset('assets/images/csr/csr-1.jpg') }} alt=""
                            class='w-full h-[250px] lg:h-[280px] object-cover' />
                        <img src={{ asset('assets/images/csr/csr-2.jpg') }} alt=""
                            class='w-full h-[250px] lg:h-[280px] object-cover' />
                        <img src={{ asset('assets/images/csr/csr-3.jpg') }} alt=""
                            class='w-full h-[250px] lg:h-[280px] object-cover' />
                        <img src={{ asset('assets/images/csr/csr-4.jpg') }} alt=""
                            class='w-full h-[250px] lg:h-[280px] object-cover' />
                        <img src={{ asset('assets/images/csr/csr-5.jpg') }} alt=""
                            class='w-full h-[250px] lg:h-[280px] object-cover' />
                        <img src={{ asset('assets/images/csr/csr-6.jpg') }} alt=""
                            class='w-full h-[250px] lg:h-[280px] object-cover' />
                        <img src={{ asset('assets/images/csr/csr-7.jpg') }} alt=""
                            class='w-full h-[250px] lg:h-[280px] object-cover' />
                        <img src={{ asset('assets/images/csr/csr-8.jpg') }} alt=""
                            class='w-full h-[250px] lg:h-[280px] object-cover' />
                        <img src={{ asset('assets/images/csr/csr-9.jpg') }} alt=""
                            class='w-full h-[250px] lg:h-[280px] object-cover' />
                        <img src={{ asset('assets/images/csr/csr-10.jpg') }} alt=""
                            class='w-full h-[250px] lg:h-[280px] object-cover' />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class='relative z-1 py-4'>
        {{-- banner footer --}}
        <div class="relative mt-4">
            <img src={{ asset('assets/images/home/banner_footer.png') }} alt="Image description"
                class="w-full h-[250px] sm:h-[400px] lg:h-[600px] object-cover object-center" />
            <div class="absolute inset-0 bg-blend-multiply bg-[#A59465]/80"></div>
            <div class="absolute inset-0 flex justify-center items-center px-4" data-aos="fade-up" data-aos-duration="1500">
                <p
                    class="text-[25px] sm:text-[35px] md:text-[45px] lg:text-[70px] max-w-[60rem] leading-none mx-auto text-center font-[800] text-gradient">
                    {{ __('messages.banner_title') }}</p>
            </div>
        </div>
    </section>
@endsection
