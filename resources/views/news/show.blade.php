@extends('layouts')

@section('name') Все новости @endsection

@section('content')


{{----}}
<div class="container row row-cols-3 m-auto p-0">

    @foreach($news as $n)
    <div class="col mt-3 w-10">
        <a href="{{ route('news.show_by_index', $n->id) }}">
            <div class="card w-100" style="width: 18rem;">
                <div class="card-body text-center">
                    <h5 class="card-title ">{{ $n->title }}</h5>
                    <small>
                    <p class="card-text">{{ $n->description }}</p>
                    </small>

                </div>
            </div>
        </a>
    </div>
    @endforeach

</div>

@endsection
