<x-admin.layout>
    <div class="flex flex-col ml-8 mt-6">
        <h1 class="font-karla text-2xl font-bold text-[#34364A]">Dashboard</h1>
    </div>

    <div class="elementor-section flex flex-col mt-4 m-8 p-6 bg-white rounded-xl">
        <p class="font-karla text-sm text-[#34364A] font-bold mr-2">Project Summary
        </p>
        <div class="elementor-column flex my-3 gap-3 xs:flex-col sm:flex-col md:flex-row">
            <div
                class="elementor-element group flex flex-col bg-[#335EF7] text-[#FEFEFF] w-52 hover:w-56 transition-all duration-300 rounded-2xl relative">
                <div class="flex items-center justify-center icon bg-[#3156da] w-10 h-10 my-6 ml-6 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1m10 0h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1M10 13H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1m7 0a4 4 0 1 1-3.995 4.2L13 17l.005-.2A4 4 0 0 1 17 13" />
                    </svg>
                </div>
                <div class="titlecard flex flex-col my-6 ml-6 gap-2">
                    <h2 class="font-karla text-3xl font-semibold text-[#FEFEFF]">{{ $categoryCount }}</h2>
                    <div class="flex flex-row justify-between">
                        <p class="font-karla text-sm text-[#FEFEFF] font-semibold w-10">Completed Category</p>
                        <a class="mr-8" href="{{ route('admin.showCategory') }}">
                            <span
                                class="transform opacity-0 group-hover:opacity-100 transition-opacity duration-300 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                    viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="1.5" d="m18 8l4 4m0 0l-4 4m4-4H2" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="elementor-element group flex flex-col bg-[#335EF7] text-[#FEFEFF] w-52 hover:w-56 transition-all duration-300 rounded-2xl relative">
                <div class="flex items-center justify-center icon bg-[#3156da] w-10 h-10 my-6 ml-6 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M7 22q-.825 0-1.412-.587T5 20t.588-1.412T7 18t1.413.588T9 20t-.587 1.413T7 22m10 0q-.825 0-1.412-.587T15 20t.588-1.412T17 18t1.413.588T19 20t-.587 1.413T17 22M5.2 4h14.75q.575 0 .875.513t.025 1.037l-3.55 6.4q-.275.5-.737.775T15.55 13H8.1L7 15h12v2H7q-1.125 0-1.7-.987t-.05-1.963L6.6 11.6L3 4H1V2h3.25z" />
                    </svg>
                </div>
                <div class="titlecard flex flex-col my-6 ml-6 gap-2">
                    <h2 class="font-karla text-3xl font-semibold text-[#FEFEFF]">{{ $productCount }}</h2>
                    <div class="flex flex-row justify-between">
                        <p class="font-karla text-sm text-[#FEFEFF] font-semibold w-10">Product Show</p>
                        <a class="mr-8" href="{{ route('admin.showProduct') }}">
                            <span
                                class="transform opacity-0 group-hover:opacity-100 transition-opacity duration-300 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                    viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="1.5" d="m18 8l4 4m0 0l-4 4m4-4H2" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="elementor-element group flex flex-col bg-[#335EF7] text-[#FEFEFF] w-52 hover:w-56 transition-all duration-300 rounded-2xl relative">
                <div class="flex items-center justify-center icon bg-[#3156da] w-10 h-10 my-6 ml-6 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 1024 1024">
                        <path fill="currentColor"
                            d="M863.1 518.5H505.5V160.9c0-4.4-3.6-8-8-8h-26a398.57 398.57 0 0 0-282.5 117a397.5 397.5 0 0 0-85.6 127C82.6 446.2 72 498.5 72 552.5S82.6 658.7 103.4 708c20.1 47.5 48.9 90.3 85.6 127s79.4 65.5 127 85.6a396.6 396.6 0 0 0 155.6 31.5a398.57 398.57 0 0 0 282.5-117c36.7-36.7 65.5-79.4 85.6-127a396.6 396.6 0 0 0 31.5-155.6v-26c-.1-4.4-3.7-8-8.1-8M951 463l-2.6-28.2c-8.5-92-49.3-178.8-115.1-244.3A398.5 398.5 0 0 0 588.4 75.6L560.1 73c-4.7-.4-8.7 3.2-8.7 7.9v383.7c0 4.4 3.6 8 8 8l383.6-1c4.7-.1 8.4-4 8-8.6" />
                    </svg>
                </div>
                <div class="titlecard flex flex-col my-6 ml-6 gap-2">
                    <h2 class="font-karla text-3xl font-semibold text-[#FEFEFF]">{{ $transactionCount }}</h2>
                    <div class="flex flex-row justify-between">
                        <p class="font-karla text-sm text-[#FEFEFF] font-semibold w-10">Success Transactions</p>
                        <a class="mr-8" href="{{ route('admin.showTransactions') }}">
                            <span
                                class="transform opacity-0 group-hover:opacity-100 transition-opacity duration-300 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                                    viewBox="0 0 24 24">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="1.5" d="m18 8l4 4m0 0l-4 4m4-4H2" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.layout>
