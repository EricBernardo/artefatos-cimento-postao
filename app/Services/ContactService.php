<?php
namespace App\Services;

use App\Models\Contact;
use Illuminate\Support\Facades\File;

class ContactService extends DefaultService
{
    public function __construct(Contact $model)
    {
        $this->model = $model;
    }

    public function store($request) {

        $image = $this->uploadFile($request, 'contacts', 'image');

        $this->model->insert([
            'title' => $request->get('title'),
            'subtitle' => $request->get('subtitle'),
            'description' => $request->get('description'),
            'order' => $request->get('order'),
            'image' => $image,
            'status' => $request->get('status') == '1' ? true : false,
        ]);

        return redirect()
        ->route('contacts.create')
        ->with('message', 'Cadastrado com sucesso!');

    }

    public function update($request, $id) {

        $entity = $this->model->find($id);

        $data = [
            'title' => $request->get('title'),
            'subtitle' => $request->get('subtitle'),
            'description' => $request->get('description'),
            'order' => $request->get('order'),
            'status' => $request->get('status') == '1' ? true : false,
        ];

        if($request->hasFile('image')) {
            if($image = $entity['image']) {
                File::delete('storage/' . $image);
            }
            $data['image'] = $this->uploadFile($request, 'contacts', 'image');
        }

        $entity->update($data);

        return redirect()
        ->route('contacts.show', ['id' => $id])
        ->with('message', 'Atualizado com sucesso!');

    }

    public function delete($id) {

        $entity = $this->model->find($id);

        if($image = $entity['image']) {
            File::delete('storage/' . $image);
        }

        $entity->delete();

        return redirect()
        ->route('contacts.index')
        ->with('message', 'Registro excluido com sucesso!');

    }

}
