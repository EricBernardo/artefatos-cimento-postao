@extends('admin.layouts.container')

@section('title', 'Lista Banner')

@section('button_add', 'banners.create')

@section('content_show_store')

<table class="table table-bordered">
    <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>Título</th>
            <th>Imagem</th>
            <th>Status</th>
            <th>-</th>
            <th>-</th>
        </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
            <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['title'] }}</td>
                <td><img height="50px"
                        src="{{ url("storage/{$item['image']}") }}"
                        alt="{{ $item['title'] }}" /></td>
                <td>{{ $item['status'] ? 'Ativo' : 'Inativo' }}
                </td>
                <td>
                    <a href="{{ route('banners.show', ['id' => $item['id']]) }}"
                        class="btn btn-sm btn-info">Editar</a>
                </td>
                <td>
                    <a href="" class="btn btn-sm btn-danger">Excluir</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
