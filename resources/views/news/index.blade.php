@extends('layouts')

@section('name') Главная @endsection

@section('content')
<div class="p-3 mb-2">
    <div class="d-grid gap-2 col-6 mx-auto">
        <a href="{{route('news.create')}}" class="btn btn-primary p-3">Создать новость</a>
        <a href="{{route('news.show')}}" class="btn btn-primary p-3">Все новости</a>
    </div>
</div>
@endsection
