<x-app-layout>
    <div class="max-w-7xl mx-auto bg-white shadow-md rounded-lg p-6 my-2">
        <h2 class="text-2xl font-bold">Edit OurService (Regulatory Advisory)</h2>
        <form action="{{ route('regulatories-advisory.update', $regulatory->id) }}" method="POST"
            enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PATCH')
            @component('admin.components.alert')
            @endcomponent

            <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="p-0 space-y-4">
                    <h1 class="text-[20px] text-[#DFAD16]">English</h1>
                    <div>
                        <label for="title_en" class="block text-sm font-medium text-gray-700">Title</label>
                        <input value="{{ old('title.en', $regulatory->title['en'] ?? '') }}" type="text"
                            name="title[en]" id="title_en"
                            class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                        <x-input-error class="mt-2" :messages="$errors->get('title.en')" />
                    </div>
                    @if (!empty($regulatory->content1['en']))
                        <div>
                            <label for="content1_en" class="block text-sm font-medium text-gray-700">Content</label>
                            <textarea name="content1[en]" id="content1_en" rows="4"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">{{ old('content1.en', $regulatory->content1['en'] ?? '') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('content1.en')" />
                        </div>
                    @endif
                    @if (!empty($regulatory->sub_title1['en']))
                        <div>
                            <label for="sub_title1_en" class="block text-sm font-medium text-gray-700">Sub Title</label>
                            <input value="{{ old('sub_title1.en', $regulatory->sub_title1['en'] ?? '') }}"
                                type="text" name="sub_title1[en]" id="sub_title1_en"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('sub_title1.en')" />
                        </div>
                    @endif
                    @if (!empty($regulatory->content2['en']))
                        <div>
                            <label for="content2_en" class="block text-sm font-medium text-gray-700">Content</label>
                            <textarea name="content2[en]" id="content2_en" rows="4"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">{{ old('content2.en', $regulatory->content2['en'] ?? '') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('content2.en')" />
                        </div>
                    @endif
                    @if (!empty($regulatory->sub_title2['en']))
                        <div>
                            <label for="sub_title2_en" class="block text-sm font-medium text-gray-700">Sub Title</label>
                            <input value="{{ old('sub_title2.en', $regulatory->sub_title2['en'] ?? '') }}"
                                type="text" name="sub_title2[en]" id="sub_title2_en"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('sub_title2.en')" />
                        </div>
                    @endif
                    @if (!empty($regulatory->content3['en']))
                        <div>
                            <label for="content3_en" class="block text-sm font-medium text-gray-700">Content</label>
                            <textarea name="content3[en]" id="content3_en" rows="4"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">{{ old('content3.en', $regulatory->content3['en'] ?? '') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('content3.en')" />
                        </div>
                    @endif
                    @if (!empty($regulatory->sub_title3['en']))
                        <div>
                            <label for="sub_title3_en" class="block text-sm font-medium text-gray-700">Sub Title</label>
                            <input value="{{ old('sub_title3.en', $regulatory->sub_title3['en'] ?? '') }}"
                                type="text" name="sub_title3[en]" id="sub_title3_en"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('sub_title3.en')" />
                        </div>
                    @endif
                    @if (!empty($regulatory->content4['en']))
                        <div>
                            <label for="content4_en" class="block text-sm font-medium text-gray-700">Content</label>
                            <textarea name="content4[en]" id="content4_en" rows="4"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">{{ old('content4.en', $regulatory->content4['en'] ?? '') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('content4.en')" />
                        </div>
                    @endif
                    @if (!empty($regulatory->sub_title4['en']))
                        <div>
                            <label for="sub_title4_en" class="block text-sm font-medium text-gray-700">Sub Title</label>
                            <input value="{{ old('sub_title4.en', $regulatory->sub_title4['en'] ?? '') }}"
                                type="text" name="sub_title4[en]" id="sub_title4_en"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('sub_title4.en')" />
                        </div>
                    @endif
                    @if (!empty($regulatory->content5['en']))
                        <div>
                            <label for="content5_en" class="block text-sm font-medium text-gray-700">Content</label>
                            <textarea name="content5[en]" id="content5_en" rows="4"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">{{ old('content5.en', $regulatory->content5['en'] ?? '') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('content5.en')" />
                        </div>
                    @endif
                </div>

                <div class="p-0 space-y-4">
                    <h1 class="text-[20px] text-[#DFAD16]">Chinese</h1>
                    <div>
                        <label for="title_ch" class="block text-sm font-medium text-gray-700">Title</label>
                        <input value="{{ old('title.ch', $regulatory->title['ch'] ?? '') }}" type="text"
                            name="title[ch]" id="title_ch"
                            class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                        <x-input-error class="mt-2" :messages="$errors->get('title.ch')" />
                    </div>
                    @if (!empty($regulatory->content1['ch']))
                        <div>
                            <label for="content1_ch" class="block text-sm font-medium text-gray-700">Content</label>
                            <textarea name="content1[ch]" id="content1_ch" rows="4"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">{{ old('content1.ch', $regulatory->content1['ch'] ?? '') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('content1.ch')" />
                        </div>
                    @endif
                    @if (!empty($regulatory->sub_title1['ch']))
                        <div>
                            <label for="sub_title1_ch" class="block text-sm font-medium text-gray-700">Sub
                                Title</label>
                            <input value="{{ old('sub_title1.ch', $regulatory->sub_title1['ch'] ?? '') }}"
                                type="text" name="sub_title1[ch]" id="sub_title1_ch"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('sub_title1.ch')" />
                        </div>
                    @endif
                    @if (!empty($regulatory->content2['ch']))
                        <div>
                            <label for="content2_ch" class="block text-sm font-medium text-gray-700">Content</label>
                            <textarea name="content2[ch]" id="content2_ch" rows="4"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">{{ old('content2.ch', $regulatory->content2['ch'] ?? '') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('content2.ch')" />
                        </div>
                    @endif
                    @if (!empty($regulatory->sub_title2['ch']))
                        <div>
                            <label for="sub_title2_ch" class="block text-sm font-medium text-gray-700">Sub
                                Title</label>
                            <input value="{{ old('sub_title2.ch', $regulatory->sub_title2['ch'] ?? '') }}"
                                type="text" name="sub_title2[ch]" id="sub_title2_ch"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('sub_title2.ch')" />
                        </div>
                    @endif
                    @if (!empty($regulatory->content3['ch']))
                        <div>
                            <label for="content3_ch" class="block text-sm font-medium text-gray-700">Content</label>
                            <textarea name="content3[ch]" id="content3_ch" rows="4"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">{{ old('content3.ch', $regulatory->content3['ch'] ?? '') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('content3.ch')" />
                        </div>
                    @endif
                    @if (!empty($regulatory->sub_title3['ch']))
                        <div>
                            <label for="sub_title3_ch" class="block text-sm font-medium text-gray-700">Sub
                                Title</label>
                            <input value="{{ old('sub_title3.ch', $regulatory->sub_title3['ch'] ?? '') }}"
                                type="text" name="sub_title3[ch]" id="sub_title3_en"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('sub_title3.ch')" />
                        </div>
                    @endif
                    @if (!empty($regulatory->content4['ch']))
                        <div>
                            <label for="content4_ch" class="block text-sm font-medium text-gray-700">Content</label>
                            <textarea name="content4[ch]" id="content4_ch" rows="4"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">{{ old('content4.ch', $regulatory->content4['ch'] ?? '') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('content4.ch')" />
                        </div>
                    @endif
                    @if (!empty($regulatory->sub_title4['ch']))
                        <div>
                            <label for="sub_title4_ch" class="block text-sm font-medium text-gray-700">Sub Title</label>
                            <input value="{{ old('sub_title4.ch', $regulatory->sub_title4['ch'] ?? '') }}" type="text"
                                name="sub_title4[ch]" id="sub_title4_ch"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('sub_title4.ch')" />
                        </div>
                    @endif
                    @if (!empty($regulatory->content5['ch']))
                        <div>
                            <label for="content5_ch" class="block text-sm font-medium text-gray-700">Content</label>
                            <textarea name="content5[ch]" id="content5_ch" rows="4"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">{{ old('content5.en', $regulatory->content5['ch'] ?? '') }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('content5.ch')" />
                        </div>
                    @endif
                </div>
            </div>

            <!-- Dropzone for Image -->
            @if (!empty($regulatory->image))
                <div>
                    <label for="dropzone-file{{ $regulatory->id }}" id="drop-area"
                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6 w-full h-full bg-contain bg-center bg-no-repeat rounded-md text-center"
                            id="img-preview" style="background-image: url({{ asset($regulatory->image) }})">
                            <svg class="w-8 h-8 mb-4 text-[#000]" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1"
                                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                            </svg>
                            <p class="mb-2 text-[12px] sm:text-[14px] text-[#000]"><span class="font-semibold">Click
                                    to upload</span> or drag and drop</p>
                            <p class="text-xs text-[#000]">SVG, PNG, JPG or GIF (MAX. 5MB)</p>
                        </div>
                        <input id="dropzone-file{{ $regulatory->id }}" type="file" class="hidden" name="image"
                            accept="image/*" onchange="uploadImage(event)" />
                    </label>
                    <x-input-error class="mt-2" :messages="$errors->get('image')" />
                </div>
            @endif


            <div class="flex justify-between">
                <a href="{{ route('regulatories-advisory.index') }}"
                    class="border border-[#DFAD16] hover:!bg-[#DFAD16] hover:!text-[#ffffff] px-4 py-1 md:px-6 rounded-[5px] text-[#DFAD16]">
                    Back
                </a>

                <button type="submit"
                    class="bg-[#DFAD16] text-white px-4 py-1 md:px-6 rounded-[5px] hover:!text-[#415464]">Submit</button>
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
