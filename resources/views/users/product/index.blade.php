<x-users.layout>
    <div class="max-w-6xl mx-auto px-14 py-8 bg-[#F5F5F5] min-w-full min-h-full">
        <div class="flex flex-wrap mx-3">
            @foreach ($products as $product)
                <!-- Product 1 -->
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 px-3 mb-6">
                    <a href="{{ route('detailProduct', $product->id) }}">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <div class="relative">
                                <img alt="{{ $product->name }}" class="w-full h-64 object-cover" height="400"
                                    src="{{ asset($product->image_path) }}" width="600" />
                                <!-- <span
                                class="absolute top-2 left-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">
                                SALE
                            </span> -->
                            </div>
                            <div class="p-4 flex justify-between">
                                <div class="left-item">
                                    <h3 class="text-gray-800 text-lg font-semibold">
                                        {{ $product->name_product }}
                                    </h3>
                                    <p class="text-gray-500 text-sm mt-1">
                                        {{ $product->category->name }}
                                    </p>
                                </div>
                                <div class="right-item flex flex-col items-baseline space-x-2">
                                    <span class="text-gray-800 text-xl font-bold">
                                        {{ number_format($product->price_product, 2, ',', '.') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

            <div class="flex mx-auto mt-4">
                {{ $products->links() }}
            </div>
        </div>
    </div>




</x-users.layout>
