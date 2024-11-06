    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
    <div id="sidebar"
        class="fixed left-0 top-0 h-full z-50 px-8 pb-8 pt-3 bg-[#0165FF] shadow-lg sidebar-expanded transition-all duration-300">
        <div class="flex justify-center items-center py-4 border-b">
            <div class="flex items-center">
                <img class="h-6 w-auto" src="/images/icon.png" alt="hostfun">
                <h2 class="nav-link-text font-karla text-xl text-white font-bold pl-2">Hostfun</h2>
            </div>
        </div>

        <nav class="flex-1 px-2 py-4 space-y-1 bg-[#0165FF]">
            <a href="/admin/dashboard"
                class="flex items-center px-6 py-2 text-sm font-medium text-white rounded-lg hover:bg-[#12294A]">
                <span class="nav-link-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M12.707 2.293a1 1 0 0 0-1.414 0l-7 7l-2 2a1 1 0 1 0 1.414 1.414L4 12.414V19a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-6.586l.293.293a1 1 0 0 0 1.414-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
                <span class="nav-link-text font-karla pl-2">Dashboard</span>
            </a>
            <a href="/admin/category"
                class="flex items-center px-6 py-2 text-sm font-medium text-white rounded-lg hover:bg-[#12294A]">
                <span class="nav-link-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1m10 0h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1M10 13H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1m7 0a4 4 0 1 1-3.995 4.2L13 17l.005-.2A4 4 0 0 1 17 13" />
                    </svg>
                </span>
                <span class="nav-link-text font-karla pl-2">Category</span>
            </a>
            <a href="/admin/product"
                class="flex items-center px-6 py-2 text-sm font-medium text-white rounded-lg hover:bg-[#12294A]">
                <span class="nav-link-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M7 22q-.825 0-1.412-.587T5 20t.588-1.412T7 18t1.413.588T9 20t-.587 1.413T7 22m10 0q-.825 0-1.412-.587T15 20t.588-1.412T17 18t1.413.588T19 20t-.587 1.413T17 22M5.2 4h14.75q.575 0 .875.513t.025 1.037l-3.55 6.4q-.275.5-.737.775T15.55 13H8.1L7 15h12v2H7q-1.125 0-1.7-.987t-.05-1.963L6.6 11.6L3 4H1V2h3.25z" />
                    </svg>
                </span>
                <span class="nav-link-text font-karla pl-2">Product</span>
            </a>
            <a href="#"
                class="flex items-center px-6 py-2 text-sm font-medium text-white rounded-lg hover:bg-[#12294A]">
                <span class="nav-link-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 1024 1024">
                        <path fill="currentColor"
                            d="M863.1 518.5H505.5V160.9c0-4.4-3.6-8-8-8h-26a398.57 398.57 0 0 0-282.5 117a397.5 397.5 0 0 0-85.6 127C82.6 446.2 72 498.5 72 552.5S82.6 658.7 103.4 708c20.1 47.5 48.9 90.3 85.6 127s79.4 65.5 127 85.6a396.6 396.6 0 0 0 155.6 31.5a398.57 398.57 0 0 0 282.5-117c36.7-36.7 65.5-79.4 85.6-127a396.6 396.6 0 0 0 31.5-155.6v-26c-.1-4.4-3.7-8-8.1-8M951 463l-2.6-28.2c-8.5-92-49.3-178.8-115.1-244.3A398.5 398.5 0 0 0 588.4 75.6L560.1 73c-4.7-.4-8.7 3.2-8.7 7.9v383.7c0 4.4 3.6 8 8 8l383.6-1c4.7-.1 8.4-4 8-8.6" />
                    </svg>
                </span>
                <span class="nav-link-text font-karla pl-2">Transactions</span>
            </a>

        </nav>
        <div class="px-2 py-4 border-t">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="flex items-center w-full px-6 py-2 text-sm font-medium text-white rounded-lg hover:bg-[#12294A]">
                    <span class="nav-link-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="m17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4z" />
                        </svg>
                    </span>
                    <span class="nav-link-text font-karla pl-2">Logout</span>
                </button>
            </form>
        </div>
    </div>
