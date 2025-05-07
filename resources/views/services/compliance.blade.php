@extends('service')

@section('service-content')
    <div class='w-full grid grid-cols-1 md:grid-cols-3 gap-4 lg:gap-10 pb-20 overflow-hidden'
        style="background: rgba(30, 30, 30, 0.95)">
        <div class='px-2 md:pr-0 md:pl-12 xl:pl-20 py-14 lg:pb-0 lg:pt-20 xl:pt-32 col-span-1 md:col-span-2 text-[#fff]'>
            <div class='flex items-end leading-none pl-4 md:pl-8'>
                <h1 class='text-[20px] lg:text-[30px] text-gradient font-[700] text-start w-full lg:w-2/3 2xl:w-1/2 pb-1'
                    data-aos='fade-left' data-aos-duration='1500'>{{ $complianceTitle->title[app()->getLocale()] }}</h1>
                <hr class='w-full ml-1'
                    style="height: 4px; border: none; background: linear-gradient(90deg, #EBB81B 0%, #DFAD16 45.5%, #FAF088 100%)" />
            </div>
            <div class='text-[20px] md:text-[25px] font-[700] text-[#fff] py-10 pl-4 md:pl-8' data-aos='fade-left'
                data-aos-duration='1400'>
                <h2>{{ $complianceImage->title[app()->getLocale()] }}</h2>
            </div>

            @foreach ($compliances as $compliance)
                <div class='pl-4 md:pl-0 pt-4 text-[12px] lg:text-[14px]' data-aos='fade-left' data-aos-duration='1400'>
                    <h1 class="flex items-center space-x-2 md:space-x-4 text-[14px] md:text-[15px] text-[#EBB81B] font-bold">
                        <svg class='w-2 h-2 lg:w-3 lg:h-3' viewBox="0 0 14 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="7" cy="7" r="7" fill="#EBB81B" />
                        </svg>
                        <p>{{ $compliance->title[app()->getLocale()] }}</p>
                    </h1>
                    <div class='md:text-[13px] pl-4 text-[12px] md:pl-8 pt-2 space-y-2'>
                        <h1 class='text-[15px] font-[700]'>{{ $compliance->sub_title[app()->getLocale()] }}</h1>
                        <p>{!! nl2br(e($compliance->content[app()->getLocale()] ?? '')) !!}</p>
                    </div>
                </div>
            @endforeach

            {{-- <h1 class="flex items-center space-x-2 md:space-x-4 text-[14px] md:text-[15px] text-[#EBB81B] font-bold">
                <svg class='w-2 h-2 lg:w-3 lg:h-3' viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="7" cy="7" r="7" fill="#EBB81B" />
                </svg>
                <p>{{ $compliances->title1[app()->getLocale()] }}</p>
            </h1> --}}

            {{-- <div class='pl-4 md:pl-8 pt-2' data-aos='fade-left' data-aos-duration='1400'>
                <ul class='text-[13px] pt-2'>
                    {!! nl2br(e($compliances->content1[app()->getLocale()] ?? '')) !!}
                </ul>
            </div>

            <div class='pl-4 md:pl-0 pt-4 text-[12px] lg:text-[14px]' data-aos='fade-left' data-aos-duration='1400'>
                <h1 class="flex items-center space-x-2 md:space-x-4 text-[14px] md:text-[15px] text-[#EBB81B] font-bold">
                    <svg class='w-2 h-2 lg:w-3 lg:h-3' viewBox="0 0 14 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="7" cy="7" r="7" fill="#EBB81B" />
                    </svg>
                    <p>{{ $compliances->title2[app()->getLocale()] }}</p>
                </h1>

                <div class='text-[12px] md:text-[13px] pl-4 md:pl-8 pt-2'>
                    {!! nl2br(e($compliances->content2[app()->getLocale()] ?? '')) !!}
                </div>
            </div>
            <div class='pl-4 md:pl-0 pt-4 text-[12px] lg:text-[14px]' data-aos='fade-left' data-aos-duration='1400'>
                <h1 class="flex items-center space-x-2 md:space-x-4 text-[14px] md:text-[15px] text-[#EBB81B] font-bold">
                    <svg class='w-2 h-2 lg:w-3 lg:h-3' viewBox="0 0 14 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="7" cy="7" r="7" fill="#EBB81B" />
                    </svg>
                    <p>{{ $compliances->title3[app()->getLocale()] }}</p>
                </h1>

                <div class='md:text-[13px] pl-4 text-[12px] md:pl-8 pt-2' data-aos='fade-left' data-aos-duration='1400'>
                    <p>{!! nl2br(e($compliances->content3[app()->getLocale()] ?? '')) !!}</p>
                </div>
            </div>

            <div class='pl-4 md:pl-0 pt-4 text-[12px] lg:text-[14px]' data-aos='fade-left' data-aos-duration='1400'>
                <h1 class="flex items-center space-x-2 md:space-x-4 text-[14px] md:text-[15px] text-[#EBB81B] font-bold">
                    <svg class='w-2 h-2 lg:w-3 lg:h-3' viewBox="0 0 14 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="7" cy="7" r="7" fill="#EBB81B" />
                    </svg>
                    <p>{{ $compliances->title4[app()->getLocale()] }}</p>
                </h1>
                <div class='md:text-[13px] pl-4 text-[12px] md:pl-8 pt-2 space-y-2'>
                    <h1 class='text-[15px] font-[700]'>{{ $compliances->sub_title[app()->getLocale()] }}</h1>
                    <p>{!! nl2br(e($compliances->content4[app()->getLocale()] ?? '')) !!}</p>
                </div>
            </div> --}}
        </div>
        <div class='lg:pt-20 xl:pt-36 pb-10 md:py-9'>
            <img src={{ asset($complianceImage->image) }} alt=""
                class='w-full h-[300px] md:h-[500px] object-cover object-center' />
            <hr class='w-full'
                style="height: 4px; border: none; background: linear-gradient(90deg, #EBB81B 0%, #DFAD16 45.5%, #FAF088 100%)" />
        </div>
    </div>
@endsection
