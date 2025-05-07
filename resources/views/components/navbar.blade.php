@props(['nav', 'navLogo'])
<nav class="absolute top-20 left-0 w-full z-50 hidden lg:block px-2">
    <div class="flex justify-between items-center py-3 px-3 max-w-7xl mx-auto bg-black/80 bg-blend-multiply">
        <div class="flex items-center">
            <a href="/" class="text-xl font-bold text-gray-800">
                <img src="{{ asset($navLogo->icon) }}" alt="Logo" class="w-10" />
            </a>
        </div>

        <div class="hidden lg:flex items-center justify-center flex-1">
            <ul class="flex items-center justify-center space-x-16 xl:space-x-20 text-[18px] xl:text-[20px] nav_link">
                @foreach ($nav as $item)
                    <li>
                        <a href="{{ route($item->link) }}" class="block transition duration-200 {{ Route::is($item->link . '*') ? 'active font-semibold' : '' }}">{{ $item->title[app()->getLocale()] }}</a>
                    </li>
                @endforeach
                {{-- <li>
                    <a href="{{ route('home') }}" class="block transition duration-200 {{ Route::is('home') ? 'active font-semibold' : '' }}">{{ __('messages.Home') }}</a>
                </li>
                <li>
                    <a href="{{ route('service') }}" class="block transition duration-200 {{ Route::is('service*') ? 'active font-semibold' : '' }}">{{ __('messages.Our Services') }}</a>
                </li>
                <li>
                    <a href="{{ route('gallery-image') }}" class="block transition duration-200 {{ Route::is('gallery-image') ? 'active font-semibold' : '' }}">{{ __('messages.Gallery') }}</a>
                </li> --}}
                {{-- <li>
                    <a href="{{ route('csr') }}" class="block transition duration-200 {{ Route::is('csr') ? 'active font-semibold' : '' }}">{{ __('messages.csr') }}</a>
                </li> --}}
                {{-- <li>
                    <a href="{{ route('ourprofile') }}" class="block transition duration-200 {{ Route::is('ourprofile') ? 'active font-semibold' : '' }}">{{ __('messages.Our Profile') }}</a>
                </li>
                <li>
                    <a href="{{ route('career') }}" class="block transition duration-200 {{ Route::is('career') ? 'active font-semibold' : '' }}">{{ __('messages.Career') }}</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="block transition duration-200 {{ Route::is('contact') ? 'active font-semibold' : '' }}">{{ __('messages.Contact Us') }}</a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
