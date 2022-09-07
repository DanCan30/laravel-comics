<footer>
    <div>
        <section class="footer-left">

            @foreach ($footerLinks as $menu)
            <div>
                <ul>

                    <h3>{{ $menu->title }}</h3>

                    <ul>

                        @foreach ($menu->links as $link)

                        <li><a href="#"> {{ $link }} </a></li>

                        @endforeach

                    </ul>


                </ul>
            </div>
           
            @endforeach

        </section>
        <section class="footer-right">

        </section>

    </div>
</footer>
@include("includes.socials")