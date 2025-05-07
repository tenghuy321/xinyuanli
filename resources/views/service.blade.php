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

    <section class="relative top-0 lg:top-[-150px] z-10">
        <div class='max-w-7xl mx-auto items-center px-0 sm:px-4 2xl:px-0'>
            {{-- labtop --}}
            <div class='hidden lg:block overflow-hidden'>
                <div class='flex items-center justify-center space-x-20 py-4 md:py-2 bg-[#29292980] rounded-t-md'
                    data-aos='fade-up' data-aos-duration='1000'>

                    @foreach ($serviceTitle as $item)
                        <a href="{{ route($item->link) }}"
                            class='flex justify-center w-[80px] lg:w-[95px] xl:w-[115px]'>
                            <img src={{ asset($item->icon) }} alt=""
                                class='w-12 h-12 object-contain bg-[#131211] p-2 rounded-md' />
                        </a>
                    @endforeach
                </div>

                <div class='flex items-center justify-center space-x-14 py-4 md:py-2 rounded-t-md' data-aos='fade-up'
                    data-aos-duration='1200'>

                    @foreach ($serviceTitle as $item)
                        <div class=''>
                            <a href="{{ route($item->link) }}"
                                class="flex justify-center w-[135px] text-[14px] lg:text-[14px] xl:text-[16px] lg:w-[120px] xl:w-[140px] text-center {{ request()->routeIs($item->link) ? 'text-gradient font-semibold' : 'text-white font-light' }}">{{ $item->title[app()->getLocale()] }}</a>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- mobile --}}
            <div class='grid lg:hidden grid-cols-2 md:grid-cols-3 items-center justify-center py-6 md:py-10 gap-y-4'>
                @foreach ($serviceTitle as $item)
                    <a href="{{ route($item->link) }}" class="flex flex-col items-center justify-center {{ request()->routeIs($item->link) ? 'text-gradient' : 'text-black' }}">
                        <img src={{ asset($item->icon) }} alt="" class='w-12 h-12 object-contain bg-[#131211] p-2 rounded-md' />
                        <div class="text-[12px] sm:text-[13px] p-2 font-[500] text-center h-[50px]">
                            <p>{{ $item->title[app()->getLocale()] }}</p>
                        </div>
                    </a>
                @endforeach
            </div>

            <hr style="height: 8px; border: none; background: linear-gradient(90deg, #EBB81B 0%, #DFAD16 45.5%, #FAF088 100%)" />
        </div>

        {{-- Service content --}}
        @yield('service-content')
    </section>

    <section class='relative top-0 md:-top-[170px] z-1 py-4'>
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
    </section>
@endsection
