@extends('rongbualoy.layout.page')
@section('title','แหล่งเรียนรู้อัตลักษณ์ทางวัฒนธรรม (ปราสาทศพ) บ้านร่องบัวลอย')
@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="{{ asset('img_rbl/89090682_1073262836370406_8945739758793916416_o-16-9.jpg') }}" alt="New York" width="1200"
                height="700">
            {{-- <div class="carousel-caption">
                <h3>New York</h3>
                <p>The atmosphere in New York is lorem ipsum.</p>
            </div> --}}
        </div>

        <div class="item">
            <img src="{{ asset('img_rbl/93508335_1107429919620364_639134813462200320_o.jpg') }}" alt="Chicago" width="1200"
                height="700">
            {{-- <div class="carousel-caption">
                <h3>Chicago</h3>
                <p>Thank you, Chicago - A night we won't forget.</p>
            </div> --}}
        </div>

        <div class="item">
            <img src="{{ asset('img_rbl/100611826_1134354776927878_5444325201816846336_o-16-9.jpg') }}" alt="Los Angeles" width="1200"
                height="700">
            {{-- <div class="carousel-caption">
                <h3>LA</h3>
                <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
            </div> --}}
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="history" class="container text-center">
    <h3>ประวัติบ้านร่องบัวลอย</h3>
    <p align="justify">
        บ้านร่องบัวลอย หมู่ที่ 2 ตำบลเวียงชัย เดิมเป็นสาวนหนึ่งของบ้านสันทราบร่องบอน หมู่ที่ 12
        อยู่ในเขตการปกครองของตำบลสันทราย อำเภอเมือง จังหวัดเชียงราย ต่อมาได้แยกหมู่บ้านจากบ้านสันทราบร่องบอนเมื่อ
        พ.ศ.2511 เป็นหมู่ที่ 15 ตำบลสันทรายและต่อมาได้มีการแยกกิ่งอำเภอเวียงชัย
        จึงมาทำให้บ้านร่องบัวลอยแยกออกมาจากบ้านสันทรายร่องบอน มาเป็นบ้านร่องบัวลอย หมู่ที่ 2
        อยู่ห่างจากที่ว่าการอำเภอเวียงชัยระยะทางประมาณ 3 กิโลเมตร และอยู่ห่างจากตัวจังหวัดเชียงรายประมาณ 13 กิโลเมตร
        สภาพภูมิศาสตร์เป็นพื้นที่ราบลุ่มเหมาะแก่การทำการเกษตร โดยมีพื้นที่ทั้งหมด 2,065 ตารางกิโลเมตร
        มีจำนวนครัวเรือนทั้งสิ้น 200 ครัวเรือน และมีจำนวนประชากรจำนวน 572 คน แบ่งเป็น เพศชายจำนวน 218 คน และ
        เพศหญิงจำนวน 294 คน การประกอบอาชีพ ของคนในชุมชน ส่วนใหญ่ประกอบอาชีพทำการเกษตร รับจ้างทั่วไป
        พนักงานราชการ/รับราชการ ค้าขาย และธุรกิจส่วนตัว ตามลำดับ มี รายได้เฉลี่ยต่อคนต่อปี เท่ากับ 75,670 บาทร้านค้าต่าง
        ๆ ในหมู่บ้าน ได้แก่ ร้านขายของชำ ร้านค้าชุมชนขายปุ๋ย/ยา ร้านขายวัสดุอุปกรณ์ก่อสร้าง ร้านก๋วยเตี๋ยว<br>
        ชุมชนบ้านร่องบัวลอย อำเภอเวียงชัย จังหวัดเชียงราย เป็นชุมชนเก่าแก่ที่คนในชุมชนมีอาชีพทำปราสาทศพขายตั้งแต่ปี พ.ศ.
        2518 โดยเริ่มจากการทำปราสาทจากช่างปราสาทรุ่นแรก ได้แก่ นายทา ศรีเป็ง นายมา ศรีเป็ง และนายมา ลือชัย
        ซึ่งย้ายถิ่นฐานมาจากบ้านดอนแก้ว อำเภอห้างฉัตร จังหวัดลำปาง มาตั้งรกรากที่บ้านร่องบัวลอย
        ในการทำครั้งแรกเป็นการทำเพื่อช่วยเหลือกันและกันในหมู่ญาติพี่น้องบ้านใกล้เรือนเคียง และชาวบ้านในหมู่บ้านเดียวกัน
        เมื่อมีความชำนาญและเกิดการถ่ายทอดสู่คนในชุมชนทำให้คนในชุมชนเกิดทักษะในการทำปราสาทมากขึ้น
        จึงมีการแยกตัวออกไปทำธุรกิจปราสาทศพกันอย่างแพร่หลาย
        ในอดีตแทบทุกครัวเรือนในชุมชนจะมีอาชีพทำปราสาทศพซึ่งในยุคหนึ่งมีความจำนวนร้านค้าปราสาทศพมากกว่า 12
        ร้านแต่ในปัจจุบันเหลือผู้ที่ทำปราสาทศพขายในชุมชนเหลืออยู่จำนวน 4 ร้าน
        ถึงกระนั้นก็ตามแม้ว่าในปัจจุบันแม้จะเหลือเพียงไม่กี่ร้านแต่ปราสาทศพบ้านร่องบัวลอยก็ยังคงเป็นที่รู้จักของคนเชียงรายและจังหวัดใกล้เคียงในฐานะหมู่บ้านที่ทำปราสาทศพที่มีชื่อเสียงของจังหวัดเชียงราย
        เนื่องด้วยการทำปราสาทศพของชุมชนแห่งนี้มีการทำกันมาอย่างยาวนานจึงทำให้เกิดพัฒนาทักษะของช่างและผ่านการประดิษฐ์คิดค้นรูปทรงปราสาทศพมาจนมีความเป็นเอกลักษณ์ที่เป็นแบบฉบับของสกุลช่างร่องบัวลอยที่ไม่เหมือนใคร
        และมีความโดดเด่นในรูปทรงรวมถึงด้านเทคนิควิธีการทำ
    </p>
    <br>

