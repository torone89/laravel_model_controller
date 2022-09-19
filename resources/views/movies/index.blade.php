@extends('layouts.main')

@section('title', 'Lista Film')

@section('main-content')
    <div class="container">

        <div class="row justify-content-center">
            @foreach ($movies as $movie)
                <div class="col-3 card p-0 m-3" style="width: 18rem;">
                    <div class="card-header">
                        {{ $movie->title }}
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Titolo originale:{{ $movie->original_title }}</li>
                        <li class="list-group-item">Paese: {{ $movie->nationality }}</li>
                        <li class="list-group-item">Data di uscita:{{ $movie->date }}</li>
                    </ul>
                </div>
            @endforeach
        </div>

    </div>

@endsection
