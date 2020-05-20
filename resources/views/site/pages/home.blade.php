@extends('site.layouts.master')

@section('title', 'Home')

@section('content')

    @include('site/includes/banner', ['banner' => $banner])

    @include('site/includes/blocks', ['title' => 'Nossos serviços', 'results' => $services])

    @include('site/includes/form')

@stop
