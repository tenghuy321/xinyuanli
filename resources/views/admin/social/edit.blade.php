<x-app-layout>
    <div class="max-w-7xl mx-auto bg-white shadow-md rounded-lg p-6 my-2">
        <h2 class="text-2xl font-bold">Edit Social Media</h2>
        <form action="{{ route('social.update', $social->id) }}" method="POST" enctype="multipart/form-data"
            class="space-y-4">
            @csrf
            @method('PATCH')
            @component('admin.components.alert')
            @endcomponent
            <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input value="{{ old('email', $social->email) }}" type="text" name="email" id="email"
                        class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                </div>
                <div>
                    <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input value="{{ old('phone_number', $social->phone_number) }}" type="text" name="phone_number"
                        id="phone_number"
                        class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                    <x-input-error class="mt-2" :messages="$errors->get('phone_number')" />
                </div>
                <div>
                    <label for="telegram" class="block text-sm font-medium text-gray-700">Telegram</label>
                    <input value="{{ old('telegram', $social->telegram) }}" type="text" name="telegram"
                        id="telegram"
                        class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                    <x-input-error class="mt-2" :messages="$errors->get('telegram')" />
                </div>
                <div>
                    <label for="facebook_name" class="block text-sm font-medium text-gray-700">Facebook Name</label>
                    <input value="{{ old('facebook_name', $social->facebook_name) }}" type="text"
                        name="facebook_name" id="facebook_name"
                        class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                    <x-input-error class="mt-2" :messages="$errors->get('facebook_name')" />
                </div>
                <div>
                    <label for="facebook" class="block text-sm font-medium text-gray-700">Facebook Link</label>
                    <input value="{{ old('facebook', $social->facebook) }}" type="text" name="facebook"
                        id="facebook"
                        class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                    <x-input-error class="mt-2" :messages="$errors->get('facebook')" />
                </div>
                <div>
                    <label for="website" class="block text-sm font-medium text-gray-700">Website</label>
                    <input value="{{ old('website', $social->website) }}" type="text" name="website" id="website"
                        class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                    <x-input-error class="mt-2" :messages="$errors->get('website')" />
                </div>
                <div>
                    <label for="working_hour" class="block text-sm font-medium text-gray-700">Working Hour</label>
                    <input value="{{ old('working_hour', $social->working_hour) }}" type="text" name="working_hour" id="working_hour"
                        class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                    <x-input-error class="mt-2" :messages="$errors->get('working_hour')" />
                </div>
                <div>
                    <label for="map" class="block text-sm font-medium text-gray-700">Map</label>
                    <input value="{{ old('map', $social->map) }}" type="text" name="map" id="map"
                        class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                    <x-input-error class="mt-2" :messages="$errors->get('map')" />
                </div>
                <div>
                    <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                    <input value="{{ old('location', $social->location) }}" type="text" name="location" id="location"
                        class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                    <x-input-error class="mt-2" :messages="$errors->get('location')" />
                </div>
            </div>

            <div class="flex justify-between">
                <a href="{{ route('social.index') }}"
                    class="border border-[#DFAD16] hover:!bg-[#DFAD16] hover:!text-[#ffffff] px-4 py-1 md:px-6 rounded-[5px] text-[#DFAD16]">
                    Back
                </a>

                <button type="submit"
                    class="bg-[#DFAD16] text-white px-4 py-1 md:px-6 rounded-[5px] hover:!text-[#000]">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
