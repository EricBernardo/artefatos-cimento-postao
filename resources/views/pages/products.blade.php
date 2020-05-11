@extends('layouts.master')

@section('title', 'Produtos')

@section('content')

<section>
    <div class="products">
        <div class="products__title">Produtos</div>
        <div class="products__items">
        <div class="product_item">
                <div class="product_item__image">
                    <img src="{{URL::asset('/images/postes.jpg')}}" alt="Postes" />
                </div>
                <div class="product_item__info">
                    <div class="product_item__title">
                        Postes
                    </div>
                    <div class="product_item__description">
                        A Artefatos de Cimento Portão produz postes de concreto armado padrão CEEE – RGE – AESSUL dentro dos novos padrões de entrada de energia para baixa tensão.
                    </div>
                </div>
            </div>
            <div class="product_item">
                <div class="product_item__image">
                    <img src="{{URL::asset('/images/fossas.jpg')}}" alt="Fossas" />
                </div>
                <div class="product_item__info">
                    <div class="product_item__title">
                        Fossas
                    </div>
                    <div class="product_item__description">
                        Produzimos Fossas para o tratamento de esgoto através de sistema biológico onde a velocidade e a permanência do fluido na fossa permitem a separação da fração sólida do líquido, proporcionando digestão limitada da matéria orgânica e acúmulo dos sólidos.
                    </div>
                </div>
            </div>
            <div class="product_item">
                <div class="product_item__image">
                    <img src="{{URL::asset('/images/filtros.jpg')}}" alt="Filtros" />
                </div>
                <div class="product_item__info">
                    <div class="product_item__title">
                        Filtros
                    </div>
                    <div class="product_item__description">
                    Produzimos Filtros Anaeróbicos que são destinados a filtragem do esgoto após sua passagem pela fossa. A filtragem se da através da alimentação e percolação contínua de esgotos através de um sistema interno de pedras ou pedregulhos promovendo o crescimento e a aderência de massa biológica realizando assim a clarificação dos esgotos.
                    </div>
                </div>
            </div>
            <div class="product_item">
                <div class="product_item__image">
                    <img src="{{URL::asset('/images/sumidouros.jpg')}}" alt="Sumidouros" />
                </div>
                <div class="product_item__info">
                    <div class="product_item__title">
                        Sumidouros
                    </div>
                    <div class="product_item__description">
                    Produzimos Sumidouros que são unidades capazes de receber a parte líquida proveniente das fossas sépticas e têm a função de permitir sua infiltração no solo.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop
