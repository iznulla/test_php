@extends('layout')
@section('title', isset($authors_books) ? 'Изменить '.$authors_books->name : 'Создать автора')
{{-- {{dd($authors_books)}} --}}
@section('content')
<form method="POST" action="{{ route('authors.store') }}">
    @csrf
    <div class="row">
        <div class="col">
            <input name="name" value="{{ isset($authors_books) ? $authors_books : null }}" type="text" class="form-control" placeholder="Name" aria-label="name">
        </div>
    </div>
    <div class="row mt-2">
        <div class="col">
            <input name="authors_id" value="{{ isset($authors) ? $authors_book->authors_id : null }}" type="text" class="form-control" placeholder="authors_id" aria-label="authors_id">
        </div>
    </div>
    <div class="row mt-2">
        <div class="col">
            <button type="submit" class="btn btn-dark">Добавить</button>
        </div>
    </div>
    </div>
</form>
@endsection