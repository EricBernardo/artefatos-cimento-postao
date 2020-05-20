<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use App\Services\SeoService;
use App\Services\SettingService;

class ProductController extends Controller
{

    private $serviceProduct;
    private $serviceSetting;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        ProductService $serviceProduct,
        SettingService $serviceSetting,
        SeoService $serviceSeo
    )
    {

        $this->serviceProduct = $serviceProduct;
        $this->serviceSetting = $serviceSetting;
        $this->serviceSeo = $serviceSeo;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = $this->serviceProduct->all();
        $setting = $this->serviceSetting->first();
        $seo = $this->serviceSeo->getSeo();
        return view('site/pages/products', compact(
            'setting',
            'products',
            'seo'
        ));
    }
}
