@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1 class="m-0 mb-3">Новости</h1>
            <form method="post" action="@if (isset($article)) {{ route('admin.news.update', $article->id) }} @else{{ route('admin.news.store') }} @endif">
                @if (isset($article))
                    @method('PUT')
                @endif
                @csrf
                <div class="form-group">
                    <label>Дата</label>
                    <input type="date" class="form-control col-2"name="date" @if (isset($article)) value="{{ Date::parse($article->date)->format('Y-m-d') }}" @else value="{{ Date::now()->format('Y-m-d') }}" @endif>
                </div>
                <div class="form-group">
                    <label>Контент</label>
                    <textarea id="summernote" name="content">
@isset($article)
{!! $article->content !!}
@endisset
</textarea>
                </div>
                <button type="submit" class="btn btn-primary">
                    @if (isset($article))
                        Изменить
                    @else
                        Добавить
                    @endif
                </button>
            </form>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-6">
            <div class="card">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Дата</th>
                                <th colspan="2">Действие</th>
                            </tr>
                        </thead>
                        <tbody class="packets">
                            @foreach ($news as $article)
                                <tr>
                                    <td>{{ Date::parse($article->date)->format('d-m-Y') }}</td>
                                    <td><a href="{{ route('admin.news.edit', $article->id) }}"><i class="text-primary  fa fa-pencil"></i></a></td>
                                    <td><i data-id="{{ $article->id }}" class="delete_news text-danger fa fa-trash-o"></i></td>
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
            if (event.target.classList.contains('delete_news')) {
                const id = event.target.dataset.id;
                const check = confirm('Вы точно хотите удалить новости?');
                if (check) {
                    window.location.href = `/admin/news/${id}/delete`;
                }
            }
        });
    </script>
@endsection
