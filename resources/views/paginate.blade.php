@if ($paginator->hasPages())

    <div class="handlerFeld">
        @if ($paginator->onFirstPage())
            [1/71] <font face="Symbol">·</font> <a class="PagesHandlerLink" href="/dealer.php?page=3">1</a>
        @else
            <a class="PagesHandlerLink" href="/dealer.php?page=1">&lt;&lt;</a> <a class="PagesHandlerLink" href="/dealer.php?page=1">Назад</a>
        @endif
        <font face="Symbol">·</font> [2/71] <font face="Symbol">·</font> <a class="PagesHandlerLink" href="/dealer.php?page=3">3</a>
        <font face="\&quot;Symbol\&quot;">·</font> <a class="PagesHandlerLink" href="/dealer.php?page=4">4</a>
        <font face="\&quot;Symbol\&quot;">·</font> <a class="PagesHandlerLink" href="/dealer.php?page=5">5</a>
        <font face="\&quot;Symbol\&quot;">·</font> <a class="PagesHandlerLink" href="/dealer.php?page=6">6</a>
        <font face="\&quot;Symbol\&quot;">·</font> <a class="PagesHandlerLink" href="/dealer.php?page=7">7</a>
        <font face="\&quot;Symbol\&quot;">·</font> <a class="PagesHandlerLink" href="/dealer.php?page=8">8</a>
        <font face="\&quot;Symbol\&quot;">·</font> <a class="PagesHandlerLink" href="/dealer.php?page=9">9</a>
        <font face="\&quot;Symbol\&quot;">·</font> <a class="PagesHandlerLink" href="/dealer.php?page=10">10</a>
        <font face="Symbol">·</font> <a class="PagesHandlerLink" href="/dealer.php?page=3">Дальше</a> <a class="PagesHandlerLink" href="/dealer.php?page=71">&gt;&gt;</a>
    </div>
@endif
