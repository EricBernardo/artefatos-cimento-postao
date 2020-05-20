<?php
namespace App\Services;

use App\Models\HomeProduct;
use Illuminate\Support\Facades\File;

class HomeProductService extends DefaultService
{
    public function __construct(HomeProduct $model)
    {
        $this->model = $model;
    }

    public function store($request) {

        $image = $this->uploadFile($request, 'home_products', 'image');

        $this->model->insert([
            'title' => $request->get('title'),
            'url' => $request->get('url'),
            'order' => $request->get('order'),
            'image' => $image,
            'status' => $request->get('status') == '1' ? true : false,
        ]);

        return redirect()
        ->route('home_products.create')
        ->with('message', 'Cadastrado com sucesso!');

    }

    public function update($request, $id) {

        $entity = $this->model->find($id);

        $data = [
            'title' => $request->get('title'),
            'url' => $request->get('url'),
            'order' => $request->get('order'),
            'status' => $request->get('status') == '1' ? true : false,
        ];

        if($request->hasFile('image')) {
            if($image = $entity['image']) {
                File::delete('storage/' . $image);
            }
            $data['image'] = $this->uploadFile($request, 'home_products', 'image');
        }

        $entity->update($data);

        return redirect()
        ->route('home_products.show', ['id' => $id])
        ->with('message', 'Atualizado com sucesso!');

    }

    public function delete($id) {

        $entity = $this->model->find($id);

        if($image = $entity['image']) {
            File::delete('storage/' . $image);
        }

        $entity->delete();

        return redirect()
        ->route('home_products.index')
        ->with('message', 'Registro excluido com sucesso!');

    }

}
