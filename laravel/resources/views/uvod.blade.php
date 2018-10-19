@extends ('master')

@section ('content')

    {{--Slider--}}
    @include ('partials.slider')

    {{--Nase sluzby--}}
    @include ('partials.services')

    {{--Poslite nam dokument / Manazment kvality--}}
    @include ('partials.mission')

    {{--Cerpajte z nasich skusenosti--}}
    @include ('partials.why-clients-choose-us')

    {{--Nas tim--}}
    @include ('partials.our-team')

    {{--Do dnesneho dna sa nam podarilo--}}
    @include ('partials.statistics')

    {{--Vypocitajte si...--}}
    @include ('partials.investments')

    {{--Povedali o nas...--}}
    @include ('partials.testimonials')

    {{--Mohlo by vas zaujimat--}}
    @include ('partials.latest-news')

    {{--Referencie--}}
    @include ('partials.clients-logos')

@endsection