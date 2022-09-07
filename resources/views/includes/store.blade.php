@php
    $shopLinks = array(
            "digitalComics" => array(
                "name" => "digital comics",
                "imgPath" => "assets/images/buy-comics-digital-comics.png",
                "link" => "#"
            ),
            "dc merchandise" => array(
                "name" => "dc merchandise",
                "imgPath" => "assets/images/buy-comics-merchandise.png",
                "link" => "#"
            ),
            "subscription" => array(
                "name" => "subscription",
                "imgPath" => "assets/images/buy-comics-subscriptions.png",
                "link" => "#"
            ),
            "comic shop locator" => array(
                "name" => "comic shop locator",
                "imgPath" => "assets/images/buy-comics-shop-locator.png",
                "link" => "#"
            ),
            "dc power visa" => array(
                "name" => "dc power visa",
                "imgPath" => "assets/images/buy-dc-power-visa.svg",
                "link" => "#"
            ),
        );

@endphp

<section class="store">
    <div>
        <ul>
            @foreach($shopLinks as $element)
                <li>
                    <img src="{{asset($element['imgPath'])}}" :alt="digital comics">
                    <a href="#">digital comics</a>
                </li>
            @endforeach
        </ul>
    </div>
</section>