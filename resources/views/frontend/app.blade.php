
<!DOCTYPE HTML>
<html>
<head>  <title>@yield('title') - {{ config('app.name') }}</title>
{{-- <title>Furnyish Store a Ecommerce Category Flat Bootstarp Responsive Website Template | Home :: w3layouts</title> --}}
<link href="{{ asset('frontend/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="{{ asset('frontend/js/jquery-1.11.1.min.js') }}"></script>
<!-- Custom Theme files -->
<link href="{{ asset('frontend/css/style.css') }}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Furnish" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Montserrat|Raleway:400,200,300,500,600,700,800,900,100' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="{{ asset('frontend/css/megamenu.css') }}" rel="stylesheet" type="text/css" media="all" />
<script src="{{ asset('frontend/js/megamenu.js') }}"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="{{ asset('frontend/js/menu_jquery.js') }}"></script>
<script src="{{ asset('frontend/js/simpleCart.min.js') }}"> </script>
  <script src="{{ asset('frontend/js/responsiveslides.min.js') }}"></script>
  <script src="{{asset('frontend/js/jquery.etalage.min.js')}}"></script>
  <link rel="stylesheet" href="{{asset('frontend/css/etalage.css')}}">
  <script>
      jQuery(document).ready(function($){

        $('#etalage').etalage({
          thumb_image_width: 300,
          thumb_image_height: 400,
          source_image_width: 900,
          source_image_height: 1200,
          show_hint: true,
          click_callback: function(image_anchor, instance_id){
            alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
          }
        });

      });
    </script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 1
      $("#slider1").responsiveSlides({
         auto: true,
		 nav: true,
		 speed: 500,
		 namespace: "callbacks",
      });
    });
  </script>
@yield("scripts")
</head>
<body>
<!-- header -->
@include("frontend.partials.header")
@yield('content')
<!--Fotter-->
@include("frontend.partials.footer")
<!---->
</body>
</html>
