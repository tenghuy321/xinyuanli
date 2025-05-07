@props(['socials', 'nav'])

<section class="w-full bg-[#1E1E1EF2]">
    <hr style="height: 8px; border: none; background: linear-gradient(90deg, #EBB81B 0%, #DFAD16 45.5%, #FAF088 100%)" />
    <div class="w-full max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10 py-10 md:py-20 px-4">
        <div>
            <iframe class="w-full h-[200px] rounded-sm" src="{{ $socials->map }}" allowfullscreen="" loading="lazy" referrerPolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="flex flex-col space-y-3 text-[#ffffff] text-[11px] md:text-[12px]">
            <h1 class="text-[14px] md:text-[18px] text-[#EBB81B] font-[700]">{{ __('messages.keep_in_touch') }}</h1>
            <p>{{ $socials->location }}</p>
            <a href="{{ $socials->website }}" target="_blank" rel="noopener noreferrer">WWW.XINYUANLI.BIZ</a>
            <a href="tel:{{ $socials->phone_number }}">{{ $socials->phone_number }}</a>
        </div>
        <div class="flex flex-col space-y-3 text-[#ffffff] text-[11px] md:text-[12px]">
            <h1 class="text-[14px] md:text-[18px] text-[#EBB81B] font-[700]">{{ __('messages.information') }}</h1>
            <ul class="flex flex-col space-y-3" onClick={handleLinkClick}>
                @foreach ($nav as $item)
                    <li><a href="{{ route($item->link) }}" class="footer_link">{{ $item->title[app()->getLocale()] }}</a></li>
                @endforeach
                {{-- <li><a href="{{ route("home") }}" class="footer_link">{{ __('messages.Home') }}</a></li>
                <li><a href="{{ route("service") }}" class="footer_link">{{ __('messages.Our Services') }}</a></li>
                <li><a href="{{ route("gallery-image") }}"class="footer_link">{{ __('messages.Gallery') }}</a></li> --}}
                {{-- <li><a href="{{ route("csr") }}"class="footer_link">{{ __('messages.csr') }}</a></li> --}}
                {{-- <li><a href="{{ route("ourprofile") }}" class="footer_link">{{ __('messages.Our Profile') }}</a></li>
                <li><a href="{{ route("career") }}" class="footer_link">{{ __('messages.Career') }}</a></li>
                <li><a href="{{ route("contact") }}" class="footer_link">{{ __('messages.Contact Us') }}</a></li> --}}
            </ul>
        </div>
        <div class="flex flex-col space-y-3 text-[#ffffff] text-[11px] md:text-[12px]">
            <div>
                <h1 class="text-[20px] md:text-[30px] text-[#EBB81B] font-[700]">{{ __('messages.xin_yuan_li') }}</h1>
                <p>{{ __('messages.banner_title') }}</p>
            </div>
            <div class="pt-10">
                <p class="text-[14px] md:text-[18px] font-[700]">{{ __('messages.follow_us') }}</p>
                <div class="flex items-center space-x-4 mt-3">
                    <a href="{{ $socials->facebook }}" class="hover:-translate-y-[4px] duration-300">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 0C6.72903 0 0 6.72903 0 15C0 23.2704 6.72903 30 15 30C23.2704 30 30 23.2704 30 15C30 6.72903 23.2716 0 15 0ZM18.7304 15.5281H16.29V24.2262H12.6738C12.6738 24.2262 12.6738 19.4735 12.6738 15.5281H10.9548V12.4539H12.6738V10.4654C12.6738 9.04133 13.3505 6.81604 16.3232 6.81604L19.0029 6.82631V9.81048C19.0029 9.81048 17.3745 9.81048 17.0579 9.81048C16.7413 9.81048 16.2912 9.96878 16.2912 10.6479V12.4545H19.0464L18.7304 15.5281Z" fill="white" />
                        </svg>
                    </a>
                    <a href="{{ $socials->telegram }}" class="hover:-translate-y-[4px] duration-300">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 30C23.2863 30 30 23.2863 30 15C30 6.71375 23.2863 0 15 0C6.71375 0 0 6.71375 0 15C0 23.2863 6.71375 30 15 30ZM6.86375 14.675L21.3263 9.09875C21.9975 8.85625 22.5837 9.2625 22.3662 10.2775L22.3675 10.2762L19.905 21.8775C19.7225 22.7 19.2337 22.9 18.55 22.5125L14.8 19.7487L12.9912 21.4913C12.7912 21.6913 12.6225 21.86 12.235 21.86L12.5013 18.0438L19.4513 11.765C19.7537 11.4987 19.3837 11.3488 18.985 11.6138L10.3963 17.0212L6.69375 15.8663C5.89 15.6112 5.8725 15.0625 6.86375 14.675Z" fill="white" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white text-[14px] md:text-[16px] text-center py-2">
        <p>All right reserved 2024</p>
    </div>
</section>
