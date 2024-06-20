@extends('layouts')

@section('name') Все новости @endsection

@section('content')


<div class="container row row-cols-3 m-auto p-0">

    @foreach($news as $n)
    <div class="col mt-3 w-10">
            <div class="row">
                <div class="col-sm-19 text-center">
                    <div class="card">
                        <div class=" card-body">
                            <h5 class="card-title">{{ $n->title }}</h5>
                            <p class="card-text max">{{$n->description}}</p>
                            <a class="btn btn-primary" href="{{ route('news.show_by_index', $n->id) }}"> Читать новость  </a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    @endforeach

</div>

@endsection
