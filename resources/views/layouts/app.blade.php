<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('storage/css/style.css') }}">
    </head>
        <nav>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('jobs') }}">jobs</a>
            <ul>
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li>
                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                    </li>
                @endforeach
                <!-- <li>
                    <a rel="alternate" hreflang="en" href="http://localhost:8000/en/about-us">
                        <img class="flag" src="{{ asset('storage/img/us-flag.png') }}">
                    </a>
                </li>
                <li>
                    <a rel="alternate" hreflang="nl" href="http://localhost:8000/nl/over-ons">
                        <img class="flag" src="{{ asset('storage/img/nl-flag.png') }}">
                    </a>
                </li> -->
            </ul>
        </nav>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>