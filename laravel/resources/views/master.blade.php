<!DOCTYPE html>
<html class="wide wow-animation" lang="{{ app()->getLocale() }}">
<head>

    <title>Verba Peregra - prekladateľská agentúra</title>

    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">

    <link rel="icon" href="images/favicon-1.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Arvo:400,700%7COpen+Sans:300,300italic,400,400italic,700italic,800%7CUbuntu:500">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Bree+Serif">
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/2.8.94/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    @include ('partials.additional-header')

</head>
<body>
<div class="page">

    @include ('partials.preloader')

    @include ('partials.header')

    @yield ('content')

    @include ('partials.footer')

</div>

@include ('partials.footer-scripts')

</body>
</html>