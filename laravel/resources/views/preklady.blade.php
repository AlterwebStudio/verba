@extends ('master')

@section ('content')

    <section class="section-40 section-md-60 section-lg-90 section-xl-120 bg-gray-dark page-title-wrap overlay-5"
             style="background-image: url(images/home-slider-1-slide-3.jpg); background-position: center -200px">
        <div class="container">
            <h2>preklady</h2>
        </div>
    </section>

    <section class="section-60 section-md-90 section-xl-bottom-120">
        <div class="container">
            {{--<h3 class="text-center">preklady</h3>--}}
            <div class="row row-offset-2 justify-content-md-center">
                <div class="col-xl-10">
                    <div class="card-group card-group-custom card-group-light" id="accordionOne" role="tablist"
                         aria-multiselectable="true">
                        <div class="card card-custom card-light">
                            <div class="card-heading" id="accordionOneHeading1" role="tab">
                                <div class="card-title"><a role="button" data-toggle="collapse"
                                                           data-parent="#accordionOne" href="#accordionOneCollapse1"
                                                           aria-controls="accordionOneCollapse1" aria-expanded="true">Technický
                                        preklad
                                        <div class="card-arrow"></div>
                                    </a></div>
                            </div>
                            <div class="card-collapse collapse show" id="accordionOneCollapse1" role="tabpanel"
                                 aria-labelledby="accordionOneHeading1">
                                <div class="card-body">
                                    <p class="text-gray-05">Ktorý prekladateľ je na vyhotovenie technického prekladu
                                        vhodnejší? Inžinier, ktorý je odborníkom v danej oblasti, alebo lingvista, ktorý
                                        chápe problematiku? V agentúre VERBA sa snažíme spojiť v pracovnom tandeme
                                        prekladateľ – korektor, ktorí na projekte pracujú, oba elementy. Na preklade
                                        pracuje prekladateľ – odborník, následne text koriguje lingvista, v prípade
                                        potreby rodený hovorca.</p>
                                    <p class="text-gray-05">Technické príručky, manuály, propagačné materiály, firemné
                                        brožúry, plagáty, analýzy vám po vyhotovení jazykovej mutácie následne
                                        profesionálne graficky spracujeme a vytvoríme identickú kópiu vami zaslaného
                                        originálneho dokumentu. Graficky spracovaný preklad Vám môžeme odovzdať v
                                        rôznych formátoch. Ak máte záujem o grafické spracovanie vašich materiálov pre
                                        digitálny či tlačový výstup, ponúkame vám túto službu i samostatne, bez väzby na
                                        preklad.</p>
                                    <a class="button button-icon button-icon-right button-primary small buttons-inset-horizontal-15 py-2 mt-4" href="mailto:verba@verba.sk"><span class="icon icon-xs fa-angle-right"></span>Pošlite nám vaše dokumenty e-mailom</a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-custom card-light">
                            <div class="card-heading" id="accordionOneHeading2" role="tab">
                                <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse"
                                                           data-parent="#accordionOne" href="#accordionOneCollapse2"
                                                           aria-controls="accordionOneCollapse2" aria-expanded="false">Právne,
                                        účtovné a finančné dokumenty
                                        <div class="card-arrow"></div>
                                    </a></div>
                            </div>
                            <div class="card-collapse collapse" id="accordionOneCollapse2" role="tabpanel"
                                 aria-labelledby="accordionOneHeading2">
                                <div class="card-body">
                                    <p class="text-gray-05">Prekladateľská agentúra VERBA má vynikajúcu základňu
                                        prekladateľov so skúsenosťami vo finančnej a účtovníckej oblasti. Ponúkame vám
                                        preklad účtovných závierok, súvah, finančných analýz, ale i kúpno-predajných
                                        zmlúv, zmluvných podmienok, prevodov obchodných podielov, nájomných zmlúv
                                        atď.</p>
                                    <a class="button button-icon button-icon-right button-primary small buttons-inset-horizontal-15 py-2 mt-4" href="mailto:verba@verba.sk"><span class="icon icon-xs fa-angle-right"></span>Pošlite nám vaše dokumenty e-mailom</a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-custom card-light">
                            <div class="card-heading" id="accordionOneHeading3" role="tab">
                                <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse"
                                                           data-parent="#accordionOne" href="#accordionOneCollapse3"
                                                           aria-controls="accordionOneCollapse3" aria-expanded="false">Preklady
                                        s potvrdením prekladateľskej agentúry VERBA
                                        <div class="card-arrow"></div>
                                    </a></div>
                            </div>
                            <div class="card-collapse collapse" id="accordionOneCollapse3" role="tabpanel"
                                 aria-labelledby="accordionOneHeading3">
                                <div class="card-body">
                                    <p class="text-gray-05">V prípade, že nepotrebujete úradný preklad (overený súdnym
                                        prekladateľom), ponúkame vám možnosť potvrdenia správnosti a hodnovernosti
                                        prekladu prekladateľskou agentúrou VERBA. Overenie prekladu prekladateľskou
                                        agentúrou VERBA garantuje, že preklad v plnej miere zodpovedá originálu a vyjde
                                        vás podstatne lacnejšie ako úradný preklad.</p>
                                    <a class="button button-icon button-icon-right button-primary small buttons-inset-horizontal-15 py-2 mt-4" href="mailto:verba@verba.sk"><span class="icon icon-xs fa-angle-right"></span>Pošlite nám vaše dokumenty e-mailom</a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-custom card-light">
                            <div class="card-heading" id="accordionOneHeading4" role="tab">
                                <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse"
                                                           data-parent="#accordionOne" href="#accordionOneCollapse4"
                                                           aria-controls="accordionOneCollapse4" aria-expanded="false">Skúšobný
                                        preklad
                                        <div class="card-arrow"></div>
                                    </a></div>
                            </div>
                            <div class="card-collapse collapse" id="accordionOneCollapse4" role="tabpanel"
                                 aria-labelledby="accordionOneHeading4">
                                <div class="card-body">
                                    <p class="text-gray-05">Prekladateľských agentúr je na trhu veľa. Ako si vybrať, aby
                                        ste boli s jej službami spokojní? Riešením môže byť skúšobný preklad. Slúži na
                                        to, aby ste si mohli overiť bezchybnú kvalitu prekladov prekladateľskej agentúry
                                        VERBA. Skúšobný preklad ponúkame klientom, ktorí majú záujem o dlhodobú
                                        spoluprácu s prekladateľskou agentúrou VERBA, alebo majú záujem o preklad viac
                                        ako 50 normostrán textu. Vyhotovuje sa zdarma a má rozsah do 1 normostrany.</p>
                                    <a class="button button-icon button-icon-right button-primary small buttons-inset-horizontal-15 py-2 mt-4" href="mailto:verba@verba.sk"><span class="icon icon-xs fa-angle-right"></span>Pošlite nám vaše dokumenty e-mailom</a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-custom card-light">
                            <div class="card-body">
                                <p class="font-weight-bold">Pokiaľ máte záujem o vyhotovenie skúšobného prekladu, spojte sa s nami telefonicky na číslach 02/52 4444 28 či 0902 312 055, alebo nám pošlite správu e-mailom na adresu verba@verba.sk</p>
                            </div>
                        </div>
                        <a class="button button-icon button-icon-right button-primary big buttons-inset-horizontal-15 float-right" href="{{ route('kontakt') }}"><span class="icon icon-xs fa-angle-right"></span>Máte ďalšie otázky?</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include ('partials.services')

@endsection