@extends('layouts')

@section('title','Новсти')

@section('content')
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col">
                <img class="figure-img img-fluid rounded" src="/storage/{{$news->images}}" alt="Img">

            </div>
            <div class="col">

                <div class="card mt-5" style="width: 30rem;">
                    <div class="card-body">
                        <h1 class="card-title">{{ $news->title }}</h1>
                        <h2 class="card-text">{{ $news->description }}</h2>
                        <p class="card-text">{{ $news->content }}</p>
                    </div>


                </div>
                <a class="btn btn-primary mt-3" href="{{route('news.show')}}">Вернутся к остальным новостям</a>
                <a class="btn btn-success mt-3" href="{{route('news.edit',$news->id)}}">Редактировать новость</a>
                <a class="btn btn-danger mt-3" href="{{route('news.delete',$news->id) }}">Удалить нововсть</a>

            </div>

            <div class="col">
                <img class="figure-img img-fluid rounded" src="/storage/{{$news->images2}}" alt="Img">
            </div>
        </div>
    </div>


@endsection
