@if ($paginator->hasPages())
    <div class="row">
        <div class="col-sm-6">
            <div class="dataTables_info" id="sample_1_info">
                共{{$paginator->total()}}条数据，当前页{{$paginator->count()}}条数据
            </div>
        </div>
        <div class="col-sm-6">
            <div class="dataTables_paginate paging_bootstrap pagination">
                <ul>
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="prev disabled"><a href="#">← Prev</a></li>
                    @else
                        <li class="prev"><a href="{{ $paginator->previousPageUrl() }}">← Prev</a></li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="disabled">{{ $element }}</li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="active"><a href="#">{{ $page }}</a></li>
                                @else
                                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li class="next"><a href="{{ $paginator->nextPageUrl() }}">Next → </a></li>
                    @else
                        <li class="next disabled"><a href="#">Next → </a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endif
