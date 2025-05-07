@extends('admin.layouts.app')
@section('header')
    Our Content
@endsection
@section('content')
    <div class="">
        {{-- <div class="my-3 md:my-4 px-2 md:px-4 text-end">
            <a href="{{ route('homepage.create') }}"
                class="hover:!bg-[#DFAD16] hover:!text-[#ffffff] text-[#DFAD16] px-4 py-2 my-3 rounded-[5px] border-2 border-[#DFAD16] text-[12px] sm:text-[14px]">
                <span class="">Add new</span>
            </a>
        </div> --}}

        @component('admin.components.alert')
        @endcomponent

        <div class="overflow-x-auto px-0 sm:px-2 md:px-4">
            <div class="border border-[#000] max-h-[80vh] overflow-y-auto">
                <table class="min-w-full table-fixed">
                    <thead class="bg-[#DFAD16] text-white sticky top-0 z-10">
                        <tr>
                            <th class="text-left py-3 px-4 text-xs w-8 border-r border-[#000]">#</th>
                            <th class="text-left py-3 px-4 text-xs w-[200px] border-r border-[#000]">Page</th>
                            <th class="text-left py-3 px-4 text-xs w-[200px] border-r border-[#000]">Icon</th>
                            <th class="text-left py-3 px-4 text-xs w-[200px] border-r border-[#000]">Title</th>
                            <th class="text-left py-3 px-4 text-xs w-[200px] border-r border-[#000]">Sub Title</th>
                            <th class="text-left py-3 px-4 text-xs w-[200px] border-r border-[#000]">Content</th>
                            <th class="text-left py-3 px-4 text-xs w-[100px] border-r border-[#000]">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($homes as $index => $home)
                            <tr class="border-t border-[#000]">
                                <td class="py-3 px-4 text-xs max-w-[200px] border-r border-[#000]">{{ $index + 1 }}</td>
                                <th class="text-left py-3 px-4 text-xs w-[200px] border-r border-[#000]">{{ $home->page }}</th>
                                <td class="text-left py-3 px-4 text-[10px] md:text-[12px] border-r border-[#000]">
                                    <div class="flex items-center h-full w-full">
                                        @if (!empty($home->icon))
                                            <img src="{{ asset($home->icon) }}" alt="" class="w-10 h-10 object-contain object-center">
                                        @endif
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-xs max-w-[200px] border-r border-[#000]">
                                    <div class="flex flex-col truncate">
                                        <p>{{ $home->title['en'] ?? '' }}</p>
                                        <p>{{ $home->title['ch'] ?? '' }}</p>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-xs max-w-[200px] border-r border-[#000]">
                                    <div class="flex flex-col truncate">
                                        <p>{{ $home->sub_title['en'] ?? '' }}</p>
                                        <p>{{ $home->sub_title['ch'] ?? '' }}</p>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-xs max-w-[200px] border-r border-[#000]">
                                    <div class="flex flex-col truncate">
                                        <p>{{ $home->content['en'] ?? '' }}</p>
                                        <p>{{ $home->content['ch'] ?? '' }}</p>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-xs flex max-w-[200px]">
                                    <div class="flex items-center space-x-1">
                                        <a class="{{ $home->id != 2 ? 'hidden' : '' }}" href={{ route('listServices.index') }}>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#DFAD16" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="1.5">
                                                <path d="M9 6h11"></path>
                                                <path d="M12 12h8"></path>
                                                <path d="M15 18h5"></path>
                                                <path d="M5 6v.01"></path>
                                                <path d="M8 12v.01"></path>
                                                <path d="M11 18v.01"></path>
                                            </svg>
                                        </a>
                                        <a class="{{ $home->id != 3 ? 'hidden' : '' }}" href={{ route('uniqueness.index') }}>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#DFAD16" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="1.5">
                                                <path d="M9 6h11"></path>
                                                <path d="M12 12h8"></path>
                                                <path d="M15 18h5"></path>
                                                <path d="M5 6v.01"></path>
                                                <path d="M8 12v.01"></path>
                                                <path d="M11 18v.01"></path>
                                            </svg>
                                        </a>
                                        <a class="{{ $home->id != 4 ? 'hidden' : '' }}" href={{ route('csr.index') }}>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#DFAD16" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="1.5">
                                                <path d="M9 6h11"></path>
                                                <path d="M12 12h8"></path>
                                                <path d="M15 18h5"></path>
                                                <path d="M5 6v.01"></path>
                                                <path d="M8 12v.01"></path>
                                                <path d="M11 18v.01"></path>
                                            </svg>
                                        </a>
                                        <a class="{{ $home->id != 6 ? 'hidden' : '' }}" href={{ route('galleryImage.index') }}>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#DFAD16" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="1.5">
                                                <path d="M9 6h11"></path>
                                                <path d="M12 12h8"></path>
                                                <path d="M15 18h5"></path>
                                                <path d="M5 6v.01"></path>
                                                <path d="M8 12v.01"></path>
                                                <path d="M11 18v.01"></path>
                                            </svg>
                                        </a>
                                        <a class="{{ $home->id != 7 ? 'hidden' : '' }}" href={{ route('ourCareer.index') }}>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#DFAD16" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="1.5">
                                                <path d="M9 6h11"></path>
                                                <path d="M12 12h8"></path>
                                                <path d="M15 18h5"></path>
                                                <path d="M5 6v.01"></path>
                                                <path d="M8 12v.01"></path>
                                                <path d="M11 18v.01"></path>
                                            </svg>
                                        </a>
                                        <a class="{{ $home->id != 9 ? 'hidden' : '' }}" href={{ route('navbar.index') }}>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#DFAD16" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="1.5">
                                                <path d="M9 6h11"></path>
                                                <path d="M12 12h8"></path>
                                                <path d="M15 18h5"></path>
                                                <path d="M5 6v.01"></path>
                                                <path d="M8 12v.01"></path>
                                                <path d="M11 18v.01"></path>
                                            </svg>
                                        </a>
                                        {{-- <a href="{{ route('homepage.delete', $home->id) }}" title="Delete"
                                            onclick="event.preventDefault(); deleteRecord('{{ route('homepage.delete', $home->id) }}')">
                                            <svg class="w-6 h-6 text-red-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                              </svg>
                                        </a> --}}
                                        <a href="{{ route('homepage.edit', $home->id) }}" title="Edit">
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
