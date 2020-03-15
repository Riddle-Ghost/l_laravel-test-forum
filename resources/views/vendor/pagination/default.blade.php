@if ($paginator->hasPages())
    <div class="forum_pagination">
        <div class="forum_pagination_wrap">
            <div class="headings_links">
                {{-- Previous Page Link --}}
                @if (!$paginator->onFirstPage())
                    <a class="tofirst" href="{{ $paginator->previousPageUrl() }}" title="Prev" rel="prev" aria-label="@lang('pagination.previous')">
                        First Page &lsaquo;
                    </a>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <span class="current">{{ $page }}</span>
                            @else
                                <a class="topage" href="{{ $url }}">
                                    {{ $page }}
                                </a>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <a class="tolast" href="{{ $paginator->nextPageUrl() }}" title="next" rel="next" aria-label="@lang('pagination.next')">
                        Next Page &rsaquo;
                    </a>
                @endif
            </div>
        </div>
    </div>
@endif
