@extends("layouts.mainLayout")

@section("main-content")

    <div>
        @foreach ($comics as $comic)
            <div class="card">

            <div class="comic-img-container">
                <img src="{{ $comic->image }}" alt="{{ $comic->title }}">
            </div>
            <h4>{{ $comic->title }}</h4>

            </div>       
        @endforeach
    </div>
    <div>
        <a href="#">load more</a>
    </div>

@endsection