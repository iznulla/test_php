@extends('layout')

@section('title', isset($author) ? 'Изменить '.$author->name : 'Добавить автора')

@section('content')
    <a type="button" class="btn btn-secondary" href="{{ route('authors.index') }}">Назад к авторам</a>
    <form method="POST"
          @if(isset($author))
              action="{{ route('authors.update', $author) }}"
          @else
              action="{{ route('authors.store') }}"
          @endif>
        @csrf
        @isset($author)
            @method("PUT")
        @endisset
        <div class="row mt-2">
            <div class="col">
                <input name="name"
                       value="{{ isset($author) ? $author->name : null }}"
                       type="text" class="form-control" placeholder="name" aria-label="name">
            </div>
            <div class="col">
                <input name="books"
                       value="{{ isset($author) ? $author->books : null }}"
                       type="text" class="form-control" placeholder="book name" aria-label="books">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <button type="submit" class="btn btn-dark">Добавить</button>
            </div>
        </div>
    </form>
@endsection
