@extends('layouts.master')

@section('title', 'Home')

@section('content')

    @include('includes/banner')

    @include('includes/blocks', ['title' => 'Nossos serviços', 'results' => $services])
    
    @include('includes/form')

@stop
