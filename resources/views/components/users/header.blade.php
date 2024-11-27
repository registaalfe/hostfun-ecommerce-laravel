<header
    class="topnav flex flex-wrap h-20 px-20 py-2 bg-[#F5F5F5] bg-center bg-no-repeat bg-cover xs:px-8 xs:justify-between sm:px-12 sm:justify-between md:px-12 md:justify-between md:self-center lg:justify-between xl:justify-between">
    <div class="flex items-center">
        <img class="h-5 w-auto" src="images/img-icon.png" alt="hostfun">
    </div>

    <nav class="flex">
        <span id="nav-label" class="hidden">Navigation</span>

        <!-- Start hamburger menu -->
        <button id="btnOpen" aria-expanded="false" aria-labelledby="nav-label"
            class="topnav__open mx-8 my-4 px-1 rounded-full h-14 w-14 bg-[#12294A] items-center text-white xs:mx-0 xs:w-11 xs:h-11 sm:mx-0 sm:w-12 sm:h-12 md:w-12 md:h-12 md:ml-8 md:mr-0 lg:hidden xl:hidden">
            <i class="fa-solid fa-bars fa-xl"></i>
        </button>
        <!-- End hamburger menu to open topnav__menu -->

        <!-- Start show/hide menu -->
        <div role="dialog" aria-labelledby="nav-label"
            class="topnav__menu xs:px-12 xs:z-[9999999] xs:bg-[#12294A] xs:fixed xs:inset-0 sm:px-12 sm:z-[9999999] sm:bg-[#12294A] sm:fixed sm:inset-0 md:px-12 md:z-[9999999] md:bg-[#12294A] md:fixed md:inset-0 lg:self-center xl:self-center">

            <button id="btnClose" aria-label="Close"
                class="topnav_close p-8 text-white flex xs:relative xs:left-[90%] xs:top-[2%] sm:relative sm:left-[90%] sm:top-[3%] md:relative md:left-[90%] md:top-[2%] lg:hidden xl:hidden">
                <i class="fa-solid fa-xmark fa-xl"></i>
            </button>

            <ul
                class="topnav__links flex gap-10 xs:gap-4 xs:flex-col sm:gap-4 sm:flex-col md:gap-4 md:flex-col lg:self-center xl:self-center">
                <li class="topnav__item">
                    <a href="{{ route('index') }}"
                        class="topnav__link text-[#161519] text-base font-light hover:text-[#525252] xs:text-lg xs:text-left xs:text-white sm:text-lg sm:text-white sm:text-left md:text-lg md:text-white md:text-left lg:font-medium xl:font-medium">Home</a>
                </li>
                <li class="topnav__item">
                    <a href="{{ route('hosting') }}"
                        class="topnav__link text-[#161519] text-base font-light hover:text-[#525252] xs:text-lg xs:text-left xs:text-white sm:text-lg sm:text-white sm:text-left md:text-lg md:text-white md:text-left lg:font-medium xl:font-medium">Hosting</a>
                </li>
                <li class="topnav__item">
                    <a href="#"
                        class="topnav__link text-[#161519] text-base font-light hover:text-[#525252] xs:text-lg xs:text-left xs:text-white sm:text-lg sm:text-white sm:text-left md:text-lg md:text-white md:text-left lg:font-medium xl:font-medium">Domain</a>
                </li>
                <li class="topnav__item">
                    <a href="#"
                        class="topnav__link text-[#161519] text-base font-light hover:text-[#525252] xs:text-lg xs:text-left xs:text-white sm:text-lg sm:text-white sm:text-left md:text-lg md:text-white md:text-left lg:font-medium xl:font-medium">Contact</a>
                </li>
            </ul>
            <div class="site-footer-copyright flex items-center w-full pt-7 pb-6 lg:hidden xl:hidden">
                <p class="richtext leading-7 text-base font-light text-white">2024 © <span
                        class="font-bold">Hostfun.</span> All rights reserved.</p>
            </div>
        </div>
        <!-- End show/hide menu -->
    </nav>

    <div class="flex items-center xs:hidden sm:hidden md:hidden lg:flex xl:flex">
        @guest
            <a href="{{ route('login') }}"
                class="signup-button flex items-center text-base rounded-full duration-300 font-medium text-white bg-[#0165FF] hover:bg-[#12294A] h-9 py-0 px-6 focus:outline-none max-md:hidden">Sign
                in</a>
        @else
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="signup-button flex items-center text-base rounded-full duration-300 font-medium text-white bg-[#0165FF] hover:bg-[#12294A] h-9 py-0 px-6 focus:outline-none max-md:hidden">
                    Logout
                </button>
            </form>
        @endguest
    </div>
</header>
