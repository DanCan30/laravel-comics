@php
    $navLinks = array("characters", "comics", "movies", "tv", "games", "collectibles", "videos", "fans", "news", "shop")
@endphp
<header>
    <img src="{{asset('assets/images/dc-logo.png')}}" alt="DC Logo">
    <nav>

        <ul>
            @foreach ($navLinks as $link)
                <li><a href="#">{{ $link }}</a></li>
            @endforeach
            <li><input type="text" placeholder="Search"></li>
        </ul>
    </nav>
    
</header>

<div class="jumbo-container">
    <img src="{{asset('assets/images/jumbotron.jpg')}}" alt="Comic Jumbotron">
</div>