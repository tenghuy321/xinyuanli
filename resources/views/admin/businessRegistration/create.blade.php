<x-app-layout>
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6 my-2">
        <h2 class="text-2xl font-bold">Add businessRegistration</h2>
        <form action="{{ route('businessRegistration.store') }}" method="POST" enctype="multipart/form-data"
            class="space-y-4">
            @csrf
            @component('admin.components.alert')
            @endcomponent
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="dropzone-file-en" id="drop-area-en"
                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6 w-full h-full bg-contain bg-center bg-no-repeat rounded-md text-center"
                            id="img-preview-en">
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
                        <input id="dropzone-file-en" type="file" class="hidden" name="images_en" accept="image/*"
                            data-lang="en" onchange="uploadImage(event)" />
                    </label>
                    <x-input-error class="mt-2" :messages="$errors->get('image_en')" />
                </div>

                <div>
                    <label for="dropzone-file-ch" id="drop-area-ch"
                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6 w-full h-full bg-contain bg-center bg-no-repeat rounded-md text-center"
                            id="img-preview-ch">
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
                        <input id="dropzone-file-ch" type="file" class="hidden" name="images_ch" accept="image/*"
                            onchange="uploadImage(event)" />
                    </label>
                    <x-input-error class="mt-2" :messages="$errors->get('image_ch')" data-lang="ch" />
                </div>
            </div>


            <div class="flex justify-between w-full">
                <a href="{{ route('businessRegistration.index') }}"
                    class="border border-[#DFAD16] hover:!bg-[#DFAD16] hover:!text-[#ffffff] px-4 py-1 md:px-6 rounded-[5px] text-[#DFAD16]">
                    Back
                </a>

                <button type="submit"
                    class="bg-[#DFAD16] text-white px-4 py-1 md:px-6 rounded-[5px] hover:!text-[#415464]">Submit</button>
            </div>
        </form>
    </div>


    <script>
        function previewImage(inputId, previewId, dropAreaId) {
            const input = document.getElementById(inputId);
            const preview = document.getElementById(previewId);
            const dropArea = document.getElementById(dropAreaId);

            input.addEventListener('change', (e) => {
                const file = e.target.files[0];
                if (file) {
                    const imgLink = URL.createObjectURL(file);
                    preview.style.backgroundImage = `url(${imgLink})`;
                    preview.style.backgroundSize = "contain";
                    preview.style.backgroundPosition = "center";
                    preview.innerHTML = "";
                }
            });

            dropArea.addEventListener('dragover', (e) => {
                e.preventDefault();
                dropArea.classList.add('border-blue-500');
            });

            dropArea.addEventListener('dragleave', () => {
                dropArea.classList.remove('border-blue-500');
            });

            dropArea.addEventListener('drop', (e) => {
                e.preventDefault();
                dropArea.classList.remove('border-blue-500');
                const file = e.dataTransfer.files[0];
                if (file) {
                    const imgLink = URL.createObjectURL(file);
                    preview.style.backgroundImage = `url(${imgLink})`;
                    preview.style.backgroundSize = "contain";
                    preview.style.backgroundPosition = "center";
                    preview.innerHTML = "";
                    input.files = e.dataTransfer.files;
                }
            });
        }

        // Initialize for each input
        previewImage('dropzone-file-en', 'img-preview-en', 'drop-area-en');
        previewImage('dropzone-file-ch', 'img-preview-ch', 'drop-area-ch');
    </script>


</x-app-layout>
