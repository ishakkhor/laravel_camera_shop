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

        <!--- Slider--->
        @include('frontend.layouts.slider')



        <div class="shop-area pt-100 pb-100 gray-bg">
            <div class="container">
                <div class="row flex-row-reverse">
                   <!-- content -->
                    <div class="col-lg-9">
         @include('frontend.layouts.content')
                    </div>
                    
                    <!-- leftbar -->
                    <div class="col-lg-3">
         @include('frontend.layouts.leftbar')
                    </div>

                </div>
            </div>
        </div>
		<!-- footer -->
         @include('frontend.layouts.footer')


		<!-- modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="ti-close" aria-hidden="true"></span>
            </button>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="qwick-view-left">
                            <div class="quick-view-learg-img">
                                <div class="quick-view-tab-content tab-content">
                                    <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                        <img src="assets/img/quick-view/l1.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal2" role="tabpanel">
                                        <img src="assets/img/quick-view/l2.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal3" role="tabpanel">
                                        <img src="assets/img/quick-view/l3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="quick-view-list nav" role="tablist">
                                <a class="active" href="#modal1" data-toggle="tab" role="tab">
                                    <img src="assets/img/quick-view/s1.jpg" alt="">
                                </a>
                                <a href="#modal2" data-toggle="tab" role="tab">
                                    <img src="assets/img/quick-view/s2.jpg" alt="">
                                </a>
                                <a href="#modal3" data-toggle="tab" role="tab">
                                    <img src="assets/img/quick-view/s3.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="qwick-view-right">
                            <div class="qwick-view-content">
                                <h3>Dog Calcium Food</h3>
                                <div class="product-price">
                                    <span>$19.00 </span>
                                </div>
                                <div class="product-rating">
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do amt tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                                <div class="quick-view-select">
                                    <div class="select-option-part">
                                        <label>Size*</label>
                                        <select class="select">
                                            <option value="">- Please Select -</option>
                                            <option value="">XS</option>
                                            <option value="">S</option>
                                            <option value="">M</option>
                                            <option value=""> L</option>
                                            <option value="">XL</option>
                                            <option value="">XXL</option>
                                        </select>
                                    </div>
                                    <div class="select-option-part">
                                        <label>Color*</label>
                                        <select class="select">
                                            <option value="">- Please Select -</option>
                                            <option value="">orange</option>
                                            <option value="">pink</option>
                                            <option value="">yellow</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="quickview-plus-minus">
                                    <div class="cart-plus-minus">
                                        <input type="text" value="2" name="qtybutton" class="cart-plus-minus-box">
                                    </div>
                                    <div class="quickview-btn-cart">
                                        <a class="btn-style" href="#">add to cart</a>
                                    </div>
                                    <div class="quickview-btn-wishlist">
                                        <a class="btn-hover" href="#"><i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		
		
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
        <script src="{{asset('frontend/assets/js/main.js')}}"></script>
    </body>
</html>
