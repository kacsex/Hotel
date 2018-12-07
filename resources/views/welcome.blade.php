<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">


    <link rel="stylesheet" href="{!! asset('theme/open-iconic-bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('theme/css/animate.css') !!}">

    <link rel="stylesheet" href="{!! asset('theme/css/owl.carousel.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('theme/css/owl.theme.default.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('theme/css/magnific-popup.css') !!}">


    <link rel="stylesheet" href="{!! asset('theme/css/aos.css') !!}">


    <link rel="stylesheet" href="{!! asset('theme/css/ionicons.min.css') !!}">


    <link rel="stylesheet" href="{!! asset('theme/css/bootstrap-datepicker.css') !!}">
    <link rel="stylesheet" href="{!! asset('theme/css/jquery.timepicker.css') !!}">


    <link rel="stylesheet" href="{!! asset('theme/css/flaticon.css') !!}">
    <link rel="stylesheet" href="{!! asset('theme/css/icomoon.css') !!}">
    <link rel="stylesheet" href="{!! asset('theme/css/style.css') !!}">


</head>
<body>
@include('_header')
@if(!Request::is('home') && !Request::is('login'))
    @include('_carousel')
@endif
@yield('_content')
@include('_footer')



<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>


<script src="{!! asset('theme/js/jquery.min.js') !!}"></script>
<script src="{!! asset('theme/js/jquery-migrate-3.0.1.min.js') !!}"></script>
<script src="{!! asset('theme/js/popper.min.js') !!}"></script>
<script src="{!! asset('theme/js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('theme/js/jquery.easing.1.3.js') !!}"></script>
<script src="{!! asset('theme/js/jquery.waypoints.min.js') !!}"></script>
<script src="{!! asset('theme/js/jquery.stellar.min.js') !!}"></script>
<script src="{!! asset('theme/js/owl.carousel.min.js') !!}"></script>
<script src="{!! asset('theme/js/jquery.magnific-popup.min.js') !!}"></script>
<script src="{!! asset('theme/js/aos.js') !!}"></script>
<script src="{!! asset('theme/js/jquery.animateNumber.min.js') !!}"></script>
<script src="{!! asset('theme/js/bootstrap-datepicker.js') !!}"></script>
<script src="{!! asset('theme/js/jquery.timepicker.min.js') !!}"></script>
<script src="{!! asset('theme/js/google-map.js') !!}"></script>
<script src="{!! asset('theme/js/main.js') !!}"></script>


</body>
</html>