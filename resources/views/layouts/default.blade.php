<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('metadescription', 'A Social Feed Reader for the IndieWeb')"/>
    <meta property="og:locale" content="en_GB"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="IndiePass - @yield('title')"/>
    <meta property="og:description" content="@yield('metadescription')"/>
    <meta property="og:url" content="@yield('ogurl', config('app.url'))"/>
    <meta property="og:site_name" content="IndiePass"/>
    <meta property="og:image" content="{{ env('APP_URL')}}/images/@yield('ogimg', 'og-logo.jpg')"/>
    <meta property="og:image:secure_url" content="{{ env('APP_URL')}}/images/@yield('ogimg', 'og-logo.jpg')"/>
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="630"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:description" content="@yield('metadescription', 'A Social Feed Reader for the IndieWeb' )"/>
    <meta name="twitter:title" content="IndiePass - @yield('title')"/>
    <meta name="twitter:image" content="{{ env('APP_URL')}}/images/@yield('ogimg', 'og-logo.jpg')"/>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <meta name="theme-color" content="#D54049">
    <title>IndiePass</title>
    @vite(['resources/sass/style.scss', 'resources/js/app.js'])
    @yield('extrastyles')
    <script src="https://cdn.usefathom.com/script.js" data-site="UUTHFTSN" defer></script>
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
        <a class="h-app u-url navbar-brand" href="{{ env('APP_URL')}}"><img src="/images/logo.svg" alt="IndiePass"
                                                                            height="40" width="183"
                                                                            class="me-1 u-logo"/></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
                aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('android') }}">Android</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('desktop') }}">Desktop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('support') }}">Support</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://github.com/marksuth/indigenous-android">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-github" viewBox="0 0 16 16">
                            <path
                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@yield('page')
<footer class="site-footer py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <img src="/images/logo.svg" alt="IndiePass" height="40" width="183" class="mb-3"/>
                <nav class="nav">
                    <a href="{{ env('APP_URL')}}/support" class="nav-link text-muted ps-0">Support</a>
                    <a href="{{ env('APP_URL')}}/privacy" class="nav-link text-muted">Privacy</a>
                </nav>
            </div>
            <div class="col-lg-8 text-end">
                <p>Maintained by <a class="text-muted" href="https://marksuth.dev">Mark Sutherland</a>.<br> Originally
                    developed by <a class="text-muted" href="https://eddiehinkle.com">Eddie Hinkle</a>. Desktop &amp;
                    Android verison originally developed by <a class="text-muted"
                                                               href="https://realize.be">realize.be</a>.<br> Licensed
                    under <a href="https://opensource.org/licenses/GPL-3.0" class="text-muted">GPL-3.0</a>.</p>
            </div>
        </div>
    </div>
</footer>
@yield('extrascripts')
</body>

</html>
