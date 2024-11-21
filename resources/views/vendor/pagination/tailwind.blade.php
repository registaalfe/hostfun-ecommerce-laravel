{{-- Pagination Elements --}}
<div class="flex justify-center space-x-1">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
        <span class="px-3 py-1 text-[#9CA3AF]">Prev</span>
    @else
        <a href="{{ $paginator->previousPageUrl() }}" class="px-3 py-1 text-[#9CA3AF] hover:text-blue-700">Prev</a>
    @endif

    {{-- Pagination Links --}}
    @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
            <span class="px-3 py-1 text-[#9CA3AF]">{{ $element }}</span>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <span class="px-3 py-1 bg-[#0165FF] text-white rounded">{{ $page }}</span>
                @else
                    <a href="{{ $url }}"
                        class="px-3 py-1 text-[#111827] hover:bg-[#0165FF] rounded hover:text-white">{{ $page }}</a>
                @endif
            @endforeach
        @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="px-3 py-1 text-[#9CA3AF] hover:text-blue-700">Next</a>
    @else
        <span class="px-3 py-1 text-[#9CA3AF]">Next</span>
    @endif
</div>
