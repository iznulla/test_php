@extends('layout')

@section('title', 'Автор '.$author->name)

@section('content')
    <a type="button" class="btn btn-secondary" href="{{ route('authors.index') }}">Назад к авторам</a>
    <div class="card mt-3" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Id: {{ $author->id }}</li>
                <li class="list-group-item">Имя Автора: {{ $author->name }}</li>
                <li class="list-group-item">Количкство книг: {{ $author->books }}</li>
                <li class="list-group-item">Создано: {{ $author->created_at }}</li>
                <li class="list-group-item">Изменено: {{ $author->updated_at }}</li>
            </ul>
    </div>
    <form method="POST" class="mt-2" action="{{ route('authors.destroy', $author) }}">
        <a type="submit" class="btn btn-dark" href="{{ route('authors.edit', $author) }}">Изменить</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Удалить</button>
    </form>
@endsection
