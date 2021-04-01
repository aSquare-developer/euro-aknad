@extends('master')

@section('title', __('header.nav_window_page_wood') . ' - ' . config('app.name'))

@section('content')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section spad set-bg" data-setbg="/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h4>{{ __('header.nav_window_page_wood') }}</h4>
                    <div class="bt-option">
                        <a href="{{ route('home_page') }}"><i class="fa fa-home"></i> {{ __('header.nav_home_page') }}</a>
                        <span>{{ __('header.nav_window_page_wood') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- About Section Begin -->
<section class="about-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-text">
                    <div class="at-title">
                        <h3>Puit Aknad</h3>
                        <p>Puitaknad sobivad suurepäraselt igasse interjööri.
                          Selliseid aknaid eristab luksuslik välimus ja tänu puidu enda omadustele (puit on elav, hingav materjal)
                          säilib ruumis loomulik ventilatsioon. Meie sortimendis on männi-, meranti- ja tammepuust puitaknad.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
              <div class="card mb-4 box-shadow">
                <img class="rounded mx-auto d-block" alt="" src="/img/windows/puit-1.jpg">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card mb-4 box-shadow">
                <img class="rounded mx-auto d-block" alt="" src="/img/windows/puit-2.jpg">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card mb-4 box-shadow">
                <img class="rounded mx-auto d-block" alt="" src="/img/windows/puit-3.jpg">
              </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

@endsection
