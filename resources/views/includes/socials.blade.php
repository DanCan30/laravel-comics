@php
    $socials = array(
        [
            "src" => "assets/images/footer-facebook.png",
            "url" => "#",
            "name" => "facebook"
        ],
        [
            "src" => "assets/images/footer-twitter.png",
            "url" => "#",
            "name" => "twitter"
        ],
        [
            "src" => "assets/images/footer-youtube.png",
            "url" => "#",
            "name" => "youtube"
        ],
        [
            "src" => "assets/images/footer-pinterest.png",
            "url" => "#",
            "name" => "pinterest"
        ],
        [
            "src" => "assets/images/footer-periscope.png",
            "url" => "#",
            "name" => "periscope"
        ],
    )
@endphp


<section class="socials-container">
    <div>
        <div class="social-left">
            <a href="#">sign-up now!</a>
        </div>
        <div class="social-right">
            <a class="follow-us" href="#">follow us</a>
            <ul>

                @foreach ($socials as $social)
                    
                    <li>
                        <a href="{{ $social['url'] }}">
                            <img src="{{ asset($social['src']) }}" alt="{{ $social['name'] }}">
                        </a>
                    </li>
                @endforeach

            </ul>
        
        </div>
    </div>
</section>