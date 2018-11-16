@include('partials.meta')
@include('partials.header')
<main>
    <div class="row">
        <section class="section-01 float-left w-100 py-3">
                @yield('content')
        </section>
    </div>
</main>
@include('partials.footer2')
@include('partials.script')