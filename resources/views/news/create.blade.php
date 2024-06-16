@extends('layouts')

@section('name') Главная @endsection

@section('content')
        <div class="container mt-3">
            <form action="{{ route('create.news') }}" method="post" class="row g-3">
                @csrf

        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Заголовок</label>
            <input name="title" type="text"  class="form-control" id="inputEmail4">
        </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Новость</label>
                <textarea  name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Новость</label>
                    <textarea  name="img" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Создать новость</button>
        </div>
        </div>
    </form>



@endsection
