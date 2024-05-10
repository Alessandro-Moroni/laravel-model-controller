@extends('layout.main')

@section('content')

<div class="container row row-col-3">

    <h1>Movies</h1>

    @foreach ($movies as $movie)

        <div class="col mb-3 ">

            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$movie->title}}</h5>
                <p class="card-text">{{$movie->original_title}}</p>
                <p class="card-text">{{$movie->nationality}}</p>
                <p class="card-text">{{$movie->date}}</p>
                <p class="card-text">{{$movie->vote}}</p>

                </div>
            </div>

        </div>

    @endforeach

</div>

@endsection
