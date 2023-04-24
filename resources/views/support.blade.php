@extends('layouts.default')
@section('title', 'Support')
@section('page')
<header class="bg-primary text-white mb-4 py-3">
    <div class="container">
                <h1>Support</h1>
    </div>
</header>
<main class="container">
    <div class="row">
        <div class="col-lg-2">
            <div class="sticky-top pt-4">
            <h4>This Section</h4>
            <ul class="nav flex-column">
                <li class="nav-item"><a href="#indieauth">What is IndieAuth?</a></li>
                <li class="nav-item"><a href="#micropub">What is Micropub?</a></li>
                <li class="nav-item"><a href="#microsub">What is Microsub?</a></li>
            </ul>
            </div>
        </div>
        <div class="col-lg-10 pt-4">
            <section id="indieauth">
                <h2>What is IndieAuth?</h2>
                <p><a href="https://indieauth.net">IndieAuth</a> is an identity protocol that allows you to login to services with your domain name rather than having to create a password with every service. This is similar to how you can login to other websites with your Facebook account. The difference between Facebook's login and IndieAuth is that because it is powered by your domain, you can use any password or service to authenticate who you are.</p>
                <p>You can add IndieAuth support to your domain depending on what service or software runs your website. Below are some popular services and software with some basic information about how to get started with IndieAuth.</p>

                <h3 id="microblog-indieauth"><a href="http://help.micro.blog/2017/instagram/">Micro.blog</a></h3>
                <p><strong>Micro.blog</strong> has built-in support for IndieAuth. If you are using a Micro.blog-hosted blog, you are all ready to use your Micro.blog account for IndieAuth.</p>

                <h3 id="known-indieauth"><a href="https://withknown.com">Known</a></h3>
                <p><strong>Known</strong> has built-in support for IndieAuth. If you are using Known, you are all ready to use your Known username and password for IndieAuth.</p>

                <h3 id="wordpress-indieauth"><a href="https://wordpress.org/plugins/indieauth/">WordPress</a></h3>
                <p><strong>WordPress</strong> has an <a href="https://wordpress.org/plugins/indieauth/">IndieAuth plugin</a> that allows you to use your WordPress username and password with IndieAuth.</p>
                <h3 id="other-indieauth">Other Sites</h3>
                <p>If you are using some other software or service for your website, the two best options for IndieAuth are the following:</p>

                <p id="hosted-indieauth"><strong><a href="https://indieauth.com/setup">IndieAuth.com</a>:</strong> If you don't have IndieAuth compatible software, using the IndieAuth.com service is the next best thing. It has some <a href="https://indieauth.com/setup">basic instructions</a> that helps you get set up to use your email address or GitHub account to login using IndieAuth.</p>

                <p id="php-indieauth"><strong><a href="https://github.com/inklings-io/selfauth">PHP selfauth</a>:</strong> If you are familiar with installing PHP software on your server, you can use the <a href="https://github.com/inklings-io/selfauth">selfauth</a> PHP app on your server to set up a password and then use that password for your website's IndieAuth.</strong></p>

                <p id="custom-indieauth"><strong><a href="https://indieweb.org/IndieAuth#Implementations">Custom</a>:</strong> If you are a programmer you can build a custom implementation or use a library to support your own instance of IndieAuth. <a href="https://indieweb.org/IndieAuth">Visit the IndieWeb for more information.</a></p>
            </section>
            <section id="micropub">
                <h2>What is Micropub?</h2>
                <p><a href="https://micropub.net">Micropub</a> is an API that allows you to post to your own website using a variety of different apps and services that all support posting to Micropub-enabled websites. Most Micropub servers use <a class="page-scroll" href="#indieauth">IndieAuth</a> as the method for authentication.</p>
                <p>You can add Micropub support to your website depending on what service or software runs your website. Below are some popular services and software with some basic information about how to get started with Micropub.</p>

                <h3 id="microblog-micropub"><a href="http://help.micro.blog/2017/api-posting/">Micro.blog</a></h3>
                <p><strong>Micro.blog</strong> has <a href="http://help.micro.blog/2017/api-posting/">built-in support</a> for Micropub. If you are using a Micro.blog-hosted blog, you are all ready to use Micropub to post on your site.</p>

                <h3 id="known-micropub"><a href="https://withknown.com">Known</a></h3>
                <p><strong>Known</strong> has built-in support for Micropub. If you are using Known, you are all ready to use Micropub to post on your site.</p>

                <h3 id="wordpress-micropub"><a href="https://wordpress.org/plugins/micropub/">WordPress</a></h3>
                <p><strong>WordPress</strong> has an <a href="https://wordpress.org/plugins/micropub/">Micropub plugin</a> that allows you to use Micropub to post on your WordPress site.</p>

                <h3 id="drupal-micropub"><a href="https://www.drupal.org/project/indieweb">Drupal</a></h3>
                <p><strong>Drupal</strong> has a <a href="https://www.drupal.org/project/indieweb">IndieWeb plugin</a> that allows you to use Micropub to post on your Drupal site.</p>

                <h3 id="other-micropub">Other Sites</h3>
                <p id="cms-micropub"><strong><a href="https://indieweb.org/Micropub/Servers#CMS_Software">Other options</a>:</strong> If you are using some other software or service, there <em>may</em> be Micropub support. To find out, visit the <a href="https://indieweb.org/Micropub/Servers#CMS_Software">CMS Micropub Support page on the IndieWeb wiki</a> for more information.</p>

                <p id="custom-micropub"><strong><a href="https://indieweb.org/Micropub">Custom</a>:</strong> If you built your own website, you can add Micropub support yourself! More information can be found on the <a href="https://indieweb.org/Micropub">Micropub page on the IndieWeb wiki</a></p>
            </section>
            <section id="microsub">
                <h2>What is Microsub?</h2>
                <p><a href="https://indieweb.org/microsub">Microsub</a> is an API that allows you to use a variety of apps to view your personal reading timeline from the service or server of your choice. Whether using a service that supports Microsub or installing Microsub software on your own server, it allows you to use any number of clients that fit your preferences and reading style. Most Microsub servers use <a class="page-scroll" href="#indieauth">IndieAuth</a> as the method for authentication. It is also common that Social Readers that support Microsub for reading also support <a class="page-scroll" href="#micropub">Micropub</a> for responding to the posts in your timeline.</p>
                <p>Regardless of what Microsub server you choose, you will need to add the following line of HTML to the same URL that you use for IndieAuth:</p>
                <code>&lt;link rel="microsub" href="https://&lt;URL to microsub server>"&gt;</code>
                <p>What that URL is depends on what Microsub server you use.</p>

                <h3 id="aperture-microsub"><a href="http://aperture.p3k.io">Aperture</a> (in Beta)</h3>
                <p>Aperture is currently the only Microsub-compatible server available for registration. It is currently in beta and it only stores the last 7 days worth of posts in your timeline. Feel free to sign up!</p>

                <h3 id="microblog-microsub">Micro.blog</h3>
                <p><strong>Micro.blog</strong> doesn't currently support Microsub <a href="https://micro.blog/manton/684403">due to the evolving nature of the specification</a>. If you are using a Micro.blog-hosted blog, and have an external Microsub server you can add the HTML link above in your <a href="http://www.manton.org/2018/07/micro-blog-hosted-footer-html-and-redirects.html">Micro.blog-hosted blog's footer</a>. Built-in support for Micro.blog's Timeline API is planned for Indigenous version 1.1</p>

                <h3><a id="custom-microsub" href="https://indieweb.org/microsub">Custom</a></h3>
                <p>If you know how to program, you can build your own Microsub server! More information can be found on the <a href="https://indieweb.org/microsub">Microsub page on the IndieWeb wiki</a></p>
            </section>
        </div>
    </div>
</main>
@endsection