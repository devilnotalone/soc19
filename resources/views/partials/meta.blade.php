<!doctype html>
<html lang="en" class="no-js">

<head>
    <title>@yield('meta_title', setting('site.title'))</title>
    <meta name="description" content="@yield('meta_description', setting('site.description')) - {{ setting('site.title') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Open Graph -->
    <meta property="og:site_name" content="{{ setting('site.title') }}" />
    <meta property="og:title" content="@yield('meta_title')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:image" content="@yield('meta_image', url('/') . '/images/apple-touch-icon.png')" />
    <meta property="og:description" content="@yield('meta_description', setting('site.description'))" />

    <!-- Icons -->
    <meta name="msapplication-TileImage" content="{{ url('/') }}/ms-tile-icon.png" />
    <meta name="msapplication-TileColor" content="#8cc641" />
    <link rel="shortcut icon" href="{{ url('/') }}/images/favicon-crru.ico" />
    <link rel="apple-touch-icon-precomposed" href="{{ url('/') }}/images/apple-touch-icon.png" />

    <!-- Styles -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/app.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/style.css">

    @if (setting('site.google_analytics_tracking_id'))
    <!-- Google Analytics (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ setting('site.google_analytics_tracking_id') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', '{{ setting('
            site.google_analytics_tracking_id ') }}');

    </script>
    @endif

    @if (setting('admin.google_recaptcha_site_key'))
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    <script>
        function setFormId(formId) {
            window.formId = formId;
        }

        function onSubmit(token) {
            document.getElementById(window.formId).submit();
        }

    </script>
    @endif
    <style type="text/css">
        html,
        body,
        header,
        .carousel {
            height: 60vh;
        }

        @media (max-width: 740px) {

            html,
            body,
            header,
            .carousel {
                height: 100vh;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {

            html,
            body,
            header,
            .carousel {
                height: 100vh;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #929FBA !important;
            }
        }
    </style>
</head>

<body>
