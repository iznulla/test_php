@extends('layout')

@section('title', 'Авторы')


@section('content')
    <a class="btn btn-primary" href=" {{ route('authors.create') }}">Добавить Автора</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Автор</th>
            <th scope="col">Книги</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
        @foreach($authors as $autho)
        <tr>
            <th scope="row">{{ $autho->id }}</th>
            <td>
                <a href="{{ route('authors.show', $autho) }}">{{ $autho->name }}</a>
            </td>
            <td>
                <a href="{{ route('authors.show', $autho) }}">{{ $autho->books }}</a>
            </td>
            <td>
                <form method="POST" action="{{ route('authors.destroy', $autho) }}">
                    <a type="submit" class="btn btn-dark" href="{{ route('authors.edit', $autho) }}">Изменить</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Удалить</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
