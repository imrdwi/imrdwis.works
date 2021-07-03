<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $title }} | imrdwi's works</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="imrdwi's works - Rizki Dwi Kurniawan's portfolio website" />
    <meta name="keywords" content="backend, mobile, website, developer" />
    <meta name="author" content="imrdwi" />

    <link rel="stylesheet" href="{{ asset('site/css/reset.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('site/css/bootstrap-grid.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('site/css/animations.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('site/css/perfect-scrollbar.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('site/css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('site/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('site/css/main.css') }}" type="text/css">

    <script src="{{ asset('site/js/modernizr.custom.js') }}"></script>
  </head>

  <body>
    <!-- Animated Background -->
    <div class="lm-animated-bg" style="background-image: url({{ asset('site/img/main_bg.png') }});"></div>
    <!-- /Animated Background -->

    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="preloader-spinner"></div>
      </div>
    </div>
    <!-- /Loading animation -->

    <div class="page">
      <div class="page-content">
        {{ $content }}
      </div>
    </div>

    <script src="{{ asset('site/js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('site/js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('site/js/animating.js') }}"></script>

    <script src="{{ asset('site/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <script src="{{ asset('site/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery.shuffle.min.js') }}"></script>
    <script src="{{ asset('site/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('site/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery.magnific-popup.min.js') }}"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANth-zh4qaRQb2utvQzFlbHxhkgUenny4"></script>
    <script src="{{ asset('site/js/jquery.googlemap.js') }}"></script>
    <script src="{{ asset('site/js/validator.js') }}"></script>
    <script src="{{ asset('site/js/main.js') }}"></script>
  </body>
</html>
