<x-app-layout>
    <div class="max-w-7xl mx-auto bg-white shadow-md rounded-lg p-6 my-2">
        <h2 class="text-2xl font-bold">Edit OurService (Business Registration)</h2>
        <form action="{{ route('businessRegistration.update', $business_registration->id) }}" method="POST"
            enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PATCH')
            @component('admin.components.alert')
            @endcomponent
            @if ($business_registration->id == 1)
                <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="p-0 space-y-4">
                        <h1 class="text-[20px] text-[#DFAD16]">English</h1>
                        <div>
                            <label for="title_en" class="block text-sm font-medium text-gray-700">Title</label>
                            <input value="{{ old('title.en', $business_registration->title['en'] ?? '') }}"
                                type="text" name="title[en]" id="title_en"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('title.en')" />
                        </div>
                        <div>
                            <label for="sub_title1_en" class="block text-sm font-medium text-gray-700">Header</label>
                            <input value="{{ old('sub_title1.en', $business_registration->sub_title1['en'] ?? '') }}"
                                type="text" name="sub_title1[en]" id="sub_title1_en"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('sub_title1.en')" />
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="content1_en" class="block text-sm font-medium text-gray-700">Content</label>
                                <input value="{{ old('content1.en', $business_registration->content1['en'] ?? '') }}"
                                    type="text" name="content1[en]" id="content1_en"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content1.en')" />
                            </div>
                            <div>
                                <label for="content2_en" class="block text-sm font-medium text-gray-700">Content</label>
                                <input value="{{ old('content2.en', $business_registration->content2['en'] ?? '') }}"
                                    type="text" name="content2[en]" id="content2_en"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content2.en')" />
                            </div>
                        </div>
                        <div>
                            <label for="sub_title2_en" class="block text-sm font-medium text-gray-700">Header</label>
                            <input value="{{ old('sub_title2.en', $business_registration->sub_title2['en'] ?? '') }}"
                                type="text" name="sub_title2[en]" id="sub_title2_en"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('sub_title2.en')" />
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="content3_en" class="block text-sm font-medium text-gray-700">Content</label>
                                <input value="{{ old('content3.en', $business_registration->content3['en'] ?? '') }}"
                                    type="text" name="content3[en]" id="content3_en"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content3.en')" />
                            </div>
                            <div>
                                <label for="content4_en" class="block text-sm font-medium text-gray-700">Content</label>
                                <input value="{{ old('content4.en', $business_registration->content4['en'] ?? '') }}"
                                    type="text" name="content4[en]" id="content4_en"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content4.en')" />
                            </div>
                            <div>
                                <label for="content5_en" class="block text-sm font-medium text-gray-700">Content</label>
                                <input value="{{ old('content5.en', $business_registration->content5['en'] ?? '') }}"
                                    type="text" name="content5[en]" id="content5_en"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content5.en')" />
                            </div>
                        </div>
                        <div>
                            <label for="sub_title3_en" class="block text-sm font-medium text-gray-700">Header</label>
                            <input value="{{ old('sub_title3.en', $business_registration->sub_title3['en'] ?? '') }}"
                                type="text" name="sub_title3[en]" id="sub_title3_en"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('sub_title3.en')" />
                        </div>
                        <div>
                            <label for="sub_title4_en" class="block text-sm font-medium text-gray-700">Header</label>
                            <input value="{{ old('sub_title4.en', $business_registration->sub_title4['en'] ?? '') }}"
                                type="text" name="sub_title4[en]" id="sub_title4_en"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('sub_title4.en')" />
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="content6_en" class="block text-sm font-medium text-gray-700">Content</label>
                                <input value="{{ old('content6.en', $business_registration->content6['en'] ?? '') }}"
                                    type="text" name="content6[en]" id="content6_en"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content6.en')" />
                            </div>
                            <div>
                                <label for="content7_en"
                                    class="block text-sm font-medium text-gray-700">Content</label>
                                <input value="{{ old('content7.en', $business_registration->content7['en'] ?? '') }}"
                                    type="text" name="content7[en]" id="content7_en"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content7.en')" />
                            </div>
                        </div>
                    </div>

                    <div class="p-0 space-y-4">
                        <h1 class="text-[20px] text-[#DFAD16]">Chinese</h1>
                        <div>
                            <label for="title_ch" class="block text-sm font-medium text-gray-700">Title</label>
                            <input value="{{ old('title.ch', $business_registration->title['ch'] ?? '') }}"
                                type="text" name="title[ch]" id="title_ch"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('title.ch')" />
                        </div>
                        <div>
                            <label for="sub_title1_ch" class="block text-sm font-medium text-gray-700">Header</label>
                            <input value="{{ old('sub_title1.ch', $business_registration->sub_title1['ch'] ?? '') }}"
                                type="text" name="sub_title1[ch]" id="sub_title1_ch"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('sub_title1.ch')" />
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="content1_ch"
                                    class="block text-sm font-medium text-gray-700">Content</label>
                                <input value="{{ old('content1.ch', $business_registration->content1['ch'] ?? '') }}"
                                    type="text" name="content1[ch]" id="content1_ch"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content1.ch')" />
                            </div>
                            <div>
                                <label for="content2_ch"
                                    class="block text-sm font-medium text-gray-700">Content</label>
                                <input value="{{ old('content2.ch', $business_registration->content2['ch'] ?? '') }}"
                                    type="text" name="content2[ch]" id="content2_ch"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content2.ch')" />
                            </div>
                        </div>
                        <div>
                            <label for="sub_title2_ch" class="block text-sm font-medium text-gray-700">Header</label>
                            <input value="{{ old('sub_title2.ch', $business_registration->sub_title2['ch'] ?? '') }}"
                                type="text" name="sub_title2[ch]" id="sub_title2_ch"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('sub_title2.ch')" />
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="content3_ch"
                                    class="block text-sm font-medium text-gray-700">Content</label>
                                <input value="{{ old('content3.ch', $business_registration->content3['ch'] ?? '') }}"
                                    type="text" name="content3[ch]" id="content3_ch"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content3.ch')" />
                            </div>
                            <div>
                                <label for="content4_ch"
                                    class="block text-sm font-medium text-gray-700">Content</label>
                                <input value="{{ old('content4.ch', $business_registration->content4['ch'] ?? '') }}"
                                    type="text" name="content4[ch]" id="content4_ch"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content4.ch')" />
                            </div>
                            <div>
                                <label for="content5_ch"
                                    class="block text-sm font-medium text-gray-700">Content</label>
                                <input value="{{ old('content5.ch', $business_registration->content5['ch'] ?? '') }}"
                                    type="text" name="content5[ch]" id="content5_ch"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content5.ch')" />
                            </div>
                        </div>
                        <div>
                            <label for="sub_title3_ch" class="block text-sm font-medium text-gray-700">Header</label>
                            <input value="{{ old('sub_title3.ch', $business_registration->sub_title3['ch'] ?? '') }}"
                                type="text" name="sub_title3[ch]" id="sub_title3_ch"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('sub_title3.ch')" />
                        </div>
                        <div>
                            <label for="sub_title4_ch" class="block text-sm font-medium text-gray-700">Header</label>
                            <input value="{{ old('sub_title4.ch', $business_registration->sub_title4['ch'] ?? '') }}"
                                type="text" name="sub_title4[ch]" id="sub_title4_ch"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('sub_title4.ch')" />
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="content6_ch"
                                    class="block text-sm font-medium text-gray-700">Content</label>
                                <input value="{{ old('content6.ch', $business_registration->content6['ch'] ?? '') }}"
                                    type="text" name="content6[ch]" id="content6_ch"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content6.ch')" />
                            </div>
                            <div>
                                <label for="content7_ch"
                                    class="block text-sm font-medium text-gray-700">Content</label>
                                <input value="{{ old('content7.ch', $business_registration->content7['ch'] ?? '') }}"
                                    type="text" name="content7[ch]" id="content7_ch"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content7.ch')" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Dropzone for Image -->
                <div>
                    <label for="dropzone-file{{ $business_registration->id }}" id="drop-area"
                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6 w-full h-full bg-contain bg-center bg-no-repeat rounded-md text-center"
                            id="img-preview"
                            style="background-image: url({{ asset($business_registration->image) }})">
                            <svg class="w-8 h-8 mb-4 text-[#000]" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1"
                                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                            </svg>
                            <p class="mb-2 text-[12px] sm:text-[14px] text-[#000]"><span class="font-semibold">Click
                                    to
                                    upload</span> or drag and drop</p>
                            <p class="text-xs text-[#000]">SVG, PNG, JPG or GIF (MAX. 5MB)</p>
                        </div>
                        <input id="dropzone-file{{ $business_registration->id }}" type="file" class="hidden"
                            name="image" accept="image/*" onchange="uploadImage(event)" />
                    </label>
                    <x-input-error class="mt-2" :messages="$errors->get('image')" />
                </div>
            @elseif ($business_registration->id == 2)
                <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="p-0 space-y-4">
                        <h1 class="text-[20px] text-[#DFAD16]">English</h1>
                        <div>
                            <label for="title_en" class="block text-sm font-medium text-gray-700">Title</label>
                            <input value="{{ old('title.en', $business_registration->title['en'] ?? '') }}"
                                type="text" name="title[en]" id="title_en"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('title.en')" />
                        </div>
                        <div>
                            <label for="sub_title1_en" class="block text-sm font-medium text-gray-700">Step 1</label>
                            <input value="{{ old('sub_title1.en', $business_registration->sub_title1['en'] ?? '') }}"
                                type="text" name="sub_title1[en]" id="sub_title1_en"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('sub_title1.en')" />
                        </div>
                        <div>
                            <label for="sub_title2_en" class="block text-sm font-medium text-gray-700">Step 2</label>
                            <input value="{{ old('sub_title2.en', $business_registration->sub_title2['en'] ?? '') }}"
                                type="text" name="sub_title2[en]" id="sub_title2_en"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('sub_title2.en')" />
                        </div>
                        <div>
                            <label for="sub_title3_en" class="block text-sm font-medium text-gray-700">Step 3</label>
                            <input value="{{ old('sub_title3.en', $business_registration->sub_title3['en'] ?? '') }}"
                                type="text" name="sub_title3[en]" id="sub_title3_en"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('sub_title3.en')" />
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="content1_en" class="block text-sm font-medium text-gray-700">
                                    Content</label>
                                <input value="{{ old('content1.en', $business_registration->content1['en'] ?? '') }}"
                                    type="text" name="content1[en]" id="content1_en"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content1.en')" />
                            </div>
                            <div>
                                <label for="content2_en" class="block text-sm font-medium text-gray-700">
                                    Content</label>
                                <input value="{{ old('content2.en', $business_registration->content2['en'] ?? '') }}"
                                    type="text" name="content2[en]" id="content2_en"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content2.en')" />
                            </div>
                            <div>
                                <label for="content3_en" class="block text-sm font-medium text-gray-700">
                                    Content</label>
                                <input value="{{ old('content3.en', $business_registration->content3['en'] ?? '') }}"
                                    type="text" name="content3[en]" id="content3_en"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content3.en')" />
                            </div>
                            <div>
                                <label for="content4_en" class="block text-sm font-medium text-gray-700">
                                    Content</label>
                                <input value="{{ old('content4.en', $business_registration->content4['en'] ?? '') }}"
                                    type="text" name="content4[en]" id="content4_en"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content4.en')" />
                            </div>
                            <div>
                                <label for="content5_en" class="block text-sm font-medium text-gray-700">
                                    Content</label>
                                <input value="{{ old('content5.en', $business_registration->content5['en'] ?? '') }}"
                                    type="text" name="content5[en]" id="content5_en"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content5.en')" />
                            </div>
                            <div>
                                <label for="content6_en" class="block text-sm font-medium text-gray-700">
                                    Content</label>
                                <input value="{{ old('content6.en', $business_registration->content6['en'] ?? '') }}"
                                    type="text" name="content6[en]" id="content6_en"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content6.en')" />
                            </div>
                            <div>
                                <label for="content7_en" class="block text-sm font-medium text-gray-700">
                                    Content</label>
                                <input value="{{ old('content7.en', $business_registration->content7['en'] ?? '') }}"
                                    type="text" name="content7[en]" id="content7_en"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content7.en')" />
                            </div>
                        </div>
                        <div>
                            <label for="sub_title4_en" class="block text-sm font-medium text-gray-700">Step 4</label>
                            <input value="{{ old('sub_title4.en', $business_registration->sub_title4['en'] ?? '') }}"
                                type="text" name="sub_title4[en]" id="sub_title4_en"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('sub_title4.en')" />
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="content8_en" class="block text-sm font-medium text-gray-700">Content</label>
                                <input value="{{ old('content8.en', $business_registration->content8['en'] ?? '') }}" type="text" name="content8[en]"
                                    id="content8_en"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content8.en')" />
                            </div>
                            <div>
                                <label for="content9_en" class="block text-sm font-medium text-gray-700">Content</label>
                                <input value="{{ old('content9.en', $business_registration->content9['en'] ?? '') }}" type="text" name="content9[en]"
                                    id="content9_en"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content9.en')" />
                            </div>
                            <div>
                                <label for="content10_en" class="block text-sm font-medium text-gray-700">Content</label>
                                <input value="{{ old('content10.en', $business_registration->content10['en'] ?? '') }}" type="text" name="content10[en]"
                                    id="content10_en"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content10.en')" />
                            </div>
                            <div>
                                <label for="content11_en" class="block text-sm font-medium text-gray-700">Content</label>
                                <input value="{{ old('content11.en', $business_registration->content11['en'] ?? '') }}" type="text" name="content11[en]"
                                    id="content11_en"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content11.en')" />
                            </div>
                            <div>
                                <label for="content12_en" class="block text-sm font-medium text-gray-700">Content</label>
                                <input value="{{ old('content12.en', $business_registration->content12['en'] ?? '') }}" type="text" name="content12[en]"
                                    id="content12_en"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content12.en')" />
                            </div>
                        </div>
                        <div>
                            <label for="sub_title5_en" class="block text-sm font-medium text-gray-700">Step 5</label>
                            <input value="{{ old('sub_title5.en', $business_registration->sub_title5['en'] ?? '') }}" type="text" name="sub_title5[en]"
                                id="sub_title5_en"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('sub_title5.en')" />
                        </div>
                        <div>
                            <label for="sub_title6_en" class="block text-sm font-medium text-gray-700">Step 6</label>
                            <input value="{{ old('sub_title6.en', $business_registration->sub_title6['en'] ?? '') }}" type="text" name="sub_title6[en]"
                                id="sub_title6_en"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('sub_title6.en')" />
                        </div>
                        <div>
                            <label for="sub_title7_en" class="block text-sm font-medium text-gray-700">Step 7</label>
                            <input value="{{ old('sub_title7.en', $business_registration->sub_title7['en'] ?? '') }}" type="text" name="sub_title7[en]"
                                id="sub_title7_en"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('sub_title7.en')" />
                        </div>
                        <div>
                            <label for="content13_en" class="block text-sm font-medium text-gray-700">Content</label>
                            <input value="{{ old('content13.en', $business_registration->content13['en'] ?? '') }}" type="text" name="content13[en]"
                                id="content13_en"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('content13.en')" />
                        </div>

                    </div>

                    <div class="p-0 space-y-4">
                        <h1 class="text-[20px] text-[#DFAD16]">Chinese</h1>
                        <div>
                            <label for="title_ch" class="block text-sm font-medium text-gray-700">Title</label>
                            <input value="{{ old('title.ch', $business_registration->title['ch'] ?? '') }}" type="text" name="title[ch]" id="title_ch"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('title.ch')" />
                        </div>
                        <div>
                            <label for="sub_title1_ch" class="block text-sm font-medium text-gray-700">Step 1</label>
                            <input value="{{ old('sub_title1.ch', $business_registration->sub_title1['ch'] ?? '') }}" type="text" name="sub_title1[ch]"
                                id="sub_title1_ch"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('sub_title1.ch')" />
                        </div>
                        <div>
                            <label for="sub_title2_ch" class="block text-sm font-medium text-gray-700">Step 2</label>
                            <input value="{{ old('sub_title2.ch', $business_registration->sub_title2['ch'] ?? '') }}" type="text" name="sub_title2[ch]"
                                id="sub_title2_ch"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('sub_title2.ch')" />
                        </div>
                        <div>
                            <label for="sub_title3_ch" class="block text-sm font-medium text-gray-700">Sub Title
                                3</label>
                            <input value="{{ old('sub_title3.ch', $business_registration->sub_title3['ch'] ?? '') }}" type="text" name="sub_title3[ch]"
                                id="sub_title3_ch"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('sub_title3.ch')" />
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="content1_ch" class="block text-sm font-medium text-gray-700">Content</label>
                                <input value="{{ old('content1.ch', $business_registration->content1['ch'] ?? '') }}" type="text" name="content1[ch]"
                                    id="content1_ch"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content1.ch')" />
                            </div>
                            <div>
                                <label for="content2_ch" class="block text-sm font-medium text-gray-700">Content</label>
                                <input value="{{ old('content2.ch', $business_registration->content2['ch'] ?? '') }}" type="text" name="content2[ch]"
                                    id="content2_ch"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content2.ch')" />
                            </div>
                            <div>
                                <label for="content3_ch" class="block text-sm font-medium text-gray-700">Content</label>
                                <input value="{{ old('content3.ch', $business_registration->content3['ch'] ?? '') }}" type="text" name="content3[ch]"
                                    id="content3_ch"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content3.ch')" />
                            </div>
                            <div>
                                <label for="content4_ch" class="block text-sm font-medium text-gray-700">Content</label>
                                <input value="{{ old('content4.ch', $business_registration->content4['ch'] ?? '') }}" type="text" name="content4[ch]"
                                    id="content4_ch"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content4.ch')" />
                            </div>
                            <div>
                                <label for="content5_ch" class="block text-sm font-medium text-gray-700">Content</label>
                                <input value="{{ old('content5.ch', $business_registration->content5['ch'] ?? '') }}" type="text" name="content5[ch]"
                                    id="content5_ch"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content5.ch')" />
                            </div>
                            <div>
                                <label for="content6_ch" class="block text-sm font-medium text-gray-700">Content</label>
                                <input value="{{ old('content6.ch', $business_registration->content6['ch'] ?? '') }}" type="text" name="content6[ch]"
                                    id="content6_ch"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content6.ch')" />
                            </div>
                            <div>
                                <label for="content7_ch" class="block text-sm font-medium text-gray-700">Content</label>
                                <input value="{{ old('content7.ch', $business_registration->content7['ch'] ?? '') }}" type="text" name="content7[ch]"
                                    id="content7_ch"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content7.ch')" />
                            </div>
                        </div>

                        <div>
                            <label for="sub_title4_ch" class="block text-sm font-medium text-gray-700">Step 4</label>
                            <input value="{{ old('sub_title4.ch', $business_registration->sub_title4['ch'] ?? '') }}" type="text" name="sub_title4[ch]"
                                id="sub_title4_ch"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('sub_title4.ch')" />
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="content8_ch" class="block text-sm font-medium text-gray-700">Content</label>
                                <input value="{{ old('content8.ch', $business_registration->content8['ch'] ?? '') }}" type="text" name="content8[ch]"
                                    id="content8_ch"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content8.ch')" />
                            </div>
                            <div>
                                <label for="content9_ch" class="block text-sm font-medium text-gray-700">Content</label>
                                <input value="{{ old('content9.ch', $business_registration->content9['ch'] ?? '') }}" type="text" name="content9[ch]"
                                    id="content9_ch"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content9.ch')" />
                            </div>

                            <div>
                                <label for="content10_ch" class="block text-sm font-medium text-gray-700">Content</label>
                                <input value="{{ old('content10.ch', $business_registration->content10['ch'] ?? '') }}" type="text" name="content10[ch]"
                                    id="content10_ch"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content10.ch')" />
                            </div>
                            <div>
                                <label for="content11_ch" class="block text-sm font-medium text-gray-700">Content</label>
                                <input value="{{ old('content11.ch', $business_registration->content11['ch'] ?? '') }}" type="text" name="content11[ch]"
                                    id="content11_ch"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content11.ch')" />
                            </div>
                            <div>
                                <label for="content12_ch" class="block text-sm font-medium text-gray-700">Content</label>
                                <input value="{{ old('content12.ch', $business_registration->content12['ch'] ?? '') }}" type="text" name="content12[ch]"
                                    id="content12_ch"
                                    class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                                <x-input-error class="mt-2" :messages="$errors->get('content12.ch')" />
                            </div>
                        </div>
                        <div>
                            <label for="sub_title5_ch" class="block text-sm font-medium text-gray-700">Step 5</label>
                            <input value="{{ old('sub_title5.ch', $business_registration->sub_title5['ch'] ?? '') }}" type="text" name="sub_title5[ch]"
                                id="sub_title5_ch"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('sub_title5.ch')" />
                        </div>
                        <div>
                            <label for="sub_title6_ch" class="block text-sm font-medium text-gray-700">Step 6</label>
                            <input value="{{ old('sub_title6.ch', $business_registration->sub_title6['ch'] ?? '') }}" type="text" name="sub_title6[ch]"
                                id="sub_title6_ch"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('sub_title6.ch')" />
                        </div>
                        <div>
                            <label for="sub_title7_ch" class="block text-sm font-medium text-gray-700">Step 7</label>
                            <input value="{{ old('sub_title7.ch', $business_registration->sub_title7['ch'] ?? '') }}" type="text" name="sub_title7[ch]"
                                id="sub_title7_ch"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('sub_title7.ch')" />
                        </div>
                        <div>
                            <label for="content13_ch" class="block text-sm font-medium text-gray-700">Content</label>
                            <input value="{{ old('content13.ch', $business_registration->content13['ch'] ?? '') }}" type="text" name="content13[ch]"
                                id="content13_ch"
                                class="mt-1 block w-full p-2 border rounded-md text-[#000] text-sm">
                            <x-input-error class="mt-2" :messages="$errors->get('content13.ch')" />
                        </div>
                    </div>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <h1 class="text-[20px] text-[#DFAD16]">English</h1>
                        <label for="dropzone-file-en{{ $business_registration->id }}" id="drop-area-en"
                            class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6 w-full h-full bg-contain bg-center bg-no-repeat rounded-md text-center"
                                id="img-preview-en" style="background-image: url({{ asset($business_registration->images['en'] ?? '') }})">
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
                            <input id="dropzone-file-en{{ $business_registration->id }}" type="file" class="hidden" name="images[en]" accept="image/*"
                                data-lang="en" onchange="uploadImage(event)" />
                        </label>
                        <x-input-error class="mt-2" :messages="$errors->get('images.en')" />
                    </div>

                    <div>
                        <h1 class="text-[20px] text-[#DFAD16]">Chinese</h1>
                        <label for="dropzone-file-ch{{ $business_registration->id }}" id="drop-area-ch"
                            class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6 w-full h-full bg-contain bg-center bg-no-repeat rounded-md text-center"
                                id="img-preview-ch" style="background-image: url({{ asset($business_registration->images['ch'] ?? '') }})">
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
                            <input id="dropzone-file-ch{{ $business_registration->id }}" type="file" class="hidden" name="images[ch]" accept="image/*"
                                onchange="uploadImage(event)" />
                        </label>
                        <x-input-error class="mt-2" :messages="$errors->get('images.ch')" data-lang="ch" />
                    </div>
                </div>
            @endif

            <div class="flex justify-between">
                <a href="{{ route('businessRegistration.index') }}"
                    class="border border-[#DFAD16] hover:!bg-[#DFAD16] hover:!text-[#ffffff] px-4 py-1 md:px-6 rounded-[5px] text-[#DFAD16]">
                    Back
                </a>

                <button type="submit"
                    class="bg-[#DFAD16] text-white px-4 py-1 md:px-6 rounded-[5px] hover:!text-[#415464]">Submit</button>
            </div>
        </form>
    </div>

    @if ($business_registration->id == 1)
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
    @else
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
             const id = @json($business_registration->id);
            previewImage(`dropzone-file-en${id}`, `img-preview-en`, `drop-area-en`);
            previewImage(`dropzone-file-ch${id}`, `img-preview-ch`, `drop-area-ch`);
        </script>
    @endif
</x-app-layout>
