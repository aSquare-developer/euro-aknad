@extends('master')

@section('title', __('header.nav_window_page') . ' - ' . config('app.name'))

@section('content')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section spad set-bg" data-setbg="/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h4>{{ __('header.nav_window_page') }}</h4>
                    <div class="bt-option">
                        <a href="{{ route('home_page') }}"><i class="fa fa-home"></i> {{ __('header.nav_home_page') }}</a>
                        <span>{{ __('header.nav_window_page') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<section class="property-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h4>{{ __('header.nav_window_page') }}</h4>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4">
                  <a href="{{ route('windows_alumiinium_page') }}">
                    <div class="card mb-4 box-shadow">
                      <img class="card-img-top" alt="" src="/img/windows/alumiinium.jpg">
                      <div class="card-body">
                        <h4>{{ __('header.nav_window_page_aluminium') }}</h4>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="col-md-4">
                  <a href="{{ route('windows_puit_alumiinium_page') }}">
                    <div class="card mb-4 box-shadow">
                      <img class="card-img-top" alt="" src="/img/windows/puit-alumiinium.jpg">
                      <div class="card-body">
                        <h4>{{ __('header.nav_window_page_wood_aluminium') }}</h4>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="col-md-4">
                  <a href="{{ route('windows_puit_aknad_page') }}">
                    <div class="card mb-4 box-shadow">
                      <img class="card-img-top" alt="" src="/img/windows/puit.jpg">
                      <div class="card-body">
                        <h4>{{ __('header.nav_window_page_wood') }}</h4>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="col-md-4">
                  <a href="{{ route('windows_pvc_aknad_page') }}">
                    <div class="card mb-4 box-shadow">
                      <img class="card-img-top" alt="" src="/img/windows/pvc-aknad.jpg">
                      <div class="card-body">
                        <h4>{{ __('header.nav_window_page_pvc') }}</h4>
                      </div>
                    </div>
                  </a>
                </div>

            </div>
        </div>
    </section>

@endsection
