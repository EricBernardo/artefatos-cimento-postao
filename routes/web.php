<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $services = [
        [
            'title' => 'Entrega agendada',
            'description' => 'Ao trabalhar com o(a) Artefatos cimento portão, nossos clientes experimentam um nível de profissionalismo exemplar. Todos os nossos serviços, este em particular, foram criados para facilitar a sua vida. Você pode contar conosco para encontrar os melhores produtos do mercado, assim como um serviço de atendimento ao consumidor da mais alta qualidade.',
            'image' => 'entrega-agendada.jpg'
        ],
        [
            'title' => 'Consulta para compras',
            'description' => 'Este é um dos nossos serviços mais populares. Fez uma grande diferença para muitos de nossos clientes, e é oferecido no mais alto nível de excelência. Com ele, asseguramos que todos os detalhes sejam simples, dinâmicos e executados em tempo útil. Sempre que trabalhar com o(a) Artefatos cimento portão, você pode confiar que estará em ótimas mãos.',
            'image' => 'consulta-para-compras.jpg'
        ],
        [
            'title' => 'Atendimento ao cliente',
            'description' => 'Utilizado pela maioria dos clientes, esse serviço é um dos responsáveis pelo nosso sucesso. Todos os nossos serviços são de alta qualidade, e pode contar conosco para cuidar de tudo o que você precisar. Temos orgulho do excelente serviço de atendimento ao cliente que fornecemos, e garantimos a sua satisfação total no tratamento oferecido por nossa equipe. Basta entrar em contato para saber como podemos te ajudar',
            'image' => 'atendimento-ao-cliente.jpg'
        ]
    ];
    return view('pages/home', compact('services'));
});

Route::get('/produtos', function () {
    $products =
        [
            [
                'title' => 'Postes',
                'description' => 'A Artefatos de Cimento Portão produz postes de concreto armado padrão CEEE – RGE – AESSUL dentro dos novos padrões de entrada de energia para baixa tensão.',
                'image' => 'postes.jpg'
            ],
            [
                'title' => 'Fossas',
                'description' => 'Produzimos Fossas para o tratamento de esgoto através de sistema biológico onde a velocidade e a permanência do fluido na fossa permitem a separação da fração sólida do líquido, proporcionando digestão limitada da matéria orgânica e acúmulo dos sólidos.',
                'image' => 'fossas.jpg'
            ],
            [
                'title' => 'Filtros',
                'description' => 'Produzimos Filtros Anaeróbicos que são destinados a filtragem do esgoto após sua passagem pela fossa. A filtragem se da através da alimentação e percolação contínua de esgotos através de um sistema interno de pedras ou pedregulhos promovendo o crescimento e a aderência de massa biológica realizando assim a clarificação dos esgotos.',
                'image' => 'filtros.jpg'
            ],
            [
                'title' => 'Sumidouros',
                'description' => 'Produzimos Sumidouros que são unidades capazes de receber a parte líquida proveniente das fossas sépticas e têm a função de permitir sua infiltração no solo.',
                'image' => 'sumidouros.jpg'
            ]
        ];

    return view('pages/products', compact('products'));
});

Route::get('/quem-somos', function () {
    return view('pages/about');
});

Route::get('/equipe', function () {
    return view('pages/team');
});

Route::get('/contato', function () {
    return view('pages/contact');
});

Route::get('sitemap', function () {

    // create new sitemap object
    $sitemap = App::make('sitemap');

    $sitemap->setCache('laravel.sitemap', 60);

    if (!$sitemap->isCached()) {

        $date = Carbon::now();

        $sitemap->add(URL::to('/'), $date, '1.0', 'daily');
        $sitemap->add(URL::to('produtos'), $date, '0.9', 'monthly');
        $sitemap->add(URL::to('quem-somos'), $date, '0.9', 'monthly');
        $sitemap->add(URL::to('equipe'), $date, '0.9', 'monthly');
        $sitemap->add(URL::to('contato'), $date, '0.9', 'monthly');

    }

    return $sitemap->render('xml');
});

Auth::routes();

Route::get('admin/banners', 'BannerController@index')->name('banners.index');
Route::get('admin/banners/create', 'BannerController@create')->name('banners.create');
Route::post('admin/banners/store', 'BannerController@store')->name('banners.store');
Route::get('admin/banners/show/{id}', 'BannerController@show')->name('banners.show');
Route::put('admin/banners/update/{id}', 'BannerController@update')->name('banners.update');
