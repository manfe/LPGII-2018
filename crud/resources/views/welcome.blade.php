@extends('layouts.app')

@section('content')
    <div id="welcome">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrap">
                        <p class="form-title">Testes em Aplicações Web</p>

                        <p class="form-title">Laravel + Travis CI</p>
                        
                        <p class="form-title">{{ __("Name") }}</p>

                        <p class="form-title">@Lang("Name")</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection