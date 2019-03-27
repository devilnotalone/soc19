<nav class="white" role="navigation">
    <div class="nav-wrapper">
        <a href="{{ url('/') }}" class="brand-logo">
            <img src="{{ Voyager::image(setting('site.logo'))}}" alt="สำนักวิชาสังคมศาสตร์ มหาวิทยาลัยราชภัฏเชียงราย">
        </a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons orange-text text-darken-4">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a name="top" class="orange-text text-darken-4" href="sass.html">หน้าหลัก</a></li>
            <li><a class="orange-text text-darken-4" href="badges.html">เกี่ยวกับสำนักวิชา</a></li>
            <li><a class="orange-text text-darken-4" href="collapsible.html">หลักสูตร</a></li>
            <li><a class="orange-text text-darken-4" href="mobile.html">สาขาวิชา</a></li>
            <li><a class="orange-text text-darken-4" href="mobile.html">บุคลากร</a></li>
        </ul>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">หน้าหลัก</a></li>
    <li><a href="badges.html">เกี่ยวกับสำนักวิชา</a></li>
    <li><a href="collapsible.html">หลักสูตร</a></li>
    <li><a href="mobile.html">สาขาวิชา</a></li>
    <li><a href="mobile.html">บุคลากร</a></li>
</ul>
