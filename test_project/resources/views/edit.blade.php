@extends('layout')
@section('title', 'Изменить Книгу')
@section('content')
<form method="POST" action="{{ route('authors.store') }}">
    @csrf
    <div class="row">
        <div class="col">
            <input name="name" type="text" class="form-control" placeholder="Name" aria-label="name">
        </div>
    </div>
    <div class="row mt-2">
        <div class="col">
            <input name="authors_id" type="text" class="form-control" placeholder="authors_id" aria-label="authors_id">
        </div>
    </div>
    <div class="row mt-2">
        <div class="col">
            <button type="submit" class="btn btn-dark">Готово</button>
        </div>
    </div>
    </div>
</form>
@endsection