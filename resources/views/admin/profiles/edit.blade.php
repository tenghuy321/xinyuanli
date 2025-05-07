<x-app-layout>
    <div class="max-w-7xl mx-auto bg-white shadow-md rounded-lg p-6 my-2">
        <h2 class="text-2xl font-bold">Edit Profile</h2>
        <form action="{{ route('profileAdmin.update', $profile->id) }}" method="POST" enctype="multipart/form-data"
            class="space-y-4">
            @csrf
            @method('PATCH')
            @component('admin.components.alert')
            @endcomponent
            <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="p-0 space-y-4">
                    <h1 class="text-[20px] font-[600] text-[#DFAD16]">English</h1>
                    <div>
                        <label for="title_en" class="block text-sm font-medium text-gray-700">Title</label>
                        <input value="{{ old('title.en', $profile->title['en'] ?? '') }}" type="text"
                            name="title[en]" id="title_en"
                            class="mt-1 block w-full p-2 border rounded-md focus:ring-[#DFAD16] focus:border-[#DFAD16] text-black text-sm">
                        <x-input-error class="mt-2" :messages="$errors->get('title.en')" />
                    </div>

                    @if (!empty($profile->content['en']))
                        <div>
                            <label for="content_en" class="block text-sm font-medium text-gray-700">Content</label>
                            <textarea name="content[en]" id="content_en" rows="6"
                                class="mt-1 block w-full p-2 border rounded-md focus:ring-[#DFAD16] focus:border-[#DFAD16] text-black text-[12px]">{{ old('content.en', $profile->content['en'] ?? '') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('content.en')" />
                        </div>
                    @endif
                </div>

                <div class="p-0 space-y-4">
                    <h1 class="text-[20px] font-[600] text-[#DFAD16]">Chinese</h1>
                    <div>
                        <label for="title_ch" class="block text-sm font-medium text-gray-700">Title</label>
                        <input value="{{ old('title.ch', $profile->title['ch'] ?? '') }}" type="text"
                            name="title[ch]" id="title_ch"
                            class="mt-1 block w-full p-2 border rounded-md focus:ring-[#DFAD16] focus:border-[#DFAD16] text-black text-sm">
                        <x-input-error class="mt-2" :messages="$errors->get('title.ch')" />
                    </div>
                    @if (!empty($profile->content['ch']))
                        <div>
                            <label for="content_ch" class="block text-sm font-medium text-gray-700">Content</label>
                            <textarea name="content[ch]" id="content_ch" rows="6"
                                class="mt-1 block w-full p-2 border rounded-md focus:ring-[#DFAD16] focus:border-[#DFAD16] text-black text-[12px]">{{ old('content.ch', $profile->content['ch'] ?? '') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('content.ch')" />
                        </div>
                    @endif
                </div>
            </div>

            <!-- Dropzone for Image -->
            <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <h1 class="text-[20px] font-[600] text-[#DFAD16] mb-4">Image</h1>
                    <label for="dropzone-file-image{{ $profile->id }}" id="drop-area-image{{ $profile->id }}"
                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6 w-full h-full bg-contain bg-center bg-no-repeat rounded-md text-center"
                            id="img-preview-image{{ $profile->id }}"
                            style="background-image: url({{ asset($profile->image) }})">
                            <svg class="w-8 h-8 mb-4 text-[#000]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1"
                                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                            </svg>
                            <p class="mb-2 text-[12px] sm:text-[14px] text-[#000]"><span class="font-semibold">Click to
                                    upload</span> or drag and drop</p>
                            <p class="text-xs text-[#000]">SVG, PNG, JPG or GIF (MAX. 5MB)</p>
                        </div>
                        <input id="dropzone-file-image{{ $profile->id }}" type="file" name="image" class="hidden"
                            accept="image/*" data-preview="img-preview-image{{ $profile->id }}"
                            onchange="uploadImage(event)" />
                    </label>
                    <x-input-error class="mt-2" :messages="$errors->get('image')" />
                </div>

                <div>
                    <h1 class="text-[20px] font-[600] text-[#DFAD16] mb-4">Icon</h1>
                    <label for="dropzone-file-icon{{ $profile->id }}" id="drop-area-icon{{ $profile->id }}"
                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6 w-full h-full bg-contain bg-center bg-no-repeat rounded-md text-center"
                            id="img-preview-icon{{ $profile->id }}"
                            style="background-image: url({{ asset($profile->icon) }})">
                            <svg class="w-8 h-8 mb-4 text-[#000]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1"
                                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                            </svg>
                            <p class="mb-2 text-[12px] sm:text-[14px] text-[#000]"><span class="font-semibold">Click to
                                    upload</span> or drag and drop</p>
                            <p class="text-xs text-[#000]">SVG, PNG, JPG or GIF (MAX. 5MB)</p>
                        </div>
                        <input id="dropzone-file-icon{{ $profile->id }}" type="file" name="icon" class="hidden"
                            accept="image/*" data-preview="img-preview-icon{{ $profile->id }}"
                            onchange="uploadImage(event)" />
                    </label>
                    <x-input-error class="mt-2" :messages="$errors->get('icon')" />
                </div>
            </div>

            <div class="flex justify-between">
                <a href="{{ route('profileAdmin.index') }}"
                    class="border border-[#DFAD16] hover:!bg-[#DFAD16] hover:!text-[#ffffff] px-4 py-1 md:px-6 rounded-[5px] text-[#DFAD16]">
                    Back
                </a>

                <button type="submit"
                    class="bg-[#DFAD16] text-white px-4 py-1 md:px-6 rounded-[5px] hover:!text-[#415464]">Submit</button>
            </div>
        </form>
    </div>

    <script>
        function uploadImage(event) {
            const input = event.target;
            const file = input.files[0];
            const previewId = input.getAttribute('data-preview');
            const preview = document.getElementById(previewId);

            if (file && preview) {
                const imgUrl = URL.createObjectURL(file);
                preview.style.backgroundImage = `url(${imgUrl})`;
                preview.style.backgroundSize = "contain";
                preview.style.backgroundPosition = "center";
                preview.innerHTML = "";
            }
        }

        // Optional: enable drag-and-drop preview
        document.addEventListener('DOMContentLoaded', () => {
            const areas = document.querySelectorAll('[id^="drop-area"]');
            areas.forEach(area => {
                const input = area.querySelector('input[type="file"]');
                const previewId = input.getAttribute('data-preview');
                const preview = document.getElementById(previewId);

                area.addEventListener('dragover', (e) => {
                    e.preventDefault();
                    area.classList.add('border-blue-500');
                });

                area.addEventListener('dragleave', () => {
                    area.classList.remove('border-blue-500');
                });

                area.addEventListener('drop', (e) => {
                    e.preventDefault();
                    area.classList.remove('border-blue-500');
                    const file = e.dataTransfer.files[0];
                    if (file) {
                        const imgUrl = URL.createObjectURL(file);
                        preview.style.backgroundImage = `url(${imgUrl})`;
                        preview.style.backgroundSize = "contain";
                        preview.style.backgroundPosition = "center";
                        preview.innerHTML = "";
                        input.files = e.dataTransfer.files;
                    }
                });
            });
        });
    </script>


</x-app-layout>
