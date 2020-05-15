<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
    	<!-- meta charec set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- Page Title -->
        <title>Themefisher.Free Bootstrap3 based HTML5 Templates</title>		
		<!-- Meta Description -->
        <meta name="description" content="Blue One Page Creative HTML5 Template">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Muhammad Morshed">
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Google Font -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- jquery.fancybox  -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
		<!-- animate -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
		<!-- media-queries -->
        <link rel="stylesheet" href="css/media-queries.css">

       

		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>
        <script src="https://kit.fontawesome.com/148c79482e.js" crossorigin="anonymous"></script>

    </head>
	
    <body id="body">
        
     @yield('content')

     	<!-- footer social links -->
         <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 wow fadeInRight animated" data-wow-duration="500ms" data-wow-delay="600ms">
            <ul class="footer-social">
                @foreach ($social->slice(0,4) as $social)
                <li><a href="https://www.behance.net/Themefisher"><i class="{{$social->name}} fa-2x"></i></a></li>
                @endforeach
                {{-- <li><a href="https://www.behance.net/Themefisher"><i class="fa fa-behance fa-2x"></i></a></li> --}}
                {{-- <li><a href="https://www.twitter.com/Themefisher"><i class="fa fa-twitter fa-2x"></i></a></li>
                <li><a href="https://dribbble.com/themefisher"><i class="fa fa-dribbble fa-2x"></i></a></li>
                <li><a href="https://www.facebook.com/Themefisher"><i class="fa fa-facebook fa-2x"></i></a></li> --}}
            </ul>
        </div>
        <!-- end footer social links -->
        
    </div>
</div>

<!-- Google map -->
 {{-- <div id="map_canvas" class="wow bounceInDown animated" data-wow-duration="500ms"></div> --}}
 @foreach ($map as $map)
 <iframe id="map_canvas" class="wow bounceInDown animated" data-wow-duration="500ms" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2518.693144298493!2d4.339036315916256!3d50.855366365986335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c38c275028d3%3A0xc7799151146ebf77!2s{{$map->location}}!5e0!3m2!1sfr!2sbe!4v1589375182780!5m2!1sfr!2sbe" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> 
 @endforeach

<!-- End Google map -->

</section>

<!--
End Contact Us
==================================== -->


<footer id="footer" class="footer">
<div class="container">
    <div class="row">
    
        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
            @foreach ($footer->slice(0,1) as $footer)
            <div class="footer-single">
                <img src="img/footer-logo.png" alt="">
                <p>{{$footer->description}} </p>
            </div>
            @endforeach
        </div>
    
        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
        
            <div class="footer-single">
                <h6>Subscribe </h6>
                <form action="/News" method="POST" class="subscribe">
                    @csrf
                    <input type="text" name="email" id="subscribe">
                    <input type="submit" value="&#8594;" id="subs">
                </form>
                <p>Contact us</p>
            </div>
                
        </div>
    
        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
            <div class="footer-single">
                <h6>Explore</h6>
                <ul>
                    @foreach ($link as $link)
                <li><a href="{{$link->link}}">{{$link->name}} </a></li>
                    @endforeach
                </ul>
            </div>
        </div>
{{--     
        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
            <div class="footer-single">
                <h6>Support</h6>
                <ul>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Market Blog</a></li>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Pressroom</a></li>
                </ul>
            </div>
        </div> --}}
        
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="copyright text-center">
                Copyright © 2015 <a href="http://themefisher.com/">Themefisher</a>. All rights reserved. Designed & developed by <a href="http://themefisher.com/">Themefisher</a>
            </p>
        </div>
    </div>
</div>
</footer>

<a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

<!-- Essential jQuery Plugins
================================================== -->
<!-- Main jQuery -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- Single Page Nav -->
<script src="js/jquery.singlePageNav.min.js"></script>
<!-- Twitter Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- jquery.fancybox.pack -->
<script src="js/jquery.fancybox.pack.js"></script>
<!-- jquery.mixitup.min -->
<script src="js/jquery.mixitup.min.js"></script>
<!-- jquery.parallax -->
<script src="js/jquery.parallax-1.1.3.js"></script>
<!-- jquery.countTo -->
<script src="js/jquery-countTo.js"></script>
<!-- jquery.appear -->
<script src="js/jquery.appear.js"></script>
<!-- Contact form validation -->
{{-- <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
<!-- Google Map --> --}}
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<!-- jquery easing -->
<script src="js/jquery.easing.min.js"></script>
<!-- jquery easing -->
<script src="js/wow.min.js"></script>
<script>
var wow = new WOW ({
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       120,          // distance to the element when triggering the animation (default is 0)
    mobile:       false,       // trigger animations on mobile devices (default is true)
    live:         true        // act on asynchronously loaded content (default is true)
  }
);
wow.init();
</script> 
<!-- Custom Functions -->
<script src="js/custom.js"></script>

 <script type="text/javascript">
// $(function(){
//     /* ========================================================================= */
//     /*	Contact Form
//     /* ========================================================================= */
    
//     $('#contact-form').validate({
//         rules: {
//             name: {
//                 required: true,
//                 minlength: 2
//             },
//             email: {
//                 required: true,
//                 email: true
//             },
//             message: {
//                 required: true
//             }
//         },
//         messages: {
//             name: {
//                 required: "come on, you have a name don't you?",
//                 minlength: "your name must consist of at least 2 characters"
//             },
//             email: {
//                 required: "no email, no message"
//             },
//             message: {
//                 required: "um...yea, you have to write something to send this form.",
//                 minlength: "thats all? really?"
//             }
//         },
//         submitHandler: function(form) {
//             $(form).ajaxSubmit({
//                 type:"POST",
//                 data: $(form).serialize(),
//                 url:"process.php",
//                 success: function() {
//                     $('#contact-form :input').attr('disabled', 'disabled');
//                     $('#contact-form').fadeTo( "slow", 0.15, function() {
//                         $(this).find(':input').attr('disabled', 'disabled');
//                         $(this).find('label').css('cursor','default');
//                         $('#success').fadeIn();
//                     });
//                 },
//                 error: function() {
//                     $('#contact-form').fadeTo( "slow", 0.15, function() {
//                         $('#error').fadeIn();
//                     });
//                 }
//             });
//         }
//     });
// });
</script>
</body>
</html>