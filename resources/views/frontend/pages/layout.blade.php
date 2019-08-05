<!DOCTYPE html>
<html>
<head>
 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
    <title>@yield('title')</title>
 
    

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



   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 
</head>
<body>
 

 
<div class="container page">
    @yield('content')
</div>
 
@yield('scripts')
 
</body>
</html>