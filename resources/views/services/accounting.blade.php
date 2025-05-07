@extends('service')

@section('service-content')
    <div class='w-full grid grid-cols-1 md:grid-cols-3 gap-4 lg:gap-10 pb-5 overflow-hidden'
        style="background: rgba(30, 30, 30, 0.95)">
        <div class='px-2 md:pr-0 md:pl-12 xl:pl-20 py-14 lg:pb-0 lg:pt-20 xl:pt-32  col-span-1 md:col-span-2 text-[#fff] mb-5 md:mb-20'>
            <div class='flex items-end leading-none pl-4 md:pl-8' data-aos='fade-right' data-aos-duration='1000'>
                <h1 class='text-[20px] lg:text-[30px] text-gradient font-[700] w-full lg:w-2/3 2xl:w-1/2 pb-1'
                    data-aos='fade-right' data-aos-duration='1500'>{{ $accountTitle->title[app()->getLocale()] }}</h1>
                <hr class='w-full ml-1'
                    style="height: 4px; border: none; background: linear-gradient(90deg, #EBB81B 0%, #DFAD16 45.5%, #FAF088 100%)" />
            </div>
            <div class='text-[20px] lg:text-[25px] font-[700] text-[#fff] py-10 pl-4 md:pl-8' data-aos='fade-left'
                data-aos-duration='1000'>
                <h2>{{ $accountImage->title[app()->getLocale()] }}</h2>
                <p class='text-[10px] md:text-[12px] font-[500]'>{{ $accountImage->content1[app()->getLocale()] }}</p>
            </div>

            @foreach ($accounting as $item)
                <div class='pl-4 md:pl-0 pt-4 text-[12px] lg:text-[14px]'>
                    <h1 class="flex items-center space-x-2 md:space-x-4 text-[14px] md:text-[15px] text-[#EBB81B] font-bold"
                        data-aos='fade-right' data-aos-duration='1400'>
                        <svg class='w-2 h-2 md:w-3 md:h-3' viewBox="0 0 14 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="7" cy="7" r="7" fill="#EBB81B" />
                        </svg>
                        <p>{{ $item->title[app()->getLocale()] }}</p>
                    </h1>

                    @if (empty($item->sub_title1[app()->getLocale()]) && empty($item->content1[app()->getLocale()]))
                        <div class="hidden"></div>
                    @elseif(empty($item->sub_title1[app()->getLocale()]))
                        <div class='md:text-[13px] pl-4 text-[12px] md:pl-8 pt-4' data-aos='fade-right'
                            data-aos-duration='1400'>
                            <p>{{ $item->content1[app()->getLocale()] }}</p>
                        </div>
                    @else
                        <div class='md:text-[13px] pl-4 text-[12px] md:pl-8 pt-4' data-aos='fade-right'
                            data-aos-duration='1400'>
                            <h1 class='text-[13px] md:text-[14px] font-[700]'>{{ $item->sub_title1[app()->getLocale()] }}
                            </h1>
                            <p>{{ $item->content1[app()->getLocale()] }}</p>
                        </div>
                    @endif

                    @if (empty($item->sub_title2[app()->getLocale()]) && empty($item->content2[app()->getLocale()]))
                        <div class="hidden"></div>
                    @elseif(empty($item->sub_title2[app()->getLocale()]))
                        <div class='md:text-[13px] pl-4 text-[12px] md:pl-8 pt-4' data-aos='fade-right'
                            data-aos-duration='1400'>
                            <p>{{ $item->content2[app()->getLocale()] }}</p>
                        </div>
                    @else
                        <div class='md:text-[13px] pl-4 text-[12px] md:pl-8 pt-4' data-aos='fade-right'
                            data-aos-duration='1400'>
                            <h1 class='text-[13px] md:text-[14px] font-[700]'>{{ $item->sub_title2[app()->getLocale()] }}
                            </h1>
                            <p>{{ $item->content2[app()->getLocale()] }}</p>
                        </div>
                    @endif

                    @if (empty($item->sub_title3[app()->getLocale()]) && empty($item->content3[app()->getLocale()]))
                        <div class="hidden"></div>
                    @elseif(empty($item->sub_title3[app()->getLocale()]))
                        <div class='md:text-[13px] pl-4 text-[12px] md:pl-8 pt-4' data-aos='fade-right'
                            data-aos-duration='1400'>
                            <p>{{ $item->content3[app()->getLocale()] }}</p>
                        </div>
                    @else
                        <div class='md:text-[13px] pl-4 text-[12px] md:pl-8 pt-4' data-aos='fade-right'
                            data-aos-duration='1400'>
                            <h1 class='text-[13px] md:text-[14px] font-[700]'>{{ $item->sub_title3[app()->getLocale()] }}
                            </h1>
                            <p>{{ $item->content3[app()->getLocale()] }}</p>
                        </div>
                    @endif

                </div>
            @endforeach

            {{-- <div class='pl-4 md:pl-0 pt-4 lg:pt-10 xl:pt-12 text-[12px] lg:text-[14px]' data-aos='fade-right'
                data-aos-duration='1000'>
                <h1 class="flex items-center space-x-2 md:space-x-4 text-[14px] md:text-[15px] text-[#EBB81B] font-bold">
                    <svg class='w-2 h-2 lg:w-3 lg:h-3' viewBox="0 0 14 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="7" cy="7" r="7" fill="#EBB81B" />
                    </svg>
                    <p>{{ __('messages.core_accounting_services') }}</p>
                </h1>
            </div>
            <div class='pl-4 md:pl-0 pt-4 text-[12px] lg:text-[14px]' data-aos='fade-left' data-aos-duration='1200'>
                <h1 class="flex items-center space-x-2 md:space-x-4 text-[14px] md:text-[15px] text-[#EBB81B] font-bold">
                    <svg class='w-2 h-2 lg:w-3 lg:h-3' viewBox="0 0 14 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="7" cy="7" r="7" fill="#EBB81B" />
                    </svg>
                    <p>{{ __('messages.one_off_services') }}</p>
                </h1>
                <ul class="list-disc pl-4 md:pl-10 text-[#fff] pt-4 space-y-2 text-[12px] md:text-[13px]">
                    <li>{{ __('messages.one_off_services_des1') }}</li>
                    <li>{{ __('messages.one_off_services_des1') }}</li>
                    <li>{{ __('messages.one_off_services_des3') }}</li>
                </ul>
            </div>

            <div class='pl-4 md:pl-0 pt-4 text-[12px] lg:text-[14px]'>
                <h1 class="flex items-center space-x-2 md:space-x-4 text-[14px] md:text-[15px] text-[#EBB81B] font-bold"
                    data-aos='fade-right' data-aos-duration='1400'>
                    <svg class='w-2 h-2 md:w-3 md:h-3' viewBox="0 0 14 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="7" cy="7" r="7" fill="#EBB81B" />
                    </svg>
                    <p>{{ __('messages.monthly_services') }}</p>
                </h1>

                <div class='text-[12px] md:text-[13px] pl-4 md:pl-8 pt-4' data-aos='fade-right'
                    data-aos-duration='1400'>
                    <h1 class='text-[13px] md:text-[14px] font-[700]'>{{ __('messages.monthly_services_title1') }}</h1>
                    <p>{{ __('messages.monthly_services_des1') }}</p>
                </div>
                <div class='text-[12px] md:text-[13px] pl-4 md:pl-8 pt-4' data-aos='fade-right'
                    data-aos-duration='1400'>
                    <h1 class='text-[13px] md:text-[14px] font-[700]'>{{ __('messages.monthly_services_title2') }}</h1>
                        <p>{{ __('messages.monthly_services_des2') }}</p>
                </div>
                <div class='text-[12px] md:text-[13px] pl-4 md:pl-8 pt-4' data-aos='fade-right'
                    data-aos-duration='1400'>
                    <h1 class='text-[13px] md:text-[14px] font-[700]'>{{ __('messages.monthly_services_title3') }}</h1>
                    <p>{{ __('messages.monthly_services_des3') }}</p>
                </div>
            </div>
            <div class='pl-4 md:pl-0 pt-4 text-[12px] lg:text-[14px]'>
                <h1 class="flex items-center space-x-2 md:space-x-4 text-[14px] md:text-[15px] text-[#EBB81B] font-bold"
                    data-aos='fade-right' data-aos-duration='1400'>
                    <svg class='w-2 h-2 md:w-3 md:h-3' viewBox="0 0 14 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="7" cy="7" r="7" fill="#EBB81B" />
                    </svg>
                    <p>{{ __('messages.key_features') }}</p>
                </h1>

                <div class='md:text-[13px] pl-4 text-[12px] md:pl-8 pt-4' data-aos='fade-right'
                    data-aos-duration='1400'>
                    <h1 class='text-[13px] md:text-[14px] font-[700]'>{{ __('messages.key_features_title1') }}</h1>
                    <p>{{ __('messages.key_features_title1') }}</p>
                </div>
                <div class='md:text-[13px] pl-4 text-[12px] md:pl-8 pt-4' data-aos='fade-right'
                    data-aos-duration='1400'>
                    <h1 class='text-[13px] md:text-[14px] font-[700]'>{{ __('messages.key_features_title2') }}</h1>
                    <p>{{ __('messages.key_features_des2') }}</p>
                </div>
                <div class='md:text-[13px] pl-4 text-[12px] md:pl-8 pt-4' data-aos='fade-right'
                    data-aos-duration='1400'>
                    <h1 class='text-[13px] md:text-[14px] font-[700]'>{{ __('messages.key_features_title3') }}</h1>
                    <p>{{ __('messages.key_features_des3') }}</p>
                </div>
            </div> --}}

        </div>
        <div class='lg:pt-20 xl:pt-36 pb-10 md:py-9'>
            <img src={{ asset($accountImage->image) }} alt=""
                class='w-full h-[300px] md:h-[500px] object-cover object-center' />
            <hr class='w-full'
                style="height: 4px; border: none; background: linear-gradient(90deg, #EBB81B 0%, #DFAD16 45.5%, #FAF088 100%)" />
        </div>
    </div>
@endsection
