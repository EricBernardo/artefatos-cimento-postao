<section>
    <div class="blocks">
        <h1 class="blocks__title">{{ $title }}</h1>
        <div class="blocks__items">
            @foreach ($results as $item)
                <div class="block_item">
                    <div class="block_item__image">
                        <img src="{{URL::asset('/images/' . $item['image'])}}" alt="{{ $item['title'] }}" />
                    </div>
                    <div class="block_item__info">
                        <div class="block_item__title">{{ $item['title'] }}</div>
                        <div class="block_item__description">{{ $item['description'] }}</div>
                    </div>
                </div>
            @endforeach    
        </div>
    </div>
</section>