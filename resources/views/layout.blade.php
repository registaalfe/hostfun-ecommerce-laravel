<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hostfun</title>
    @vite('resources/css/style.css')

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200;300;400;500;600;700;800&family=Vollkorn:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/8bcf7cf26c.js" crossorigin="anonymous"></script>
</head>

<!-- bg-[url('/public/images/bg-header.png')] -->

<body>
    <!-- Start navbar -->
    <header class="topnav flex flex-wrap px-16 py-2 bg-[#F5F5F5] bg-center bg-no-repeat bg-cover xs:justify-between sm:min-w-full sm:mx-auto sm:justify-between md:justify-between md:self-center lg:justify-between xl:justify-between">
        <div class="flex items-center">
            <img class="h-12 w-auto" src="images/img-icon.png" alt="hostfun">
        </div>

        <nav class="flex">
            <span id="nav-label" class="hidden">Navigation</span>

            <!-- Start hamburger menu -->
            <button id="btnOpen" aria-expanded="false" aria-labelledby="nav-label" class="topnav__open mx-8 my-4 px-1 rounded-full h-14 w-14 bg-[#12294A] items-center text-white md:hidden lg:hidden xl:hidden">
                <i class="fa-solid fa-bars fa-xl"></i>
            </button>
            <!-- End hamburger menu to open topnav__menu -->

            <!-- Start show/hide menu -->
            <div role="dialog" class="topnav__menu xs:z-[9999999] xs:bg-[#12294A] xs:fixed xs:inset-0 sm:bg-[#12294A] sm:z-[9999999] sm:fixed sm:inset-0 md:self-center lg:self-center xl:self-center">

                <!-- Start close menu -->
                <button id="btnClose" aria-label="Close" class="topnav_close p-8 text-white flex md:hidden lg:hidden xl:hidden">
                    <i class="fa-solid fa-xmark fa-2xl"></i>
                </button>
                <!-- End close menu -->

                <ul class="topnav__links flex gap-10 xs:gap-4 xs:flex-col sm:gap-4 sm:flex-col md:self-center lg:self-center xl:self-center">
                    <li class="topnav__item xs:mx-10 sm:mx-10">
                        <a href="#" class="topnav__link text-[#161519] text-base font-bold hover:text-[#525252] xs:text-xl xs:text-left xs:text-white sm:text-xl sm:text-white sm:text-left">Home</a>
                    </li>
                    <li class="topnav__item xs:mx-10 sm:mx-10">
                        <a href="#" class="topnav__link text-[#161519] text-base font-bold hover:text-[#525252] xs:text-xl xs:text-left xs:text-white sm:text-xl sm:text-white sm:text-left">Hosting</a>
                    </li>
                    <li class="topnav__item xs:mx-10 sm:mx-10">
                        <a href="#" class="topnav__link text-[#161519] text-base font-bold hover:text-[#525252] xs:text-xl xs:text-left xs:text-white sm:text-xl sm:text-white sm:text-left">Domain</a>
                    </li>
                    <li class="topnav__item xs:mx-10 sm:mx-10">
                        <a href="#" class="topnav__link text-[#161519] text-base font-bold hover:text-[#525252] xs:text-xl xs:text-left xs:text-white sm:text-xl sm:text-white sm:text-left">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- End show/hide menu -->
        </nav>

        <div class="flex items-center xs:hidden sm:hidden">
            <button type="button" class="signup-button text-base rounded-full duration-500 font-bold text-white bg-[#0165FF] py-1.5 px-6 focus:outline-none max-md:hidden">Signup
            </button>
        </div>
    </header>
    <!-- End navbar -->

    @yield('content')


    <!-- Scripts -->
    <script src="js/script.js"></script>

    <!-- Swiper JS-->
    <script src="https://cdn.josetxu.com/js/pure-pajinate.es5.min.js"></script>
</body>

</html>