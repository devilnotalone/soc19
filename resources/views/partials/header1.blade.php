<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark grey>
    <div class=" container-fluid">

    <!-- Brand -->
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ Voyager::image(setting('site.logo'))}}" alt="Social.CRRU">
    </a>

    <!-- Collapse -->
    <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
    </button>

    <!-- Links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        @include('partials.mainmenu')
    </div>

    </div>
</nav>
<!-- Navbar -->
