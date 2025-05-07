@extends('admin.layouts.app')
@section('header')
    Our Services (Business Registration)
@endsection
@section('content')
    <div class="">
        <div class="my-2 px-2 md:px-4 md:my-4 text-end">
            <a href="{{ route('ourService.index') }}"
                class="hover:!bg-[#DFAD16] hover:!text-[#ffffff] text-[#DFAD16] px-4 py-2 my-3 rounded-[5px] border-2 border-[#DFAD16] text-[12px] sm:text-[14px]">
                <span class="">Back</span>
            </a>
            {{-- <a href="{{ route('businessRegistration.create') }}"
                class="hover:!bg-[#DFAD16] hover:!text-[#ffffff] text-[#DFAD16] px-4 py-2 my-3 rounded-[5px] border-2 border-[#DFAD16] text-[12px] sm:text-[14px]">
                <span class="">Add new</span>
            </a> --}}
        </div>

        @component('admin.components.alert')
        @endcomponent

        <div class="overflow-x-auto px-0 sm:px-2 md:px-4">
            <div class="border border-[#000] max-h-[70vh] overflow-y-auto">
                <table class="min-w-full table-fixed">
                    <thead class="bg-[#DFAD16] text-white sticky top-0 z-10">
                        <tr>
                            <th class="text-left py-3 px-4 text-xs border-r border-[#000] w-8">#</th>
                            <th class="text-left py-3 px-4 text-xs border-r border-[#000] w-[200px]">Image</th>
                            <th class="text-left py-3 px-4 text-xs border-r border-[#000] w-[200px]">Title</th>
                            <th class="text-left py-3 px-4 text-xs border-r border-[#000] w-[200px]">Sub Title</th>
                            <th class="text-left py-3 px-4 text-xs border-r border-[#000] w-[200px]">Content</th>
                            <th class="text-left py-3 px-4 text-xs border-r border-[#000] w-[200px]">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($business_registrations as $index => $business_registration)
                            <tr class="border-t border-[#000]">
                                <td class="py-3 px-4 text-xs max-w-[200px] border-r border-[#000]">
                                    <div class="flex items-center h-full w-full">{{ $index + 1 }}</div>
                                </td>
                                <td class="text-left py-3 px-4 text-[10px] md:text-[12px] border-r border-[#000]">
                                    <div class="flex items-center h-full w-full gap-4">
                                        @if (!empty($business_registration->image))
                                            <img src="{{ asset($business_registration->image) }}" alt="Image" class="w-20 h-auto">
                                        @endif

                                        @if (!empty($business_registration->images['en']) || !empty($business_registration->images['ch']))
                                            <div class="flex truncate gap-2">
                                                @if (!empty($business_registration->images['en']))
                                                    <img src="{{ asset($business_registration->images['en']) }}" alt="Image EN" class="w-20 h-auto">
                                                @endif

                                                @if (!empty($business_registration->images['ch']))
                                                    <img src="{{ asset($business_registration->images['ch']) }}" alt="Image CH" class="w-20 h-auto">
                                                @endif
                                            </div>
                                        @endif
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-xs max-w-[200px] border-r border-[#000]">
                                    <div class="flex items-center h-full">
                                        <div class="flex flex-col truncate">
                                            <p>{{ $business_registration->title['en'] ?? '' }}</p>
                                            <p>{{ $business_registration->title['ch'] ?? '' }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-xs max-w-[200px] border-r border-[#000]">
                                    <div class="flex items-center h-full">
                                        <div class="flex flex-col truncate">
                                            <p>{{ $business_registration->sub_title1['en'] ?? '' }}</p>
                                            <p>{{ $business_registration->sub_title1['ch'] ?? '' }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-xs max-w-[200px] border-r border-[#000]">
                                    <div class="flex items-center h-full">
                                        <div class="flex flex-col truncate">
                                            <p>{{ $business_registration->content1['en'] ?? '' }}</p>
                                            <p>{{ $business_registration->content1['ch'] ?? '' }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-xs border-r border-[#000]">
                                    <div class="flex items-center h-full space-x-2 w-full">
                                        <a href="{{ route('businessRegistration.edit', $business_registration->id) }}" title="Edit">
                                            <svg class="w-6 h-6 text-green-500 hover:text-green-700 transition"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1.5"
                                                    d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>

    </div>
@endsection
