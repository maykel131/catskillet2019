<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Medical & health landing page templates for online appointment that help you to medical service & patient visit">
<meta name="author" content="">
<title>Wealth.life | Medical Landing Page Template</title>
<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="{{asset('catskillet/css/bootstrap.min.css')}}"  type="text/css">
<link rel="stylesheet" href="{{asset('catskillet/css/style.css')}}"  type="text/css">
<link rel="stylesheet" href="{{asset('catskillet/css/font-awesome.css')}}"  type="text/css">
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<!-- your favicon icon link -->
<link rel="shortcut icon" href="{{asset('catskillet/image/favicon.ico')}}" type="image/x-icon" />

<!-- Custom CSS -->

</head>
<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    @yield('content')
<div class="footer"><!-- footer section start -->
  <div class="container">
    <div class="row ft">
      <div class="col-md-9">
        <p> © Copyright 2014. All Rights Reserved by Wealth.life </p>
      </div>
      <div class="col-md-3"><p> <a href="#"> <i class="fa fa-facebook-square fa-size social-icon"> </i></a>
      <a href="#"> <i class="fa  fa-twitter-square  fa-size social-icon"> </i> </a>
      <a href="#"><i class="fa fa-google-plus-square fa-size social-icon"> </i></a> 
      <a href="#"><i class="fa fa-flickr fa-size social-icon"> </i></a> 
      <a href="#"><i class="fa fa-pinterest-square fa-size social-icon"> </i> </a></p></div>
    </div>
  </div>
</div><!-- footer section close -->

<!-- Core JavaScript Files --> 
<script src="{{asset('catskillet/js/jquery-1.10.2.js')}}"></script> 
<script src="{{asset('catskillet/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('catskillet/js/jquery.easing.min.js')}}"></script> 
<!-- Custom Theme JavaScript --> 
<script src="{{asset('catskillet/js/scrolling-nav.js')}}"></script> 
<script src="{{asset('catskillet/js/owl.carousel.js')}}"></script> 



<script>
  $("#owl-demo").owlCarousel({
    autoPlay: 3000, //Set AutoPlay to 3 seconds
    items : 4,
    itemsDesktop : [1199,3],
    itemsDesktopSmall : [979,3]
  });
</script>

</body>
</html>    