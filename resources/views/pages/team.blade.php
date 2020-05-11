@extends('layouts.master')

@section('title', 'Equipe')

@section('content')

<section>
        <div class="teams">
            <div class="teams__title">Conheça nossa equipe</div>
            <div class="teams__items">
            <div class="team_item">
                    <div class="team_item__image">
                        <img src="{{URL::asset('/images/jadir-kerber.jpg')}}" alt="Jadir Kerber" />
                    </div>
                    <div class="team_item__info">
                        <div class="team_item__title">
                            Jadir Kerber
                        </div>
                        <div class="team_item__description">
                            Sócio proprietário
                        </div>
                    </div>
                </div>
                <div class="team_item">
                    <div class="team_item__image">
                        <img src="{{URL::asset('/images/ines-kerber.jpg')}}" alt="Inês Kerber" />
                    </div>
                    <div class="team_item__info">
                        <div class="team_item__title">
                            Inês Kerber
                        </div>
                        <div class="team_item__description">
                        Gerente administrativo
                        </div>
                    </div>
                </div>
                <div class="team_item">
                    <div class="team_item__image">
                        <img src="{{URL::asset('/images/patricia-e-k.jpg')}}" alt="Patricia E. K." />
                    </div>
                    <div class="team_item__info">
                        <div class="team_item__title">
                            Patricia E. K.
                        </div>
                        <div class="team_item__description">
                            Representante do serviço de atendimento ao cliente
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
