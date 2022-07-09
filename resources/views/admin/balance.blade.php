@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-6">
            <h1 class="m-0 mb-3">Пополнить баланс дилера</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('admin.balance.store') }}">
                @csrf
                <div class="form-group">
                    <label>Логин</label>
                    <input type="text" class="form-control" placeholder="" name="login">
                </div>
                <div class="form-group">
                    <label>Сумма</label>
                    <input type="text" class="form-control" placeholder="" name="sum">
                </div>
                <button type="submit" class="btn btn-primary">Пополнить</button>
            </form>
        </div>
    </div>
@endsection
