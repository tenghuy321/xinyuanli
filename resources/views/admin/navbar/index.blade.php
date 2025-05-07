@extends('admin.layouts.app')
@section('header')
    Navbar
@endsection
@section('content')
    <div class="" x-data="reorderTable()" x-init="initSortable()">
        <div class="my-3 md:my-4 px-2 md:px-4 text-end">
            {{-- <a href="{{ route('navbar.create') }}"
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
                            {{-- <th class="text-left py-3 px-4 text-xs w-8 border-r border-[#000]">#</th> --}}
                            <th class="text-left py-3 px-4 text-xs w-8 border-r border-[#000]">Order</th>
                            <th class="text-left py-3 px-4 text-xs w-[200px] border-r border-[#000]">Title</th>
                            <th class="text-left py-3 px-4 text-xs w-[100px] border-r border-[#000]">Action</th>
                        </tr>
                    </thead>
                    <tbody x-ref="tableBody" class="text-gray-700">
                        @foreach ($navs as $index => $nav)
                            <tr class="border-t border-[#000] cursor-move" draggable="true" x-bind:data-id="{{ $nav->id }}"
                                @dragstart="dragStart($event, {{ $nav->id }})" @dragover.prevent
                                @drop="drop($event, {{ $nav->id }})">
                                {{-- <td class="py-3 px-4 text-xs max-w-[200px] border-r border-[#000]">{{ $index + 1 }}</td> --}}
                                <td class="py-3 px-4 text-xs max-w-[200px] border-r border-[#000]">{{ $nav->order }}</td>
                                <td class="py-3 px-4 text-xs max-w-[200px] border-r border-[#000]">
                                    <div class="flex flex-col truncate">
                                        <p>{{ $nav->title['en'] ?? '' }}</p>
                                        <p>{{ $nav->title['ch'] ?? '' }}</p>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-xs flex space-x-2 max-w-[200px]">
                                    <div class="flex items-center">
                                        <a href="{{ route('navbar.edit', $nav->id) }}" title="Edit">
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
@section('js')
    <script>
        function reorderTable() {
            return {
                initSortable() {
                    this.$nextTick(() => {
                        let tableBody = this.$refs.tableBody;
                        new Sortable(tableBody, {
                            animation: 150,
                            ghostClass: "bg-gray-100",
                            onEnd: async (event) => {
                                let newOrder = [...tableBody.children].map((row, index) => ({
                                    id: row.getAttribute("data-id"),
                                    order: index + 1
                                }));

                                let response = await fetch("{{ route('navbar.reorder') }}", {
                                    method: "POST",
                                    headers: {
                                        "Content-Type": "application/json",
                                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                                    },
                                    body: JSON.stringify({
                                        newOrder
                                    })
                                });

                                if (response.ok) {
                                    location.reload();
                                } else {
                                    console.error("Failed to reorder.");
                                }
                            }
                        });
                    });
                }
            };
        }
    </script>
@endsection
