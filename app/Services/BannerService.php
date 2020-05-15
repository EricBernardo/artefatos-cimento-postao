<?php
namespace App\Services;

use App\Models\Banner;
use Illuminate\Support\Facades\File;

class BannerService extends DefaultService
{
    public function __construct(Banner $model)
    {
        $this->model = $model;
    }

    public function store($request) {

        $image = $this->uploadFile($request, 'banners', 'image');

        $image_mobile = $this->uploadFile($request, 'banners', 'image_mobile');

        $this->model->insert([
            'title' => $request->get('title'),
            'subtitle' => $request->get('subtitle'),
            'image' => $image,
            'image_mobile' => $image_mobile,
            'status' => $request->get('status') == '1' ? true : false,
        ]);

        return redirect()
        ->route('banners.create')
        ->with('message', 'Cadastrado com sucesso!');;

    }

    public function update($request, $id) {

        $entity = $this->model->find($id);

        $data = [
            'title' => $request->get('title'),
            'subtitle' => $request->get('subtitle'),
            'status' => $request->get('status') == '1' ? true : false,
        ];

        if($request->hasFile('image')) {
            if($image = $entity['image']) {
                File::delete($image);
            }
            $data['image'] = $this->uploadFile($request, 'banners', 'image');
        }

        if($request->hasFile('image_mobile')) {
            if($image_mobile = $entity['image_mobile']) {
                File::delete($image);
            }
            $data['image_mobile'] = $this->uploadFile($request, 'banners', 'image_mobile');
        }

        $entity->update($data);

        return redirect()
        ->route('banners.show', ['id' => $id])
        ->with('message', 'Atualizado com sucesso!');

    }

}
