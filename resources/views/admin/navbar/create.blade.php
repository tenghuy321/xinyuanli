<x-app-layout>
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6 my-2">
        <h2 class="text-2xl font-bold">Create Homepage</h2>
        <form action="{{ route('navbar.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @component('admin.components.alert')
            @endcomponent
            <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="p-0 space-y-4">
                    <h1>English</h1>
                    <div>
                        <label for="title_en" class="block text-sm font-medium text-gray-700">Title</label>
                        <input value="{{ old('title.en') }}" type="text" name="title[en]" id="title_en"
                            class="mt-1 block w-full p-2 border rounded-md focus:ring-green-500 focus:border-green-500 text-green-900 text-sm">
                        <x-input-error class="mt-2" :messages="$errors->get('title.en')" />
                    </div>
                </div>

                <div class="p-0 space-y-4">
                    <h1>Chinese</h1>
                    <div>
                        <label for="title_ch" class="block text-sm font-medium text-gray-700">Title</label>
                        <input value="{{ old('title.ch') }}" type="text" name="title[ch]" id="title_ch"
                            class="mt-1 block w-full p-2 border rounded-md focus:ring-green-500 focus:border-green-500 text-green-900 text-sm">
                        <x-input-error class="mt-2" :messages="$errors->get('title.ch')" />
                    </div>
                </div>
            </div>

            <div class="flex justify-between w-full">
                <a href="{{ route('navbar.index') }}"
                    class="border border-[#A4CA62] hover:!bg-[#A4CA62] hover:!text-[#ffffff] px-4 py-1 md:px-6 rounded-[5px] text-[#A4CA62]">
                    Back
                </a>

                <button type="submit"
                    class="bg-[#A4CA62] text-white px-4 py-1 md:px-6 rounded-[5px]">Submit</button>
            </div>
        </form>
    </div>

</x-app-layout>
