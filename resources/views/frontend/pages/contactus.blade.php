<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Shakkhor's Camera Shop eCommerce</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/img/favicon.png')}}">
		
		<!-- all css here -->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/simple-line-icons.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/jquery-ui.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/meanmenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">
        <script src="{{asset('frontend/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>


        <!--- Header--->

        @include('frontend.layouts.header')




        @yield('contactus_content')
        <!-- footer -->
        @include('frontend.layouts.footer')


        <!-- modal -->
       
        
        
        
        <!-- all js here -->
        <script src="{{asset('frontend/assets/js/vendor/jquery-1.12.0.min.js')}}"></script>
        <script src="{{asset('frontend/assets/js/popper.js')}}"></script>
        <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('frontend/assets/js/waypoints.min.js')}}"></script>
        <script src="{{asset('frontend/assets/js/elevetezoom.js')}}"></script>
        <script src="{{asset('frontend/assets/js/ajax-mail.js')}}"></script>
        <script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('frontend/assets/js/plugins.js')}}"></script>
        <script src="{{asset('frontend/https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo')}}"></script>
        <script>
            function init() {
                var mapOptions = {
                    zoom: 11,
                    scrollwheel: false,
                    center: new google.maps.LatLng(40.709896, -73.995481),
                    styles: 
                    [
                        {
                            "featureType": "administrative",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#444444"
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "color": "#f2f2f2"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "saturation": -100
                                },
                                {
                                    "lightness": 45
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "simplified"
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "color": "#F6AB44"
                                },
                                {
                                    "visibility": "on"
                                }
                            ]
                        }
                    ]
                };
                var mapElement = document.getElementById('map');
                var map = new google.maps.Map(mapElement, mapOptions);
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.709896, -73.995481),
                    map: map,
                    icon: 'assets/img/icon-img/map.png',
                    animation:google.maps.Animation.BOUNCE,
                    title: 'Snazzy!'
                });
            }
            google.maps.event.addDomListener(window, 'load', init);
        </script>
        <script src="{{asset('frontend/assets/js/main.js')}}"></script>
    </body>
</html>
