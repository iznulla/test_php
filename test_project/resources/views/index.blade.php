@extends('layout')
@section('title', 'Библиотека')
@section('content')
<a class="btn btn-primary" href=" {{ route('authors.create') }}">Добавить Автора</a>
@foreach($books as $book)
<table class="table">
  <thead>
    <tr>
      <th scope="col">Айди</th>
      <th scope="col">Книга</th>
      <th scope="col">Автор</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{ $book->id }}</th>
      <td>{{ $book->name }}</td>
      <td>{{ $book->authors_id }}</td>
      <td>
        <a class="btn btn-warning" href="{{ route('authors.edit', $book) }}">Изменить</a>
      </td>
    </tr>
  </tbody>
</table>

@endforeach
@endsection