@extends('adminlte::page')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">@yield('title')</h3>
                    @if (trim($__env->yieldContent('button_add')))
                        <div class="card-tools">
                            <a href="{{ route($__env->yieldContent('button_add')) }}">
                                <button type="submit" class="btn btn-success btn-sm">
                                    <i class="fas fa-plus-circle"></i>
                                    Adicionar
                                </button>
                            </a>
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    @include('admin/includes/alerts')
                    @yield('content_show_store')
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
