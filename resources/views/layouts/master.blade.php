<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset($navLogo->icon) }}" />

    <title>Xin Yuanli</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>


    <style>
        .nav_link li a {
            background: linear-gradient(90deg, #ebb81b 0%, #dfad16 45.5%, #faf088 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .nav_link .active {
            position: relative;
            font-weight: bold;
            width: 100%;
            height: 100%;
        }

        .nav_link .active::after {
            content: "";
            position: absolute;
            width: 160%;
            height: 4px;
            top: -21px;
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(90deg, #ebb81b 0%, #dfad16 45.5%, #faf088 100%);
        }

        /* home */
        .text-gradient {
            background: linear-gradient(90deg, #ebb81b 0%, #dfad16 45.5%, #faf088 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* mobile navbar */
        .border-gradient {
            position: relative;
            padding-bottom: 0.8rem;
        }

        .border-gradient::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(to right, #BA7F14, #FFD700);
        }


        @keyframes rotate {
            0% {
                transform: rotate3d(0, 1, 0, 0deg);
            }

            100% {
                transform: rotate3d(0, 1, 0, 360deg);
            }
        }

        .animate-rotate {
            animation: rotate 1s linear infinite;
        }

        /* footer */
        ul .footer_link {
            position: relative;
            display: inline-block;
            width: auto;
            height: 100%;
        }

        ul .active::before {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background: linear-gradient(to right, #BA7F14, #FFD700);
            transition: width 0.5s ease;
        }

        ul .footer_link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background: linear-gradient(to right, #BA7F14, #FFD700);
            transition: width 0.5s ease;
        }

        ul .footer_link:hover {
            transform: translateX(5px);
            transition: transform 0.5s ease;
        }

        ul .footer_link:hover::after {
            width: 100%;
        }

        .font-inter {
            font-family: 'Inter', sans-serif;
        }

        .font-kantumruy {
            font-family: 'Kantumruy Pro', sans-serif;
        }
    </style>

    @yield('css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="{{ app()->getLocale() === 'en' ? 'font-inter' : 'font-kantumruy' }}">

    <x-header :socials="$socials" :nav="$nav" :navLogo="$navLogo" />
    <x-navbar :nav="$nav" :navLogo="$navLogo" />

    @yield('content')

    <x-footer :socials="$socials" :nav="$nav" />

    @yield('js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init({
            offset: 10,
        });
    </script>
</body>

</html>
