<nav class="navbar is-transparent">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ url('/') }}">
            <img src="{{ Voyager::image(setting('site.logo'))}}" alt="สำนักวิชาสังคมศาสตร์ มหาวิทยาลัยราชภัฏเชียงราย"
                width="100%">
        </a>
        <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false" id="navMunu">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navMenu" class="navbar-menu">
        <div class="navbar-end">
            <a class="navbar-item" href="{{ url('/') }}">
                หน้าแรก
            </a>
            <a class="navbar-item" href="#">
                เกี่ยวกับสำนักวิชา
            </a>
            <a class="navbar-item" href="#">
                หลักสูตร
            </a>
            <a class="navbar-item" href="#">
                สาขาวิชา
            </a>
            <a class="navbar-item" href="#">
                บุคลากร
        </div>
    </div>

</nav>
