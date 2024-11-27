<x-users-transactions.layout>
    <div class="max-w-6xl mx-auto px-14 pt-12 pb-8 bg-[#F5F5F5] min-w-full min-h-full">
        <div class="flex items-center justify-center pb-10 space-x-4">
            <div
                class="font-karla w-12 h-12 bg-teal-500 text-white border-4 border-teal-200 rounded-full flex items-center justify-center font-bold">
                1</div>
            <div class="h-1 w-8 bg-gray-300"></div>
            <div
                class="font-karla w-12 h-12 bg-gray-300 text-gray-500 rounded-full flex items-center justify-center font-bold">
                2
            </div>
            <div class="h-1 w-8 bg-gray-300"></div>
            <div
                class="font-karla w-12 h-12 bg-gray-300 text-gray-500 rounded-full flex items-center justify-center font-bold">
                3
            </div>
        </div>
        <div class="flex flex-col items-center justify-center pb-6 mb-6">
            <h1 class="text-3xl font-bold text-[#12294A] mb-2">
                Checkout
            </h1>
            <p class="font-karla text-gray-400">Please fill up the blank fields below</p>
        </div>

        <form id="duration-form" action="{{ route('checkoutProduct') }}" method="POST">
            @csrf

            <!-- Kolom hidden digunakan untuk menyimpan data tanpa menampilkan ke pengguna, tapi tetap dapat dikirim ke backend jika diperlukan. -->
            <input type="hidden" name="customer_id" value="{{ auth()->user()->id }}">

            <!-- $request->product_id untuk melakukan operasi tertentu, seperti mencari produk. Saat form di-submit, nilai product_id akan dikirim ke server sebagai bagian dari data form. -->
            <input type="hidden" name="product_id" id="product_id" value="{{ $product->id_product }}">

            <div class="bg-white rounded-lg shadow-lg p-6 flex justify-between">
                <div class="w-1/2 pr-4">
                    <h2 class="font-karla text-xl font-bold text-[#12294A] mb-2">{{ $product->name_product }}
                    </h2>
                    <div class="mb-4">
                        <label class="font-karla block text-gray-700 mb-2">Duration</label>
                        <select class="font-karla w-full p-2 border rounded" name="duration" id="duration" required>
                            <option value="1">1 Month</option>
                            <option value="3">3 Month</option>
                            <option value="6">6 Month</option>
                            <option value="12">12 Month</option>
                        </select>
                    </div>

                    <div class="flex items-baseline mb-4">
                        <span class="font-karla text-2xl font-bold text-[#12294A]">Rp
                            {{ number_format($product->price_product, 0, ',', '.') }}
                            /month</span>
                    </div>
                </div>

                <div class="w-1/2 pl-4">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <div class="flex font-karla justify-between items-baseline mb-4">
                            <span class="text-2xl font-bold text-gray-900">Subtotal</span>
                            <span id="subtotal" class="text-2xl font-bold text-gray-900">Rp. 0</span>
                        </div>
                        <div class="flex font-karla justify-between items-baseline mb-2">
                            <span class="text-gray-700">Discount</span>
                            <span class="text-[#12294A]">0</span>
                        </div>
                        <div class="flex font-karla justify-between items-baseline mb-8">
                            <a href="#" class="text-[#12294A]">Tax</a>
                            <span class="text-[#12294A]">Free</span>
                        </div>
                        <button type="submit"
                            class="font-karla w-full bg-[#0165FF] text-white py-3 rounded text-lg font-bold hover:bg-[#12294A] duration-200">Continue</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="text-center mt-20">
            <span class="font-karla text-[#12294A]"><i class="fas fa-shield-alt"></i> 30 DAY MONEY BACK GUARANTEE</span>
        </div>
        <div class="font-karla text-center mt-6 text-gray-500">
            <p>2024 © Hostfun. All rights reserved.</p>
        </div>
    </div>

</x-users-transactions.layout>
