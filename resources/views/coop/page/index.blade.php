@extends('coop.layouts.main')
@section('title','สหกิจศึกษาสำนักวิชาสังคมศาสตร์')
@section('content')
<section class="container">
    <div class="tile is-ancestor">
        <div class="tile is-parent is-8">
            <article class="tile is-child box">
                <div class="columns">
                    <div class="column">
                        <p class="title has-text-link"><i class="far fa-newspaper"></i> ข่าวประชาสัมพันธ์</p>
                        <hr>
                        <div class="content">
                            <article class="media">
                                <figure class="media-left">
                                    <p class="image is-64x64">
                                        <img src="https://bulma.io/images/placeholders/128x128.png">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <div class="content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna
                                        eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam
                                        finibus odio quis feugiat facilisis.
                                    </div>
                                </div>
                            </article>
                            <article class="media">
                                <figure class="media-left">
                                    <p class="image is-64x64">
                                        <img src="https://bulma.io/images/placeholders/128x128.png">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <div class="content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna
                                        eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam
                                        finibus odio quis feugiat facilisis.
                                    </div>
                                </div>
                            </article>
                            <article class="media">
                                <figure class="media-left">
                                    <p class="image is-64x64">
                                        <img src="https://bulma.io/images/placeholders/128x128.png">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <div class="content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna
                                        eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam
                                        finibus odio quis feugiat facilisis.
                                    </div>
                                </div>
                            </article>
                            <div class="control">
                                <button class="button is-light"> ข่าวทั้งหมด &nbsp;<i
                                        class="fas fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <p class="title has-text-info"><i class="far fa-image"></i> ภาพกิจกรรม</p>
                        <hr>
                        <div class="content">
                            <article class="media">
                                <figure class="media-left">
                                    <p class="image is-64x64">
                                        <img src="https://bulma.io/images/placeholders/128x128.png">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <div class="content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna
                                        eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam
                                        finibus odio quis feugiat facilisis.
                                    </div>
                                </div>
                            </article>
                            <article class="media">
                                <figure class="media-left">
                                    <p class="image is-64x64">
                                        <img src="https://bulma.io/images/placeholders/128x128.png">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <div class="content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna
                                        eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam
                                        finibus odio quis feugiat facilisis.
                                    </div>
                                </div>
                            </article>
                            <article class="media">
                                <figure class="media-left">
                                    <p class="image is-64x64">
                                        <img src="https://bulma.io/images/placeholders/128x128.png">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <div class="content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna
                                        eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam
                                        finibus odio quis feugiat facilisis.
                                    </div>
                                </div>

                            </article>
                            <div class="control has-icons-right">
                                <button class="button is-light"> ข่าวทั้งหมด &nbsp;<i
                                        class="fas fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

            </article>
        </div>
        {{--  <div class="tile is-parent ">
              <article class="tile is-child box">
                <p class="title">Main column</p>
                <p class="subtitle">With some content</p>
                <div class="content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                </div>
              </article>

            </div> --}}
        <article class="tile is-child">
            <article class="panel is-primary">
                <p class="panel-heading">
                    เกี่ยวกับสหกิจศึกษา
                </p>
                <a class="panel-block">
                    <span class="panel-icon has-text-primary">
                        <i class="fas fa-arrow-circle-right" aria-hidden="true"></i>
                    </span>
                    ความเป็นมาของสหกิจศึกษา
                </a>
                <a class="panel-block">
                    <span class="panel-icon has-text-primary">
                        <i class="fas fa-arrow-circle-right" aria-hidden="true"></i>
                    </span>
                    วัตถุประสงค์สหกิจศึกษา
                </a>
                <a class="panel-block">
                    <span class="panel-icon has-text-primary">
                        <i class="fas fa-arrow-circle-right" aria-hidden="true"></i>
                    </span>
                    ขั้นตอนการดำเนินงานสหกิจศึกษา
                </a>
                <a class="panel-block">
                    <span class="panel-icon has-text-primary">
                        <i class="fas fa-arrow-circle-right" aria-hidden="true"></i>
                    </span>
                    ประกาศเกี่ยวข้องกับสหกิจศึกษา
                </a>
                <a class="panel-block">
                    <span class="panel-icon has-text-primary">
                        <i class="fas fa-arrow-circle-right" aria-hidden="true"></i>
                    </span>
                    คู่มือสหกิจ
                </a>
                <a class="panel-block">
                    <span class="panel-icon has-text-primary">
                        <i class="fas fa-arrow-circle-right" aria-hidden="true"></i>
                    </span>
                    ปฏิทินสหกิจศึกษา ปีการศึกษา 2562
                </a>
                <a class="panel-block">
                    <span class="panel-icon has-text-primary">
                        <i class="fas fa-arrow-circle-right" aria-hidden="true"></i>
                    </span>
                    แบบประเมินสหกิจศึกษาสำหรับสถานประกอบการ
                </a>
            </article>
            <article class="panel is-info">
                <p class="panel-heading">
                    ระบบจัดการสหกิจศึกษา
                </p>
                <a class="panel-block">
                    <span class="panel-icon has-text-info">
                        <i class="fas fa-arrow-circle-right" aria-hidden="true"></i>
                    </span>
                    ลงทะเบียนสหกิจศึกษา
                </a>
                <a class="panel-block">
                    <span class="panel-icon has-text-info">
                        <i class="fas fa-arrow-circle-right" aria-hidden="true"></i>
                    </span>
                    เข้าระบบสำหรับนักศึกษา
                </a>
                <a class="panel-block">
                    <span class="panel-icon has-text-info">
                        <i class="fas fa-arrow-circle-right" aria-hidden="true"></i>
                    </span>
                    เข้าระบบสำหรับอาจารย์/เจ้าหน้าาที่
                </a>
            </article>
        </article>

    </div>



    <div class="tile is-ancestor">
        <div class="tile is-vertical is-8">
            <div class="tile is-parent">
                <article class="tile is-child box">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3314670.7382688476!2d101.22516347672858!3d15.243597572235874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sth!4v1597126048453!5m2!1sen!2sth" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </article>
            </div>
        </div>
        <div class="tile is-parent">
            <article class="tile is-child">
                    <article class="panel is-light">
                        <p class="panel-heading">
                            ดาวน์โหลดเอกสาร
                        </p>
                        <a class="panel-block">
                            <span class="panel-icon has-text-info">
                                <i class="fas fa-arrow-circle-right" aria-hidden="true"></i>
                            </span>
                            เอกสารสำหรับนักศึกษา
                        </a>
                        <a class="panel-block">
                            <span class="panel-icon has-text-info">
                                <i class="fas fa-arrow-circle-right" aria-hidden="true"></i>
                            </span>
                            เอกสารสำหรับอาจารย์
                        </a>
                        <a class="panel-block">
                            <span class="panel-icon has-text-info">
                                <i class="fas fa-arrow-circle-right" aria-hidden="true"></i>
                            </span>
                            เอกสารสำหรับสถานประกอบการ
                        </a>
                    </article>
            </article>
        </div>
    </div>

</section>
@endsection
