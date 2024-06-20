@extends('layouts')

@section('name') Создания новости @endsection

@section('content')
        <div class="container mt-3">
            <form action="{{ route('news.update',$news->id) }}" method="post" class="row g-3">
                @csrf
                @method('PUT')

        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Заголовок</label>
            <textarea  name="title" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $news->title }}</textarea>

        </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Новость</label>
                <textarea  name="content" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $news->content }}</textarea>
            </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Описание новости</label>
                    <textarea  name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $news->description }}</textarea>
                </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Редактировать новость</button>
        </div>
            </form>
        </div>


@endsection
