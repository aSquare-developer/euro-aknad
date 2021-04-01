@extends('master')

@section('title', __('header.nav_gallery_page') . ' - ' . config('app.name'))

@section('content')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section spad set-bg" data-setbg="/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h4>{{ __('header.nav_gallery_page') }}</h4>
                    <div class="bt-option">
                        <a href="{{ route('home_page') }}"><i class="fa fa-home"></i> {{ __('header.nav_home_page') }}</a>
                        <span>{{ __('header.nav_gallery_page') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Property Section Begin -->
<section class="property-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="property-item">
                    <div class="pi-pic set-bg" data-setbg="/img/gallery/image-1.jpg"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="property-item">
                    <div class="pi-pic set-bg" data-setbg="/img/gallery/image-2.jpg"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="property-item">
                    <div class="pi-pic set-bg" data-setbg="/img/gallery/image-3.jpg"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="property-item">
                    <div class="pi-pic set-bg" data-setbg="/img/gallery/image-4.jpg"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="property-item">
                    <div class="pi-pic set-bg" data-setbg="/img/gallery/image-5.jpg"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="property-item">
                    <div class="pi-pic set-bg" data-setbg="/img/gallery/image-6.jpg"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="property-item">
                    <div class="pi-pic set-bg" data-setbg="/img/gallery/image-7.jpg"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="property-item">
                    <div class="pi-pic set-bg" data-setbg="/img/gallery/image-8.jpg"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="property-item">
                    <div class="pi-pic set-bg" data-setbg="/img/gallery/image-9.jpg"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="property-item">
                    <div class="pi-pic set-bg" data-setbg="/img/gallery/image-10.jpg"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="property-item">
                    <div class="pi-pic set-bg" data-setbg="/img/gallery/image-11.jpg"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Property Section End -->

@endsection
