@extends('service')

@section('service-content')
    <div class='w-full grid grid-cols-1 md:grid-cols-3 gap-4 lg:gap-10 pb-20' style="background: rgba(30, 30, 30, 0.95)">
        <div class='px-2 md:pr-0 md:pl-12 xl:pl-20 py-14 lg:pb-0 lg:pt-20 xl:pt-32  col-span-1 md:col-span-2 text-[#fff]'>
            <div class='flex items-end leading-none pl-4 md:pl-8'>
                <h1 class='text-[20px] lg:text-[30px] text-gradient font-[700] text-start w-full lg:w-2/3 2xl:w-1/2'
                    data-aos='fade-right' data-aos-duration='1500'>{{ $auditTitle->title[app()->getLocale()] }}</h1>
                <hr class='w-full ml-1'
                    style="height: 4px; border: none; background: linear-gradient(90deg, #EBB81B 0%, #DFAD16 45.5%, #FAF088 100%)" />
            </div>

            @foreach ($audites as $index => $item)
                <p data-aos='fade-right' data-aos-duration='1200' class='text-[12px] pt-10 md:text-[16px] pl-5 text-white'>
                    <span class='text-[13px] md:text-[17px] font-[700] text-[#EBB81B]'>{{ $index+1 }}.</span>
                    {{ $item->title[app()->getLocale()] }}</p>
                <p data-aos='fade-right' data-aos-duration='1200'
                    class='text-[12px] pt-3 md:text-[16px] pl-5 sm:pl-10 text-white'>{{ $item->content[app()->getLocale()] }}
                </p>
            @endforeach
        </div>
        <div class='lg:pt-20 xl:pt-36 pb-10 md:py-9'>
            <img src={{ asset($auditImage->image) }} alt=""
                class='w-full h-[300px] md:h-[500px] object-cover object-center' />
            <hr class='w-full'
                style="height: 4px, border: none, background: linear-gradient(90deg, #EBB81B 0%, #DFAD16 45.5%, #FAF088 100%)" />
        </div>
    </div>
@endsection
