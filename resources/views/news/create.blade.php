@extends('layouts')

@section('name') Создания новости @endsection

@section('content')
        <div class="container mt-3">
            <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data" class="row g-3">
                @csrf

        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Заголовок</label>
            <textarea  name="title" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Заголовок новости">{{ old('title') }}</textarea>
            @error('title')
                <p class="text-danger">Это поле обязательно для запонлнения</p>
            @enderror
        </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Новость</label>
                <textarea  name="content" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Введите свою новость">{{ old('content') }}</textarea>
                @error('content')
                <p class="text-danger">Это поле обязательно для запонлнения</p>
                @enderror
            </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Описание новости</label>
                    <textarea  name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Краткая аннатация">{{ old('description') }}</textarea>
                    @error('description')
                    <p class="text-danger">Это поле обязательно для запонлнения</p>
                    @enderror
                </div>
                <div>
                    <label for="formFileLg" class="form-label">Фотография №1</label>
                    <input name="images" class="form-control form-control-lg" id="images" type="file">
                    @error('images')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="formFileLg" class="form-label">Фотография №2</label>
                    <input name="images2" class="form-control form-control-lg" id="images2" type="file">
                    @error('images2')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
        <div class="col-12 mb-5">
            <button type="submit" class="btn btn-primary">Создать новость</button>
        </div>
        </div>
    </form>



@endsection
