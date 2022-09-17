@extends('layout')
{{-- @section('title', isset($authors) ? 'Изменить '.authors->name : 'Создать автора') --}}
@section('content')
{{ dd($authors_books) }}
@endsection