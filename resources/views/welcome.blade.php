<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{URL::asset('/images/favicon.png')}}" />

        <title>Artefatos de cimento Portão</title>

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    </head>
    <body>

        <header class="header">
            <a href="/" class="logo">
                <img src="{{URL::asset('/images/logo.png')}}" />
            </a>
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
            <ul class="menu">
                <li><a href="#work">Página inicial</a></li>
                <li><a href="#about">Produtos</a></li>
                <li><a href="#careers">Quem Somos</a></li>
                <li><a href="#contact">Equipe</a></li>
                <li><a href="#contact">Contato</a></li>
            </ul>
        </header>

        <main>
            <div class="banner">
                <img class="banner__img" src="{{URL::asset('/images/banner.jpg')}}" alt="">
                <div class="banner__text">
                    <div class="banner__title">Bem-vindo(a) a Artefatos de cimentos Portão</div>
                    <div class="banner__subtitle">Soluções em peças de concreto</div>
                </div>
            </div>
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13866.287006390055!2d-51.280084!3d-29.674199!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9b6c8edd0250cee3!2sArtefatos%20de%20Cimento%20Port%C3%A3o!5e0!3m2!1spt-BR!2sbr!4v1588943389007!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </main>

        <footer class="footer">
            Copyright © 2020 Artefatos de cimento Portão – todos os direitos reservados.
        </footer>

        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
