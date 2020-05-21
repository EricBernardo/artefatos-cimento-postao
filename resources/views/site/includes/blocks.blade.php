<section>
    <div class="blocks">
        <h1 class="blocks__title">{{ $title }}</h1>
        <div class="blocks__items">
            @foreach ($results as $item)
                <div class="block_item">
                    <div class="block_item__image">
                        <img src="{{ url('storage/' . $item['image'])}}" alt="{{ $item['title'] }}" />
                    </div>
                    <div class="block_item__info">
                        <h2 class="block_item__title">{{ $item['title'] }}</h2>
                        <p class="block_item__description">{!! nl2br($item['description']) !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
