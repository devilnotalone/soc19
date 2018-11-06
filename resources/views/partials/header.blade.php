<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="{{ url('/') }}">
        <img class="img" src="{{ Voyager::image(setting('site.logo'))}}">
    </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link soc-link1" href="{{ url('/') }}">หน้าแรก</a></li>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle soc-link1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                    เกี่ยวกับสำนักวิชา
                </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item soc-link1" href="{{ url('/page/about') }}">ประวัติความเป็นมาของหน่วยงาน</a>
                        <a class="dropdown-item soc-link1" href="{{ url('/page/philosophy-vision') }}">ปรัชญา / วิสัยทัศน์</a>
                        <a class="dropdown-item soc-link1" href="{{ url('/page/identity') }}">เอกลักษณ์ของสำนักวิชา</a>
                        <a class="dropdown-item soc-link1" href="{{ url('/page/mission') }}">พันธกิจ</a>
                        <a class="dropdown-item soc-link1" href="{{ url('/page/objective') }}">วัตถุประสงค์</a>
                        <a class="dropdown-item soc-link1" href="{{ url('/page/goal') }}">เป้าหมาย</a>
                        <a class="dropdown-item soc-link1" href="{{ url('/page/Identities') }}">อัตลักษณ์บัณฑิต</a>
                        <a class="dropdown-item soc-link1" href="{{ url('/page/structure') }}">โครงสร้างการบริหารงาน</a>
                        <a class="dropdown-item soc-link1" href="{{ url('/page/plan') }}">แผนยุทธศาสตร์ ระยะ 4 ปี</a> {{--
                        <div class="dropdown-divider"></div>--}}
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle soc-link1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                    หลักสูตร
                </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item soc-link1" href="{{ url('/list_course/1') }}" class="dropdown-toggle">หลักสูตรระดับปริญญาบัณฑิต</a>
                        <a class="dropdown-item soc-link1" href="{{ url('/list_course/2') }}" class="dropdown-toggle">หลักสูตรระดับมหาบัณฑิต</a>
                        <a class="dropdown-item soc-link1" href="{{ url('/list_course/3') }}" class="dropdown-toggle">หลักสูตรระดับดุษฎีบัณฑิต</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle soc-link1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                    สาขาวิชา
                </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item soc-link1" href="https://www.facebook.com/visual.art.crru" target="_blank">ศิลปกรรม</a>
                        <a class="dropdown-item soc-link1" href="https://www.facebook.com/musicsoccru/" target="_blank">ดุริยางคศาสตร์</a>
                        <a class="dropdown-item soc-link1" href="https://www.facebook.com/soc.innovation.crru/" target="_blank">นวัตกรรมสังคม</a>
                        <a class="dropdown-item soc-link1" href="https://www.facebook.com/social.dev.crru" target="_blank">การพัฒนาสังคม</a>
                        <a class="dropdown-item soc-link1" href="https://www.facebook.com/wis.cul.crru" target="_blank">การจัดการภูมิปัญญาฯ</a>
                        <a class="dropdown-item soc-link1" href="https://www.facebook.com/HOMECRRU" target="_blank">คหกรรมศาสตร์ประยุกต์</a>
                        <a class="dropdown-item soc-link1" href="https://www.facebook.com/soc.anp.crru" target="_blank">สังคมวิทยาและมานุษยวิทยา</a>
                        <a class="dropdown-item soc-link1" href="https://www.facebook.com/groups/ila.icmr/" target="_blank">สหวิทยาการการบริหารท้องถิ่น</a>
                        <a class="dropdown-item soc-link1" href="https://www.facebook.com/groups/142080875982573/" target="_blank">ชาติพันธุ์ศึกษาอนุภูมิภาคลุ่มน้ำโขง</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item soc-link1" href="http://socpsy.crru.ac.th" target="_blank">จิตวิทยาสังคม</a>
                        <a class="dropdown-item soc-link1" href="https://www.facebook.com/GISCRRU" target="_blank">ระบบสารสนเทศภูมิศาสตร์</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item soc-link1" href="https://social.crru.ac.th/phd" target="_blank">ยุทธสาสตร์การพัฒนาภูมิภาค (ปริญญาเอก)</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle soc-link1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                    บุคลากร
                </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item soc-link1" href="{{ url('/executive') }}">ผู้บริหารสำนักวิชา</a>
                        <a class="dropdown-item soc-link1" href="{{ url('/staff/1') }}">บุคลาการสายวิชาการ</a>
                        <a class="dropdown-item soc-link1" href="{{ url('/support_staff') }}">บุคลากรสายสนับสนุน</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link soc-link1" href="{{ url('/contact') }}">ติดต่อเรา</a></li>
                </li>
            </ul>
        </div>
    </nav>
</div>