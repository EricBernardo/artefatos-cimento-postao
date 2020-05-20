<?php
namespace App\Services;

use App\Models\About;
use Illuminate\Support\Facades\File;

class AboutService extends DefaultService
{
    public function __construct(About $model)
    {
        $this->model = $model;
    }

    public function store($request) {

        $image = $this->uploadFile($request, 'abouts', 'image');

        $this->model->insert([
            'description' => $request->get('description'),
            'link_youtube' => $request->get('link_youtube'),
            'order' => $request->get('order'),
            'image' => $image,
            'status' => $request->get('status') == '1' ? true : false,
        ]);

        return redirect()
        ->route('abouts.create')
        ->with('message', 'Cadastrado com sucesso!');

    }

    public function update($request, $id) {

        $entity = $this->model->find($id);

        $data = [
            'description' => $request->get('description'),
            'link_youtube' => $request->get('link_youtube'),
            'order' => $request->get('order'),
            'status' => $request->get('status') == '1' ? true : false,
        ];

        if($request->hasFile('image')) {
            if($image = $entity['image']) {
                File::delete('storage/' . $image);
            }
            $data['image'] = $this->uploadFile($request, 'abouts', 'image');
        }

        $entity->update($data);

        return redirect()
        ->route('abouts.show', ['id' => $id])
        ->with('message', 'Atualizado com sucesso!');

    }

    public function delete($id) {

        $entity = $this->model->find($id);

        if($image = $entity['image']) {
            File::delete('storage/' . $image);
        }

        $entity->delete();

        return redirect()
        ->route('abouts.index')
        ->with('message', 'Registro excluido com sucesso!');

    }

}
