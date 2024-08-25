
@if ($paginator->hasPages())
    <div class="pagenavi clearfix">
        {{-- Page Information --}}
        <span class="pages">Page {{ $paginator->currentPage() }} of {{ $paginator->lastPage() }}</span>

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="disabled">‹‹</span>
        @else
            <a class="prevpostslink" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">‹‹</a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="extend">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="current">{{ $page }}</span>
                    @else
                        <a class="page_number" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="nextpostslink" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">››</a>
        @else
            <span class="disabled">››</span>
        @endif

        {{-- Last Page Link --}}
        @if ($paginator->lastPage() > 1 && !$paginator->onLastPage())
            <a class="last" href="{{ $paginator->url($paginator->lastPage()) }}">Last »</a>
        @endif
    </div>
@endif
