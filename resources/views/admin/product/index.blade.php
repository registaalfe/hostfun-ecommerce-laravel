<x-admin.layout>
    <div class="elementor-section flex flex-col p-8 min-h-screen bg-[#F7F9FB]">
        <div class="flex flex-row justify-between mb-8">
            <h1 class="text-2xl font-semibold text-[#161519]">Product</h1>
            <a href="{{ route('admin.createProduct') }}">
                <span
                    class="text-sm font-karla px-3 py-2.5 items-center rounded-lg bg-[#0165FF] hover:bg-[#12294A] text-white">+
                    Add
                    Product</span>
            </a>
        </div>

        <table id="" class="display min-w-full table-auto">
            <thead class="bg-[#F7F9FB] border sticky -top-0.5 z-999999">
                <tr>
                    <th class="px-6 py-3 w-0 text-left text-sm text-[#161519] tracking-wider">
                        <input type="checkbox" class="form-checkbox h-4 w-4 text-0165FF">
                    </th>
                    <th class="px-6 py-3 font-karla text-left text-sm font-semibold text-[#161519] tracking-wider">
                        Name Product
                    </th>
                    <th class="px-6 py-3 font-karla text-left text-sm font-semibold text-[#161519] tracking-wider">
                        Category Product
                    </th>
                    <th class="px-6 py-3 font-karla text-left text-sm font-semibold text-[#161519] tracking-wider">
                        Price Product
                    </th>
                    <th class="px-6 py-3 font-karla text-left text-sm font-semibold text-[#161519] tracking-wider">
                        Action</th>
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
                            {{ number_format($product->price_product, 2, ',', '.') }}
                        </td>
                        <td
                            class="flex flex-row px-6 py-4 justify-end whitespace-nowrap text-sm font-normal text-right">
                            <a href="{{ route('admin.editProduct', $product->id_product) }}"
                                class="px-1.5 py-1 rounded-sm text-white bg-[#0165FF] flex items-center space-x-2 mr-2 hover:bg-[#12294A]"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24">
                                    <g fill="none">
                                        <path
                                            d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                        <path fill="currentColor"
                                            d="M13 3a1 1 0 0 1 .117 1.993L13 5H5v14h14v-8a1 1 0 0 1 1.993-.117L21 11v8a2 2 0 0 1-1.85 1.995L19 21H5a2 2 0 0 1-1.995-1.85L3 19V5a2 2 0 0 1 1.85-1.995L5 3zm6.243.343a1 1 0 0 1 1.497 1.32l-.083.095l-9.9 9.899a1 1 0 0 1-1.497-1.32l.083-.094z" />
                                    </g>
                                </svg>Edit</a>

                            <form action="{{ route('admin.destroyProduct', $product->id_product) }}" method="POST">
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
</x-admin.layout>
