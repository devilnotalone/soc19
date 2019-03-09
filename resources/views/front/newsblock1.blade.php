<div class="container">
    <div class="row">
        <div class="col l6 m12 s12">
            <div class="divider"></div>
            <div class="section">
                <div class="card horizontal">
                    <div class="card-image">
                        <img src="https://lorempixel.com/200/190/nature/6">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title">Card Title</span>
                            <p>I am a very simple card. I am good at containing small bits of information.</p>
                        </div>
                    </div>
                </div>
                <div class="card horizontal">
                    <div class="card-image">
                        <img src="https://lorempixel.com/200/190/nature/6">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="divider"></div>
            <div class="section">
                <h5>Section 2</h5>
                <p>Stuff</p>
            </div>
            <div class="divider"></div>
            <div class="section">
                <h5>Section 3</h5>
                <p>Stuff</p>
            </div>
        </div>
        <div class="col l6 m12 s12">22</div>
    </div>
</div>

<div class="container">
    <section class="section">
        <div class="columns">
            <div class="column is-half">
                @foreach ($news_1 as $news1)
                <div class="columns has-same-height is-gapless">
                    <div class="column is-one-quarter">
                        <!-- Picture -->
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-5by3">
                                    <img src="{{ Voyager::image($news1->image)}}">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <article class="media">
                                <div class="media-content">
                                    <div class="content has-text-justified">
                                        <p>
                                            <strong><a href="{{ url("news/$news1->id")}}">
                                                    {{ str_limit($news1->title,50) }}</a></strong><small>
                                                31m</small>
                                            <br>
                                            {!! str_limit($news1->body,150) !!}
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                @endforeach
                <hr>
            </div>
            <div class="column">
                11
            </div>
        </div>
    </section>
</div>

<div class="card">
    <div class="card-image">
        <figure class="image is-4by3">
            <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
        </figure>
    </div>
    <div class="card-content">
        <div class="media">
            <div class="media-left">
                <figure class="image is-48x48">
                    <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                </figure>
            </div>
            <div class="media-content">
                <p class="title is-4">John Smith</p>
                <p class="subtitle is-6">@johnsmith</p>
            </div>
        </div>

        <div class="content">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Phasellus nec iaculis mauris. <a>@bulmaio</a>.
            <a href="#">#css</a> <a href="#">#responsive</a>
            <br>
            <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
        </div>
    </div>
</div>
<div class="container-fluid mt-2 mb-2">
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project wow animated animated4 fadeInLeft">
        <a href="#" class="soc-link3">
            <div class="project-hover">
                <h2>TITLE</h2>
                <hr />
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar ex pulvinar est laoreet
                    ullamcorper.</p>
            </div>
        </a>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project project-2 wow animated animated3 fadeInLeft">
        <a href="#" class="soc-link3">
            <div class="project-hover">
                <h2>TITLE</h2>
                <hr />
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar ex pulvinar est laoreet
                    ullamcorper.</p>
            </div>
        </a>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project project-3 wow animated animated2 fadeInLeft">
        <a href="#" class="soc-link3">
            <div class="project-hover">
                <h2>TITLE</h2>
                <hr />
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar ex pulvinar est laoreet
                    ullamcorper.</p>
            </div>
        </a>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project project-4 wow animated fadeInLeft">
        <a href="#" class="soc-link3">
            <div class="project-hover">
                <h2>TITLE</h2>
                <hr />
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar ex pulvinar est laoreet
                    ullamcorper.</p>
            </div>
        </a>
    </div>
    <div class="clearfix"></div>
</div>
