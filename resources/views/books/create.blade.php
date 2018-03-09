@extends('layouts.main')

@section('title', 'Adicionar livro')
@section('header', 'Adicionar livro')
@section('small-header', '')

@section('content')
    <div class="update-form">
        {{Form::open(['url' => '/book/create'])}}
        @include('books.form')
        {{ Form::close() }}
    </div>
@stop