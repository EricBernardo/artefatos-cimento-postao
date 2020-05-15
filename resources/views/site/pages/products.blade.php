@extends('site.layouts.master')

@section('title', 'Produtos')

@section('content')

@include('site/includes/blocks', ['title' => 'Produtos', 'results' => $products])

@stop
