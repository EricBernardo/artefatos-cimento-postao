@extends('layouts.master')

@section('title', 'Contato')

@section('content')

<section>
    <div class="contact">
        <div class="contact__items">
            <div class="contact__image">
                <img src="{{URL::asset('/images/contato.jpg')}}" alt="Contato" />
            </div>
            <div class="contact__desctiption">
                <p>HORÁRIO DE ATENDIMENTO</p>
                <p>Venha nos visitar</p>
                <br/>
                <p>Seg - Qui: 08:00–11:30, 13:00–17:30</p>
                <p>Sex: 08:00–11:30, 13:00–16:30</p>
                <p>Sáb: 08:00–11:30</p>
                <p>Dom: fechado</p>
            </div>
        </div>
    </div>
</section>

@include('includes/form')

@stop
