
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#myPage">แหล่งเรียนรู้อัตลักษณ์ทางวัฒนธรรม (ปราสาทศพ) บ้านร่องบัวลอย</a> </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/blccenter')}}">หน้าแรก</a></li>
        <li><a href="{{ url('/blccenter/history')}}">ประวัติชุมชน</a></li>
        <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">คติความเชื่อและวิวัฒนาการของปราสาท <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('/blccenter/blinfo001')}}">ความตาย : มูลแหตุเหตุการใช้ปราสาทศพ</a></li>
            <li><a href="{{ url('/blccenter/blinfo002')}}">แนวคิดเรื่องปราสาทศพในล้านนา</a></li>
            <li><a href="{{ url('/blccenter/blinfo003')}}">ประวัติความเป็นมาของปราสาทศพ</a></li>
            <li><a href="{{ url('/blccenter/blinfo004')}}">รูปแบบปราสาทศพ</a></li>
            <li><a href="{{ url('/blccenter/blinfo005')}}">การสร้างปราสาทศพพระสงฆ์ในล้านนา</a></li>
          </ul>
        </li>
        <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">ปราสาทศพบ้านร่องบัวลอย <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('blccenter/seree_info')}}">ร้านสล่ารัตน์ (ปราสาทเสรี)</a></li>
            <li><a href="{{ url('blccenter/rongbualoy1_info') }}">ร้านสล่าเสริฐ (ร่องบัวลอย 1)</a></li>
            <li><a href="{{ url('blccenter/rongbualoy2_info') }}">ร้านเจริญทอง (ร่องบัวลอย 2)</a></li>
            <li><a href="{{ url('blccenter/salarongthongbualoy_info') }}">ร้านสล่าอินจันทร์ (ศาลาทองร่องบัวลอย)</a></li>
          </ul>
        </li>
        <li><a href="{{ url('blccenter/map')}}">แผนที่</a></li>
      </ul>
    </div>
  </div>
</nav>
