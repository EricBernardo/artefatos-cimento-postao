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
            <div class="services">
                <div class="services__title">Nossos serviços</div>                
                <div class="services__items">
                <div class="service_item">
                        <div class="service_item__image">
                            <img src="https://img1.wsimg.com/isteam/ip/8313ace8-7b24-46cb-894d-a1736efeb262/poste%204%20caixas.jpg/:/cr=t:39.78%25,l:0%25,w:100%25,h:37.31%25/rs=w:600,h:300,cg:true" />
                        </div>
                        <div class="service_item__info">
                            <div class="service_item__title">
                                Entrega agendada
                            </div>
                            <div class="service_item__description">
                            Ao trabalhar com o(a) Artefatos cimento portão, nossos clientes experimentam um nível de profissionalismo exemplar. Todos os nossos serviços, este em particular, foram criados para facilitar a sua vida. Você pode contar conosco para encontrar os melhores produtos do mercado, assim como um serviço de atendimento ao consumidor da mais alta qualidade.
                            </div>
                        </div>
                    </div>
                    <div class="service_item">                        
                        <div class="service_item__image">
                            <img src="https://img1.wsimg.com/isteam/ip/8313ace8-7b24-46cb-894d-a1736efeb262/20170802_184823.jpg/:/cr=t:32.43%25,l:0%25,w:100%25,h:67.57%25/rs=w:600,h:300,cg:true" />
                        </div>
                        <div class="service_item__info">
                            <div class="service_item__title">
                                Consulta para compras
                            </div>
                            <div class="service_item__description">
                            Este é um dos nossos serviços mais populares. Fez uma grande diferença para muitos de nossos clientes, e é oferecido no mais alto nível de excelência. Com ele, asseguramos que todos os detalhes sejam simples, dinâmicos e executados em tempo útil. Sempre que trabalhar com o(a) Artefatos cimento portão, você pode confiar que estará em ótimas mãos.
                            </div>
                        </div>                        
                    </div>
                    <div class="service_item">
                        <div class="service_item__image">
                            <img src="https://img1.wsimg.com/isteam/ip/8313ace8-7b24-46cb-894d-a1736efeb262/22555540_411363052612301_7410273569016788009_o.jpg/:/rs=w:600,h:300,cg:true,m/cr=w:600,h:300" />
                        </div>
                        <div class="service_item__info">
                            <div class="service_item__title">
                                Atendimento ao cliente
                            </div>
                            <div class="service_item__description">
                                Utilizado pela maioria dos clientes, esse serviço é um dos responsáveis pelo nosso sucesso. Todos os nossos serviços são de alta qualidade, e pode contar conosco para cuidar de tudo o que você precisar. Temos orgulho do excelente serviço de atendimento ao cliente que fornecemos, e garantimos a sua satisfação total no tratamento oferecido por nossa equipe. Basta entrar em contato para saber como podemos te ajudar.
                            </div>
                        </div>
                    </div>
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
