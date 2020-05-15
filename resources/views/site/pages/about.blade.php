@extends('site.layouts.master')

@section('title', 'Quem somos')

@section('content')

<section>
    <div class="abouts">
        <h1 class="abouts__title">Quem somos</h1>
        <div class="abouts__items">
            <div class="about_item">
                <div class="about_item__image">
                    <img src="{{URL::asset('/images/quem-somos.jpg')}}" alt="Quem somos" />
                </div>
                <div class="about_item__info">
                    <h2 class="about_item__description">
                        <p>A Artefatos de Cimento Portão produz peças de concreto aliando tecnologia e rigoroso controle para satisfazer as necessidades dos seus clientes. Fundada em 2001, é uma das pioneiras no estado do Rio Grande do Sul à produzir postes de concreto dentro dos padrões exigidos pela RGE-CPFL Energia.</p>
                        <p>Com fábricas em Portão – RS,  a empresa acompanha a evolução do setor e as novas tendências de mercado com o objetivo constantemente de melhoria e eficiência construtiva bem como  minimização dos impactos ambientais.</p>
                        <p>Especializada na produção, postes, mourões, fossas, entre outros, está consolidada no mercado atacadista no Estado do Rio Grande do Sul.</p>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="videos">
        <h2 class="videos__title">Veja nossa entrevista no Destaque Brasil.</h2>
        <div class="videos__item">
            <iframe type="text/html" frameborder="0" src="//youtube.com/embed/gNSJaScYJlM?rel=0&amp;showinfo=0&amp;start=0"></iframe>
        </div>
    </div>
</section>

@stop
