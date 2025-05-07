@extends('layouts.master')

@section('content')
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


    {{-- message --}}
    <section class="relative top-0 lg:top-[-150px] z-10 max-w-7xl mx-auto items-center px-0 sm:px-4 2xl:px-0">
        {{-- labtop --}}
        <div class='hidden lg:block overflow-hidden'>
            <div class='flex items-center justify-center space-x-14 py-4 md:py-2 bg-[#292929]/20 rounded-t-md'
                data-aos='fade-up' data-aos-duration='1000'>

                @foreach ($profileNav as $item)
                    <a href='#{{ $item->link }}' class="flex justify-center w-[170px]">
                        <img src={{ asset($item->icon) }} alt=""
                            class='w-12 h-12 object-contain bg-[#131211] p-2 rounded-md' />
                    </a>
                @endforeach
            </div>

            <div class='flex items-center justify-center space-x-14 py-4 md:py-2 rounded-t-md' data-aos='fade-up'
                data-aos-duration='1200'>
                @foreach ($profileNav as $item)
                    <div class="flex justify-center w-[170px] font-[600] text-gradient">
                        <a href='#{{ $item->link }}'>{{ $item->title[app()->getLocale()] }}</a>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- mobile --}}
        <div class='grid lg:hidden grid-cols-2 items-center justify-center py-6 md:py-10 gap-y-4'>
            @foreach ($profileNav as $item)
                <a href='#{{ $item->link }}' class='flex flex-col items-center justify-center'>
                    <img src={{ asset($item->icon) }} alt=""
                        class='w-12 h-12 object-contain bg-[#131211] p-2 rounded-md' />
                    <div class="p-2 text-[14px] font-[600] text-gradient h-[50px] text-center">
                        <p>{{ $item->title[app()->getLocale()] }}</p>
                    </div>
                </a>
            @endforeach
            {{-- <a href='#message' class='flex flex-col items-center justify-center'>
                <img src={{ asset('assets/images/icons/icon-8.png') }} alt=""
                    class='w-12 h-12 object-contain bg-[#131211] p-2 rounded-md' />
                <div class="p-2 font-[600] text-gradient">
                    <p>{{ __('messages.message') }}</p>
                </div>
            </a>
            <a href='#vision' class='flex flex-col items-center justify-center'>
                <img src={{ asset('assets/images/icons/icon-2.png') }} alt=""
                    class='w-12 h-12 object-contain bg-[#131211] p-2 rounded-md' />
                <div class="p-2 font-[600] text-gradient">
                    <p>{{ __('messages.vision') }}</p>
                </div>
            </a>
            <a href='#mission' class='flex flex-col items-center justify-center'>
                <img src={{ asset('assets/images/icons/icon-3.png') }} alt=""
                    class='w-12 h-12 object-contain bg-[#131211] p-2 rounded-md' />
                <div class="p-2 font-[600] text-gradient">
                    <p>{{ __('messages.mission') }}</p>
                </div>
            </a>
            <a href='#core_values' class='flex flex-col items-center justify-center'>
                <img src={{ asset('assets/images/icons/icon-4.png') }} alt=""
                    class='w-12 h-12 object-contain bg-[#131211] p-2 rounded-md' />
                <div class="p-2 font-[600] text-gradient">
                    <p>{{ __('messages.core_values') }}</p>
                </div>
            </a> --}}
        </div>


        <div id='message'>
            <hr
                style="height: 8px; border: none; background: linear-gradient(90deg, #EBB81B 0%, #DFAD16 45.5%, #FAF088 100%)" />
            <div
                class='grid grid-cols-1 md:grid-cols-3 items-center gap-10 py-10 md:py-20 px-4 md:px-20 overflow-hidden bg-white/30'>
                <div class='text-[30px] text-gradient font-[700] flex items-center justify-start md:justify-center'
                    data-aos='fade-right' data-aos-duration='1500'>
                    <img src={{ asset($msg->image) }} alt="" class="w-full h-full object-cover object-center" />
                </div>
                <div class='col-span-2 space-y-3 text-[#000] text-[12px] xl:text-[15px]'>
                    <h1 class='text-[20px] md:text-[30px] text-gradient font-[700]'>{{ $msg->title[app()->getLocale()] }}
                    </h1>
                    <p class="p-0 whitespace-normal">
                        {!! nl2br(e($msg->content[app()->getLocale()] ?? '')) !!}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class='relative top-0 lg:top-[-170px]'>
        {{-- banner --}}
        <div data-aos='fade-up' data-aos-duration='1000'>
            <img src={profile} alt="" class='w-full h-auto object-cover object-center' />
        </div>

        {{-- vision --}}
        <div id='vision' class='bg-[#F1EBDB] w-full mt-5'>
            <div class='grid grid-cols-1 md:grid-cols-3 gap-4 max-w-7xl mx-auto items-center py-14 md:py-16 px-4 md:px-20'
                data-aos='fade-right' data-aos-duration='1000'>
                <div class='flex justify-center'>
                    <img src={{ asset($vision->image) }} alt="" class='w-32 md:w-40' />
                </div>
                <div class='text-[12px] md:text-[14px] col-span-2'>
                    <h1 class='text-[#A59465] text-[20px] md:text-[30px] font-[700]'>
                        {{ $vision->title[app()->getLocale()] }}</h1>
                    <p>{{ $vision->content[app()->getLocale()] }}</p>
                </div>
            </div>
        </div>
        {{-- mission --}}
        <div id='mission' class='bg-[#ffffff] w-full overflow-hidden'>
            <div class='grid grid-cols-1 md:grid-cols-3 gap-4 max-w-7xl mx-auto items-center py-10 md:py-20 px-4 md:px-20'
                data-aos='fade-left' data-aos-duration='1000'>
                <div class='flex justify-center'>
                    <img src={{ asset($mission->image) }} alt="" class='w-32 md:w-40' />
                </div>
                <div class='text-[12px] md:text-[14px] col-span-2'>
                    <h1 class='text-[#A59465] text-[20px] md:text-[30px] font-[700]'>
                        {{ $mission->title[app()->getLocale()] }}</h1>
                    <p>{{ $mission->content[app()->getLocale()] }}</p>
                </div>
            </div>
        </div>
        {{-- Core Values --}}
        <div id='core_values' class='bg-[#F1EBDB] w-full'>
            <div class='grid grid-cols-1 md:grid-cols-3 gap-4 max-w-7xl mx-auto items-center py-10 px-4 md:px-20'>
                <div class='flex justify-center' data-aos='fade-right' data-aos-duration='1000'>
                    <img src={{ asset($coreValue_title->image) }} alt="" class='w-32 md:w-40' />
                </div>
                <div class='text-[12px] md:text-[14px] col-span-2'>
                    <h1 class='text-[#A59465] text-[20px] md:text-[30px] font-[700]' data-aos='fade-up'
                        data-aos-duration='1000'>{{ $coreValue_title->title[app()->getLocale()] }}</h1>
                    <div class='grid grid-cols-1 md:grid-cols-2 gap-4 mt-4'>

                        @foreach ($core_values as $core_value)
                            <div @if ($core_value->id == 5) id="5"
                            class="border border-[#A59465] flex flex-col p-4 col-span-1 md:col-span-2"
                        @else
                            class="border border-[#A59465] flex flex-col p-4" @endif
                                data-aos="fade-up" data-aos-duration="1200">
                                <h1 class='font-[700] text-[#A59465]'>{{ $core_value->title[app()->getLocale()] }}</h1>
                                <p>{{ $core_value->content[app()->getLocale()] }}</p>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>


        {{-- <div class="max-w-7xl mx-auto py-10 md:py-20 px-2">
            <video class="w-full h-auto rounded-lg shadow-lg" controls>
                <source src={{ asset('assets/video/videos.mp4') }} type="video/mp4" />
                Your browser does not support the video tag.
            </video>
        </div> --}}
        @php
            $locale = app()->getLocale();
            $videoPath = match ($locale) {
                'en' => asset('assets/video/videos-en.mp4'),
                'ch' => asset('assets/video/videos-ch.mp4'),
                default => asset('assets/video/videos-en.mp4'),
            };
        @endphp

        <div class="max-w-7xl mx-auto py-10 md:py-20 px-2">
            <video class="w-full h-auto rounded-lg shadow-lg" controls>
                <source src="{{ $videoPath }}" type="video/mp4" />
                Your browser does not support the video tag.
            </video>
        </div>


        {{-- banner footer --}}
        <div class="relative mt-4">
            <img src={{ asset($footer_banner->image) }} alt="Image description"
                class="w-full h-[250px] sm:h-[400px] lg:h-[600px] object-cover object-center" />
            <div class="absolute inset-0 bg-blend-multiply bg-[#A59465CC]"></div>
            <div class="absolute inset-0 flex justify-center items-center text-white px-4" data-aos="fade-up"
                data-aos-duration="1500">
                <Reveal>
                    <p
                        class="text-[25px] sm:text-[35px] md:text-[45px] lg:text-[70px] max-w-[60rem] leading-none mx-auto text-center font-[800] text-gradient">
                        {{ $footer_banner->title[app()->getLocale()] }}</p>
                </Reveal>
            </div>
        </div>
    </section>
@endsection
