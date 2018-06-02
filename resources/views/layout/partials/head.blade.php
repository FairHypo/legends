<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Legends') }}</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('/img/favicon.png') }}" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >
<link rel="stylesheet" href="{{ asset('css/icomoon-social.css') }}">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="{{ asset('css/leaflet.css') }}" />
<!--[if lte IE 8]>
<link rel="stylesheet" href="{{ asset('css/leaflet.ie.css') }}" />
<![endif]-->
<link rel="stylesheet" href="{{ asset('css/main.css') }}">

<script src="{{ asset('js/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
@yield('css')