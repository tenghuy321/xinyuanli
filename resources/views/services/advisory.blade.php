@extends('service')

@section('service-content')
    <div class='w-full grid grid-cols-1 md:grid-cols-3 gap-4 lg:gap-10 pb-20' style="background: rgba(30, 30, 30, 0.95)">
        <div class='px-2 md:pr-0 md:pl-12 xl:pl-20 py-14 lg:pb-0 lg:pt-20 xl:pt-32 col-span-1 md:col-span-2 text-[#fff]'>
            <div class='flex items-end leading-none pl-4 md:pl-8'>
                <h1 class='text-[20px] lg:text-[30px] text-gradient font-[700] text-start w-full lg:w-2/3 2xl:w-1/2 pb-1'
                    data-aos='fade-right' data-aos-duration='1500'>{{ $regulatoryTitle->title[app()->getLocale()] }}</h1>
                <hr class='w-full ml-1'
                    style="height: 4px; border: none; background: linear-gradient(90deg, #EBB81B 0%, #DFAD16 45.5%, #FAF088 100%)" />
            </div>
            <div class='text-[20px] lg:text-[25px] font-[700] text-[#fff] pt-10 pl-4 md:pl-8' data-aos='fade-right'
                data-aos-duration='1400'>
                <h2>{{ $regulatoryImage->title[app()->getLocale()] }}</h2>
                <p class='text-[10px] md:text-[12px] font-[500]'>
                    {!! nl2br(e($regulatoryImage->content1[app()->getLocale()] ?? '')) !!}</p>
                {{-- <p class='text-[10px] md:text-[12px] font-[500]'>{{ __('messages.regulatory_advisory_des2') }}</p>
                <p class='text-[10px] md:text-[12px] font-[500]'>{{ __('messages.regulatory_advisory_des3') }}</p> --}}
            </div>

            @foreach ($regulatories as $regulatory)
                <div class='pl-4 md:pl-0 pt-4 text-[12px] lg:text-[14px]' data-aos='fade-right' data-aos-duration='1400'>
                    <h1 class="flex items-center space-x-2 md:space-x-4 text-[14px] md:text-[15px] text-[#EBB81B] font-bold">
                        <svg class='w-2 h-2 lg:w-3 lg:h-3' viewBox="0 0 14 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="7" cy="7" r="7" fill="#EBB81B" />
                        </svg>
                        <p>{{ $regulatory->title[app()->getLocale()] }}</p>
                    </h1>
                    @if (!empty($regulatory->content1))
                        <p class='text-[12px] md:text-[13px] pl-4 md:pl-8 pt-4' data-aos='fade-right' data-aos-duration='1400'>
                            {{ $regulatory->content1[app()->getLocale()] }}</p>
                    @endif

                    <div class='text-[12px] md:text-[13px] pl-4 md:pl-8 pt-4' data-aos='fade-right'
                        data-aos-duration='1400'>
                        <h1 class='text-[13px] md:text-[14px] font-[700]'>{{ $regulatory->sub_title1[app()->getLocale()] }}</h1>
                        <p>{{ $regulatory->content2[app()->getLocale()] }}</p>
                    </div>
                    <div class='text-[12px] md:text-[13px] pl-4 md:pl-8 pt-4' data-aos='fade-right'
                        data-aos-duration='1400'>
                        <h1 class='text-[13px] md:text-[14px] font-[700]'>{{ $regulatory->sub_title2[app()->getLocale()] }}</h1>
                        <p>{{ $regulatory->content3[app()->getLocale()] }}</p>
                    </div>
                    <div class='text-[12px] md:text-[13px] pl-4 md:pl-8 pt-4' data-aos='fade-right'
                        data-aos-duration='1400'>
                        <h1 class='text-[13px] md:text-[14px] font-[700]'>{{ $regulatory->sub_title3[app()->getLocale()] }}</h1>
                        <p>{{ $regulatory->content4[app()->getLocale()] }}</p>
                    </div>
                    <div class='text-[12px] md:text-[13px] pl-4 md:pl-8 pt-4' data-aos='fade-right'
                        data-aos-duration='1400'>
                        <h1 class='text-[13px] md:text-[14px] font-[700]'>{{ $regulatory->sub_title4[app()->getLocale()] }}</h1>
                        <p>{{ $regulatory->content5[app()->getLocale()] }}</p>
                    </div>
                </div>
            @endforeach

            {{-- <div class='pl-4 md:pl-0 pt-4 text-[12px] lg:text-[14px]' data-aos='fade-right' data-aos-duration='1400'>
                <h1 class="flex items-center space-x-2 md:space-x-4 text-[14px] md:text-[15px] text-[#EBB81B] font-bold">
                    <svg class='w-2 h-2 lg:w-3 lg:h-3' viewBox="0 0 14 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="7" cy="7" r="7" fill="#EBB81B" />
                    </svg>
                    <p>{{ __('messages.enhanced_performance') }}</p>
                </h1>
                <p class='text-[12px] md:text-[13px] pl-4 md:pl-8 pt-4' data-aos='fade-right' data-aos-duration='1400'>
                    {{ __('messages.enhanced_performance_des') }}</p>

                <div class='text-[12px] md:text-[13px] pl-4 md:pl-8 pt-4' data-aos='fade-right' data-aos-duration='1400'>
                    <h1 class='text-[13px] md:text-[14px] font-[700]'>{{ __('messages.enhanced_performance_title1') }}</h1>
                    <p>{{ __('messages.enhanced_performance_des1') }}</p>
                </div>
                <div class='text-[12px] md:text-[13px] pl-4 md:pl-8 pt-4' data-aos='fade-right' data-aos-duration='1400'>
                    <h1 class='text-[13px] md:text-[14px] font-[700]'>{{ __('messages.enhanced_performance_title2') }}</h1>
                    <p>{{ __('messages.enhanced_performance_des2') }}</p>
                </div>
                <div class='text-[12px] md:text-[13px] pl-4 md:pl-8 pt-4' data-aos='fade-right' data-aos-duration='1400'>
                    <h1 class='text-[13px] md:text-[14px] font-[700]'>{{ __('messages.enhanced_performance_title3') }}</h1>
                    <p>{{ __('messages.enhanced_performance_des3') }}</p>
                </div>
                <div class='text-[12px] md:text-[13px] pl-4 md:pl-8 pt-4' data-aos='fade-right' data-aos-duration='1400'>
                    <h1 class='text-[13px] md:text-[14px] font-[700]'>{{ __('messages.enhanced_performance_title4') }}</h1>
                    <p>{{ __('messages.enhanced_performance_des4') }}</p>
                </div>
            </div>

            <div class='pl-4 md:pl-0 pt-4 text-[12px] lg:text-[14px]' data-aos='fade-right' data-aos-duration='1400'>
                <h1 class="flex items-center space-x-2 md:space-x-4 text-[14px] md:text-[15px] text-[#EBB81B] font-bold">
                    <svg class='w-2 h-2 lg:w-3 lg:h-3' viewBox="0 0 14 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="7" cy="7" r="7" fill="#EBB81B" />
                    </svg>
                    <p>{{ __('messages.corporate_restructuring_advice') }}</p>
                </h1>

                <p class='text-[12px] md:text-[13px] pl-4 md:pl-8 pt-4' data-aos='fade-right' data-aos-duration='1400'>
                    {{ __('messages.corporate_restructuring_advice_des') }}</p>

                <div class='md:text-[13px] pl-4 text-[12px] md:pl-8 pt-4' data-aos='fade-right' data-aos-duration='1400'>
                    <h1 class='text-[13px] md:text-[14px] font-[700]'>
                        {{ __('messages.corporate_restructuring_advice_title1') }}</h1>
                    <p>{{ __('messages.corporate_restructuring_advice_des1') }}</p>
                </div>
                <div class='md:text-[13px] pl-4 text-[12px] md:pl-8 pt-4' data-aos='fade-right' data-aos-duration='1400'>
                    <h1 class='text-[13px] md:text-[14px] font-[700]'>
                        {{ __('messages.corporate_restructuring_advice_title2') }}</h1>
                    <p>{{ __('messages.corporate_restructuring_advice_des2') }}</p>
                </div>
                <div class='md:text-[13px] pl-4 text-[12px] md:pl-8 pt-4' data-aos='fade-right' data-aos-duration='1400'>
                    <h1 class='text-[13px] md:text-[14px] font-[700]'>
                        {{ __('messages.corporate_restructuring_advice_title3') }}</h1>
                    <p>{{ __('messages.corporate_restructuring_advice_des3') }}</p>
                </div>
                <div class='md:text-[13px] pl-4 text-[12px] md:pl-8 pt-4' data-aos='fade-right' data-aos-duration='1400'>
                    <h1 class='text-[13px] md:text-[14px] font-[700]'>
                        {{ __('messages.corporate_restructuring_advice_title4') }}</h1>
                    <p>{{ __('messages.corporate_restructuring_advice_des4') }}</p>
                    <p>{{ __('messages.corporate_restructuring_advice_des5') }}</p>
                </div>
            </div>
            <div class='pl-4 md:pl-0 pt-4 text-[12px] lg:text-[14px]' data-aos='fade-right' data-aos-duration='1400'>
                <h1
                    class="flex items-start md:items-center space-x-2 md:space-x-4 text-[14px] md:text-[15px] text-[#EBB81B] font-bold">
                    <div>
                        <svg class='w-2 h-2 lg:w-3 lg:h-3' viewBox="0 0 14 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="7" cy="7" r="7" fill="#EBB81B" />
                        </svg>
                    </div>
                    <p class='-mt-1 md:mt-0'>{{ __('messages.business_structure') }}</p>
                </h1>
                <div class='text-[12px] md:text-[13px] pl-4 md:pl-8 pt-4'>
                    <h1 class='text-[13px] md:text-[14px] font-[700]'>{{ __('messages.business_structure_title1') }}
                    </h1>
                    <p>{{ __('messages.business_structure_des1') }}</p>
                </div>
                <div class='text-[12px] md:text-[13px] pl-4 md:pl-8 pt-4'>
                    <h1 class='text-[13px] md:text-[14px] font-[700]'>{{ __('messages.business_structure_title2') }}
                    </h1>
                    <p>{{ __('messages.business_structure_des2') }}</p>
                </div>
                <div class='text-[12px] md:text-[13px] pl-4 md:pl-8 pt-4'>
                    <h1 class='text-[13px] md:text-[14px] font-[700]'>{{ __('messages.business_structure_title3') }}
                    </h1>
                    <p>{{ __('messages.business_structure_des3') }}</p>
                </div>
                <div class='text-[12px] md:text-[13px] pl-4 md:pl-8 pt-4'>
                    <h1 class='text-[13px] md:text-[14px] font-[700]'>{{ __('messages.business_structure_title4') }}
                    </h1>
                    <p>{{ __('messages.business_structure_des4') }}</p>
                </div>
            </div> --}}


        </div>
        <div class='lg:pt-20 xl:pt-36 pb-10 md:py-9'>
            <img src={{ asset($regulatoryImage->image) }} alt=""
                class='w-full h-[300px] md:h-[500px] object-cover object-center' />
            <hr class='w-full'
                style="height: 4px; border: none; background: linear-gradient(90deg, #EBB81B 0%, #DFAD16 45.5%, #FAF088 100%)" />
        </div>
    </div>
@endsection
