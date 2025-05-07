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

    <div class='relative top-[-20px] md:-top-[50px]'>
        <hr
            style="height: 8px; border: none; background: linear-gradient(90deg, #EBB81B 0%, #DFAD16 45.5%, #FAF088 100%)" />
    </div>

    <div class="flex flex-col items-center text-[40px] sm:text-[50px] px-4 md:px-0 md:text-[100px] font-[800] pt-20"
        data-aos='fade-up' data-aos-duration='1000'>
        <p class='max-w-[500px] mx-auto text-center leading-none text-[#A59465]'>{{ $careerTitle->sub_title[app()->getLocale()] }}
        </p>
        <div
            class='inline-flex items-center justify-center text-[14px] font-[400] space-x-4 border border-[#A59465] pr-6 pl-2 py-1 mt-5 rounded-[30px]'>
            <svg class="w-8 h-8" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M22.5 45C10.0934 45 0 34.9066 0 22.5C0 10.0934 10.0934 0 22.5 0C34.9066 0 45 10.0934 45 22.5C45 34.9066 34.9066 45 22.5 45ZM34.1682 30.4041C34.4456 30.4041 34.6714 30.1784 34.6714 29.9009V15.7754L23.2236 24.8661C23.0118 25.0344 22.7558 25.1185 22.4999 25.1185C22.2441 25.1185 21.9881 25.0343 21.7762 24.8661L10.3286 15.7754V29.9009C10.3286 30.1784 10.5543 30.4041 10.8317 30.4041H34.1682ZM32.4139 14.5959L22.5 22.4687L12.586 14.5959H32.4139ZM36.999 15.0991V29.9011C36.999 31.4619 35.729 32.7319 34.1682 32.7319H10.8317C9.27079 32.7319 8.00103 31.4619 8.00103 29.9011V15.0991C8.00103 13.5382 9.27088 12.2684 10.8317 12.2684H34.1682C35.729 12.2683 36.999 13.5382 36.999 15.0991Z"
                    fill="#A59465" />
            </svg>
            <a href='https://mail.google.com/mail/?view=cm&fs=1&to={{ $socials->email }}'>{{ $socials->email }}</a>
        </div>
    </div>

    <div data-aos='fade-up' data-aos-duration='1000' class="relative w-full grid grid-cols-1 md:grid-cols-2 max-w-7xl mx-auto px-2 gap-4">
        @foreach ($our_careers as $our_career)
            <img src={{ asset($our_career->image) }} alt=""
                class='w-full h-full object-cover object-center' />
        @endforeach
    </div>
    {{-- banner footer --}}
    <div class="relative mt-4">
        <img src={{ asset($footer_banner->image) }} alt="Image description"
            class="w-full h-[250px] sm:h-[400px] lg:h-[600px] object-cover object-center" />
        <div class="absolute inset-0 bg-blend-multiply bg-[#A59465CC]"></div>
        <div class="absolute inset-0 flex justify-center items-center text-white px-4" data-aos="fade-up"
            data-aos-duration="1500">
            <p
                class="text-[25px] sm:text-[35px] md:text-[45px] lg:text-[70px] max-w-[60rem] leading-none mx-auto text-center font-[800] text-gradient">
                {{ $footer_banner->title[app()->getLocale()] }}</p>
        </div>
    </div>
@endsection
