@if ($paginator->hasPages())
    <div class="handlerFeld">
        @if ($paginator->currentPage() != 1)
            <a class="PagesHandlerLink" href="{{ $paginator->url(1) }}">&lt;&lt;</a>
            <a class="PagesHandlerLink" href="{{ $paginator->previousPageUrl() }}">Назад</a>
        @endif
        @foreach ($elements as $element)
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        @if ($page == $paginator->currentPage() && $page == 1)
                            <a class="PagesHandlerLink" href="javascript:void()">{{ $page }}/{{ $elementCount }}</a>
                        @else
                            <font face="\&quot;Symbol\&quot;">·</font> <a class="PagesHandlerLink" href="javascript:void()">{{ $page }}/{{ $elementCount }}</a>
                        @endif
                    @else
                        <font face="\&quot;Symbol\&quot;">·</font> <a class="PagesHandlerLink" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <font face="Symbol">·</font> <a class="PagesHandlerLink" href="{{ $paginator->nextPageUrl() }}">Дальше</a>
            <a class="PagesHandlerLink" href="{{ $paginator->url($paginator->lastPage()) }}">&gt;&gt;</a>
        @endif
    </div>
@endif
