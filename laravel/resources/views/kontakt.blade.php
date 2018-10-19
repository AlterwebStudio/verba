@extends ('master')

@section ('content')


    <section class="section-40 section-md-60 section-lg-90 section-xl-120 bg-gray-dark page-title-wrap overlay-5" style="background-image: url(images/home-slider-1-slide-1.jpg);">
        <div class="container">
            <div class="page-title text-center">
                {{--<h2>Kontakty</h2>--}}
            </div>
        </div>
    </section>

    <section class="section-60 section-md-top-90 section-md-bottom-100">
        <div class="container">
            <div class="row row-50 justify-content-lg-between">
                <div class="col-lg-5 col-xl-4">
                    <div class="inset-lg-right-15 inset-xl-right-0">
                        <div class="row row-30 row-md-40">
                            <div class="col-md-10 col-lg-12">
                                <h3>Kde nás nájdete?</h3>
                            </div>
                            <div class="col-md-6 col-lg-12">
                                <h5>Kontaktné údaje</h5>
                                <address class="contact-info">
                                    <dl class="list-terms-inline">
                                        <dt>Pevná linka</dt>
                                        <dd><a class="link-secondary" href="tel:+421252444428">+421 2 524 444 28</a></dd>
                                    </dl>
                                    <dl class="list-terms-inline">
                                        <dt>Mobil</dt>
                                        <dd><a class="link-secondary" href="tel:+421902312055">+421 902 312 055</a></dd>
                                    </dl>
                                    <dl class="list-terms-inline">
                                        <dt>E-mail</dt>
                                        <dd><a class="link-primary" href="mailto:verbask@gmail.com">verba@verba.sk</a></dd>
                                    </dl>
                                </address>
                            </div>
                            <div class="col-md-6 col-lg-12">
                                <h5>Fakturačné údaje</h5>
                                <address class="contact-info">
                                    <p class="text-uppercase">Štefánikova 47, 811 04 Bratislava</p>
                                    <dl class="list-terms-inline">
                                        <dt>IČO</dt>
                                        <dd>35854499</dd>
                                    </dl>
                                    <dl class="list-terms-inline">
                                        <dt>DIČ</dt>
                                        <dd>2020 289 612</dd>
                                    </dl>
                                    <dl class="list-terms-inline">
                                        <dt>IČ DPH</dt>
                                        <dd>SK 2020 289 612</dd>
                                    </dl>
                                </address>
                            </div>
                            <div class="col-md-10 col-lg-12">
                                <p>V prípade projektov, ktoré si vyžadujú nutnosť kontaktu mimo oficiálnu pracovnú dobu, cez víkendy alebo sviatky, si, prosím, dohovorte individuálny režim s pracovníkmi našej agentúry, ktorí Vám radi vyjdú v ústrety.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-6">
                    <h3>Kontaktujte nás</h3>
                    <form class="rd-mailform form-modern" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                        <div class="row row-30">
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                                    <label class="form-label" for="contact-name">Meno</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                                    <label class="form-label" for="contact-email">E-mail</label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-wrap">
                                    <div class="textarea-lined-wrap">
                                        <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                                        <label class="form-label" for="contact-message">Vaša správa</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-30 row-offset-5">
                            <div class="col-sm-8">
                                <button class="button button-primary button-block" type="submit">Odoslať</button>
                            </div>
{{--                            <div class="col-sm-4">
                                <button class="button button-silver-outline button-block" type="reset">Zrušiť</button>
                            </div>--}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="google-map-container" data-zoom="15" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-styles="[{&quot;featureType&quot;:&quot;administrative.locality&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#2c2e33&quot;},{&quot;saturation&quot;:7},{&quot;lightness&quot;:19},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#ffffff&quot;},{&quot;saturation&quot;:-100},{&quot;lightness&quot;:100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#ffffff&quot;},{&quot;saturation&quot;:-100},{&quot;lightness&quot;:100},{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#bbc0c4&quot;},{&quot;saturation&quot;:-93},{&quot;lightness&quot;:31},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;labels&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#bbc0c4&quot;},{&quot;saturation&quot;:-93},{&quot;lightness&quot;:31},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;labels&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#bbc0c4&quot;},{&quot;saturation&quot;:-93},{&quot;lightness&quot;:-2},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#e9ebed&quot;},{&quot;saturation&quot;:-90},{&quot;lightness&quot;:-8},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#e9ebed&quot;},{&quot;saturation&quot;:10},{&quot;lightness&quot;:69},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#e9ebed&quot;},{&quot;saturation&quot;:-78},{&quot;lightness&quot;:67},{&quot;visibility&quot;:&quot;simplified&quot;}]}]">
            <div class="google-map"></div>
            <ul class="google-map-markers">
                <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png"></li>
            </ul>
        </div>
    </section>

@endsection