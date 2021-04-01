@extends('master')

@section('title', __('header.nav_home_page') . ' - ' . config('app.name'))

@section('content')

<!-- Hero Section Begin -->
<section class="hero-section">
    <div class="container">
        <div class="hs-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="/img/home-carousel/image-1.jpg"></div>
            <div class="hs-item set-bg" data-setbg="/img/home-carousel/image-2.jpg"></div>
            <div class="hs-item set-bg" data-setbg="/img/home-carousel/image-3.jpg"></div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<section class="blog-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 m-auto p-0">
                    <div class="blog-details-content">
                        <div class="bc-details">
                            <div class="bc-text">
                              <h4 class="mb-3">Kes, mis on EURO-AKNAD?</h4>

                                <p>Meie ettevõte teeb koostööd Euroopas asuva ukse- ja aknatehasega, kes on juhtiv
PVC-st tisleritoodete valmistaja maailmas ning peamine PVC-akende ja -uste
tootja Euroopas.
Meie toodangut on mugav kasutada ja lihtne hooldada. Toodetel on esteetiline
välimus ja need pakuvad piiramatult võimalusi arhitektuurilisteks lahendusteks.
Tehases on kasutusel uusimad tehnoloogiad, mis tagavad toodangu kõrge
kvaliteedi.
Toodangu kvaliteeti tõendavad EÜ vastavusdeklaratsioon, paljud rahvusvahelised
diplomid ja sertifikaadid.
Tehas annab oma toodangule minimaalse garantii 10 aastat ning selle põhimõtte
järgi töötame meiegi. Kõikidele meie toodetele kehtib sama pikk garantii, kuid
tegelikkuses kestavad need oluliselt kauem.
Meil on laias valikus aknaid välisfassaadile ja -ustele, samuti inglise stiilis aknaid
ning ärklikorruse aknaid.
Akende furnituur on pärit Saksa ettevõttest SIEGENIA AUBI, kes on juba aastaid
spetsialiseerunud akende ja uste furnituuri tootmisele professionaalsel tasemel.
Teeme koostööd ka ettevõttega, kes valmistab tellimustööna kaasaegseid ja väga
soojapidavaid puitaknaid (need on tuntud ka kui euroaknad või puitraamiga
klaaspakettaknad). Tulevaste aknaraamide materjalile mõeldes tasub valida
keskkonnasõbralikud puitaknad.
Kui teie jaoks on oluline looduslike materjalide kasutamine, maksimaalne
harmoonia ümbritseva keskkonnaga ning kodu soojapidavus, siis hindate kindlasti
meie männist või lehisest puitaknaid, mis on kaetud vesialuselise lakiga. Hästi
kuivatatud pruss ei vea alt ning vastupidav kate püsib ilma erihoolduseta üle 10
aasta, võimaldades ühtlasi puidul hoida meeldivat mikrokliimat.
Teeme koostööd ka garaažide ja tööstuslike sektsioonväravate, uste ja
sissesõiduväravate tootjaga. Tegemist on ettevõttega, kellel on suur siseturul ja
Euroopa turgudel tootmise ja kauplemise kogemus ning kes kuulub Kesk-Euroopa
suurimate väravatootjate hulka. Kvaliteetsete sektsioonväravate tootmise
tagavad kogu toodangule kehtiv TÜV sertifikaat ja kvaliteedijuhtimissüsteem ISО
9001:2008. Kasutusohutus tagatakse range Euroopa standardiga EN 13241-1.
Garaaži- ja tööstuslikud väravad valmistatakse täpselt mõõtude järgi ning sellega

saavutatakse maksimaalselt kvaliteetne avause katmine. Ettevõte annab oma
toodangule 5-aastase garantii.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
