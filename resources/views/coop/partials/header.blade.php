    <section class="hero is-info is-medium" style="background: url('https://cdn.pixabay.com/photo/2014/04/05/11/40/connect-316638_960_720.jpg') no-repeat center center; background-size: cover;" >
        <!-- Hero head: will stick at the top -->
        <div class="hero-head">
            <nav class="navbar" role="navigation" aria-label="main navigation">
                <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="{{ url('/coop') }}">
                        <img src="{{ asset('img_coop/logo_coop.png') }}" width="140" height=120">
                    </a>

                    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
                        data-target="navbarBasicExample">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>
                @include('coop.partials.mainmenu')
                </div>
            </nav>
        </div>
        <!-- Hero content: will be in the middle -->

      <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title  has-text-grey-dark">
                    สหกิจศึกษา
                </h1>
                <h2 class="subtitle  has-text-grey-dark">
                    สำนักวิชาสังคมศาสตร์
                </h2>
            </div>
        </div>
    </section>
    <div class="box cta">
        <p class="has-text-centered">
            <span class="tag is-primary">New</span> การเรียนควบคู่กับการทำงาน มุ่งเน้นให้นักศึกษาได้รับประสบการณ์จริง จากงานในสถานประกอบการจริง
        </p>
    </div>
