@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-6">
            <h1 class="m-0 mb-3">Добавить пакет</h1>
            <form method="post" action="@if (isset($packet)) {{ route('admin.packet.update', $packet->id) }}@else{{ route('admin.packet.store') }} @endif">
                @csrf
                <div class="form-group">
                    <label>Имя</label>
                    <input type="text" class="form-control" placeholder="Имя пакета" name="title" @if (isset($packet)) value="{{ $packet->title }}" @endif>
                </div>
                <div class="form-group">
                    <label>Цена $(за 30 дней)</label>
                    <input type="text" class="form-control" placeholder="Цена" name="price" @if (isset($packet)) value="{{ $packet->price }}" @endif>
                </div>
                <div class="form-group">
                    <label>label</label>
                    <input type="text" class="form-control" placeholder="label" name="label" @if (isset($packet)) value="{{ $packet->label }}" @endif>
                </div>
                @if (isset($packet))
                    <input type="hidden" name="id" value="{{ $packet->id }}">
                    @method('PUT')
                @endif
                <button type="submit" class="btn btn-primary">
                    @if (isset($packet))
                        Изменить
                    @else
                        Добавить
                    @endif
                </button>
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
                                <th>Имя</th>
                                <th>Цена $(за 30 дней)</th>
                                <th>label</th>
                                <th colspan="2">Действие</th>
                            </tr>
                        </thead>
                        <tbody class="packets">
                            @foreach ($packets as $packet)
                                <tr>
                                    <td>{{ $packet->title }}</td>
                                    <td>{{ $packet->price }}</td>
                                    <td>{{ $packet->label }}</td>
                                    <td><a href="{{ route('admin.packet.edit', $packet->id) }}"><i class="text-primary  fa fa-pencil"></i></a></td>
                                    <td><i data-id="{{ $packet->id }}" class="delete_packet text-danger fa fa-trash-o"></i></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        const packets = document.querySelector('tbody.packets');
        packets.addEventListener('click', function(event) {
            if (event.target.classList.contains('delete_packet')) {
                const id = event.target.dataset.id;
                const check = confirm('Вы точно хотите удалить пакет?');
                if (check) {
                    window.location.href = `/admin/packet/${id}/delete`;
                }
            }
            // console.log(event.target);
        });
    </script>
@endsection
