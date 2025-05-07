@extends('layouts.master')

@section('content')
    <x-loading />
    <x-scroll-top-button />
    <section class="relative h-[35vh] sm:h-[50vh] md:h-[65vh] lg:h-[90vh] xl:h-screen bg-cover bg-center overflow-hidden">
        <div x-data="{
            images: [
                @foreach ($hero_banner as $item)
                    '{{ asset($item->images[app()->getLocale()]) }}'@if (!$loop->last),@endif
                @endforeach
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

    <section class="flex flex-col items-center text-center justify-center text-[#ffffff] py-20 sm:py-32">
        <h1 data-aos="fade-up" data-aos-duration="1000"
            class="mt-2 max-w-[200px] sm:max-w-[500px] leading-none uppercase text-[#A59465] text-[40px] sm:text-[50px] md:text-[100px] font-[800]">
            {{ $contact_us->title[app()->getLocale()] }}</h1>

        <div class="flex sm:hidden items-center gap-4 mt-4">
            <a data-aos="fade-up" data-aos-duration="1000" href="{{ $socials->facebook }}"
                class="text-[14px] md:text-[16px] flex items-center justify-center space-x-2 text-[#A59465] w-10 h-10 rounded-full mt-4 border-2 border-[#A59465]
                    transition-all duration-500 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    strokeLinecap="round" strokeLinejoin="round" width="24" height="24" strokeWidth="2">
                    <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                </svg>
            </a>
            <a data-aos="fade-up" data-aos-duration="1000" href="{{ $socials->telegram }}"
                class="text-[14px] md:text-[16px] flex items-center justify-center space-x-2 text-[#A59465] w-10 h-10 rounded-full mt-4 border-2 border-[#A59465]
                    transition-all duration-500 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    strokeLinecap="round" strokeLinejoin="round" width="24" height="24" strokeWidth="2">
                    <path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4"></path>
                </svg>
            </a>
            <a data-aos="fade-up" data-aos-duration="1000" href="tel:{{ $socials->phone_number }}"
                class="text-[14px] md:text-[16px] flex items-center justify-center space-x-2 text-[#A59465] w-10 h-10 rounded-full mt-4 border-2 border-[#A59465]
                    transition-all duration-500 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    strokeLinecap="round" strokeLinejoin="round" width="24" height="24" strokeWidth="2">
                    <path
                        d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                    </path>
                </svg>
            </a>
        </div>

        <div class="hidden sm:flex flex-wrap justify-center gap-4 mt-10">
            <div class="flex justify-center gap-4 w-full">
                <a data-aos="fade-up" data-aos-duration="1000" href="{{ $socials->facebook }}"
                    class="w-fit text-[12px] md:text-[16px] flex items-center space-x-2 px-4 py-2 rounded-full border border-[#A59465]
                    transition-all duration-500 ease-in-out text-black">
                    <span class="w-9 h-9 flex items-center justify-center bg-[#A59465] rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white"
                            strokeLinecap="round" strokeLinejoin="round" width="24" height="24"
                            strokeWidth="1.5">
                            <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                            </path>
                        </svg>
                    </span>
                    <span>{{ $socials->facebook_name }}</span>
                </a>
            </div>

            <div class="flex justify-center gap-4 w-full">
                <a data-aos="fade-up" data-aos-duration="1000" href="{{ $socials->telegram }}"
                    class="w-fit text-[12px] md:text-[16px] flex items-center space-x-2 px-4 py-2 rounded-full border border-[#A59465]
                    transition-all duration-500 ease-in-out text-black">
                    <span class="w-9 h-9 flex items-center justify-center bg-[#A59465] rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white"
                            strokeLinecap="round" strokeLinejoin="round" width="24" height="24"
                            strokeWidth="1.5">
                            <path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4"></path>
                        </svg>
                    </span>
                    <span>{{ $socials->telegram }}</span>
                </a>
                <a data-aos="fade-up" data-aos-duration="1000" href="tel:{{ $socials->phone_number }}"
                    class="w-fit text-[14px] md:text-[16px] flex items-center space-x-2 px-4 py-2 rounded-full border border-[#A59465]
                    transition-all duration-500 ease-in-out text-black">
                    <span class="w-9 h-9 flex items-center justify-center bg-[#A59465] rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white"
                            strokeLinecap="round" strokeLinejoin="round" width="24" height="24"
                            strokeWidth="1.5">
                            <path
                                d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                            </path>
                        </svg>
                    </span>
                    <span>+855 {{ ltrim($socials->phone_number, '0') }}</span>
                </a>
            </div>
        </div>
    </section>
@endsection
