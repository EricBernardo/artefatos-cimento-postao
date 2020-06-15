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
    
        <p style="display: none;">Postes Luz Portão, Poste Padrão RGE São Chico, Poste de Luz Padrão RGE Caxias do Sul, Poste Padrão Preço Capela de Santan, Poste de Luz Padrão RGE Preço Sapucaia do Sul, Poste Luz Feliz, Postes Luz Presidente Lucena, Poste Padrão Preço Catupi, Postes de Luz Ivoti, Poste de Energia Igrejinha, Poste Padrão Preço Nova Petrópolis, Poste de Luz Sapiranga, Poste de Energia Alvorada, Poste Luz Pres Lucena, Postes Luz RS, Poste de Energia Sapucaia do Sul, Poste Padrão Preço Sapucaia do Sul, Postes Luz Sapiranga, Postes Luz Estância Velha, Poste de Luz Padrão RGE Preço São Jerônimo, Poste de Luz Igrejinha, Postes Luz Canoas, Poste Padrão Preço Rolante, Poste Luz Tupandi, Poste de Energia Nova Hartz, Poste de Luz Padrão RGE Preço RS, Poste de Energia Porto Alegre, Poste Padrão Preço Alvorada, Postes Luz Dois Irmãos, Poste Padrão Preço Campo Bom, Poste Padrão Preço Viamão, Poste de Luz Morro Reuter, Poste de Luz Parobé, Poste Padrão RGE Nova Hartz, Poste de Luz Canoas, Poste de Energia Santa Maria, Poste Padrão Preço Garibaldi, Poste de Luz Nova Petrópolis, Poste Luz Rio Grande do Sul, Poste Padrão RGE Garibaldi, Poste de Energia Esteio, Poste de Luz Padrão RGE Gravataí, Poste de Luz Linha Nova, Poste de Luz Estância Velha, Postes Luz Gravataí, Poste Padrão Preço Cachoeirinha, Poste de Luz Padrão RGE Preço Feliz, Postes Luz Araricá, Poste de Luz Padrão RGE Sapiranga, Poste de Luz Gravataí, Postes de Luz São Chico, Postes Luz Santa Maria do Herval, Poste Padrão RGE Pres Lucena, Poste Padrão RGE Sapucaia do Sul, Poste de Luz Padrão RGE Cachoeirinha, Poste Luz Santa Maria do Herval, Poste Padrão Preço Bom Principio, Poste de Luz São Jerônimo, Poste Padrão RGE Nova Santa Rita, Poste Luz Presidente Lucena, Poste Padrão Preço Portão, Poste Padrão RGE Linha Nova, Poste de Luz Sapucaia do Sul, Poste de Luz Padrão RGE Preço Caxias do Sul, Poste Padrão RGE Carlos Barbosa, Poste de Luz RS, Poste Padrão Preço Feliz, Poste de Energia Nova Petrópolis, Postes de Luz Sapiranga, Poste Padrão RGE Viamão, Poste Luz Nova Petrópolis, Postes de Luz Nova Petrópolis, Poste de Energia Parobé, Poste de Luz Padrão RGE Preço Linha Nova, Postes de Luz Taquara, Poste de Energia Ivoti, Poste Luz Porto Alegre, Poste Padrão RGE Ivoti, Postes de Luz Pres Lucena, Postes de Luz RS, Poste de Energia Cachoeirinha, Postes Luz Sapucaia do Sul, Postes de Luz Campo Vicente, Poste de Luz Garibaldi, Poste Padrão Preço Igrejinha, Poste de Luz Montenegro, Poste Luz Catupi, Poste de Luz Padrão RGE Dois Irmãos, Poste Luz Berto Cirio, Poste Padrão Preço Araricá, Poste de Luz Padrão RGE Santa Maria, Postes de Luz, Postes de Luz Tupandi, Poste Padrão Preço Ivoti, Poste de Luz Padrão RGE Preço Morro Reuter, Poste de Luz Padrão RGE Preço Garibaldi, Poste de Luz Padrão RGE Capela de Santan, Poste de Luz Padrão RGE Preço Nova Hartz, Poste Padrão Preço Carlos Barbosa, Poste Padrão RGE Araricá, Poste de Luz Padrão RGE Novo Hamburgo, Poste Padrão RGE Triunfo, Poste de Energia Linha Nova, Poste Padrão RGE Dois Irmãos, Poste de Luz Padrão RGE Preço Catupi, Poste de Luz Padrão RGE Preço Lindolfo Collor, Poste Padrão Preço Nova Hartz, Poste Padrão RGE Bom Principio, Poste de Luz Padrão RGE Nova Hartz, Poste de Luz Padrão RGE Preço Novo Hamburgo, Poste de Luz Padrão RGE Preço Campo Vicente, Postes Luz Bom Principio, Poste de Luz Alvorada, Poste de Luz Caxias do Sul, Poste de Luz Padrão RGE Preço Rio Grande do Sul, Poste de Luz Padrão RGE Morro Reuter, Poste de Luz Padrão RGE Preço Cachoeirinha, Poste Padrão Preço São Chico, Poste de Luz Padrão RGE Preço Nova Santa Rita, Poste de Luz Padrão RGE Gramado, Poste de Luz Padrão RGE São Sebastião do Cai, Poste Padrão RGE RS, Postes de Luz Estância Velha, Postes Luz Alvorada, Postes Luz Garibaldi, Poste de Energia Sapiranga, Poste de Energia Campo Vicente, Poste de Luz Padrão RGE Preço Capela de Santan, Poste Padrão RGE Porto Alegre, Postes de Luz Presidente Lucena, Poste Padrão Preço Santa Maria do Herval, Poste de Luz Padrão RGE Preço São Sebastião do Cai, Poste Padrão Preço Dois Irmãos, Poste de Luz Padrão RGE Preço Estância Velha, Poste Padrão RGE Montenegro, Postes Luz Rio Grande do Sul, Poste Padrão RGE Sapiranga, Poste de Luz Taquara, Poste Padrão RGE Capela de Santan, Poste Padrão RGE Lindolfo Collor, Poste de Luz Viamão, Poste Luz Gramado, Poste de Energia Nova Santa Rita, Poste Padrão RGE Cachoeirinha, Poste Padrão Preço Nova Santa Rita, Poste de Luz Padrão RGE Alvorada, Postes de Luz Rio Grande do Sul, Postes Luz Caxias do Sul, Postes de Luz Dois Irmãos, Poste Luz São Jerônimo, Poste Padrão Preço Santa Maria, Poste de Luz Padrão RGE Preço Portão, Poste de Luz Rio Grande do Sul, Poste Luz Sapucaia do Sul, Poste de Luz Esteio, Poste de Luz Ivoti, Poste Luz Triunfo, Poste de Luz Padrão RGE Nova Petrópolis, Poste Padrão Preço Gramado, Poste Padrão Preço Parobé, Postes Luz Riozinho, Poste Padrão RGE Estância Velha, Poste Padrão RGE Gramado, Poste de Luz Feliz, Poste de Luz Padrão RGE Viamão, Poste Padrão RGE Esteio, Poste Padrão RGE Igrejinha, Poste de Luz Taquari, Poste Padrão RGE Riozinho, Poste Luz Esteio, Postes de Luz Gramado, Postes de Luz Riozinho, Poste de Luz Nova Hartz, Poste Luz Nova Santa Rita, Postes Luz Montenegro, Postes Luz Tupandi, Poste de Energia Portão, Poste de Luz Padrão RGE São Francisco de Paula, Poste de Luz Padrão RGE Garibaldi, Postes de Luz Capela de Santana, Poste de Luz Padrão RGE Riozinho, Postes de Luz Canoas, Poste de Luz Cachoeirinha, Poste Padrão Preço Campo Vicente, Poste de Luz Santa Maria do Herval, Poste Padrão RGE Nova Petrópolis, Poste de Luz Padrão RGE Preço Carlos Barbosa, Poste de Luz Padrão RGE Campo Bom, Postes de Luz Igrejinha, Poste Padrão RGE Morro Reuter, Poste Padrão Preço Canoas, Postes de Luz Berto Cirio, Poste Padrão Preço Presidente Lucena, Postes Luz Morro Reuter, Poste de Luz Padrão RGE Campo Vicente, Poste de Energia Capela de Santan, Poste Luz Santa Maria, Poste de Energia Novo Hamburgo, Poste de Luz Berto Cirio, Poste de Luz Padrão RGE Preço Sapiranga, Poste de Luz Padrão RGE Preço São Chico, Poste Padrão Preço Triunfo, Poste de Luz Padrão RGE Preço Bom Principio, Postes Luz Carlos Barbosa, Poste Luz São Sebastião do Cai, Poste Padrão Preço Pres Lucena, Poste de Luz São Francisco de Paula, Poste Luz Portão, Poste Padrão RGE Alvorada, Postes de Luz Catupi, Poste de Luz Araricá, Postes Luz Nova Santa Rita, Poste de Energia Rolante, Poste de Luz Padrão RGE Montenegro, Poste de Luz Padrão RGE Pres Lucena, Poste de Luz Padrão RGE Preço Tupandi, Poste de Luz Padrão RGE Berto Cirio, Poste de Luz Lindolfo Collor, Poste de Luz Padrão RGE Triunfo, Postes Luz Cachoeirinha, Poste de Luz Padrão RGE Preço Esteio, Poste de Energia Triunfo, Poste Padrão Preço Morro Reuter, Poste de Luz São Chico, Poste Padrão RGE Santa Maria, Poste de Energia Bom Principio, Postes de Luz Morro Reuter, Postes de Luz Garibaldi, Postes de Luz Viamão, Poste de Luz Padrão RGE Nova Santa Rita, Poste de Energia Tupandi, Poste Luz Parobé, Poste Padrão RGE Gravataí, Poste Padrão Preço Porto Alegre, Poste de Luz Padrão RGE Rio Grande do Sul, Poste de Energia São Sebastião do Cai, Poste de Luz Padrão RGE Preço Gramado, Poste Luz Cachoeirinha, Poste de Luz Padrão RGE Estância Velha, Poste de Energia Taquari, Poste Padrão RGE Campo Bom, Postes Luz Campo Bom, Poste de Luz Triunfo, Poste Padrão Preço Lindolfo Collor, Poste de Luz Padrão RGE Preço Santa Maria, Poste Luz Ivoti, Poste Padrão RGE Rolante, Postes de Luz Sapucaia do Sul, Poste de Energia Santa Maria do Herval, Poste de Luz Padrão RGE Canoas, Poste de Luz Padrão RGE Preço Dois Irmãos, Postes de Luz Portão, Poste Luz Canoas, Poste de Luz Padrão RGE Preço Presidente Lucena, Postes de Luz Carlos Barbosa, Poste de Luz Padrão RGE Taquara, Poste de Energia Carlos Barbosa, Poste de Energia São Jerônimo, Postes de Luz Lindolfo Collor, Poste Luz São Francisco de Paula, Postes Luz Esteio, Poste de Energia Riozinho, Poste de Luz Padrão RGE Ivoti, Poste Luz Campo Bom, Poste de Luz Padrão RGE Portão, Poste de Luz Padrão RGE Catupi, Poste de Luz Padrão RGE Parobé, Postes Luz Campo Vicente, Poste de Energia Dois Irmãos, Postes Luz, Poste de Luz Padrão RGE Preço Berto Cirio, Poste de Luz Padrão RGE Sapucaia do Sul, Poste Padrão Preço Riozinho, Poste de Luz Padrão RGE Preço Alvorada, Poste de Luz Padrão RGE Tupandi, Poste Luz Lindolfo Collor, Poste de Luz Padrão RGE São Jerônimo, Poste de Luz Padrão RGE Preço Igrejinha, Poste Luz Bom Principio, Poste de Luz Padrão RGE Igrejinha, Postes de Luz Porto Alegre, Poste de Luz, Postes Luz São Sebastião do Cai, Poste de Energia Gravataí, Poste Luz Estância Velha, Postes Luz Linha Nova, Poste Luz Araricá, Poste Padrão RGE Campo Vicente, Poste de Luz Padrão RGE Preço Nova Petrópolis, Poste de Energia Berto Cirio, Poste de Luz Padrão RGE Preço Santa Maria do Herval, Poste de Luz Porto Alegre, Poste Padrão Preço Esteio, Postes de Luz Taquari, Poste de Luz Bom Principio, Poste Padrão RGE Caxias do Sul, Poste de Luz Padrão RGE São Chico, Postes de Luz Linha Nova, Poste Padrão Preço RS, Postes de Luz Novo Hamburgo, Poste de Luz Riozinho, Poste Padrão Preço Berto Cirio, Poste Padrão Preço São Francisco de Paula, Poste de Luz Padrão RGE Presidente Lucena, Postes de Luz São Sebastião do Cai, Poste Luz São Chico, Postes Luz Lindolfo Collor, Poste de Energia Araricá, Poste de Luz Padrão RGE RS, Poste de Luz Padrão RGE Preço Parobé, Poste de Luz Nova Santa Rita, Poste de Luz Carlos Barbosa, Poste Padrão RGE Portão, Postes Luz Ivoti, Postes de Luz Bom Principio, Poste Padrão RGE Parobé, Poste Luz Campo Vicente, Postes de Luz Campo Bom, Poste de Energia RS, Postes de Luz Caxias do Sul, Poste Luz Garibaldi, Poste de Energia São Chico, Postes de Luz Gravataí, Poste de Luz Padrão RGE Preço Campo Bom, Poste Padrão RGE Novo Hamburgo, Poste Padrão RGE Presidente Lucena, Postes Luz Porto Alegre, Poste Luz Taquari, Postes de Luz Montenegro, Poste de Luz Tupandi, Poste Luz Morro Reuter, Poste Luz Caxias do Sul, Poste Luz Montenegro, Poste de Energia Estância Velha, Poste Padrão Preço Montenegro, Poste Luz Rolante, Postes de Luz Rolante, Poste de Luz Padrão RGE Bom Principio, Poste Luz Carlos Barbosa, Poste de Energia Montenegro, Postes de Luz Triunfo, Postes Luz Nova Petrópolis, Postes de Luz Feliz, Poste de Luz Padrão RGE Preço Taquari, Poste Padrão Preço Gravataí, Poste de Luz Presidente Lucena, Postes Luz Rolante, Poste de Luz Catupi, Poste de Luz Padrão RGE Preço Araricá, Poste Padrão Preço São Jerônimo, Poste Luz Taquara, Postes Luz Taquara, Poste de Luz Padrão RGE Esteio, Poste de Luz Rolante, Poste de Luz Padrão RGE Preço Viamão, Postes de Luz Santa Maria, Poste de Energia Lindolfo Collor, Poste de Energia Campo Bom, Poste de Energia Morro Reuter, Poste Padrão RGE Santa Maria do Herval, Poste de Luz Padrão RGE Lindolfo Collor, Poste de Luz Padrão RGE Preço Rolante, Poste de Energia Canoas, Postes Luz Taquari, Poste de Luz Padrão RGE Carlos Barbosa, Poste Luz Viamão, Postes Luz Novo Hamburgo, Poste de Energia Presidente Lucena, Poste Luz Riozinho, Postes Luz Capela de Santana, Poste de Energia Garibaldi, Postes de Luz Nova Hartz, Poste Padrão Preço Linha Nova, Poste de Luz Novo Hamburgo, Poste Luz Linha Nova, Poste de Luz Padrão RGE Preço Porto Alegre, Postes Luz Pres Lucena, Poste de Luz Portão, Poste Luz, Poste Padrão RGE Taquari, Poste de Luz Padrão RGE Preço Triunfo, Postes de Luz São Francisco de Paula, Poste de Energia Gramado, Poste Padrão RGE Tupandi, Postes Luz Feliz, Postes Luz São Jerônimo, Poste de Luz Padrão RGE Preço Canoas, Postes Luz Catupi, Postes de Luz Esteio, Poste de Luz Padrão RGE Santa Maria do Herval, Poste Luz Igrejinha, Postes Luz São Chico, Poste Padrão Preço Tupandi, Postes Luz Gramado, Postes Luz Parobé, Poste Padrão RGE Berto Cirio, Poste Padrão RGE São Francisco de Paula, Poste de Luz Santa Maria, Postes de Luz Alvorada, Postes de Luz Araricá, Postes Luz São Francisco de Paula, Postes de Luz Parobé, Poste de Luz Padrão RGE Linha Nova, Postes Luz Igrejinha, Postes de Luz Santa Maria do Herval, Poste de Luz Gramado, Poste Padrão RGE São Sebastião do Cai, Poste Padrão Preço São Sebastião do Cai, Poste Padrão RGE Catupi, Poste de Luz Padrão RGE Preço São Francisco de Paula, Poste Padrão Preço Caxias do Sul, Poste de Energia Pres Lucena, Poste de Energia Catupi, Poste de Luz Capela de Santana, Poste Luz Gravataí, Poste de Luz Padrão RGE Rolante, Poste de Energia Feliz, Poste Luz Capela de Santana, Postes Luz Berto Cirio, Poste Padrão Preço Taquara, Postes de Luz Nova Santa Rita, Poste Luz RS, Poste de Luz Padrão RGE Taquari, Postes de Luz Cachoeirinha, Poste de Luz Padrão RGE Preço Montenegro, Poste Padrão RGE São Jerônimo, Poste de Luz Padrão RGE Preço Pres Lucena, Postes Luz Triunfo, Postes de Luz São Jerônimo, Poste Padrão RGE Rio Grande do Sul, Poste Luz Sapiranga, Poste Padrão RGE Taquara, Poste Padrão Preço Novo Hamburgo, Poste de Luz Campo Vicente, Poste de Luz Campo Bom, Postes Luz Santa Maria, Poste de Energia São Francisco de Paula, Poste de Energia Rio Grande do Sul, Poste Luz Alvorada, Poste de Luz Padrão RGE Araricá, Poste Padrão RGE Feliz, Poste Luz Dois Irmãos, Poste Padrão Preço Rio Grande do Sul, Poste de Luz Padrão RGE Porto Alegre, Poste Luz Novo Hamburgo, Poste de Energia Caxias do Sul, Poste de Energia Taquara, Poste de Luz Padrão RGE Preço Ivoti, Poste de Luz São Sebastião do Cai, Poste de Luz Padrão RGE Feliz, Poste de Luz Dois Irmãos, Poste de Luz Padrão RGE Preço Riozinho, Postes Luz Viamão, Poste Luz Nova Hartz, Postes Luz Nova Hartz, Poste de Luz Pres Lucena, Poste Padrão Preço Sapiranga, Poste Padrão RGE Canoas, Poste Padrão Preço Taquari, Poste de Luz Padrão RGE Preço Gravataí, Poste Padrão Preço Estância Velha, Poste de Luz Padrão RGE Preço Taquara, Poste de Energia Viamão</p>

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
