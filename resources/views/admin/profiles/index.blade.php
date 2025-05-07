@extends('admin.layouts.app')
@section('header')
    Our Profile Page
@endsection
@section('content')
    <div class="">
        {{-- <div class="my-3 md:my-4 px-2 md:px-4 text-end">
            <a href="{{ route('profileAdmin.create') }}"
                class="hover:!bg-[#DFAD16] hover:!text-[#ffffff] text-[#DFAD16] px-4 py-2 my-3 rounded-[5px] border-2 border-[#DFAD16] text-[12px] sm:text-[14px]">
                <span class="">Add new</span>
            </a>
        </div> --}}

        @component('admin.components.alert')
        @endcomponent

        <div class="overflow-x-auto px-0 sm:px-2 md:px-4">
            <div class="border border-[#000] max-h-[70vh] overflow-y-auto">
                <table class="min-w-full table-fixed">
                    <thead class="bg-[#DFAD16] text-white sticky top-0 z-10">
                        <tr>
                            <th class="text-left py-3 px-4 text-xs w-8 border-r border-[#000]">#</th>
                            <th class="text-left py-3 px-4 text-xs w-[200px] border-r border-[#000]">Image</th>
                            <th class="text-left py-3 px-4 text-xs w-[200px] border-r border-[#000]">Icon</th>
                            <th class="text-left py-3 px-4 text-xs w-[200px] border-r border-[#000]">Title</th>
                            <th class="text-left py-3 px-4 text-xs w-[200px] border-r border-[#000]">Content</th>
                            <th class="text-left py-3 px-4 text-xs w-[100px] border-r border-[#000]">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($profiles as $index => $profile)
                            <tr class="border-t border-[#000]">
                                <td class="py-3 px-4 text-xs max-w-[200px] border-r border-[#000]">
                                    <div class="flex items-center h-full">{{ $index + 1 }}</div>
                                </td>
                                <td class="text-left py-3 px-4 text-[10px] md:text-[12px] border-r border-[#000]">
                                    <div class="flex items-center h-full">
                                        <img src="{{ asset($profile->image) }}" alt="" class="w-12 h-12 object-contain object-center">
                                    </div>
                                </td>
                                <td class="text-left py-3 px-4 text-[10px] md:text-[12px] border-r border-[#000]">
                                    <div class="flex items-center h-full">
                                        <img src="{{ asset($profile->icon) }}" alt="" class="w-12 h-12 object-contain object-center">
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-xs max-w-[200px] border-r border-[#000]">
                                    <div class="flex items-center h-full">
                                        <div class="flex flex-col truncate">
                                            <p>{{ $profile->title['en'] ?? '' }}</p>
                                            <p>{{ $profile->title['ch'] ?? '' }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-xs max-w-[200px] border-r border-[#000]">
                                    <div class="flex items-center h-full">
                                        <div class="flex flex-col truncate">
                                            <p>{{ $profile->content['en'] ?? '' }}</p>
                                            <p>{{ $profile->content['ch'] ?? '' }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-xs max-w-[200px]">
                                    <div class="flex items-center h-full space-x-2">
                                        <a class="{{ $profile->id != 4 ? 'hidden' : '' }}" href={{ route('core_value.index') }}>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#DFAD16" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="1.5">
                                                <path d="M9 6h11"></path>
                                                <path d="M12 12h8"></path>
                                                <path d="M15 18h5"></path>
                                                <path d="M5 6v.01"></path>
                                                <path d="M8 12v.01"></path>
                                                <path d="M11 18v.01"></path>
                                            </svg>
                                        </a>
                                        <a href="{{ route('profileAdmin.edit', $profile->id) }}" title="Edit">
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
