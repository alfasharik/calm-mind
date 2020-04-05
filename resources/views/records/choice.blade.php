<div class="content">
    <div class="wrapper_for_feed">
        <a class="feed_link" href="/{{ Request::route()->getName() }}/letter">Письма</a>
        <a class="feed_link" href="/{{ Request::route()->getName() }}/thought">Мысли</a>
    </div>
    @if ($section === 'thought')

        @include('records.thought')

    @elseif ($section === 'letter')

        @include('records.letter')

    @endif
</div>
