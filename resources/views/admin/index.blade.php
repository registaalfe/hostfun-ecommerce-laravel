<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    @vite('resources/css/admin.css')

    <link rel="icon" href="/images/icon.png" type="image/x-icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Karla:wght@200;300;400;500;600;700;800&family=Vollkorn:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/8bcf7cf26c.js" crossorigin="anonymous"></script>

    <style>
        .sidebar-collapsed .nav-link-text,
        .sidebar-collapsed .sidebar-title {
            display: none;
        }

        .sidebar-expanded .nav-link-text,
        .sidebar-expanded .sidebar-title {
            display: inline;
        }

        .sidebar-collapsed .sidebar-expanded {
            width: 4rem;
            /* Adjust the collapsed width */
        }

        .sidebar-expanded .sidebar-expanded {
            width: 16rem;
            /* Expanded width */
        }
    </style>
</head>

<body>

    <header
        class="elementor-top-section flex container mx-auto my-6 px-20 w-full justify-between xs:justify-between xs:container-xs sm:px-5 md:px-10 lg:px-14">
        <div class="left-item flex">
            <button id="toggle-sidebar"
                class="flex px-2 py-2 text-[#79668A] rounded-lg mr-4 border hover:bg-gray-100 focus:outline-none hover:border-b-4 hover:border-[#79668A]">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="M3 6h18M3 12h18M3 18h18" />
                </svg>
            </button>
            <h3 class="text-2xl text-[#2B0E46] font-karla font-semibold xs:hidden sm:hidden md:block">Dashboard</h3>
        </div>

        <div class="right-item flex">
            <div
                class="flex items-center text-[#79668A] bg-white rounded-lg border border-gray-200 hover:border-b-4 hover:border-[#79668A]">
                <!-- Left Icon -->
                <div class="px-2 py-2 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5"
                            d="m21 21l-4.343-4.343m0 0A8 8 0 1 0 5.343 5.343a8 8 0 0 0 11.314 11.314" />
                    </svg>
                </div>

                <!-- Input Field -->
                <input type="text" placeholder="Search"
                    class="w-full px-2 py-2 text-sm text-[#79668A] bg-white rounded-lg border border-none cursor-pointer focus:outline-none xs:hidden">
            </div>

            <!-- Right Icon -->
            <div
                class="mx-2 px-2 py-2 rounded-lg text-[#79668A] cursor-pointer border border-gray-200 items-center hover:border-b-4 hover:border-[#79668A]">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16">
                    <path fill="currentColor"
                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742c-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                </svg>
            </div>
        </div>
    </header>

    {{-- <div id="sidebar" class="flex flex-col bg-white shadow-lg sidebar-expanded transition-all duration-300">
            <div class="flex justify-between items-center px-6 py-4 border-b">
                <div class="flex items-center">
                    <img class="h-7 w-auto" src="/images/icon2.png" alt="hostfun">
                    <h2 class="font-volkorn text-xl text-gray-900 font-bold pl-3">Hostfun</h2>
                </div>

            </div>

            <nav class="flex-1 px-2 py-4 space-y-1 bg-white">
                <a href="#"
                    class="flex items-center px-6 py-2 text-sm font-medium text-gray-700 rounded-lg hover:bg-gray-100 hover:text-gray-900">
                    <span class="nav-link-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 1024 1024">
                            <path fill="currentColor"
                                d="M863.1 518.5H505.5V160.9c0-4.4-3.6-8-8-8h-26a398.57 398.57 0 0 0-282.5 117a397.5 397.5 0 0 0-85.6 127C82.6 446.2 72 498.5 72 552.5S82.6 658.7 103.4 708c20.1 47.5 48.9 90.3 85.6 127s79.4 65.5 127 85.6a396.6 396.6 0 0 0 155.6 31.5a398.57 398.57 0 0 0 282.5-117c36.7-36.7 65.5-79.4 85.6-127a396.6 396.6 0 0 0 31.5-155.6v-26c-.1-4.4-3.7-8-8.1-8M951 463l-2.6-28.2c-8.5-92-49.3-178.8-115.1-244.3A398.5 398.5 0 0 0 588.4 75.6L560.1 73c-4.7-.4-8.7 3.2-8.7 7.9v383.7c0 4.4 3.6 8 8 8l383.6-1c4.7-.1 8.4-4 8-8.6" />
                        </svg>
                    </span>
                    <span class="nav-link-text font-karla pl-2">Dashboard</span>
                </a>
                <a href="#"
                    class="flex items-center px-6 py-2 text-sm font-medium text-gray-700 rounded-lg hover:bg-gray-100 hover:text-gray-900">
                    <span class="nav-link-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1m10 0h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1M10 13H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1m7 0a4 4 0 1 1-3.995 4.2L13 17l.005-.2A4 4 0 0 1 17 13" />
                        </svg>
                    </span>
                    <span class="nav-link-text font-karla pl-2">Category</span>
                </a>
                <a href="#"
                    class="flex items-center px-6 py-2 text-sm font-medium text-gray-700 rounded-lg hover:bg-gray-100 hover:text-gray-900">
                    <span class="nav-link-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M7 22q-.825 0-1.412-.587T5 20t.588-1.412T7 18t1.413.588T9 20t-.587 1.413T7 22m10 0q-.825 0-1.412-.587T15 20t.588-1.412T17 18t1.413.588T19 20t-.587 1.413T17 22M5.2 4h14.75q.575 0 .875.513t.025 1.037l-3.55 6.4q-.275.5-.737.775T15.55 13H8.1L7 15h12v2H7q-1.125 0-1.7-.987t-.05-1.963L6.6 11.6L3 4H1V2h3.25z" />
                        </svg>
                    </span>
                    <span class="nav-link-text font-karla pl-2">Product</span>
                </a>

                <!-- Other links here -->
            </nav>
            <div class="px-6 py-4 border-t">
                <a href="#"
                    class="flex items-center px-2 py-2 text-sm font-medium text-gray-700 rounded-lg hover:bg-gray-100 hover:text-gray-900">
                    <span class="nav-link-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="m17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4z" />
                        </svg>
                    </span>
                    <span class="nav-link-text font-karla pl-2">Logout</span>
                </a>
            </div>
        </div> --}}

    <!-- Main Content -->
    {{-- <div class="flex-1 p-8">
            <h1 class="text-3xl font-bold text-gray-900">Dashboard</h1>
        </div> --}}
    <!-- Sidebar -->


    <script>
        document.getElementById('toggle-sidebar').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('sidebar-collapsed');
            sidebar.classList.toggle('sidebar-expanded');
        });
    </script>

</body>

</html>
