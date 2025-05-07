<x-app-layout>
    <div class="max-w-7xl mx-auto bg-white shadow-md rounded-lg p-6 my-2">
        <h2 class="text-2xl font-bold">Edit Video Profile</h2>
        <form action="{{ route('profile-video.update', $video->id) }}" method="POST" enctype="multipart/form-data"
            class="space-y-4">
            @csrf
            @method('PATCH')
            @component('admin.components.alert')
            @endcomponent
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- English Video Upload -->
                <div>
                    <label for="dropzone-file-en{{ $video->id }}" id="drop-area-en"
                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                        <div class="relative flex flex-col items-center justify-center pt-5 pb-6 w-full h-full bg-contain bg-center bg-no-repeat rounded-md text-center"
                            id="img-preview-en">
                            @if (!empty($video->videos['en']))
                                <video controls autoplay class="w-full h-full object-contain rounded-md">
                                    <source src="{{ asset($video->videos['en']) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            @else
                                <svg class="w-8 h-8 mb-4 text-[#000]" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1"
                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-[12px] sm:text-[14px] text-[#000]"><span class="font-semibold">Click
                                        to upload</span> or drag and drop</p>
                                <p class="text-xs text-[#000]">MP4, AVI, MOV (MAX. 5MB)</p>
                            @endif
                            <!-- The actual file input behind the text area -->
                            <input id="dropzone-file-en{{ $video->id }}" type="file"
                                class="absolute inset-0 opacity-0 cursor-pointer" name="videos[en]" accept="video/*"
                                onchange="uploadVideo(event, 'img-preview-en')" />
                        </div>
                    </label>
                    <x-input-error class="mt-2" :messages="$errors->get('videos.en')" />
                </div>

                <!-- Chinese Video Upload -->
                <div>
                    <label for="dropzone-file-ch{{ $video->id }}" id="drop-area-ch"
                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                        <div class="relative flex flex-col items-center justify-center pt-5 pb-6 w-full h-full bg-contain bg-center bg-no-repeat rounded-md text-center"
                            id="img-preview-ch">
                            @if (!empty($video->videos['ch']))
                                <video controls autoplay class="w-full h-full object-contain rounded-md">
                                    <source src="{{ asset($video->videos['ch']) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            @else
                                <svg class="w-8 h-8 mb-4 text-[#000]" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1"
                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-[12px] sm:text-[14px] text-[#000]"><span class="font-semibold">Click
                                        to upload</span> or drag and drop</p>
                                <p class="text-xs text-[#000]">MP4, AVI, MOV (MAX. 5MB)</p>
                            @endif
                            <!-- The actual file input behind the text area -->
                            <input id="dropzone-file-ch{{ $video->id }}" type="file"
                                class="absolute inset-0 opacity-0 cursor-pointer" name="videos[ch]" accept="video/*"
                                onchange="uploadVideo(event, 'img-preview-ch')" />
                        </div>
                    </label>
                    <x-input-error class="mt-2" :messages="$errors->get('videos.ch')" />
                </div>
            </div>

            <div class="flex justify-between">
                <a href="{{ route('profile-video.index') }}"
                    class="border border-[#DFAD16] hover:!bg-[#DFAD16] hover:!text-[#ffffff] px-4 py-1 md:px-6 rounded-[5px] text-[#DFAD16]">
                    Back
                </a>

                <button type="submit"
                    class="bg-[#DFAD16] text-white px-4 py-1 md:px-6 rounded-[5px]">Submit</button>
            </div>
        </form>
    </div>

    <script>
        function uploadVideo(event, previewId) {
            const file = event.target.files[0];
            const preview = document.getElementById(previewId);

            if (file && file.type.startsWith('video/')) {
                const videoURL = URL.createObjectURL(file);
                preview.innerHTML = `
                    <video controls class="w-full h-full object-contain rounded-md">
                        <source src="${videoURL}" type="${file.type}">
                        Your browser does not support the video tag.
                    </video>
                `;
            } else {
                preview.innerHTML = '<p class="text-red-500 text-sm">Invalid file type. Please upload a video.</p>';
            }
        }
    </script>
</x-app-layout>
