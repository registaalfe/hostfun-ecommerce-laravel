<x-admin.layout>
    <div class="elementor-section flex flex-col p-8">
        <form action="{{ route('admin.updateProduct', $product->id_product) }}" method="POST"
            enctype="multipart/form-data">
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

            <div class="flex flex-col mt-4">
                <label class="font-karla py-2 text-gray-600" for="image_path">Upload
                    file</label>

                <div class="my-4">
                    <img src="{{ $product->image_path }}" alt="Image" style="max-width: 300px;">
                </div>

                <input
                    class="block w-1/2 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    name="image_path" id="image_path" type="file">

                <!-- Server-side validation error message -->
                @error('image_path')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
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
                type="submit" onclick="editing(this)">Submit</button>
        </form>
    </div>
</x-admin.layout>
