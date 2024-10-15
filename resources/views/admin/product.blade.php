<x-layout>
    <div class="elementor-section flex flex-col p-8 min-h-screen bg-[#F7F9FB]">
        <div class="flex flex-row justify-between">
            <h1 class="text-2xl font-semibold text-[#161519]">Product</h1>
            <a href="{{ route('admin.createProduct') }}">
                <span
                    class="text-sm font-karla px-3 py-2.5 items-center rounded-lg bg-[#0165FF] hover:bg-[#12294A] text-white">+
                    Add
                    Product</span>
            </a>
        </div>

        <div class="flex flex-col border border-gray-200 mt-8 rounded-xl">

            <div class="flex flex-row">

                <!-- start:Pagination -->
                <div class="relative inline-block text-left mx-4 my-4" x-data="{ isOpen: false }">
                    <div>
                        <button type="button" @click="toggleDropdown" @blur="isOpen = false"
                            class="font-karla inline-flex w-32 justify-center gap-x-1.5 rounded-lg bg-white px-3 py-2 text-sm font-semibold border border-gray-200 text-[#161519] hover:bg-gray-50 focus:outline focus:outline-2 focus:outline-[#0165FF]"
                            id="menu-button" aria-expanded="true" aria-haspopup="true">
                            10 per page
                            <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd"
                                    d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>

                    <!-- Dropdown menu, show/hide based on menu state. -->
                    <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75 transform"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                        class="absolute z-10 mt-2 py-2 w-40 origin-top-left rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">

                        <div class="px-2 py-1" role="none" id="perPage">
                            <!-- Active: "bg-gray-100 text-gray-900",
                        Not Active: "text-gray-700" -->
                            <a href="{{ request('perPage') == 10 ? 'selected' : '' }}"
                                class="font-karla block px-4 py-2 text-sm text-[#161519] hover:bg-[#E0ECFF] rounded-md"
                                role="menuitem" tabindex="-1" data-value="10">10 per page</a>
                            <a href="#"
                                class="font-karla block px-4 py-2 text-sm text-[#161519] hover:bg-[#E0ECFF] rounded-md">
                                25 per page
                            </a>
                            <a href="#"
                                class="font-karla block px-4 py-2 text-sm text-[#161519] hover:bg-[#E0ECFF] rounded-md"
                                role="menuitem" tabindex="-1" id="menu-item-2">50 per page</a>
                            <a href="#"
                                class="font-karla block px-4 py-2 text-sm text-[#161519] hover:bg-[#E0ECFF] rounded-md"
                                role="menuitem" tabindex="-1" id="menu-item-2">100 per page</a>
                        </div>
                    </div>
                </div>
                <!-- end:Pagination -->

                <!-- start:Searching -->
                <div class="my-4 max-w-screen-xl">
                    <div class="mx-auto sm:text-center">
                        <form>
                            <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                                <div class="relative w-full">
                                    <label for="search"
                                        class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Search</label>
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        <svg class="text-gray-400" xmlns="http://www.w3.org/2000/svg" width="20"
                                            height="20" viewBox="0 0 24 24">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="1.5"
                                                d="m21 21l-4.343-4.343m0 0A8 8 0 1 0 5.343 5.343a8 8 0 0 0 11.314 11.314" />
                                        </svg>
                                    </div>
                                    <input
                                        class="block py-2 pl-10 w-full text-sm text-[#161519] bg-white rounded-lg border border-gray-200 sm:rounded-none sm:rounded-l-lg focus:outline focus:outline-2 focus:outline-[#0165FF]"
                                        placeholder="Search something here" type="search" id="search" name="search"
                                        autocomplete="off">
                                </div>
                                <div>
                                    <button type="submit"
                                        class="py-2 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-[#0165FF] border-primary-600 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end:Searching -->
            </div>


            <div class="flex mx-4 my-4">
                <div
                    class="flex justify-between w-full overflow-x-auto overflow-y-auto max-h-96 border border-gray-200 rounded-lg">
                    <table class="min-w-full table-auto">
                        <thead class="bg-[#F7F9FB] border sticky -top-0.5 z-999999">
                            <tr>
                                <th class="px-6 py-3 w-0 text-left text-sm text-[#161519] tracking-wider">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-0165FF">
                                </th>
                                <th
                                    class="px-6 py-3 font-karla text-left text-sm font-semibold text-[#161519] tracking-wider">
                                    Name Product
                                </th>
                                <th
                                    class="px-6 py-3 font-karla text-left text-sm font-semibold text-[#161519] tracking-wider">
                                    Category Product
                                </th>
                                <th
                                    class="px-6 py-3 font-karla text-left text-sm font-semibold text-[#161519] tracking-wider">
                                    Price Product
                                </th>
                                <th
                                    class="px-6 py-3 font-karla text-left text-sm font-semibold text-[#161519] tracking-wider">
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($products as $product)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <input type="checkbox" class="form-checkbox h-4 w-4 text-0165FF">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-normal text-[#161519]">
                                        {{ $product->name_product }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-normal text-[#161519]">
                                        {{ $product->category->name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-normal text-[#161519]">
                                        {{ $product->price_product }}
                                    </td>
                                    <td
                                        class="flex flex-row px-6 py-4 justify-end whitespace-nowrap text-sm font-normal text-right">
                                        <a href="{{ route('admin.editProduct', $product->id_product) }}"
                                            class="px-1.5 py-1 rounded-sm text-white bg-[#3AB8F1] flex items-center space-x-2 mr-2 hover:bg-[#1EA8E3]"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewBox="0 0 24 24">
                                                <g fill="none">
                                                    <path
                                                        d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                                    <path fill="currentColor"
                                                        d="M13 3a1 1 0 0 1 .117 1.993L13 5H5v14h14v-8a1 1 0 0 1 1.993-.117L21 11v8a2 2 0 0 1-1.85 1.995L19 21H5a2 2 0 0 1-1.995-1.85L3 19V5a2 2 0 0 1 1.85-1.995L5 3zm6.243.343a1 1 0 0 1 1.497 1.32l-.083.095l-9.9 9.899a1 1 0 0 1-1.497-1.32l.083-.094z" />
                                                </g>
                                            </svg>Edit</a>

                                        <form action="{{ route('admin.destroyProduct', $product->id_product) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="font-karla px-1.5 py-1 rounded-sm text-white bg-[#FC595B] flex items-center space-x-2 mr-2 hover:bg-[#F81F25]"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M7 21q-.825 0-1.412-.587T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zM9 17h2V8H9zm4 0h2V8h-2zM7 6v13z" />
                                                </svg>Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



    </div>
</x-layout>
