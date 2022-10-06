<section>
    <div class="blocks">
        @if (Request::is('/'))
            <h2 class="blocks__title">{{ $title }}</h2>
        @else
            <h1 class="blocks__title">{{ $title }}</h1>
        @endif

        <div class="blocks__items">
            @foreach ($results as $item)
                <div class="block_item">
                    <div class="block_item__image">
                        <img src="{{ URL::asset('storage/' . (isMobile() && $item['image_mobile'] ? $item['image_mobile'] : $item['image'])) }}"
                            alt="{{ $item['title'] }}"
                            {{ !isMobile() && $item['image_height'] ? 'height=' . $item['image_height'] . 'px' : '' }}
                            {{ !isMobile() && $item['image_width'] ? 'width=' . $item['image_width'] . 'px' : '' }}
                            {{ isMobile() && $item['image_mobile_height'] ? 'height=' . $item['image_mobile_height'] . 'px' : '' }}
                            {{ isMobile() && $item['image_mobile_width'] ? 'width=' . $item['image_mobile_width'] . 'px' : '' }} />
                    </div>
                    <div class="block_item__info">
                        <h2 class="block_item__title">{{ $item['title'] }}</h2>
                        @if (isset($item['slug']) && $item['slug'])
                            <p class="block_item__description">{!! nl2br(summarizeText($item['description'])) !!}</p>
                            <a href="{{ url('/produtos/' . $item['slug']) }}">
                                Mais Detalhes
                            </a>
                        @else
                            <p class="block_item__description">{!! nl2br($item['description']) !!}</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
