@extends('layouts.master')

@section('title', 'Produtos')

@section('content')

@include('includes/blocks', ['title' => 'Produtos', 'results' => $products])

@stop
