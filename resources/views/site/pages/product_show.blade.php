@extends('site.layouts.master')

@section('content')

    @if ($product)
        <section>
            <div class="products">
                <h1 class="products__title">{{ $product['title'] }}</h1>
                <div class="products__items">
                    <div class="product_item">
                        <div class="product_item__image">
                            <img src="{{ URL::asset('storage/' . (isMobile() && $product['image_mobile'] ? $product['image_mobile'] : $product['image'])) }}"
                                alt="{{ $product['title'] }}"
                                {{ !isMobile() && $product['image_height'] ? 'height=' . $product['image_height'] . 'px' : '' }}
                                {{ !isMobile() && $product['image_width'] ? 'width=' . $product['image_width'] . 'px' : '' }}
                                {{ isMobile() && $product['image_mobile_height'] ? 'height=' . $product['image_mobile_height'] . 'px' : '' }}
                                {{ isMobile() && $product['image_mobile_width'] ? 'width=' . $product['image_mobile_width'] . 'px' : '' }} />
                        </div>
                        <div class="product_item__info">
                            <h2 class="product_item__description">{!! nl2br($product['description']) !!}</h2>
                        </div>
                    </div>
                </div>
            </div>
            @include('site/includes/faq')
            @include('site/includes/form', ['class' => 'form-product'])
        </section>
    @endif

@stop
