@extends('master')

@section('title', 'Puit-Alumiinium Aknad' .' - '. config('app.name'))

@section('content')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section spad set-bg" data-setbg="/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h4>Puit-Alumiinium Aknad</h4>
                    <div class="bt-option">
                        <a href="{{ route('home_page') }}"><i class="fa fa-home"></i> Home</a>
                        <span>Puit-Alumiinium Aknad</span>
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
                        <h3>Alumiinium Aknad</h3>
                        <p>Alumiiniumaknad sobivad suurepäraselt nii tööstus-, avalike kui ka eluruumide jaoks.
                          Selliseid aknaid eristab nende eriline vastupidavus ja tuleohutus.
                          Kõrgtugevad alumiiniumkonstruktsioonid teenivad teid aastakümneid.
                          Pakume alumiiniumaknaid kahest süsteemist: Aliplast Econoline ja Aliplast Imperial (Belgia).
                          Alumiiniumakende jaoks saate valida mis tahes värvi RAL-paletist.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
              <div class="card mb-4 box-shadow">
                <img class="rounded mx-auto d-block" alt="" src="/img/windows/puit-alumiinium.jpg">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card mb-4 box-shadow">
                <img class="rounded mx-auto d-block" alt="" src="/img/windows/puit-alumiinium-2.jpg">
              </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

@endsection
