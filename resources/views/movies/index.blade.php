<ul>
    @foreach ($movies as $movie)
        <li> <img src="{{ $movie->cover }}" alt="{{ $movie->title }}">
        <li> {{ $movie->original_title }}</li>
        <li> {{ $movie->date }}</li>
    @endforeach
</ul>
