@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation">
        <ul class="pagination d-flex align-items-center justify-content-between">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link rounded-3 text-muted border border-secondary border-dashed">{!! __('pagination.previous') !!}</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link rounded-3 text-bg-dark" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                        {!! __('pagination.previous') !!}
                    </a>
                </li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link rounded-3 text-dark border border-dark border-dashed bg-secondary-subtle" href="{{ $paginator->nextPageUrl() }}"
                        rel="next">{!! __('pagination.next') !!}</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link rounded-3 text-muted border border-secondary border-dashed">{!! __('pagination.next') !!}</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
