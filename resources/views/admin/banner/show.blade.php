@extends('admin.layouts.container')

@section('title', 'Editar Banner')

@section('content_show_store')

<form role="form"
    action="{{ route('banners.update', ['id' => $item['id']]) }}"
    method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
        <label for="inputTitle">Título</label>
        <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Título"
            value="{{ $item['title'] }}">
    </div>
    <div class="form-group">
        <label for="inputSubTitle">Subtítulo</label>
        <input type="text" name="subtitle" class="form-control" id="inputSubTitle" placeholder="SubTítulo"
            value="{{ $item['subtitle'] }}">
    </div>
    <div class="form-group">
        <label for="inputImagem">Imagem</label>
        <div class="input-group">
            <div class="custom-file">
                <input type="file" name="image" id="inputImage">
            </div>
        </div>
        <img height="200px"
            src="{{ url("storage/{$item['image']}") }}"
            alt="{{ $item['title'] }}" />
    </div>
    <div class="form-group">
        <label for="inputImageMobile">Imagem mobile</label>
        <div class="input-group">
            <div class="custom-file">
                <input type="file" name="image_mobile" id="inputImageMobile">
            </div>
        </div>
        <img height="200px"
            src="{{ url("storage/{$item['image_mobile']}") }}"
            alt="{{ $item['title'] }}" />
    </div>
    <div class="form-group">
        <label for="inputActive">Status</label>
        <select class="form-control" name="status">
            <option value="1"
                {{ $item['status'] ? 'selected' : '' }}>
                Ativo</option>
            <option value="0"
                {{ !$item['status'] ? 'selected' : '' }}>
                Inativo</option>
        </select>
    </div>
    <button type="submit" class="btn btn-sm btn-primary">Salvar</button>
    <a class="fa-pull-right" href="{{ route('banners.index') }}">
        <button type="button" class="btn btn-default btn-sm">
            Voltar
        </button>
    </a>
</form>
@endsection
