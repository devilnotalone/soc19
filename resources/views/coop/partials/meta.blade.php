<!doctype html>
<html lang="en" class="no-js">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Styles -->
    <script src="https://kit.fontawesome.com/38f57e464a.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Pridi&display=swap" rel="stylesheet">

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
</head>

<body>
