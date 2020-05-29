@if ($paginator->hasPages())
  <nav class="pagination my-5">
    <ul class="pagination__lists">
      {{-- Previous Page Link --}}
      @if ($paginator->onFirstPage())
        <li class="pagination__lists__list disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
          <span class="pagination__lists__list__link" aria-hidden="true">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
          </span>
        </li>
      @else
        <li class="pagination__lists__list">
          <a class="pagination__lists__list__link" href="{{ $paginator->previousPageUrl() }}" rel="prev"
             aria-label="@lang('pagination.previous')">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
          </a>
        </li>
      @endif

      {{-- Pagination Elements --}}
      @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
          <li class="pagination__lists__list disabled" aria-disabled="true">
            <span class="pagination__lists__list__link">{{ $element }}</span>
          </li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
          @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
              <li class="pagination__lists__list" aria-current="page">
                <span class="pagination__lists__list__link active">{{ $page }}</span>
              </li>
            @else
              <li class="pagination__lists__list">
                <a class="pagination__lists__list__link" href="{{ $url }}">{{ $page }}</a>
              </li>
            @endif
          @endforeach
        @endif
      @endforeach

      {{-- Next Page Link --}}
      @if ($paginator->hasMorePages())
        <li class="pagination__lists__list">
          <a class="pagination__lists__list__link" href="{{ $paginator->nextPageUrl() }}" rel="next"
             aria-label="@lang('pagination.next')">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
          </a>
        </li>
      @else
        <li class="pagination__lists__list disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
          <span class="pagination__lists__list__link" aria-hidden="true">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
          </span>
        </li>
      @endif
    </ul>
  </nav>
@endif
