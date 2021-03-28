@extends('master')

@section('title', 'PVC Aknad' .' - '. config('app.name'))

@section('content')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section spad set-bg" data-setbg="/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h4>PVC Aknad</h4>
                    <div class="bt-option">
                        <a href="{{ route('home_page') }}"><i class="fa fa-home"></i> Home</a>
                        <span>PVC Aknad</span>
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
                        <h3>PVC Aknad</h3>
                        <p>GEALAN Innovation mit süsteem. Me kujundame aknamaailma raamistiku
                          Kujundame ja toodame kõige uuenduslikumaid akende ja uste profiilisüsteeme,
                          pindu ja digitaalseid lahendusi.</p>
                        <p>Kõik PVC aknad pole ühesugused. GEALANi uusima põlvkonna profiilisüsteemide akendes
                          keskendume mitte ainult välimusele.
                          Peenima detailini välja töötatud keeruline profiilgeomeetria vastab kõrgeimatele tehnilistele nõuetele.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
              <div class="mb-4">
                <img class="rounded mx-auto d-block" alt="" src="/img/windows/pvc-aknad-1.jpg">
              </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="about-text">
                    <div class="at-title">
                        <h3>GEALAN-SMOOVIO</h3>
                        <p>GEALANi uuenduslik lükandsüsteem. Elamispind on väärtuslik, seetõttu tuleks seda võimalikult hästi kasutada.
                          GEALAN-SMOOVIO ühendab esmakordselt lükandavate lahenduste ruumisäästlikku mugavust erakordselt kompaktse disainiga.
                          See on võimalik tänu uuendatud hingeosade, uudse profiiligeomeetria ja optimeeritud tihendite sünergiale.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
              <div class="mb-4">
                <img class="rounded mx-auto d-block" alt="" src="/img/windows/pvc-aknad-2.jpg">
              </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="about-text">
                    <div class="at-title">
                        <h3>GEALAN-KUBUS®</h3>
                        <p>Lihtsalt ilusad aknad.
                          GEALAN-KUBUS® süsteem määratleb arhitektuuris PVC-akende uue disainikeele.
                          Suurte klaaspindade suurem valgus ja läbipaistvus avavad uusi disainivõimalusi.
                          Seestpoolt veenab uus süsteem ühtlase vaatega, häirimata liigeseid,
                          samal ajal kui täisnurga kattuvus rõhutab harmoonilist üldmuljet.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
              <div class="mb-4">
                <img class="rounded mx-auto d-block" alt="" src="/img/windows/pvc-aknad-3.jpg">
              </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-6">
                <div class="about-text">
                    <div class="at-title">
                        <h3>GEALAN-FUTURA®</h3>
                        <p>Passiivmajaga ühilduv aken, nüüd ka värviline.
                          GEALAN-FUTURA® on üksikprofiilide kombinatsioon S 9000 süsteemis.
                          See pakub võimalust ehitada passiivmajaga ühilduvad aknaelemendid,
                          sealhulgas värvilised, vastavalt ift-direktiivile WA-15/2,
                          kasutades standardprofiile ja standardseid 2 mm terasest jäikuseelemente.
                          Sertifitseeritud Uf väärtus 0,89 W / (m²K) kinnitab silmapaistvaid soojusisolatsiooni põhiomadusi.
                          STAL®-i liimimistehnoloogia kasutamisel on GEALAN-FUTURA® abil võimalikud maksimaalsed aknaraami mõõtmed kuni 2,40 m.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-4">
                <img class="rounded mx-auto d-block" alt="" src="/img/windows/pvc-aknad-4.jpg">
              </div>
            </div>
        </div>

        <div class="row mt-5">
          <div class="col-lg-6">
            <div class="mb-4">
              <img class="rounded mx-auto d-block" alt="" src="/img/windows/pvc-aknad-5.jpg">
            </div>
          </div>
          <div class="col-lg-6">
              <div class="about-text">
                  <div class="at-title">
                      <h3>S 8000 IQ profiilisüsteem</h3>
                      <p>Täiusliku elukeskkonna jaoks. Profiilisüsteem S 8000 IQ näitab GEALANi järjekindlat
                        keskendumist turu vajadustele.
                        Selle tagasivoolu tihendite ja 74 mm paigaldussügavusega süsteemi arendamise eesmärk oli
                        luua kulutõhus profiil optimaalsete materjalide kasutamisega, et aknatootjad saaksid seda
                        hõlpsamalt ja tõhusamalt valmistada.</p>
                  </div>
              </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-lg-6">
            <div class="mb-4">
              <img class="rounded mx-auto d-block" alt="" src="/img/windows/pvc-akna-laud.jpg">
            </div>
          </div>
          <div class="col-lg-6">
              <div class="about-text">
                  <div class="at-title">
                      <h3>Sisemised PVC aknalauad on valmistatud kvaliteetsest plastikust</h3>
                      <p>Tehnilised omadused:</p>
                      <ul class="ml-3">
                        <li>Laius: 50–600 mm</li>
                        <li>Paksus: 20/40 mm</li>
                        <li>Maksimaalne pikkus: 6000 mm</li>
                        <li>Dekoratiivpind lamineeritakse 200 mikronise kilega</li>
                        <li>On lai värvivalik</li>
                        <li>Soovitatav paigaldada kõrge õhuniiskusega ruumidesse</li>
                        <li>Vastupidav mehaanilistele ja välistele mõjudele</li>
                        <li>Raskesti süttiv ja vastupidav pikaajalistele termilistele koormustele</li>
                      </ul>
                  </div>
              </div>
          </div>
        </div>


    </div>
</section>
<!-- About Section End -->
@endsection
