@extends('service')

@section('service-content')
<div class='w-full grid grid-cols-1 md:grid-cols-3 gap-4 lg:gap-10 overflow-hidden' style="background: rgba(30, 30, 30, 0.95)">
    <div class='px-2 md:pr-0 md:pl-12 xl:pl-20 py-14 lg:pb-0 lg:pt-20 xl:pt-32 col-span-1 md:col-span-2'>
        <div class='flex items-end leading-none pl-4 md:pl-8'>
            <h1 class='text-[20px] md:text-[30px] text-gradient font-[700] w-full lg:w-2/3 2xl:w-1/2 pb-1' data-aos='fade-right' data-aos-duration='1500'>{{ $businessTitle->title[app()->getLocale()] }}</h1>
            <hr class='w-full ml-3' style="height: 4px; border: none; background: linear-gradient(90deg, #EBB81B 0%, #DFAD16 45.5%, #FAF088 100%)" />
        </div>
        <div class='pt-5 lg:pt-10 xl:pt-20 text-[12px] lg:text-[14px] pl-5 sm:pl-10 md:pl-0'>
            <h1 class="text-[14px] flex items-center space-x-4 md:text-[20px] text-white font-bold" data-aos='fade-right' data-aos-duration='1000'>
                <svg class='w-2 h-2 md:w-3 md:h-3' viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="7" cy="7" r="7" fill="#EBB81B" />
                </svg>

                <p>{{ $businessHeader->title[app()->getLocale()] }}</p>
            </h1>

            <ul class="pt-5 xl:pt-10 text-white space-y-4 pl-5 sm:pl-10 list-disc">
                <li class="font-bold" data-aos="fade-right" data-aos-duration="1200">
                    {{ $businessHeader->sub_title1[app()->getLocale()] }}
                    <div class="flex flex-col font-light pl-5 space-y-1 pt-2">
                        <p>{{ $businessHeader->content1[app()->getLocale()] }}</p>
                        <p>{{ $businessHeader->content2[app()->getLocale()] }}</p>
                    </div>
                </li>

                <li class="font-bold" data-aos="fade-right" data-aos-duration="1400">
                    {{ $businessHeader->sub_title2[app()->getLocale()] }}
                    <div class="flex flex-col font-light pl-5 space-y-1 pt-2">
                        <p>{{ $businessHeader->content3[app()->getLocale()] }}</p>
                        <p>{{ $businessHeader->content4[app()->getLocale()] }}</p>
                        <p>{{ $businessHeader->content5[app()->getLocale()] }}</p>
                    </div>
                </li>

                <li class="font-bold" data-aos="fade-right" data-aos-duration="1600">
                    {{ $businessHeader->sub_title3[app()->getLocale()] }}
                </li>

                <li class="font-bold" data-aos="fade-right" data-aos-duration="1800">
                    {{ $businessHeader->sub_title4[app()->getLocale()] }}
                    <div class="flex flex-col font-light pl-5 space-y-1 pt-2">
                        <p>{{ $businessHeader->content6[app()->getLocale()] }}</p>
                        <p>{{ $businessHeader->content7[app()->getLocale()] }}</p>
                    </div>
                </li>
            </ul>

        </div>
    </div>
    <div class='lg:pt-20 xl:pt-36 pb-10 md:py-9' data-aos='fade-left' data-aos-duration='1000'>
        <img src={{ asset($businessHeader->image) }} alt="" class='w-full h-full' />
    </div>

    {{-- <div class="w-full h-full max-w-[98%] xl:max-w-full mx-auto col-span-1 md:col-span-3 overflow-x-scroll xl:overflow-x-auto scrollBar px-0 xl:px-6 pb-10">
        <div class=''>
            <table class="min-w-full text-xs md:text-sm text-white">
                <thead class="text-xs text-left capitalize bg-gradient-to-r from-[#BA7F14] to-[#FFD700]">
                    <tr>
                        <th class="py-5 px-3 text-black"> </th>
                        <th class="py-5 px-3 text-black text-center text-[12px] md:text-[13px] font-bold">{{ __('messages.sole_proprietorship') }}</th>
                        <th class="py-5 px-3 text-black text-center text-[12px] md:text-[13px] font-bold" colSpan="2">{{ __('messages.partnership') }}</th>
                    </tr>
                    <tr class="bg-[#000] text-white capitalize">
                        <th class="py-5 px-3 min-w-[150px] border border-t-0 border-b-0 border-l-0 border-r-[#FAF088] font-bold text-gradient"></th>
                        <th class="py-5 px-3 min-w-[150px] border border-t-0 border-b-0 border-r-[#FAF088] font-[400] text-[10px] md:text-[11px] text-center">{{ __('messages.sole_proprietorship_des') }}</th>
                        <th class="py-5 px-3 min-w-[150px] border border-t-0 border-b-0 border-r-[#FAF088] font-[400] text-[10px] md:text-[11px] text-center">{{ __('messages.general_partnership') }}</th>
                        <th class="py-5 px-3 min-w-[150px] border border-t-0 border-b-0 border-r-[#FAF088] font-[400] text-[10px] md:text-[11px] text-center">{{ __('messages.limited_partnership') }}</th>
                    </tr>
                </thead>
                <tbody class="bg-[#1E1E1E] text-gray-200">
                    <tr>
                        <td class="py-5 px-3 border border-l-0 border-t-0 border-r-[#FAF088] border-b-black font-bold text-gradient">{{ __('messages.ownership') }}</td>
                        <td class="py-5 px-3 border border-t-0 border-b-[#000] border-l-[#FAF088] border-r-[#FAF088] text-[10px] text-center leading-[12px]">{{ __('messages.sole_proprietorship_des_1') }}</td>
                        <td class="py-5 px-3 text-[10px] text-center leading-[12px] border border-l-[#FAF088] border-r-0 border-t-0 border-b-[#000]">{{ __('messages.general_partnership_1') }}</td>
                        <td class="py-5 px-3 border border-t-0 border-b-[#000] border-l-[#FAF088] border-r-[#FAF088] text-[10px] text-center leading-[12px]">{{ __('messages.limited_partnership_1') }}</td>
                    </tr>
                    <tr>
                        <td class="py-5 px-3 border border-l-0 border-t-0 border-r-[#FAF088] border-b-black font-bold text-gradient">{{ __('messages.liability') }}</td>
                        <td class="py-5 px-3 border border-t-0 border-b-[#000] border-l-[#FAF088] border-r-[#FAF088] text-[10px] text-center leading-[12px]">{{ __('messages.sole_proprietorship_des_2') }}</td>
                        <td class="py-5 px-3 text-[10px] text-center leading-[12px] border border-l-[#FAF088] border-r-0 border-t-0 border-b-[#000]">{{ __('messages.general_partnership_2') }}</td>
                        <td class="py-5 px-3 border border-t-0 border-b-[#000] border-l-[#FAF088] border-r-[#FAF088] text-[10px] text-center leading-[12px]">{{ __('messages.limited_partnership_2') }}</td>
                    </tr>
                    <tr>
                        <td class="py-5 px-3 border border-l-0 border-t-0 border-r-[#FAF088] border-b-black font-bold text-gradient">{{ __('messages.management') }}</td>
                        <td class="py-5 px-3 border border-t-0 border-b-[#000] border-l-[#FAF088] border-r-[#FAF088] text-[10px] text-center leading-[12px]">{{ __('messages.sole_proprietorship_des_3') }}</td>
                        <td class="py-5 px-3 text-[10px] text-center leading-[12px] border border-l-[#FAF088] border-r-0 border-b-[#000]">{{ __('messages.general_partnership_3') }}</td>
                        <td class="py-5 px-3 border border-t-0 border-b-[#000] border-l-[#FAF088] border-r-[#FAF088] text-[10px] text-center leading-[12px]">{{ __('messages.limited_partnership_3') }}</td>
                    </tr>
                    <tr>
                        <td class="py-5 px-3 border border-l-0 border-t-0 border-r-[#FAF088] border-b-black font-bold text-gradient">{{ __('messages.taxation') }}</td>
                        <td class="py-5 px-3 border border-t-0 border-b-[#000] border-l-[#FAF088] border-r-[#FAF088] text-[10px] text-center leading-[12px]">{{ __('messages.sole_proprietorship_des_4') }}</td>
                        <td class="py-5 px-3 text-[10px] text-center leading-[12px] border border-b-[#000] border-l-[#FAF088] border-r-0 border-t-0">{{ __('messages.general_partnership_4') }}</td>
                        <td class="py-5 px-3 border border-t-0 border-b-[#000] border-l-[#FAF088] border-r-[#FAF088] text-[10px] text-center leading-[12px]">{{ __('messages.limited_partnership_4') }}</td>
                    </tr>
                    <tr>
                            <td class="py-5 px-3 border border-l-0 border-t-0 border-r-[#FAF088] border-b-black font-bold text-gradient">{{ __('messages.continuity') }}</td>
                        <td class="py-5 px-3 border border-t-0 border-b-[#000] border-l-[#FAF088] border-r-[#FAF088] text-[10px] text-center leading-[12px]">{{ __('messages.sole_proprietorship_des_5') }}</td>
                        <td class="py-5 px-3 text-[10px] text-center leading-[12px] border border-l-[#FAF088] border-r-0 border-t-0 border-b-[#000]">{{ __('messages.general_partnership_5') }}</td>
                        <td class="py-5 px-3 border border-t-0 border-b-[#000] border-l-[#FAF088] border-r-[#FAF088] text-[10px] text-center leading-[12px]">{{ __('messages.limited_partnership_5') }}</td>
                    </tr>
                    <tr>
                        <td class="py-5 px-3 border border-l-0 border-t-0 border-r-[#FAF088] border-b-black font-bold text-gradient">{{ __('messages.legal_structure') }}</td>
                        <td class="py-5 px-3 border border-t-0 border-b-[#000] border-l-[#FAF088] border-r-[#FAF088] text-[10px] text-center leading-[12px]">{{ __('messages.sole_proprietorship_des_6') }}</td>
                        <td class="py-5 px-3 text-[10px] text-center leading-[12px] border border-t-0 border-l-[#FAF088] border-r-0 border-b-[#000]">{{ __('messages.general_partnership_6') }}</td>
                        <td class="py-5 px-3 border border-t-0 border-b-[#000] border-l-[#FAF088] border-r-[#FAF088] text-[10px] text-center leading-[12px]">{{ __('messages.limited_partnership_6') }}</td>
                    </tr>
                    <tr>
                        <td class="py-5 px-3 border border-l-0 border-t-0 border-r-[#FAF088] border-b-[#FAF088] font-bold text-gradient">{{ __('messages.classification') }}</td>
                        <td class="py-5 px-3 border border-t-0 border-[#FAF088] text-[10px] text-center leading-[12px]">{{ __('messages.sole_proprietorship_des_7') }}</td>
                        <td class="py-5 px-3 text-[10px] text-center leading-[12px] border border-t-0 border-r-0 border-[#FAF088]">{{ __('messages.general_partnership_7') }}</td>
                        <td class="py-5 px-3 border border-t-0 border-b-[#FAF088] border-l-[#FAF088] border-r-[#FAF088] text-[10px] text-center leading-[12px]">{{ __('messages.limited_partnership_7') }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> --}}

    <div class="w-full h-full col-span-1 md:col-span-3 px-2 xl:px-6">
        <img src="{{ asset($businessImage->images[app()->getLocale()]) }}" alt="" class="w-full h-auto">
    </div>

    <div class='px-2 md:pr-0 md:pl-12 xl:pl-20 py-14 lg:pb-0 lg:pt-12 col-span-1 md:col-span-3 mb-10'>
        <div class='flex items-end pl-4 md:pl-8 leading-none'>
            <h1 class='text-[20px] md:text-[30px] text-gradient font-[700] w-full md:w-2/3 2xl:w-[20%] mb-1' data-aos='fade-right' data-aos-duration='1500'>{{ $businessTitle->title[app()->getLocale()] }}</h1>
            <hr class='w-full ml-3' style="height: 4px; border: none; background: linear-gradient(90deg, #EBB81B 0%, #DFAD16 45.5%, #FAF088 100%)" />
        </div>

        <h1 class="text-[16px] flex items-center space-x-4 md:text-[20px] text-white font-bold pt-10 md:pt-20" data-aos='fade-right' data-aos-duration='1000'>
            <svg class='w-2 h-2 md:w-3 md:h-3' viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="7" cy="7" r="7" fill="#EBB81B" />
            </svg>

            <p>{{ $businessFooter->title[app()->getLocale()] }}</p>
        </h1>

        <div class='pt-5 text-[#fff] text-[12px] md:text-[14px] overflow-hidden'>
            <p data-aos='fade-right' data-aos-duration='1200' class='text-[12px] md:text-[16px] pl-5 text-white'><span class='text-[13px] md:text-[17px] font-[700] text-[#EBB81B]'>{{ __('messages.step1') }} </span> {{ $businessFooter->sub_title1[app()->getLocale()] }}</p>
            <p data-aos='fade-right' data-aos-duration='1200' class='text-[12px] md:text-[16px] pl-5 text-white'><span class='text-[13px] md:text-[17px] font-[700] text-[#EBB81B]'>{{ __('messages.step2') }} </span> {{ $businessFooter->sub_title2[app()->getLocale()] }}</p>
            <p data-aos='fade-right' data-aos-duration='1200' class='text-[12px] md:text-[16px] pl-5 text-white'><span class='text-[13px] md:text-[17px] font-[700] text-[#EBB81B]'>{{ __('messages.step3') }} </span> {{ $businessFooter->sub_title3[app()->getLocale()] }}</p>

            <ul class="list-disc ml-6 space-y-2 my-4 text-[10px] md:text-[13px] font-[400] pl-4 md:pl-8" data-aos='fade-left' data-aos-duration='1000'>
                <li>{{ $businessFooter->content1[app()->getLocale()] }}</li>
                <li>{{ $businessFooter->content2[app()->getLocale()] }}</li>
                <li>{{ $businessFooter->content3[app()->getLocale()] }}</li>
                <li>{{ $businessFooter->content4[app()->getLocale()] }}</li>
                <li>{{ $businessFooter->content5[app()->getLocale()] }}</li>
                <li>{{ $businessFooter->content6[app()->getLocale()] }}</li>
                <li>{{ $businessFooter->content7[app()->getLocale()] }}</li>
            </ul>

            <p data-aos='fade-right' data-aos-duration='1200' class='text-[12px] md:text-[16px] pl-5 text-white'><span class='text-[13px] md:text-[17px] font-[700] text-[#EBB81B]'>{{ __('messages.step4') }} </span> {{ $businessFooter->sub_title4[app()->getLocale()] }}</p>
            <ul class="list-disc ml-6 space-y-2 my-4 text-[10px] md:text-[13px] font-[400] pl-4 md:pl-8" data-aos='fade-left' data-aos-duration='1000'>
                <li>{{ $businessFooter->content8[app()->getLocale()] }}</li>
                <li>{{ $businessFooter->content9[app()->getLocale()] }}</li>
                <li>{{ $businessFooter->content10[app()->getLocale()] }}</li>
                <li>{{ $businessFooter->content11[app()->getLocale()] }}</li>
                <li>{{ $businessFooter->content12[app()->getLocale()] }}</li>
            </ul>
            <p data-aos='fade-right' data-aos-duration='1200' class='text-[12px] md:text-[16px] pl-5 text-white'><span class='text-[13px] md:text-[17px] font-[700] text-[#EBB81B]'>{{ __('messages.step5') }} </span> {{ $businessFooter->sub_title5[app()->getLocale()] }}</p>
            <p data-aos='fade-right' data-aos-duration='1200' class='text-[12px] md:text-[16px] pl-5 text-white'><span class='text-[13px] md:text-[17px] font-[700] text-[#EBB81B]'>{{ __('messages.step6') }} </span> {{ $businessFooter->sub_title6[app()->getLocale()] }}</p>
            <p data-aos='fade-right' data-aos-duration='1200' class='text-[12px] md:text-[16px] pl-5 text-white'><span class='text-[13px] md:text-[17px] font-[700] text-[#EBB81B]'>{{ __('messages.step7') }} </span> {{ $businessFooter->sub_title7[app()->getLocale()] }}</p>
            <ul class="list-disc ml-6 space-y-2 my-4 text-[10px] md:text-[13px] font-[400] pl-4 md:pl-8" data-aos='fade-left' data-aos-duration='1000'>
                <li>{{ $businessFooter->content13[app()->getLocale()] }}</li>
            </ul>
        </div>
    </div>
</div>
@endsection
