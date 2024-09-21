@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">
        <div class="flex justify-between flex-1 sm:hidden">
            @if ($paginator->onFirstPage())
                <span class="cursor-not-allowed px-4 py-2 text-gray-400 bg-gray-100 rounded-md">
                    Previous
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-100">
                    Previous
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-100">
                    Next
                </a>
            @else
                <span class="cursor-not-allowed px-4 py-2 text-gray-400 bg-gray-100 rounded-md">
                    Next
                </span>
            @endif
        </div>

        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-gray-500">
                    Showing
                    <span class="font-medium">{{ $paginator->firstItem() }}</span>
                    to
                    <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    of
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    results
                </p>
            </div>

            <div>
                <span class="relative z-0 inline-flex shadow-sm rounded-md">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <span class="relative inline-flex items-center px-4 py-2 text-gray-400 bg-gray-100 border border-gray-300 rounded-l-md cursor-not-allowed">
                            &laquo;
                        </span>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-l-md hover:bg-gray-100">
                            &laquo;
                        </a>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span class="relative inline-flex items-center px-4 py-2 text-gray-500 bg-gray-100 border border-gray-300">
                                {{ $element }}
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span class="relative inline-flex items-center px-4 py-2 text-white bg-blue-500 border border-blue-500">{{ $page }}</span>
                                @else
                                    <a href="{{ $url }}" class="relative inline-flex items-center px-4 py-2 text-gray-700 bg-white border border-gray-300 hover:bg-gray-100">{{ $page }}</a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-r-md hover:bg-gray-100">
                            &raquo;
                        </a>
                    @else
                        <span class="relative inline-flex items-center px-4 py-2 text-gray-400 bg-gray-100 border border-gray-300 rounded-r-md cursor-not-allowed">
                            &raquo;
                        </span>
                    @endif
                </span>
            </div>
        </div>
    </nav>
@endif
