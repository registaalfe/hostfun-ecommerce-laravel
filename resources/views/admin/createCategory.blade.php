<x-layout>
    <div class="elementor-section flex flex-col p-8">
        <form id="createCategoryForm" action="{{ route('admin.store') }}" method="POST">
            @csrf
            <div class="flex flex-col">
                <label class="font-karla py-2 text-[#161519]">Name Category</label>
                <input
                    class="w-1/2 h-10 shadow appearance-none border rounded px-3 text-[#161519] leading-tight focus:border-[#0165FF] focus:bg-[#F7F9FB] focus:outline-none focus:shadow-outline"
                    type="text" name="name" placeholder="Enter name category">

                <!-- Server-side validation error message -->
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <button
                class="my-6 font-karla bg-[#0165FF] hover:bg-[#12294A] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit" id="createButton">Submit</button>
        </form>
    </div>
</x-layout>