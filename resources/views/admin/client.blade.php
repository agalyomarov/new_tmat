@extends('layouts.admin')

@section('content')
    <h1 class="m-0 mb-3">Клиенты</h1>
    <div class="row mt-5">
        <div class="col-sm-12 col-md-6">
            <form method="get">
                <div class="form-group">
                    <input type="text" class="form-control" name="s" placeholder="Login">
                </div>
                <button type="submit" class="btn btn-primary">Поиск</button>
            </form>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Логин</th>
                                <th>Пароль</th>
                                <th>Дилер</th>
                                <th>Пакет</th>
                                <th>Действует до</th>
                            </tr>
                        </thead>
                        <tbody class="dealers">
                            @foreach ($clients as $client)
                                <tr>
                                    <td>{{ $client->id }}</td>
                                    <td>{{ $client->login }}</td>
                                    <td>{{ $client->password }}</td>
                                    <td>{{ $client->dealer_login }}</td>
                                    <td>{{ $client->title }}</td>
                                    <td>{{ Date::parse($client->end_date)->format('d-m-Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-6 ">
                {{ $clients->links('vendor.pagination.bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection
