@extends('admin.layouts.app')
@section('header')
    Profile Video
@endsection
@section('content')
    <div class="">
        <div class="my-2 px-2 md:px-4 md:my-4 text-end">
            <a href="{{ route('profile-video.create') }}"
                class="hover:!bg-[#DFAD16] hover:!text-[#ffffff] text-[#DFAD16] px-4 py-2 my-3 rounded-[5px] border-2 border-[#DFAD16] text-[12px] sm:text-[14px]">
                <span class="">Add new</span>
            </a>
        </div>

        @component('admin.components.alert')
        @endcomponent

        <div class="overflow-x-auto px-0 sm:px-2 md:px-4">
            <div class="border border-[#000] max-h-[70vh] overflow-y-auto">
                <table class="min-w-full table-fixed">
                    <thead class="bg-[#DFAD16] text-white sticky top-0 z-10">
                        <tr>
                            <th class="text-left py-3 px-4 text-xs border-r border-[#000] w-8">#</th>
                            <th class="text-left py-3 px-4 text-xs border-r border-[#000] w-[200px]">Video</th>
                            <th class="text-left py-3 px-4 text-xs border-r border-[#000] w-[200px]">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($videos as $index => $video)
                            <tr class="border-t border-[#000]">
                                <td class="py-3 px-4 text-xs max-w-[200px] border-r border-[#000]">
                                    <div class="flex items-center h-full w-full">{{ $index + 1 }}</div>
                                </td>
                                <td class="text-left py-3 px-4 text-[10px] md:text-[12px] border-r border-[#000]">
                                    <div class="flex items-center h-full w-full gap-4">
                                        <div class="flex truncate gap-2">
                                            @if (!empty($video->videos['en']))
                                                <video class="w-[250px] h-[150px] rounded-lg shadow-lg" controls>
                                                    <source src={{ asset($video->videos['en']) }} type="video/mp4" />
                                                    Your browser does not support the video tag.
                                                </video>
                                            @endif

                                            @if (!empty($video->videos['ch']))
                                                <video class="w-[250px] h-[150px] rounded-lg shadow-lg" controls>
                                                    <source src={{ asset($video->videos['ch']) }} type="video/mp4" />
                                                    Your browser does not support the video tag.
                                                </video>
                                            @endif
                                        </div>
                                    </div>

                                </td>
                                <td class="py-3 px-4 text-xs border-r border-[#000]">
                                    <div class="flex items-center h-full space-x-2 w-full">
                                        <a href="{{ route('profile-video.edit', $video->id) }}" title="Edit">
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
