<x-layout>
    <div class="elementor-section flex flex-col p-8 min-h-screen bg-[#F7F9FB]">
        <div class="flex flex-row justify-between">
            <h1 class="text-2xl font-semibold text-[#161519]">Category</h1>
            <a href="{{ route('admin.createCategory') }}">
                <span
                    class="text-sm font-karla px-3 py-2.5 items-center rounded-lg bg-[#0165FF] hover:bg-[#12294A] text-white">+
                    Add
                    Category</span>
            </a>
        </div>
        <div class="flex my-8">
            <div class="flex justify-between w-full overflow-x-auto shadow-md shadow-black/5">
                <table class="min-w-full table-auto">
                    <thead class="bg-[#F7F9FB] border">
                        <tr>
                            <th class="px-6 py-3 w-0 text-left text-sm font-medium text-[#161519] tracking-wider">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                            </th>
                            <th
                                class="px-6 py-3 font-karla text-left text-sm font-medium text-[#161519] tracking-wider">
                                Name
                            </th>
                            <th
                                class="px-11 py-3 font-karla text-right text-sm font-medium text-[#161519] tracking-wider">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($categories as $category)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <input type="checkbox" class="form-checkbox h-4 w-4 text-blue-600">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                    {{ $category->name }}
                                </td>
                                <td
                                    class="flex flex-row justify-end px-6 py-4 whitespace-nowrap text-sm font-normal text-right">
                                    <a href="{{ route('admin.editCategory', $category->id) }}"
                                        class="text-blue-600 hover:text-blue-900 mr-2">Edit</a>
                                    <form action="{{ route('admin.destroy', $category->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="font-karla text-red-600 hover:text-red-900">Delete</button>
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
</x-layout>
