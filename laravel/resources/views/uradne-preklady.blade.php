@extends ('master')

@section ('content')

    <section class="section-40 section-md-60 section-lg-90 section-xl-120 bg-gray-dark page-title-wrap overlay-5"
             style="background-image: url(images/home-slider-1-slide-3.jpg); background-position: center -200px">
        <div class="container">
            <h2>úradné preklady</h2>
        </div>
    </section>

    <section class="section-60 section-md-90 section-xl-bottom-120">
        <div class="container">
            <div class="row row-offset-2 justify-content-md-center">
                <div class="col-xl-10">
                    <p>Úradne overený preklad, tiež nazývaný "<b>súdny preklad</b>", u laickej verejnosti známy ako "<b>preklad s guľatou pečiatkou</b>" je preklad, pri ktorom sa pôvodný dokument neoddeliteľne zviaže s prekladom a súdny prekladateľ svojim podpisom ručí za správnosť prekladu. Vyhotovuje sa štandardne v tlačenej podobe. V prípade úradného prekladu je potrebné doručiť nám originál dokumentu alebo jeho notársku kópiu (do zahraničia potvrdenú priamo notárom, nie zamestnancom notariátu).</p>
                    <p>Vo verejnosti dochádza často k šumu ohľadom účtovania týchto prekladov. Takže tu je krátky prehľad, ako správne určiť rozsah a cenu takéhoto prekladu: Ak je rozsah vášho dokumentu do 1800 znakov, zaplatíte za jednu celú stranu, bez ohľadu na počet fyzických strán. Môže sa teda pokojne stať, že za úradný preklad 2-stránkového výpisu z obchodného registra alebo za 4-stránkové potvrdenie o návšteve školy zaplatíte jednu normostranu.</p>
                    <p>Pokiaľ rozsah dokumentu prekračuje hranicu 1800 úderov, stále platí, že sa cena účtuje podľa počtu NORMOSTRÁN (teda 30 riadkov, každý po 60 úderov), nie podľa počtu fyzických strán, ktoré dokument obsahuje. Treba mať však na zreteli, že každá posledná neúplná strana sa považuje za jednu celú stranu.</p>
                    <p class="font-weight-bold">Opísané účtovanie je pre nás, samozrejme, záväzné.</p>
                    <p>V prípade potreby Vám poskytneme odbornú pomoc pri vybavení žiadosti o vstupné vízum do Slovenskej republiky alebo v súvislosti so zabezpečením povolenia na pobyt.</p>

                    <a class="button button-icon button-icon-right button-primary small buttons-inset-horizontal-15 py-2 float-left" href="mailto:verba@verba.sk"><span class="icon icon-xs fa-angle-right"></span>Pošlite nám vaše dokumenty e-mailom</a>
                    <a class="button button-icon button-icon-right button-secondary big buttons-inset-horizontal-15 float-right" href="{{ route('kontakt') }}"><span class="icon icon-xs fa-angle-right"></span>Máte ďalšie otázky?</a>
                </div>
            </div>
        </div>
    </section>

    @include ('partials.services')

@endsection