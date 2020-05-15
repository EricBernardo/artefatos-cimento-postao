<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="og:locale" content="pt_BR">

        <meta name="description" content="A Artefatos de Cimento Portão produz peças de concreto aliando tecnologia e rigoroso controle para satisfazer as necessidades dos seus clientes.">

        <meta name="keywords" content="postes, rge, concreto, luz, fossa, filtros, sumidouros">

        <meta property="og:type" content="website" />

        <meta property="og:title" content="@yield('title') | Artefatos de cimento Portão" />

        <meta property="og:description" content="A Artefatos de Cimento Portão produz peças de concreto aliando tecnologia e rigoroso controle para satisfazer as necessidades dos seus clientes." />

        <meta property="og:image" content="{{ URL::current() }}" />

        <meta property="og:url" content="{{ URL::current() }}" />

        <meta property="og:site_name" content="Artefatos de cimento Portão" />

        <link rel="canonical" href="{{ URL::current() }}" />

        <link rel="icon" href="{{URL::asset('/images/favicon.png')}}" />

        <title>@yield('title') | Artefatos de cimento Portão</title>

        <link rel="stylesheet" href="{{ URL::asset('/css/site/app.css') }}">

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TWZ29DW');</script>
        <!-- End Google Tag Manager -->

    </head>
    <body>

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TWZ29DW"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <header class="header">
            <a href="/" class="logo">
                <img src="{{URL::asset('/images/logo.png')}}" alt="Artefatos de cimento Portão" />
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

        <div class="container">
            @yield('content')
        </div>

        @include('site/includes/map')

        <footer class="footer">
            Copyright © 2020 Artefatos de cimento Portão – todos os direitos reservados.
        </footer>

        <script src="{{ URL::asset('/js/site/app.js') }}"></script>
    </body>
</html>
