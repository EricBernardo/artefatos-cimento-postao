<?php

namespace App\Http\Controllers;

use App\Services\BannerService;
use App\Services\SeoService;
use App\Services\ServiceService;
use App\Services\SettingService;

class HomeController extends Controller
{

    private $serviceService;
    private $serviceBanner;
    private $serviceSetting;
    private $serviceSeo;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        ServiceService $serviceService,
        BannerService $serviceBanner,
        SettingService $serviceSetting,
        SeoService $serviceSeo
    ) {

        $this->serviceService = $serviceService;
        $this->serviceBanner = $serviceBanner;
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
        $banner = $this->serviceBanner->first();
        $setting = $this->serviceSetting->first();
        $services = $this->serviceService->all();
        $seo = $this->serviceSeo->getSeo();
        return view('site/pages/home', compact(
            'setting',
            'services',
            'banner',
            'seo'
        ));
    }
}
