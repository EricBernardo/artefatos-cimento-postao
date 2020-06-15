<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="og:locale" content="pt_BR">

        <meta property="og:type" content="website">

        <meta name="google-site-verification" content="g-6BiY4w-I_Eg9AApeNLFOqyeRJb-C7_PNziwQMB2LI">

        @if($seo)

            <meta name="description" content="{{ $seo['description'] }}">

            <meta name="keywords" content="{{ $seo['keywords'] }}">

            <meta property="og:title" content="{{ $seo['title'] }}" />

            <meta property="og:description" content="{{ $seo['description'] }}" />

            <meta property="og:image" content="{{ URL::asset("storage/" . $seo['image']) }}" />

            <title>{{ $seo['title'] }}</title>

        @endif

        <meta property="og:url" content="{{ URL::current() }}" />

        <link rel="canonical" href="{{ URL::current() }}" />

        @if($setting)
        <meta property="og:site_name" content="{{ $setting['name_site'] }}" />
            <link rel="icon" href="{{ URL::asset('storage/' . $setting['favicon']) }}" />
        @endif

        <link rel="stylesheet" href="{{ URL::asset('/css/site/app.css?v=') . env('APP_VERSION') }}">

        

    </head>
    <body>
    
        <p style="display: none;">Poste de Luz São Sebastião do Cai, Poste de Luz Dois Irmãos, Poste de Luz Gravataí, Postes de Luz São Sebastião do Cai, Postes de Luz Montenegro, Poste de Luz Pres Lucena, Postes Luz Linha Nova, Poste Luz Carlos Barbosa, Postes de Luz Ivoti, Poste Luz Bom Principio, Postes de Luz Esteio, Postes de Luz São Chico, Postes Luz Rio Grande do Sul, Postes de Luz Parobé, Postes de Luz Pres Lucena, Postes de Luz RS, Poste Luz Campo Vicente, Poste Luz Novo Hamburgo, Postes Luz Morro Reuter, Poste Luz Ivoti, Postes Luz Sapiranga, Poste Luz Capela de Santana, Poste de Luz Portão, Postes Luz Garibaldi, Poste Luz Parobé, Postes de Luz Portão, Poste Luz Portão, Poste de Luz Capela de Santana, Postes de Luz Tupandi, Poste Luz Nova Hartz, Poste de Luz Lindolfo Collor, Postes de Luz Garibaldi, Postes de Luz Alvorada, Poste de Luz Ivoti, Postes Luz Sapucaia do Sul, Postes de Luz Nova Petrópolis, Poste Luz Canoas, Poste Luz Catupi, Poste Luz Tupandi, Postes Luz São Sebastião do Cai, Postes Luz Catupi, Postes Luz Feliz, Postes de Luz Santa Maria do Herval, Poste de Luz Parobé, Poste Luz Estância Velha, Poste de Luz Nova Hartz, Poste Luz Sapucaia do Sul, Postes Luz Santa Maria do Herval, Postes de Luz Igrejinha, Postes de Luz Gravataí, Postes de Luz Campo Bom, Postes Luz Dois Irmãos, Poste Luz Morro Reuter, Postes Luz Presidente Lucena, Postes Luz Estância Velha, Postes de Luz Triunfo, Postes Luz Nova Petrópolis, Postes Luz Carlos Barbosa, Poste de Luz RS, Poste de Luz Porto Alegre, Poste Luz Viamão, Postes Luz Bom Principio, Postes de Luz Araricá, Poste Luz Santa Maria, Postes Luz Rolante, Postes de Luz Gramado, Poste Luz São Francisco de Paula, Postes de Luz, Poste Luz Riozinho, Poste Luz Santa Maria do Herval, Postes de Luz Lindolfo Collor, Postes Luz Igrejinha, Postes de Luz Linha Nova, Poste Luz São Jerônimo, Poste de Luz Rio Grande do Sul, Poste de Luz Sapucaia do Sul, Poste de Luz Cachoeirinha, Postes Luz Santa Maria, Postes de Luz Morro Reuter, Postes de Luz Campo Vicente, Poste de Luz Rolante, Poste Luz Nova Petrópolis, Poste de Luz São Francisco de Paula, Poste de Luz Montenegro, Poste Luz Garibaldi, Postes Luz Riozinho, Postes Luz Parobé, Poste Luz Alvorada, Postes Luz Gramado, Postes de Luz Novo Hamburgo, Poste Luz Esteio, Poste de Luz São Chico, Postes Luz Capela de Santana, Postes Luz Triunfo, Poste Luz Pres Lucena, Postes Luz Nova Santa Rita, Poste de Luz Novo Hamburgo, Poste Luz Taquara, Poste de Luz Araricá, Postes de Luz Sapucaia do Sul, Poste de Luz Estância Velha, Postes de Luz Santa Maria, Postes de Luz Cachoeirinha, Poste de Luz Santa Maria, Poste Luz Caxias do Sul, Postes Luz Ivoti, Poste Luz Taquari, Postes Luz Berto Cirio, Postes Luz Canoas, Poste Luz Nova Santa Rita, Poste Luz Rio Grande do Sul, Poste de Luz Campo Bom, Postes de Luz Riozinho, Poste de Luz Sapiranga, Postes de Luz Canoas, Poste Luz Sapiranga, Poste de Luz Campo Vicente, Poste Luz Cachoeirinha, Poste Luz Araricá, Poste Luz Gravataí, Poste de Luz Garibaldi, Poste de Luz Riozinho, Poste de Luz Bom Principio, Postes Luz RS, Poste de Luz Berto Cirio, Postes Luz Taquari, Postes de Luz Bom Principio, Poste Luz, Poste Luz Berto Cirio, Postes Luz, Postes Luz Novo Hamburgo, Postes de Luz Caxias do Sul, Postes de Luz Rolante, Poste Luz Gramado, Postes de Luz Porto Alegre, Postes Luz Lindolfo Collor, Postes Luz Viamão, Postes de Luz Nova Santa Rita, Postes de Luz Carlos Barbosa, Poste de Luz Triunfo, Postes Luz Nova Hartz, Postes de Luz São Jerônimo, Poste Luz São Chico, Postes Luz Campo Bom, Postes de Luz Rio Grande do Sul, Postes Luz Pres Lucena, Poste de Luz Feliz, Poste Luz Dois Irmãos, Poste de Luz São Jerônimo, Poste Luz Montenegro, Poste Luz Campo Bom, Postes Luz Alvorada, Postes de Luz Estância Velha, Postes Luz Taquara, Postes de Luz Feliz, Postes Luz Cachoeirinha, Poste de Luz Morro Reuter, Poste de Luz Nova Santa Rita, Postes Luz Campo Vicente, Postes de Luz Dois Irmãos, Postes Luz Esteio, Postes Luz Tupandi, Poste Luz Feliz, Postes Luz São Jerônimo, Poste de Luz Caxias do Sul, Poste de Luz Viamão, Postes Luz Porto Alegre, Postes Luz Portão, Poste Luz Triunfo, Postes de Luz Capela de Santana, Postes de Luz Taquara, Postes de Luz Taquari, Poste de Luz Presidente Lucena, Poste Luz Linha Nova, Poste de Luz Esteio, Poste de Luz Nova Petrópolis, Poste de Luz Catupi, Poste Luz Igrejinha, Poste de Luz Gramado, Poste de Luz Santa Maria do Herval, Poste de Luz Alvorada, Postes Luz Caxias do Sul, Postes de Luz Presidente Lucena, Postes de Luz Viamão, Postes de Luz Berto Cirio, Poste de Luz, Poste de Luz Taquari, Postes de Luz São Francisco de Paula, Postes Luz São Chico, Postes Luz Gravataí, Postes Luz Montenegro, Poste de Luz Canoas, Poste Luz Presidente Lucena, Poste Luz RS, Poste de Luz Igrejinha, Poste de Luz Carlos Barbosa, Poste Luz Rolante, Poste Luz Lindolfo Collor, Postes de Luz Sapiranga, Poste de Luz Tupandi, Postes de Luz Catupi, Poste de Luz Linha Nova, Poste de Luz Taquara, Postes Luz Araricá, Postes de Luz Nova Hartz, Postes Luz São Francisco de Paula, Poste Luz Porto Alegre</p>

        <header class="header">
            @if($setting && $setting['logo'])
                <a href="{{ url('/') }}" class="logo">
                    <img src="{{ URL::asset('storage/' . $setting['logo']) }}" alt="{{ $setting['name_site'] }}" title="{{ $setting['name_site'] }}" />
                </a>
            @endif

            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
            <nav>
                <ul class="menu">
                    <li><a href="{{ url('/') }}">Página inicial</a></li>
                    <li><a href="{{ url('/produtos') }}">Produtos</a></li>
                    <li><a href="{{ url('/quem-somos') }}">Quem Somos</a></li>
                    <li><a href="{{ url('/equipe') }}">Equipe</a></li>
                    <li><a href="{{ url('/contato') }}">Contato</a></li>
                </ul>
            </nav>
        </header>

        <div class="container">
            @yield('content')
        </div>

        @include('site/includes/map')

        <footer class="footer">
            @if($setting && $setting['copyright'])
                <p>{{ $setting['copyright'] }}</p>
            @endif
        </footer>

        <script src="{{ URL::asset('/js/site/app.js?v=') . env('APP_VERSION') }}"></script>

         <!-- Google Tag Manager -->
        <script async>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TWZ29DW');</script>
        <!-- End Google Tag Manager -->

    </body>
</html>
