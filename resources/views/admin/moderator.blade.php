@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <h2>{{ config('app.DILLER_FOR_MODERATOR') }} {{ $moderator->balance }} $</h2>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-3">
            <form method="post" action="{{ route('admin.moderator.store') }}">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="balance" placeholder="0.00" value="{{ $moderator->balance }}">
                </div>
                <button type="submit" class="btn btn-primary">Изменить</button>
            </form>
        </div>
    </div>
@endsection
