@extends('master')

@section('title', __('header.nav_contact_page') . ' - ' . config('app.name'))

@section('content')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section spad set-bg" data-setbg="/img/breadcrumb-contact-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h4>{{ __('header.nav_contact_page') }}</h4>
                    <div class="bt-option">
                        <a href="{{ route('home_page') }}"><i class="fa fa-home"></i> {{ __('header.nav_home_page') }}</a>
                        <span>{{ __('header.nav_contact_page') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

@if (session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{ session()->get('success') }}
  </div>
@endif

<!-- Contact Form Section Begin -->
<section class="contact-form-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cf-content">
                    <div class="cc-title">
                        <h4>{{ __('contact-page.contact_form_tile') }}</h4>
                        <p>{{ __('contact-page.contact_form_subtitle') }}</p>
                    </div>
                    @if(count($errors) > 0 )
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <ul class="p-0 m-0" style="list-style: none;">
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route('submit_contact_form') }}" method="POST" class="cc-form">
                      @csrf
                        <div class="group-input">
                            <input type="text" name="name" placeholder="{{ __('contact-page.contact_form_name') }}">
                            <input type="text" name="email" placeholder="{{ __('contact-page.contact_form_email') }}">
                            <input type="text" name="phone" placeholder="{{ __('contact-page.contact_form_phone') }}">
                        </div>
                        <textarea name="message" placeholder="{{ __('contact-page.contact_form_message') }}"></textarea>
                        <button type="submit" class="site-btn">{{ __('contact-page.contact_form_send_btn_title') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Form Section End -->

@endsection
