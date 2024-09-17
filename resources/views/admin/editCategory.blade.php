<x-layout>
    <div class="elementor-section flex flex-col p-8">
        <form action="{{ route('admin.update', $categories->id) }}" method="POST">
            @csrf
            <div class="flex flex-col">
                <label class="font-karla py-2 text-[#161519]">Name</label>
                <input
                    class="w-1/2 h-10 shadow appearance-none border rounded px-3 text-[#161519] leading-tight focus:border-[#0165FF] focus:bg-[#F7F9FB] focus:outline-none focus:shadow-outline"
                    type="text" name="name" placeholder="Enter your name" value="{{ $categories->name }}">
            </div>
            <button
                class="my-6 font-karla bg-[#0165FF] hover:bg-[#12294A] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit">Submit</button>
        </form>
    </div>
</x-layout>
