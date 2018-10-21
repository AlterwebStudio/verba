@extends ('master')

@section ('content')

    <section class="section-40 section-md-60 section-lg-90 section-xl-120 bg-gray-dark page-title-wrap overlay-5"
             style="background-image: url(images/home-slider-1-slide-3.jpg); background-position: center -200px">
        <div class="container">
            <h2>grafika</h2>
        </div>
    </section>

    <section class="section-60 section-md-90 section-xl-bottom-120">
        <div class="container">
            <div class="row row-offset-2 justify-content-md-center">
                <div class="col-xl-10">
                    <div class="card-group card-group-custom card-group-light" id="accordionOne" role="tablist"
                         aria-multiselectable="true">
                        <div class="card">
                            <div class="card-body">
                                <h6>Po vyhotovení a korektúre prekladu vášho textu sme pripravení zabezpečiť pre vás aj
                                    jeho vizuálne spracovanie vrátane prípravy pre tlačový výstup. Vytvoríme tak nielen
                                    dokonalú kópiu originálneho dokumentu, ale výstup pripravíme tak, aby boli vaše
                                    materiály použiteľné na ďalšiu prezentáciu.</p>
                            </div>
                        </div>
                        <div class="card card-custom card-light">
                            <div class="card-heading" id="accordionOneHeading1" role="tab">
                                <div class="card-title"><a role="button" data-toggle="collapse"
                                                           data-parent="#accordionOne" href="#accordionOneCollapse1"
                                                           aria-controls="accordionOneCollapse1" aria-expanded="true">
                                        Ako pracujeme a čo pre vás môžeme urobiť?
                                        <div class="card-arrow"></div>
                                    </a></div>
                            </div>
                            <div class="card-collapse collapse show" id="accordionOneCollapse1" role="tabpanel"
                                 aria-labelledby="accordionOneHeading1">
                                <div class="card-body">
                                    <p class="text-gray-05">V agentúre VERBA sme pripravení zabezpečiť komplexné
                                        grafické služby, pričom k jednotlivým neoddeliteľným fázam pristupujeme s
                                        ohľadom na vaše požiadavky, inak povedané, nemáme vytvorený zoznam služieb,
                                        ktoré sme schopní zabezpečiť, snažíme sa poskytnúť našim klientom všetky služby
                                        súvisiace s prekladom dokumentov do cudzích jazykov, k čomu častokrát pratrí
                                        aj kreatíva, alebo prispôsobenie vizuálu pre konkrétny trh (v rôznych častiach
                                        sveta osloví vašu cieľovú skupinu iná podoba vašich materiálov). Či už teda potrebujete graficky
                                    spracovať brožúru, leták, prospekt alebo knihu, výstupným formátom pre vás budú
                                    súbory, ktoré stačí preposlať reklamnej alebo printovej agentúre.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-custom card-light">
                            <div class="card-heading" id="accordionOneHeading2" role="tab">
                                <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse"
                                                           data-parent="#accordionOne" href="#accordionOneCollapse2"
                                                           aria-controls="accordionOneCollapse2" aria-expanded="false">
                                        Ako nám dodať podklady?
                                        <div class="card-arrow"></div>
                                    </a></div>
                            </div>
                            <div class="card-collapse collapse" id="accordionOneCollapse2" role="tabpanel"
                                 aria-labelledby="accordionOneHeading2">
                                <div class="card-body">
                                    <p class="text-gray-05">Ideálnou formou dodania vašich dokumentov je priame
                                        doručenie ich zdrojového súboru v editovateľnom formáte (neuzamknuté PDF, formát
                                        programu Adobe Illustrator - AI, Photoshop - PSD, Indesign - INDD...). Grafické
                                        spracovanie vašich dokumentov sme schopní pripraviť aj na základe originálnych
                                        materiálov dodaných fyzicky v tlačovej podobe.</p>
                                    <p class="text-gray-05">V prípade vášho záujmu o bezplatné vyhotovenie cenovej
                                        kalkulácie na grafické služby nás, prosím, <a href="{{ route('kontakt') }}" class="link d-inline">kontaktujte</a>. Ceny grafických služieb
                                        sa odvíjajú od náročnosti vizuálneho spracovania podkladových materiálov a ich
                                        celkového objemu. V prípade väčších objemov, či pravidelných odberov radi
                                        pristúpime k individuálnym partnerským podmienkam.</p>
                                </div>
                            </div>
                        </div>
                        <a class="button button-icon button-icon-right button-primary small buttons-inset-horizontal-15 py-2 float-left" href="mailto:verba@verba.sk"><span class="icon icon-xs fa-angle-right"></span>Pošlite nám vaše dokumenty e-mailom</a>
                        <a class="button button-icon button-icon-right button-secondary big buttons-inset-horizontal-15 float-right" href="{{ route('kontakt') }}"><span class="icon icon-xs fa-angle-right"></span>Máte ďalšie otázky?</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include ('partials.services')

@endsection