</div>

<!-- Container (TOUR Section) -->
<div id="revolation" class="bg-1">
    <div class="container">
        <h3 class="text-center">วิวัฒนาการของการสร้างปราสาทศพ</h3>
        <blockquote>
            <p align="justify">
                วัฒนธรรมการนำศพขึ้นวางบนปราสาทมาใช้ประกอบพิธีศพ
                ซึ่งการสร้างปราสาทในแต่ละพื้นที่จะมีการสร้างที่แตกต่างกันออกไป
                มีรูปทรงและเทคนิควิธีการสร้างสรรค์ผลงานของตนเองที่เป็นเอกลักษณ์เฉพาะถิ่น
                ซึ่งก็มีผลมาจากโลกทัศน์บนพื้นฐานของพุทธจารีต
                ภูมิปัญญาและองค์ความรู้ประจำท้องถิ่นส่งผลให้เกิดความหลากหลายของภูมิปัญญาที่ได้รับการถ่ายทอดจากบรรพชนที่มีต่อความศรัทธาและความเชื่อต่อพิธีกรรมและศาสนา
                จึงนับเป็นมรดกทางภูมิปัญญาที่คุณค่าต่อการสืบสาน
                เรื่องราวที่เกี่ยวข้องกับปราสาทศพจึงเป็นการมองเห็นคุณค่าทางมรดกวัฒนธรรมของคนในภูมิภาคล้านนา
                ที่ถือว่าเป็นงานประดิษฐ์และการสร้างสรรค์ทางศิลปะ
                เป็นภูมิปัญญาและเกี่ยวข้องกับคติความเชื่อในเรื่องของความตาย
                เป็นเครื่องหมายแห่งความศรัทธาแฝงไปด้วยนัยอันลึกซึ้งละเอียดอ่อนของระบบคิดและคติความเชื่อในเรื่องของชีวิตหลังความตายผสมผสานกับหลักธรรมคำสอนตามแนวพุทธปรัชญาในเรื่องของสัจธรรมของชีวิต
                การอนุรักษ์และการเก็บรวมรวบข้อมูลของรูปทรงปราสาทศพจึงเป็นการสืบสานและอนุรักษ์องค์ความรู้และภูมิปัญญาในเรื่องของศิลปวัตถุไว้ก่อนที่จะสูญหายไปกับกาลเวลาที่เปลี่ยนแปลงไป
            </p>
        </blockquote>
        <p>&nbsp;</p>
        <h3 class="text-center">คติความเชื่อ</h3>
        <div class="row text-center">
            <div class="col-sm-4">
                <a href="{{ url('/blccenter/blinfo001')}}">
                    <img src="{{ asset('img_rbl/94726248_1110555602641129_4788870801120034816_o-2.jpg') }} "
                        class="img-circle person"
                        alt="Random Name" width="255" height="255">
                    <p>ความตาย มูลเหตุแห่งการใช้ปราสาทศพ</p>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="{{ url('/blccenter/blinfo002')}}">
                    <img src="{{ asset('img_rbl/101432235_1140486256314730_7121347744349814784_o-2.jpg') }}"
                        class="img-circle person"
                        alt="Random Name" width="255" height="255">
                    <p>แนวคิดเรื่องปราสาทศพในล้านนา</p>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="{{ url('/blccenter/blinfo003')}}">
                    <img src="{{ asset('img_rbl/ร้านปราสาททอง ร่องบัวลอย 2_๒๐๐๕๐๙_0005-2.jpg') }}" class="img-circle person"
                        alt="Random Name" width="255" height="255">
                    <p>ประวัติความเป็นมาของปราสาทศพ</p>
                </a>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-sm-4">
                <a href="{{ url('/blccenter/blinfo004')}}">
                    <img src="{{ asset('img_rbl/94726248_1110555602641129_4788870801120034816_o-2.jpg')}}" class="img-circle person"
                        alt="Random Name" width="255" height="255">
                    <p align="">รูปแบบปราสาทศพ</p>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="{{ url('/blccenter/blinfo005')}}">
                    <img src="{{ asset('img_rbl/101432235_1140486256314730_7121347744349814784_o-2.jpg')}}" class="img-circle person"
                        alt="Random Name" width="255" height="255">
                    <p>การสร้างปราสาทศพพระสงฆ์ในล้านนา</p>
                </a>
            </div>
            <div class="col-sm-4">
            </div>
        </div>
        <p>&nbsp;</p>

        <h3 class="text-center">ปราสาทศพบ้านร่องบัวลอย</h3>
        <div class="row text-center">
            <div class="col-md-3">
                <a href="{{ url('blccenter/seree_info')}}">
                    <img src="{{ asset('img_rbl/seree_qr.png') }}" class="img-thumbnail person"
                        alt="Random Name" width="255" height="255">
                    <p align="center">ปราสาทเสรี</p>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ url('blccenter/rongbualoy1_info') }}">
                    <img src="{{ asset('img_rbl/rbl_01_qr.png') }}" class="img-thumbnail person"
                        alt="Random Name" width="255" height="255">
                    <p>ร่องบัวลอย 1</p>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ url('blccenter/rongbualoy2_info') }}" >
                    <img src="{{ asset('img_rbl/rbl_02_qr.png') }}" class="img-thumbnail person"
                        alt="Random Name" width="255" height="255">
                    <p>ร่องบัวลอย 2</p>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ url('blccenter/salarongthongbualoy_info') }}" >
                    <img src="{{ asset('img_rbl/salaghong_qr.png') }}" class="img-thumbnail person"
                        alt="Random Name" width="255" height="255">
                    <p>ศาลาทองร่องบัวลอย</p>
                </a>
            </div>
        </div>


    </div>

</div>
<div id="map" class="">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

    <!-- Container (Contact Section) -->

    <h3 align="center">แผนที่</h3>
    <!-- 16:9 aspect ratio -->
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9156.472222849165!2d99.91550774366678!3d19.861421491221016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30d7a7e032852239%3A0x61facdc745b38c90!2sBan%20Rong%20Bua%20Roi%20School!5e1!3m2!1sen!2sth!4v1592655967391!5m2!1sen!2sth"></iframe>
    </div>
</div>
@endsection
