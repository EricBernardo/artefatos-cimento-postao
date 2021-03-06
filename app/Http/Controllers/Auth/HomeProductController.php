<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\HomeProductRequestStore;
use App\Http\Requests\HomeProductRequestUpdate;
use App\Services\HomeProductService;

class HomeProductController extends Controller
{

    private $service;

    public function __construct(HomeProductService $service)
    {
        $this->middleware('auth');
        $this->service = $service;
    }

    public function index()
    {
        $items = $this->service->paginate();
        return view('admin/pages/home_product/index', compact('items'));
    }

    public function create()
    {
        return view('admin/pages/home_product/create');
    }

    public function store(HomeProductRequestStore $request)
    {
        return $this->service->store($request);
    }

    public function show($id)
    {
        $item = $this->service->find($id);
        return view('admin/pages/home_product/show', compact('item'));
    }

    public function update(HomeProductRequestUpdate $request, $id)
    {
        return $this->service->update($request, $id);
    }

    public function delete($id)
    {
        return $this->service->delete($id);
    }
}
