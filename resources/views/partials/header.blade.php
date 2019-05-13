<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light scrolling-navbar transpatent>
    <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ Voyager::image(setting('site.logo'))}}" alt="Social.CRRU">
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Left -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link deep-orange-text" href="{{ url('/') }}">หน้าหลัก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link deep-orange-text" href="{{ url('page/about')}}">เกี่ยวกับเรา</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link deep-orange-text" href="#">สาขาวิชา</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link deep-orange-text" href="#">บุคลากร</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link deep-orange-text" href="#">งานวิจัย</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
<!-- Navbar -->

