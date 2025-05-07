@extends('service')

@section('service-content')
<div class='w-full grid grid-cols-1 md:grid-cols-3 gap-4 lg:gap-10 overflow-hidden' style="background: rgba(30, 30, 30, 0.95)">
    <div class='px-2 md:pr-0 md:pl-12 xl:pl-20 py-14 lg:pb-0 lg:pt-20 xl:pt-32 col-span-1 md:col-span-2'>
        <div class='flex items-end leading-none pl-4 md:pl-8'>
            <h1 class='text-[20px] xl:text-[30px] text-gradient font-[700] w-full lg:w-2/3 pb-1' data-aos='fade-right' data-aos-duration='1500'>{{ $licensingTitle->title[app()->getLocale()] }}</h1>
            <hr class='w-[300px] md:w-[500px] ml-3' style="height: 4px; border: none; background: linear-gradient(90deg, #EBB81B 0%, #DFAD16 45.5%, #FAF088 100%)" />
        </div>
        <p data-aos='fade-right' data-aos-duration='1200' class='text-[#fff] pt-5 lg:pt-10 text-[12px] pl-5 sm:pl-10 md:text-[14px]'>{{ $licensingImage->title[app()->getLocale()] }}</p>
        <div class='pt-5 pb-10 text-[12px] lg:text-[14px] pl-5 sm:pl-10 md:pl-0'>
            <ul class='pt-5 text-[#fff] space-y-4 pl-5 sm:pl-10 list-disc'>
                @foreach ($licensinges as $licensing)
                    <li class='font-[700]' data-aos='fade-right' data-aos-duration='1200'>
                        {{ $licensing->title[app()->getLocale()] }}
                        <div class='flex flex-col font-[300] pl-5 space-y-2 pt-2'>
                            <p>{{ $licensing->content[app()->getLocale()] }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class='lg:pt-20 xl:pt-36 pb-10 md:py-9 h-full md:h-[100vh]' data-aos='fade-left' data-aos-duration='1000'>
        <img src={{ asset($licensingImage->image) }} alt="" class='w-full h-full' />
    </div>

</div>
@endsection
