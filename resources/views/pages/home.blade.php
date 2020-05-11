@extends('layouts.master')

@section('title', 'Home')

@section('content')

    <section>
        <div class="banner">
            <img class="banner__img" src="{{URL::asset('/images/banner.jpg')}}" alt="Bem-vindo(a) a Artefatos de cimentos Portão. Soluções em peças de concreto">
            <div class="banner__text">
                <div class="banner__title">Bem-vindo(a) a Artefatos de cimentos Portão</div>
                <div class="banner__subtitle">Soluções em peças de concreto</div>
            </div>
        </div>
    </section>

    <section>
        <div class="services">
            <div class="services__title">Nossos serviços</div>
            <div class="services__items">
            <div class="service_item">
                    <div class="service_item__image">
                        <img src="{{URL::asset('/images/entrega-agendada.jpg')}}" alt="Entrega agendada" />
                    </div>
                    <div class="service_item__info">
                        <div class="service_item__title">
                            Entrega agendada
                        </div>
                        <div class="service_item__description">
                        Ao trabalhar com o(a) Artefatos cimento portão, nossos clientes experimentam um nível de profissionalismo exemplar. Todos os nossos serviços, este em particular, foram criados para facilitar a sua vida. Você pode contar conosco para encontrar os melhores produtos do mercado, assim como um serviço de atendimento ao consumidor da mais alta qualidade.
                        </div>
                    </div>
                </div>
                <div class="service_item">
                    <div class="service_item__image">
                        <img src="{{URL::asset('/images/consulta-para-compras.jpg')}}" alt="Consulta para compras" />
                    </div>
                    <div class="service_item__info">
                        <div class="service_item__title">
                            Consulta para compras
                        </div>
                        <div class="service_item__description">
                        Este é um dos nossos serviços mais populares. Fez uma grande diferença para muitos de nossos clientes, e é oferecido no mais alto nível de excelência. Com ele, asseguramos que todos os detalhes sejam simples, dinâmicos e executados em tempo útil. Sempre que trabalhar com o(a) Artefatos cimento portão, você pode confiar que estará em ótimas mãos.
                        </div>
                    </div>
                </div>
                <div class="service_item">
                    <div class="service_item__image">
                        <img src="{{URL::asset('/images/atendimento-ao-cliente.jpg')}}" alt="Atendimento ao cliente" />
                    </div>
                    <div class="service_item__info">
                        <div class="service_item__title">
                            Atendimento ao cliente
                        </div>
                        <div class="service_item__description">
                            Utilizado pela maioria dos clientes, esse serviço é um dos responsáveis pelo nosso sucesso. Todos os nossos serviços são de alta qualidade, e pode contar conosco para cuidar de tudo o que você precisar. Temos orgulho do excelente serviço de atendimento ao cliente que fornecemos, e garantimos a sua satisfação total no tratamento oferecido por nossa equipe. Basta entrar em contato para saber como podemos te ajudar.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('includes/form')

@stop
