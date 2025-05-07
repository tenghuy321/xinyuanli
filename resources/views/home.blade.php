@extends('layouts.master')

@section('content')
    <x-loading />
    <x-scroll-top-button />

    {{-- <section class="relative h-[35vh] sm:h-[50vh] md:h-[65vh] lg:h-[90vh] xl:h-screen overflow-hidden">
        <div
            x-data="{
                images: [
                    @foreach ($hero_banner as $item)
                        '{{ asset($item->images[app()->getLocale()]) }}'@if (!$loop->last),@endif
                    @endforeach
                ],
                activeIndex: 0,
                interval: null,

                start() {
                    this.interval = setInterval(() => {
                        this.next();
                    }, 3000);
                },
                next() {
                    this.activeIndex = (this.activeIndex + 1) % this.images.length;
                },
                init() {
                    this.start();
                }
            }"
            x-init="init"
            class="w-full h-full relative"
        >
            <!-- Slider wrapper -->
            <div
                class="flex transition-transform duration-700 ease-in-out h-full"
                :style="'transform: translateX(-' + (activeIndex * 100) + '%)'"
            >
                <!-- Slides -->
                <template x-for="(image, index) in images" :key="index">
                    <div class="w-full flex-shrink-0 h-full">
                        <img :src="image" alt="" class="w-full h-full object-cover" />
                    </div>
                </template>
            </div>
        </div>
    </section> --}}

    <section class="relative h-[35vh] sm:h-[50vh] md:h-[65vh] lg:h-[90vh] xl:h-screen bg-cover bg-center overflow-hidden">
        <div x-data="{
            images: [
                @foreach ($hero_banner as $item)
                    '{{ asset($item->images[app()->getLocale()]) }}'@if (!$loop->last),@endif @endforeach
            ],
            activeIndex: 0,
            interval: null,

            start() {
                this.interval = setInterval(() => {
                    this.activeIndex = (this.activeIndex + 1) % this.images.length;
                }, 3000);
            },

            init() {
                this.start();
            }
        }" x-init="init" class="relative w-full h-full overflow-hidden">
            <template x-for="(image, index) in images" :key="index">
                <div class="absolute inset-0 transition-opacity duration-1000"
                    :class="{ 'opacity-0': activeIndex !== index, 'opacity-100': activeIndex === index }">
                    <img :src="image" alt="" class="w-full h-full object-cover">
                </div>
            </template>
        </div>
    </section>


    <section
        class="max-w-7xl mx-auto items-center relative top-0 lg:top-[-150px] z-10 overflow-hidden px-0 sm:px-4 2xl:px-0">
        {{-- labtop --}}
        <div class='hidden lg:block overflow-hidden'>
            <div class='flex items-center justify-center space-x-14 py-4 md:py-2 bg-[#29292980] rounded-t-md'
                data-aos='fade-up' data-aos-duration='1000'>
                @foreach ($homeNav as $item)
                    <a href='#{{ $item->link }}' class="flex justify-center w-[120px]">
                        <img src={{ asset($item->icon) }} alt=""
                            class='w-12 h-12 object-contain bg-[#131211] p-2 rounded-md' />
                    </a>
                @endforeach
            </div>

            <div class='flex items-start justify-center space-x-14 py-4 md:py-2 rounded-t-md' data-aos='fade-up'
                data-aos-duration='1200'>
                @foreach ($homeNav as $item)
                    <div class="flex justify-center w-[120px] font-[500] text-gradient text-center">
                        <a href='#{{ $item->link }}'>{{ $item->title[app()->getLocale()] }}</a>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- mobile --}}
        <div class='grid lg:hidden grid-cols-2 items-center justify-center py-6 md:py-10 gap-y-4'>
            @foreach ($homeNav as $item)
                <a href='#{{ $item->link }}' class='flex flex-col items-center justify-center'>
                    <img src={{ asset($item->icon) }} alt=""
                        class='w-12 h-12 object-contain bg-[#131211] p-2 rounded-md' />
                    <div class="p-2 text-[14px] font-[500] text-gradient text-center">
                        <p>{{ $item->title[app()->getLocale()] }}</p>
                    </div>
                </a>
            @endforeach
        </div>

        @if ($homePage && $homePage->active == 1)
            <div id='who'>
                <hr
                    style="height: 8px; border: none; background: linear-gradient(90deg, #BA7F14 0%, #FAF088 47.5%, #EBB81B 100%)" />
                <div class='flex flex-col space-y-10 gap-4 py-10 md:py-16 px-4 lg:px-32 2xl:px-40 overflow-hidden'
                    style="background: rgba(30, 30, 30, 0.95)">
                    <div data-aos='fade-right' data-aos-duration='1000' class='text-[30px] text-gradient font-[700]'>
                        {{ $homePage->title[app()->getLocale()] }}
                    </div>
                    <div class='space-y-3 text-[#ffffff] text-[12px] lg:text-[14px]'>
                        <h1 data-aos='fade-right' data-aos-duration='1000'
                            class='text-[20px] md:text-[25px] font-[700] text-gradient'>
                            {{ $homePage->sub_title[app()->getLocale()] }}
                        </h1>

                        <p data-aos='fade-left' data-aos-duration='1000'>
                            {!! nl2br(e($homePage->content[app()->getLocale()] ?? '')) !!}
                        </p>
                    </div>
                </div>
            </div>
        @endif
    </section>


    <section class='relative top-0' style="{{ ($homePage && $homePage->active == 1) ? 'top: -170px;' : 'top: 0;' }}">
        @if ($homeService && $homeService->active == 1)
            {{-- our service --}}
            <div class='max-w-7xl mx-auto px-4 py-10 text-[12px] md:text-[14px] overflow-hidden' id='our_services'>
                <h1 class='text-[20px] md:text-[30px] font-[900] text-[#A59465]' data-aos='fade-right'
                    data-aos-duration='1000'>
                    {{ $homeService->title[app()->getLocale()] }}
                </h1>
                <p class='text-[20px] md:text-[30px] font-[900] text-[#000000] py-4' data-aos='fade-left'
                    data-aos-duration='1200'>{{ $homeService->sub_title[app()->getLocale()] }}</p>
                <p data-aos='fade-right' data-aos-duration='1400'>{{ $homeService->content[app()->getLocale()] }}</p>

                <div class='grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 pt-10'>

                    @foreach ($listServices as $listService)
                        <div class='relative rounded-[10px] bg-[#EAE6DCCC] py-20' data-aos='fade-up'
                            data-aos-duration='1000'>
                            <p class='py-1 px-4 text-[16px] md:text-[18px] font-[700] text-[#1A1916]'
                                style="background: linear-gradient(90deg, #EBB81B 0%, #DFAD16 45.5%, #FAF088 100%)">
                                {{ $listService->title[app()->getLocale()] }}</p>
                            <ul class="max-w-md space-y-1 text-[#000000]  px-5 pt-4">
                                <p>{{ $listService->content[app()->getLocale()] }}</p>
                            </ul>

                            <a href={{ route($listService->link) }}
                                class='py-2 text-center rounded-md border border-[#EBB81B] w-[90%] absolute bottom-4 left-1/2 -translate-x-1/2 hover:bg-[#EBB81B] hover:text-white tracking-wider font-[600] hover:tracking-widest transition duration-200'>{{ __('messages.read_more') }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        @if ($uniquenessTitle && $uniquenessTitle->active == 1)
            {{-- Uniqueness --}}
            <div class='w-full py-12 md:py-14' id='uniqueness'>
                <h1 class='text-[20px] md:text-[30px] text-[#A59465] font-[700] max-w-7xl mx-auto px-4'
                    data-aos='fade-right' data-aos-duration='1000'>{{ $uniquenessTitle->title[app()->getLocale()] }}</h1>
                <div class='grid grid-cols-1 md:grid-cols-2 max-w-7xl mx-auto gap-5 mt-4 px-4 overflow-hidden'>

                    @foreach ($uniqueness as $uniq)
                        <div @if ($uniq->id == 5) id="5"
                        class="col-span-1 md:col-span-2 flex flex-col md:flex-row md:space-x-4 items-center border border-[#A59465] p-4"
                    @else
                        class="flex flex-col md:flex-row md:space-x-4 items-center border border-[#A59465] p-4" @endif
                            data-aos="fade-right" data-aos-duration="1200">
                            <h1 class="text-[50px] md:text-[100px] font-[700] text-gradient">{{ $uniq->num }}</h1>
                            <div class="text-[13px] md:text-[15px]">
                                <h1 class="text-[#A59465] font-[700]">{{ $uniq->title[app()->getLocale()] }}</h1>
                                <p>{{ $uniq->content[app()->getLocale()] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        @if ($csrTitle && $csrTitle->active == 1)
            <div class="max-w-7xl mx-auto px-4">
                {{-- CSR --}}
                <div id='csr' class='pb-10 md:pb-20'>
                    <div class="flex items-end leading-none">
                        <h1 class="text-[20px] md:text-[30px] text-[#A59465] font-[700] w-full md:w-[25%] lg:w-[20%]">
                            {{ $csrTitle->title[app()->getLocale()] }}</h1>
                    </div>

                    <div class="overflow-y-auto custom-scrollbar max-h-[530px] lg:max-h-[580px] mt-10 md:mt-20"
                        style="padding-right: 10px">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            @foreach ($csrs as $csr)
                                <img src={{ asset($csr->image) }} alt=""
                                    class='w-full h-[250px] lg:h-[280px] object-cover' />
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif


        {{-- hidden --}}
        @if ($hiddenTitle && $hiddenTitle->active == 1)
            <div id='hidden' class="w-full max-w-7xl mx-auto px-4">
                <hr
                    style="height: 8px; border: none; background: linear-gradient(90deg, #BA7F14 0%, #FAF088 47.5%, #EBB81B 100%)" />
                <div class='flex flex-col space-y-10 gap-4 py-10 overflow-hidden px-20'
                    style="background: rgba(30, 30, 30, 0.95)">
                    <div data-aos='fade-right' data-aos-duration='1000' class='text-[30px] text-gradient font-[700]'>
                        {{ $hiddenTitle->title[app()->getLocale()] }}
                    </div>
                    <div class='space-y-3 text-[#ffffff] text-[12px] lg:text-[14px]'>
                        <h1 data-aos='fade-right' data-aos-duration='1000'
                            class='text-[20px] md:text-[25px] font-[700] text-gradient'>
                            {{ $hiddenTitle->sub_title[app()->getLocale()] }}
                        </h1>

                        <p data-aos='fade-left' data-aos-duration='1000'>
                            {!! nl2br(e($hiddenTitle->content[app()->getLocale()] ?? '')) !!}
                        </p>
                    </div>
                </div>
            </div>
        @endif


        <div class="relative mt-10 md:mt-20">
            <img src={{ asset($footer_banner->image) }} alt="Image description"
                class="w-full h-[250px] sm:h-[400px] lg:h-[600px] object-cover object-center" />
            <div class="absolute inset-0 bg-blend-multiply bg-[#A59465CC]"></div>
            <div class="absolute inset-0 flex justify-center items-center text-white px-4" data-aos="fade-up"
                data-aos-duration="1500">
                <div>
                    <p
                        class="text-[25px] sm:text-[35px] md:text-[45px] lg:text-[70px] max-w-[60rem] leading-none mx-auto text-center font-[800] text-gradient">
                        {{ $footer_banner->title[app()->getLocale()] }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
