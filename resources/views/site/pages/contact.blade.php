@extends('site.layouts.master')

@section('title', 'Contato')

@section('content')

<section>
    <div class="contact">
        <div class="contact__items">
            @if($contact)
                <div class="contact__image">
                    <img src="{{ URL::asset('storage/' . $contact['image']) }}" alt="{{ $contact['title'] }}" title="{{ $contact['title'] }}" />
                </div>
                <div class="contact__desctiption">
                    <h1>{{ $contact['title'] }}</h1>
                    <p>{{ $contact['subtitle'] }}</p>
                    <br/>
                    <p>{!! nl2br($contact['description']) !!}</p>
                </div>
            @endif
        </div>
    </div>
</section>

@include('site/includes/form')

@stop
