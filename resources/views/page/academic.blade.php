@extends('layouts.page')
@section('content')
<div class="container-fluid">
    <div class="row m-4">
        <div class="col-md-12 col-sm-12 mb-3 col-lg-12">
            <hr class="featurette-divider">

            <div class="row featurette">
              <div class="col-md-7">
                <a href="{{ url('/blccenter')}}" target="_blank">
                <h2 class="featurette-heading">แหล่งเรียนรู้อัตลักษณ์ทางวัฒนธรรม (ปราสาทศพ)
                    <span class="text-muted">บ้านร่องบัวลอย</span></h2></a>
                <p class="lead">วัฒนธรรมการนำศพขึ้นวางบนปราสาทมาใช้ประกอบพิธีศพ ซึ่งการสร้างปราสาทในแต่ละพื้นที่จะมีการสร้างที่แตกต่างกันออกไป มีรูปทรงและเทคนิควิธีการสร้างสรรค์ผลงานของตนเองที่เป็นเอกลักษณ์เฉพาะถิ่น ซึ่งก็มีผลมาจากโลกทัศน์บนพื้นฐานของพุทธจารีต ภูมิปัญญาและองค์ความรู้ประจำท้องถิ่นส่งผลให้เกิดความหลากหลายของภูมิปัญญาที่ได้รับการถ่ายทอดจากบรรพชนที่มีต่อความศรัทธาและความเชื่อต่อพิธีกรรมและศาสนา จึงนับเป็นมรดกทางภูมิปัญญาที่คุณค่าต่อการสืบสาน เรื่องราวที่เกี่ยวข้องกับปราสาทศพจึงเป็นการมองเห็นคุณค่าทางมรดกวัฒนธรรมของคนในภูมิภาคล้านนา ที่ถือว่าเป็นงานประดิษฐ์และการสร้างสรรค์ทางศิลปะ เป็นภูมิปัญญาและเกี่ยวข้องกับคติความเชื่อในเรื่องของความตาย เป็นเครื่องหมายแห่งความศรัทธาแฝงไปด้วยนัยอันลึกซึ้งละเอียดอ่อนของระบบคิดและคติความเชื่อในเรื่องของชีวิตหลังความตายผสมผสานกับหลักธรรมคำสอนตามแนวพุทธปรัชญาในเรื่องของสัจธรรมของชีวิต การอนุรักษ์และการเก็บรวมรวบข้อมูลของรูปทรงปราสาทศพจึงเป็นการสืบสานและอนุรักษ์องค์ความรู้และภูมิปัญญาในเรื่องของศิลปวัตถุไว้ก่อนที่จะสูญหายไปกับกาลเวลาที่เปลี่ยนแปลงไป</p>
              </div>
              <div class="col-md-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="{{ asset('img_rbl/89090682_1073262836370406_8945739758793916416_o-16-9.jpg') }}" alt="New York" width="1200"
                height="700">
              </div>
            </div>

            <hr class="featurette-divider">
        </div>

    </div>
</div>
@endsection
