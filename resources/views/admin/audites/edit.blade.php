<x-app-layout>
    <div class="max-w-7xl mx-auto bg-white shadow-md rounded-lg p-6 my-2">
        <h2 class="text-2xl font-bold">Edit OurService (Audit Preparation & Support)</h2>
        <form action="{{ route('audit.update', $audit->id) }}" method="POST" enctype="multipart/form-data"
            class="space-y-4">
            @csrf
            @method('PATCH')
            @component('admin.components.alert')
            @endcomponent

            <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="p-0 space-y-4">
                    @if (!empty($audit->title['en']))
                        <h1 class="text-[20px] text-[#DFAD16]">English</h1>
                    @endif
                    @if (!empty($audit->title['en']))
                        <div>
                            <label for="title_en" class="block text-sm font-medium text-gray-700">Title</label>
                            <input value="{{ old('title.en', $audit->title['en'] ?? '') }}" type="text" name="title[en]" id="title_en"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('title.en')" />
                        </div>
                    @endif
                    @if (!empty($audit->content['en']))
                        <div>
                            <label for="content_en" class="block text-sm font-medium text-gray-700">Content</label>
                            <textarea name="content[en]" id="content_en" rows="6"
                                class="mt-1 block w-full p-2 border rounded-md text-black text-[12px]">{{ old('content.en', $audit->content['en'] ?? '') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('content.en')" />
                        </div>
                    @endif
                </div>

                <div class="p-0 space-y-4">
                    @if (!empty($audit->title['ch']))
                        <h1 class="text-[20px] text-[#DFAD16]">Chinese</h1>
                    @endif
                    @if (!empty($audit->title['ch']))
                        <div>
                            <label for="title_ch" class="block text-sm font-medium text-gray-700">Title</label>
                            <input value="{{ old('title.ch', $audit->title['ch'] ?? '') }}" type="text" name="title[ch]" id="title_ch"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('title.ch')" />
                        </div>
                    @endif

                    @if (!empty($audit->content['ch']))
                        <div>
                            <label for="content_ch" class="block text-sm font-medium text-gray-700">Content</label>
                            <textarea name="content[ch]" id="content_ch" rows="6"
                                class="mt-1 block w-full p-2 border rounded-md text-black text-[12px]">{{ old('content.ch', $audit->content['ch'] ?? '') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('content.ch')" />
                        </div>
                    @endif
                </div>
            </div>
            <!-- Dropzone for Image -->
            @if (!empty($audit->image))
                <div>
                    <label for="dropzone-file{{ $audit->id }}" id="drop-area"
                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6 w-full h-full bg-contain bg-center bg-no-repeat rounded-md text-center"
                            id="img-preview" style="background-image: url({{ asset($audit->image) }})">
                            <svg class="w-8 h-8 mb-4 text-[#000]" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1"
                                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                            </svg>
                            <p class="mb-2 text-[12px] sm:text-[14px] text-[#000]"><span
                                    class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-[#000]">SVG, PNG, JPG or GIF (MAX. 5MB)</p>
                        </div>
                        <input id="dropzone-file{{ $audit->id }}" type="file" class="hidden" name="image" accept="image/*"
                            onchange="uploadImage(event)" />
                    </label>
                    <x-input-error class="mt-2" :messages="$errors->get('image')" />
                </div>
            @endif

            <div class="flex justify-between">
                <a href="{{ route('audit.index') }}"
                    class="border border-[#DFAD16] hover:!bg-[#DFAD16] hover:!text-[#ffffff] px-4 py-1 md:px-6 rounded-[5px] text-[#DFAD16]">
                    Back
                </a>

                <button type="submit"
                    class="bg-[#DFAD16] text-white px-4 py-1 md:px-6 rounded-[5px]">Submit</button>
            </div>
        </form>
    </div>

    <script>
        const dropArea = document.getElementById('drop-area');
        const imageFile = document.getElementById('dropzone-file');
        const imagePreview = document.getElementById('img-preview');

        function uploadImage(event) {
            const file = event.target.files[0];
            if (file) {
                const imgLink = URL.createObjectURL(file);
                imagePreview.style.backgroundImage = `url(${imgLink})`;
                imagePreview.style.backgroundSize = "contain";
                imagePreview.style.backgroundPosition = "center";
                imagePreview.innerHTML = "";
            }
        }

        // Drag-and-drop functionality
        dropArea.addEventListener('dragover', (event) => {
            event.preventDefault();
            dropArea.classList.add('border-blue-500');
        });

        dropArea.addEventListener('dragleave', () => {
            dropArea.classList.remove('border-blue-500');
        });

        dropArea.addEventListener('drop', (event) => {
            event.preventDefault();
            dropArea.classList.remove('border-blue-500');
            const file = event.dataTransfer.files[0];
            if (file) {
                const imgLink = URL.createObjectURL(file);
                imagePreview.style.backgroundImage = `url(${imgLink})`;
                imagePreview.style.backgroundSize = "contain";
                imagePreview.style.backgroundPosition = "center";
                imagePreview.innerHTML = ""; // Clear the default content inside preview
                imageFile.files = event.dataTransfer.files; // Attach the dropped file to input
            }
        });
    </script>
</x-app-layout>
