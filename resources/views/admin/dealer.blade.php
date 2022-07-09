@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-6">
            <h1 class="m-0 mb-3">Добавить пакет</h1>
            <form method="post" action="@if (isset($dealer)) {{ route('admin.dealer.update', $dealer->id) }}@else{{ route('admin.dealer.store') }} @endif">
                @csrf
                <div class="form-group">
                    <label>Логин</label>
                    <input type="text" class="form-control" placeholder="" name="login" @if (isset($dealer)) value="{{ $dealer->login }}" @endif>
                </div>
                <div class="form-group">
                    <label>Пароль</label>
                    <input type="text" class="form-control" placeholder="" name="password" @if (isset($dealer)) value="{{ $dealer->password }}" @endif>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="" name="email" @if (isset($dealer)) value="{{ $dealer->email }}" @endif>
                </div>
                <div class="form-group">
                    <label>Баланс</label>
                    <input type="text" class="form-control" placeholder="" name="balance" @if (isset($dealer)) value="{{ $dealer->balance }}" @else value="0.00" @endif>
                </div>
                <div class="form-group">
                    <label>Скидка</label>
                    <input type="text" class="form-control" placeholder="0" name="discount" @if (isset($dealer)) value="{{ $dealer->discount }}" @else value="0" @endif>
                </div>
                @if (isset($dealer))
                    <input type="hidden" name="id" value="{{ $dealer->id }}">
                    @method('PUT')
                @endif
                <button type="submit" class="btn btn-primary">
                    @if (isset($dealer))
                        Изменить
                    @else
                        Добавить
                    @endif
                </button>
            </form>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-3">
            <form method="get">
                <div class="form-group">
                    <input type="text" class="form-control" name="s" placeholder="Login">
                </div>
                <button type="submit" class="btn btn-primary">Поиск</button>
            </form>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Логин</th>
                                <th>Пароль</th>
                                <th>Email</th>
                                <th>Баланс</th>
                                <th>Скидка</th>
                                <th colspan="2">Действие</th>
                            </tr>
                        </thead>
                        <tbody class="dealers">
                            @foreach ($dealers as $dealer)
                                <tr>
                                    <td>{{ $dealer->login }}</td>
                                    <td>{{ $dealer->password }}</td>
                                    <td>{{ $dealer->email }}</td>
                                    <td>{{ $dealer->balance }}</td>
                                    <td>{{ $dealer->discount }}</td>
                                    <td><a href="{{ route('admin.dealer.edit', $dealer->id) }}"><i class="text-primary  fa fa-pencil"></i></a></td>
                                    <td><i data-id="{{ $dealer->id }}" class="delete_dealer text-danger fa fa-trash-o"></i></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-6 ">
                {{ $dealers->links('vendor.pagination.bootstrap-5') }}
            </div>
        </div>
    </div>
    <script>
        const packets = document.querySelector('tbody.dealers');
        packets.addEventListener('click', function(event) {
            if (event.target.classList.contains('delete_dealer')) {
                const id = event.target.dataset.id;
                const check = confirm('Вы точно хотите удалить дилер?');
                if (check) {
                    window.location.href = `/admin/dealer/${id}/delete`;
                }
            }
            // console.log(event.target);
        });
    </script>
@endsection
