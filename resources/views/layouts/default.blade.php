<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title . ' - ' . config('app.name')}}</title>
    <meta name="description" content="{{ $description }}">
    <meta property="og:locale" content="en_GB">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{config('app.name')  . ' - ' . $title}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if (Str::startsWith($current = url()->current(), 'https://www'))
        <meta property="og:url" content="{{ str_replace('https://www.', 'https://', $current) }}"/>
    @elseif (Str::startsWith($current = url()->current(), 'https://indigenous.marksuth.dev'))
        <meta property="og:url"
              content="{{ str_replace('https://indigenous.marksuth.dev', 'https://indiepass.app', $current) }}">
    @elseif (Str::startsWith($current = url()->current(), 'https://indiepass.marksuth.dev'))
        <meta property="og:url"
              content="{{ str_replace('https://indiepass.marksuth.dev', 'https://indiepass.app', $current) }}">
    @else
        <meta property="og:url" content="{{ $current }}">
    @endif
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="og:image" content="{{ config('app.url') }}/images/@yield('ogimg', 'opengraph.jpg')">
    <meta property="og:image:secure_url" content="{{ config('app.url') }}/images/@yield('ogimg', 'opengraph.jpg')">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="{{ $description }}">
    <meta name="twitter:title" content="{{config('app.name')  . ' - ' . $title}}">
    <meta name="twitter:site" content="@_indiepass">
    <meta name="twitter:image" content="{{ config('app.url') }}/images/opengraph.jpg">
    <meta name="twitter:creator" content="@_indiepass">
    <meta name="author" content="{{ config('app.name') }}">
    <meta name="copyright" content="{{ config('app.name') }}">
    <meta name="theme-color" content="#214154">
    @yield('metatags')
    @if (Str::startsWith($current = url()->current(), 'https://www'))
        <link rel="canonical" href="{{ str_replace('https://www.', 'https://', $current) }}">
    @elseif (Str::startsWith($current = url()->current(), 'https://indigenous.marksuth.dev'))
        <link rel="canonical"
              href="{{ str_replace('https://indigenous.marksuth.dev', 'https://indiepass.app', $current) }}">
    @elseif (Str::startsWith($current = url()->current(), 'https://indiepass.marksuth.dev'))
        <link rel="canonical"
              href="{{ str_replace('https://indiepass.marksuth.dev', 'https://indiepass.app', $current) }}">
    @else
        <link rel="canonical" href="{{ $current }}">
    @endif
    <link rel="me" href="https://github.com/marksuth">
    <link rel="me" href="https://twitter.com/marksuth">
    <link rel="me" href="https://www.instagram.com/marksuth">
    <link rel="me" href="https://www.linkedin.com/in/marksuth">
    <link rel="me" href="https://medium.com/@marksuth">
    <link rel="me" href="https://letterboxd.com/marksuth">
    <link rel="author" href="{{ config('app.url') }}">
    <link rel="icon" type="image/png" href="{{ config('app.url') }}/images/icon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ config('app.url') }}/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ config('app.url') }}/icons/icon-32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ config('app.url') }}/icons/icon-16.png">
    <link rel="manifest" href="{{ route('webmanifest') }}">
    @vite(['resources/sass/style.scss', 'resources/js/app.js'])
</head>
<body>
<div id="navbar">
    <div class="tube">
        <a class="h-app u-url logo-nav" href="{{ config('app.url') }}">
            <img src="/images/logo.svg" alt="IndiePass" height="40" width="183" class="u-logo"/></a>
        <section><label for="main-nav" class="btn-menu inline-toggle"><i class="fa-solid fa-bars"></i></label><input
                type="checkbox" id="main-nav" class="inline-toggle">
            <nav id="main-menu" aria-label="main navigation">
                <a class="@if($current == config('app.url'))active @endif" href="{{ route('home') }}">Home</a>
                <a class="@if(Request::segment(1) == 'now') active @endif" href="{{ route('android') }}">Android</a>
                <a class="@if(Request::segment(1) == 'posts') active @endif" href="{{ route('support') }}">Support</a>
                <a class="@if(Request::segment(1) == 'photos') active @endif" href="https://github.com/indiepass"
                   aria-label="GitHub"><i class="fab fa-github" aria-hidden="true"></i></a>
            </nav>
        </section>
    </div>
</div>
    <main id="content" class="site-main">
        @yield('content')
    </main>
<footer class="footer">
    <div class="tube">
        <div class="split">
            <div class="footer-left">
                <img src="/images/logo.svg" alt="IndiePass" height="40" width="183" class="logo-footer"/>
                <nav id="footer-nav" aria-label="footer navigation">
                    <a href="{{ route('support') }}">Support</a>
                    <a href="{{ route('privacy') }}">Privacy</a>
                </nav>
            </div>
            <div class="footer-right">
                <p>Maintained by <a href="https://marksuth.dev">Mark Sutherland</a>.<br> Originally
                    developed by <a href="https://eddiehinkle.com">Eddie Hinkle</a>. Desktop &amp;
                    Android version originally developed by <a href="https://realize.be">realize.be</a>.
                    <br> Licensed under <a href="https://opensource.org/licenses/GPL-3.0">GPL-3.0</a>.</p>
            </div>
        </div>
    </div>
</footer>
@yield('extrascripts')
</body>
</html>
