@extends('layouts')

@section('title','Новсти')

@section('content')
    <div class="container text-center">

        <h3 class=" mt-5 card-title">{{ $news->title }}</h3>
        <h5 class=" mt-3 card-text">{{ $news->description }}</h5>
        <img class="figure-img img-fluid rounded" src="/storage/{{$news->images}}" alt="Img">

        <style>
            .img-fluid {
                max-width: 35%;
                height: auto;
            }
        </style>

        <p class="card-text">{{ $news->content }}</p>

        <img class="figure-img img-fluid rounded" src="/storage/{{$news->images2}}" alt="Img">
        <div>
            <a class="btn btn-primary m-3" href="{{route('news.show')}}">Вернутся к остальным новостям</a>
            <a class="btn btn-success m-3" href="{{route('news.edit',$news->id)}}">Редактировать новость</a>
            <a class="btn btn-danger m-3" href="{{route('news.delete',$news->id) }}">Удалить нововсть</a>
        </div>
    </div>

@endsection
