<x-admin.layout>
    <div class="flex flex-col ml-8 mt-6">
        <h1 class="font-karla text-2xl font-bold text-[#34364A]">Edit Category</h1>
    </div>
    <div class="elementor-section flex flex-col p-8">
        <form id="editCategoryForm" action="{{ route('admin.update', $categories) }}" method="POST">
            @csrf
            <div class="flex flex-col">
                <label class="font-karla py-2 text-[#34364A]">Name</label>
                <input
                    class="w-1/2 h-10 shadow appearance-none border rounded px-3 text-[#34364A] leading-tight focus:border-[#0165FF] focus:bg-[#F7F9FB] focus:outline-none focus:shadow-outline"
                    type="text" name="name" placeholder="Enter your name" value="{{ $categories->name }}">
            </div>
            <button
                class="my-6 font-karla bg-[#335EF7] hover:bg-[#34364A] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit" onclick="editing(this)">Submit</button>
        </form>
    </div>
</x-admin.layout>
