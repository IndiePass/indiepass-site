@extends('layouts.default')
@section('title', 'Android')
@section('page')
    <header class="bg-primary text-white mb-4 py-3">
        <div class="container">
            <h1>IndiePass on Android</h1>
        </div>
    </header>
    <section id="page-intro" class="pt-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="d-flex justify-content-between">
                        <div class="col-md-6">
                            <div class="row mb-5">
                                <div class="col-md-6 p-2">
                                    <a href="https://play.google.com/store/apps/details?id=com.indieweb.indigenous"><img
                                            src="{{ asset('/images/google-play-badge.svg') }}"
                                            alt="Get it on Google Play" class="img-fluid"></a>
                                </div>
                                <div class="col-md-6 p-2">
                                    <a href="https://www.amazon.com/gp/product/B0C3KWR6V6"><img
                                            src="{{ asset('/images/amazon-appstore-badge.svg') }}"
                                            alt="Get it on F-Droid" class="img-fluid"></a>
                                </div>
                                <div class="col-md-6 p-2">
                                    <a href="https://f-droid.org/en/packages/com.indieweb.indigenous/"><img
                                            src="{{ asset('/images/fdroid-badge.svg') }}" alt="Get it on F-Droid"
                                            class="img-fluid"></a>
                                </div>
                            </div>
                            <p class="p-1">Found an issue with the app or have any feedback or suggestions? Raise an
                                issue <a href="https://github.com/indiepass/indiepass-android/issues">on GitHub</a>.
                            </p>

                        </div>
                        <div class="col-md-6 text-end">
                            <img src="{{ asset('/images/android-screenshot.png') }}" alt="IndiePass on iOS"
                                 class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="features" class="bg-light py-5">
        <div class="container">
            <h2 class="mb-4">Features</h2>
            <div class="row">
                <div class="col-md-4">
                    <h3 class="h5">General Features</h3>
                    <ul class="list-styled mb-3">
                        <li>Share intents: receive text or images from other apps to directly share</li>
                        <li>Receive push notifications via an account on this site</li>
                        <li>Night mode support</li>
                    </ul>
                    <h3 class="h5">Account Support</h3>
                    <ul class="list-styled">
                        <li>Login with multiple domains and account types</li>
                        <li>IndieWeb: discover indieauth, micropub, microsub and media endpoints. The micropub and
                            microsub endpoints are optional, but at least one should be available. Token revoke happens
                            when deleting an account. PKCE support for additional security when authenticating.
                        </li>
                        <li>Fediverse: Mastodon, Pleroma and Pixelfed.</li>
                        <li>Comes with a built-in anonymous user which allows reading channels and posts coming from
                            https://mastodon.social, https://pleroma.site or https://pixelfed.social.
                        </li>
                        <li>Posts can be sent to a custom endpoint and token.</li>
                    </ul>


                </div>
                <div class="col-md-4">
                    <h3 class="h5">Posting</h3>
                    <ul class="list-styled">
                        <li>post types: article, note, reply, repost, like, bookmark, event, issue, rsvp, geocache,
                            checkin, read, trip and venue
                        </li>
                        <li>add multiple images, videos and audio, tags, toggle syndication targets</li>
                        <li>share location on note, article, event, read, checkin, geocache and venue</li>
                        <li>send image, audio and video to media endpoint</li>
                        <li>apply filters, add text and emojisto images</li>
                        <li>Toggle post-status (published vs draft)</li>
                        <li>Save as local draft to finish later. This also includes coordinates, so you can finish later
                            even when you are on a different location then. Place suggestions are also supported.
                        </li>
                        <li>Allow autocomplete of usernames in body text</li>
                        <li>Manage contacts (add/update/delete)</li>
                        <li>Query, update and delete: get a list of posts and update basic properties (experimental)
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3 class="h5">Reader</h3>
                    <ul class="list-unstyled">
                        <li>read channels, with pull to refresh</li>
                        <li>read items per channel, with pull to refresh, response actions per item</li>
                        <li>reply, like, repost, rsvp, bookmark, upload or add feed directly</li>
                        <li>listen to audio or watch video if available</li>
                        <li>view fullscreen images, zoom and pinch</li>
                        <li>Manage channels and feeds</li>
                    </ul>
                </div>
            </div>
            <p>Some features are not available for Mastodon and Pixelfed, because they either don't make sense or the
                API doesn't support it yet. Pull requests welcome of course! To check authorizations of this app on your
                accounts, go to following url on your instance:</p>
            <ul>
                <li>Mastodon: oauth/authorized_applications</li>
                <li>Pixelfed: settings/applications</li>
                <li>Pleroma: not found yet (info welcome!)</li>
            </ul>
            <p class="pt-5">Found an issue with the app or have any feedback or suggestions? Raise an issue <a
                    href="https://github.com/indiepass/indiepass-android">on GitHub</a>.</p>
        </div>
    </section>
@endsection
