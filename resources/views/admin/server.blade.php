@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-6">
            <h1 class="m-0 mb-3">Серверы</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-body">
                    <div class="row">
                        @foreach ($servers as $key => $server)
                            <div class="col-12  mt-2">
                                Сервер №{{ $key }} :<font color="red"> {{ $server }} </font>клиентов
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
