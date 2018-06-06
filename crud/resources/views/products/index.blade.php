@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Produtos
                    <a href="/products/create" class="float-right btn btn-success">Novo Produto</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        @include('layouts._sidebar')

                        <div class="col-md-9">
                            

                            <product-index></product-index>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
