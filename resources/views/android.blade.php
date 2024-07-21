@extends('layouts.default', ['title' => 'Android', 'description' => 'IndiePass on Android.'])
@section('content')
    <div class="tube">
        <header class="page-header">
            <h1>IndiePass on Android</h1>
        </header>
        <section id="page-intro">
            <div class="split">
                <div class="tile-grid tile-grid-lg">
                    <a href="https://play.google.com/store/apps/details?id=com.indieweb.indigenous"><img
                            src="{{ asset('/images/google-play-badge.svg') }}"
                            alt="Get it on Google Play" class="download-btn"></a>
                    <a href="https://www.amazon.com/gp/product/B0C3KWR6V6"><img
                            src="{{ asset('/images/amazon-appstore-badge.svg') }}"
                            alt="Get it on F-Droid" class="download-btn"></a>
                    <a href="https://f-droid.org/en/packages/com.indieweb.indigenous/"><img
                            src="{{ asset('/images/fdroid-badge.svg') }}" alt="Get it on F-Droid"
                            class="download-btn"></a>
                    <p>Found an issue with the app or have any feedback or suggestions? Raise an
                        issue <a href="https://github.com/indiepass/indiepass-android/issues">on GitHub</a>.
                    </p>

                </div>
                <div>
                    <img src="{{ asset('/images/android-screenshot.png') }}" alt="IndiePass on iOS"
                         class="screenshot">
                </div>
            </div>
        </section>
        <section id="features">
            <h2>Features</h2>

            <div class="tile-grid tile-grid-lg">
                <div>
                    <h3>General Features</h3>
                    <ul>
                        <li>Share intents: receive text or images from other apps to directly share</li>
                        <li>Receive push notifications via an account on this site</li>
                        <li>Night mode support</li>
                    </ul>
                    <h3>Account Support</h3>
                    <ul>
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
                <div>
                    <h3>Posting</h3>
                    <ul>
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
                <div>
                    <h3>Reader</h3>
                    <ul>
                        <li>read channels, with pull to refresh</li>
                        <li>read items per channel, with pull to refresh, response actions per item</li>
                        <li>reply, like, repost, rsvp, bookmark, upload or add feed directly</li>
                        <li>listen to audio or watch video if available</li>
                        <li>view fullscreen images, zoom and pinch</li>
                        <li>Manage channels and feeds</li>
                    </ul>
                </div>
                <div>
                    <h3>Please Note</h3>
                    <p>Some features are not available for Mastodon and Pixelfed, because they either don't make sense
                        or the
                        API doesn't support it yet. Pull requests welcome of course! To check authorizations of this app
                        on your
                        accounts, go to following url on your instance:</p>
                    <ul>
                        <li>Mastodon: oauth/authorized_applications</li>
                        <li>Pixelfed: settings/applications</li>
                        <li>Pleroma: not found yet (info welcome!)</li>
                    </ul>
                </div>
            </div>
            <p>Found an issue with the app or have any feedback or suggestions? Raise an issue <a
                    href="https://github.com/indiepass/indiepass-android">on GitHub</a>.</p>
        </section>
    </div>
@endsection
