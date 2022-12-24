<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--favicon-->
<link rel="icon" href="{{ asset('v1/assets/images/favicon-32x32.webp') }}" type="image/webp" />

<!-- CSS files -->
<link href="{{ asset('v1/assets/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<!-- Plugins -->
<link rel="stylesheet" type="text/css" href="{{ asset('v1/assets/plugins/slick/slick.css')}}" />
<link rel="stylesheet" type="text/css" href="{{ asset('v1/assets/plugins/slick/slick-theme.css')}}" />


@if (App::getLocale() == 'en')


<link href="{{ asset('v1/assets/css/style.css')}}" rel="stylesheet">
<link href="{{ asset('v1/assets/css/dark-theme.css')}}" rel="stylesheet">

@else


<link href="{{ asset('v1/assets/css/rtl.css') }}" rel="stylesheet">
<link href="{{ asset('v1/assets/css/rtl.dark-theme.css')}}" rel="stylesheet">

@endif
