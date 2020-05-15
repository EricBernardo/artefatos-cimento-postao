@extends('site.layouts.master')

@section('title', 'Equipe')

@section('content')

<section>
        <div class="teams">
            <h1 class="teams__title">Conheça nossa equipe</h1>
            <div class="teams__items">
            <div class="team_item">
                    <div class="team_item__image">
                        <img src="{{URL::asset('/images/jadir-kerber.jpg')}}" alt="Jadir Kerber" />
                    </div>
                    <div class="team_item__info">
                        <h2 class="team_item__title">Jadir Kerber</h2>
                        <h3 class="team_item__description">Sócio proprietário</h3>
                    </div>
                </div>
                <div class="team_item">
                    <div class="team_item__image">
                        <img src="{{URL::asset('/images/ines-kerber.jpg')}}" alt="Inês Kerber" />
                    </div>
                    <div class="team_item__info">
                        <h2 class="team_item__title">Inês Kerber</h2>
                        <h3 class="team_item__description">Gerente administrativo</h3>
                    </div>
                </div>
                <div class="team_item">
                    <div class="team_item__image">
                        <img src="{{URL::asset('/images/patricia-e-k.jpg')}}" alt="Patricia E. K." />
                    </div>
                    <div class="team_item__info">
                        <h2 class="team_item__title">Patricia E. K.</h2>
                        <h3 class="team_item__description">Representante do serviço de atendimento ao cliente</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
