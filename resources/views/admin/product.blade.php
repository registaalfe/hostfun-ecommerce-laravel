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

    </div>
</x-layout>
