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
            <h4> ...so zabezpečením tlmočníckej techniky</h4>
            <div class="row row-offset-2 justify-content-md-center">
                <div class="col-xl-10">
                    <p><b>Konzekutívne tlmočenie</b> je dávno využívaným a najpoužívanejším spôsobom tlmočenia. Využíva sa pri dorozumení malého počtu zúčastnených alebo na menších konferenciách s malým počtom účastníkov. Jeho výhody sú v tom, že k nemu nie je potrebná technika (špeciálne kabíny, slúchadlá), mínusom – nevyhnutné pauzy v prejave hovoriaceho, aby tlmočník mohol preložiť fragment reči.</p>
                    <p><b>Tlmočenie</b> môže byť jednosmerné i obojsmerné. Obojsmerné tlmočenie si vyžaduje umenie rýchlo sa preorientovať z jedného jazyka na druhý a tiež nevyhnutnú perfektnú znalosť oboch jazykov. Preto nie je zvláštnosťou, ak si na obchodné stretnutie zoberie každá strana svojho tlmočníka. Eliminuje sa tým riziko nesprávnej interpretácie a následného nesprávneho pochopenia na minimum.</p>
                    <p>Simultánne tlmočenie je známe od Norimberského procesu z roku 1945. Vôbec prvýkrát sa použil tento spôsob vzhľadom na nutnosť prekladať naraz do niekoľkých jazykov (nemčina, angličtina, francúzština a ruština).</p>
                    <p class="font-weight-bold">Celý článok nájdete tu: <a href="http://www.sochorek.cz/cz/pr/blog/1161471603-norimbersky-proces-zrozeni-simultanniho-tlumoceni.htm" class="link d-inline">http://www.sochorek.cz/cz/pr</a>...</p>
                    <a class="button button-icon button-icon-right button-primary small buttons-inset-horizontal-15 py-2 float-left" href="mailto:verba@verba.sk"><span class="icon icon-xs fa-angle-right"></span>Pošlite nám vaše dokumenty e-mailom</a>
                    <a class="button button-icon button-icon-right button-secondary big buttons-inset-horizontal-15 float-right" href="{{ route('kontakt') }}"><span class="icon icon-xs fa-angle-right"></span>Máte ďalšie otázky?</a>
                </div>
            </div>
        </div>
    </section>

    @include ('partials.services')

@endsection