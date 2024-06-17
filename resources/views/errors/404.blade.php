@extends('layouts')

@section('name') 404 @endsection

@section('content')
<div class="text-center mt-3">
        <h1 class="">404</h1>
        <h3>Такой страницы не существует</h3>
    <a href="{{ route('news.index') }}" class="btn btn-primary mt-3">Главная страница</a>
</div>
@endsection
