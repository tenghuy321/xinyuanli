@extends('admin.layouts.app')
@section('header')
    Our Service
@endsection
@section('content')
    <div class="">
        <div class="my-3 md:my-4 px-2 md:px-4 text-end">
            {{-- <a href="{{ route('listServices.create') }}"
                class="hover:!bg-[#DFAD16] hover:!text-[#ffffff] text-[#DFAD16] px-4 py-2 my-3 rounded-[5px] border-2 border-[#DFAD16] text-[12px] sm:text-[14px]">
                <span class="">Add new</span>
            </a> --}}
            <a href="{{ route('homepage.index') }}"
                class="hover:!bg-[#DFAD16] hover:!text-[#ffffff] text-[#DFAD16] px-4 py-2 my-3 rounded-[5px] border-2 border-[#DFAD16] text-[12px] sm:text-[14px]">
                <span class="">Back</span>
            </a>
        </div>

        @component('admin.components.alert')
        @endcomponent

        <div class="overflow-x-auto px-0 sm:px-2 md:px-4">
            <div class="border border-[#000] max-h-[70vh] overflow-y-auto">
                <table class="min-w-full table-fixed">
                    <thead class="bg-[#DFAD16] text-white sticky top-0 z-10">
                        <tr>
                            <th class="text-left py-3 px-4 text-xs w-8 border-r border-[#000]">#</th>
                            <th class="text-left py-3 px-4 text-xs w-[200px] border-r border-[#000]">Title</th>
                            <th class="text-left py-3 px-4 text-xs w-[200px] border-r border-[#000]">Content</th>
                            <th class="text-left py-3 px-4 text-xs w-[100px] border-r border-[#000]">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($listServices as $index => $listService)
                            <tr class="border-t border-[#000]">
                                <td class="py-3 px-4 text-xs max-w-[200px] border-r border-[#000]">{{ $index + 1 }}</td>
                                <td class="py-3 px-4 text-xs max-w-[200px] border-r border-[#000]">
                                    <div class="flex flex-col truncate">
                                        <p>{{ $listService->title['en'] ?? '' }}</p>
                                        <p>{{ $listService->title['ch'] ?? '' }}</p>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-xs max-w-[200px] border-r border-[#000]">
                                    <div class="flex flex-col truncate">
                                        <p>{{ $listService->content['en'] ?? '' }}</p>
                                        <p>{{ $listService->content['ch'] ?? '' }}</p>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-xs flex space-x-2 max-w-[200px]">
                                    <div class="flex items-center">
                                        <a href="{{ route('listServices.edit', $listService->id) }}" title="Edit">
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
