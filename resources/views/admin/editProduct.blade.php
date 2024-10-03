<x-layout>
    <div class="elementor-section flex flex-col p-8">
        <form action="{{ route('admin.updateProduct', $product->id_product) }}" method="POST">
            @csrf
            <div class="flex flex-col">
                <label class="font-karla py-2 text-[#161519]">Name Product</label>
                <input
                    class="w-1/2 h-10 shadow appearance-none border rounded px-3 text-[#161519] leading-tight focus:border-[#0165FF] focus:bg-[#F7F9FB] focus:outline-none focus:shadow-outline"
                    type="text" name="name_product" placeholder="Enter your name product"
                    value="{{ $product->name_product }}">
            </div>

            <div class="flex flex-col">
                <label class="font-karla py-2 text-[#161519]">Category Product</label>
                <select
                    class="w-1/2 h-10 shadow appearance-none border rounded px-3 text-gray-600 leading-tight focus:border-[#0165FF] focus:bg-[#F7F9FB] focus:outline-none focus:shadow-outline"
                    name="category_id">
                    <option disabled value>Select category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ $category->id == $product->category_id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="flex flex-col">
                <label class="font-karla py-2 text-[#161519]">Price Product</label>
                <input
                    class="w-1/2 h-10 shadow appearance-none border rounded px-3 text-[#161519] leading-tight focus:border-[#0165FF] focus:bg-[#F7F9FB] focus:outline-none focus:shadow-outline"
                    type="text" name="price_product" placeholder="Enter your price product"
                    value="{{ $product->price_product }}">
            </div>
            <button
                class="my-6 font-karla bg-[#0165FF] hover:bg-[#12294A] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit">Submit</button>
        </form>
    </div>
</x-layout>
