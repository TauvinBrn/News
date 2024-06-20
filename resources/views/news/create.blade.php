@extends('layouts')

@section('name') Создания новости @endsection

@section('content')
        <div class="container mt-3">
            <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data" class="row g-3">
                @csrf

        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Заголовок</label>
            <textarea  name="title" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Заголовок новости"></textarea>

        </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Новость</label>
                <textarea  name="content" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Введите свою новость"></textarea>
            </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Описание новости</label>
                    <textarea  name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Краткая аннатация"></textarea>
                </div>
                <div>
                    <label for="formFileLg" class="form-label">Фотография №1</label>
                    <input name="images" class="form-control form-control-lg" id="formFileLg" type="file">
                </div>
                <div>
                    <label for="formFileLg" class="form-label">Фотография №2</label>
                    <input name="images2" class="form-control form-control-lg" id="formFileLg" type="file">
                </div>
        <div class="col-12 mb-5">
            <button type="submit" class="btn btn-primary">Создать новость</button>
        </div>
        </div>
    </form>



@endsection
