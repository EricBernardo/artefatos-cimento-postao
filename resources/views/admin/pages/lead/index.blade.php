@extends('adminlte::page')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listar Leads</h3>
                </div>
                <div class="card-body">
                    @include('admin/includes/alerts')
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Data</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Telefone</th>
                                <th>Mensagem</th>
                                <th>Última URL</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <td>{{ $item['created_at'] ? date('d/m/Y H:i', strtotime($item['created_at'])) : '-' }}</td>
                                    <td>{{ $item['name'] }}</td>
                                    <td>{{ $item['email'] }}</td>
                                    <td>{{ $item['phone'] }}</td>
                                    <td>{{ $item['message'] }}</td>
                                    <td>{{ $item['http_referrer'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @include('admin/includes/pagination')
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
