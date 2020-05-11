<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{URL::asset('/images/favicon.png')}}" />

        <title>Artefatos de cimento Portão</title>

        <link rel="stylesheet" href="{{ URL::asset('/css/app.css') . '?v=' . time() }}">

    </head>
    <body>

        <header class="header">
            <a href="/" class="logo">
                <img src="{{URL::asset('/images/logo.png')}}" />
            </a>
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
            <ul class="menu">
                <li><a href="{{ url('/') }}">Página inicial</a></li>
                <li><a href="{{ url('/produtos') }}">Produtos</a></li>
                <li><a href="{{ url('/quem-somos') }}">Quem Somos</a></li>
                <li><a href="{{ url('/equipe') }}">Equipe</a></li>
                <li><a href="{{ url('/contato') }}">Contato</a></li>
            </ul>
        </header>
