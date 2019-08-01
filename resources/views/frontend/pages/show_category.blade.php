@extends('frontend.layouts.default')
@section('home_content')

                        <div class="shop-topbar-wrapper">
                            <div class="product-sorting-wrapper">
                                <div class="product-show shorting-style">
                                    <label>Showing <span>1-20</span> of <span>100</span> Results</label>
                                    <select>
                                        <option value="">12</option>
                                        <option value="">24</option>
                                        <option value="">36</option>
                                    </select>
                                </div>
                            </div>
                            <div class="grid-list-options">
                                <ul class="view-mode">
                                    <li class="active"><a href="#product-grid" data-view="product-grid"><i class="ti-layout-grid4-alt"></i></a></li>
                                    <li><a href="#product-list" data-view="product-list"><i class="ti-align-justify"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="grid-list-product-wrapper">
                            <div class="product-view product-grid">
                                <div class="row">



                                @foreach($allproduct as $product)

                                    <div class="product-width col-lg-6 col-xl-4 col-md-6 col-sm-6">
                                        <div class="product-wrapper mb-10">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img style="height: 200px; width: 100%;" src="{{asset('/images/'.$product['product_image'])}}" alt="">
                                                </a>
                                                
                                                <!-- Product Modal -->

                                                <div class="product-action">
                                                    <a title="Quick View" data-toggle="modal" data-target="#exampleModal{{$product['id']}}" data-id="{{$product['id']}}, {{$product['product_name']}}, {{$product['product_image']}}" href="#">
                                                        <i class="ti-plus"></i>
                                                    </a>
                                                    <a title="Add To Cart" href="{{ url('add-to-cart/'.$product['id']) }}">
                                                        <i class="ti-shopping-cart"></i>
                                                    </a>
                                                </div>
                                                <div class="product-action-wishlist">
                                                    <a title="Wishlist" href="#">
                                                        <i class="ti-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="#">{{$product['product_name']}}</a></h4>
                                                <div class="product-price">
                                                    <span class="new">৳ {{$product['product_price']}}</span>
                                                    <!-- <span class="old">$50.00</span> -->
                                                </div>
                                            </div>
                                            <div class="product-list-content">
                                                <h4><a href="#">{{$product['product_name']}}</a></h4>
                                                <div class="product-price">
                                                    <span class="new">৳ {{$product['product_price']}}</span>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consect adipis elit, sed do eiusmod tempor incididu ut labore et dolore magna aliqua. Ut enim ad quis nostrud exerci ullamco laboris nisi ut aliquip ex ea commodo consequat, Duis aute irure dolor.</p>
                                                <div class="product-list-action">
                                                    <div class="product-list-action-left">
                                                        <a class="addtocart-btn" title="Add to cart" href="{{ url('add-to-cart/'.$product['id']) }}"><i class="ion-bag"></i> Add to cart</a>
                                                    </div>
                                                    <div class="product-list-action-right">
                                                        <a title="Wishlist" href="#"><i class="ti-heart"></i></a>
                                                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal{{$product['id']}}" href="{{ url('add-to-cart/'.$product['id']) }}"><i class="ti-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


<!--  -->

 <div class="modal fade" id="exampleModal{{$product['id']}}" tabindex="-1" role="dialog" aria-hidden="true">
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
                                        <img src="{{asset('/images/'.$product['product_image'])}}" alt="">
                                    </div>
                                   <!--  <div class="tab-pane fade" id="modal2" role="tabpanel">
                                        <img src="{{URL::to('frontend/assets/img/quick-view/l2.jpg')}}" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal3" role="tabpanel">
                                        <img src="{{URL::to('frontend/assets/img/quick-view/l3.jpg')}}" alt="">
                                    </div> -->
                                </div>
                            </div>
                            <!-- <div class="quick-view-list nav" role="tablist">
                                <a class="active" href="#modal1" data-toggle="tab" role="tab">
                                    <img src="{{URL::to('frontend/assets/img/quick-view/s1.jpg')}}" alt="abc">
                                </a>
                                <a href="#modal2" data-toggle="tab" role="tab">
                                    <img src="{{URL::to('frontend/assets/img/quick-view/s2.jpg')}}" alt="123">
                                </a>
                                <a href="#modal3" data-toggle="tab" role="tab">
                                    <img src="{{URL::to('frontend/assets/img/quick-view/s3.jpg')}}" alt="456">
                                </a>
                            </div> -->
                        </div>
                        <div class="qwick-view-right">
                            <div class="qwick-view-content">
                                <h3>{{$product['product_name']}}</h3>
                                <div class="product-price">
                                    <span>৳ {{$product['product_price']}}</span>
                                </div>
                                <div class="product-rating">
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                </div>
                                <p>{{$product['product_long_description']}}</p>
                                <div class="quick-view-select">
                                    
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
                                        <a class="btn-style" href="{{ url('add-to-cart/'.$product['id']) }}">add to cart</a>
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

<!--  -->













                                @endforeach   
                                    
                                </div>























                                <div class="pagination-style text-center mt-10">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="icon-arrow-left"></i></a>
                                        </li>
                                        <li>
                                            <a href="#">1</a>
                                        </li>
                                        <li>
                                            <a href="#">2</a>
                                        </li>
                                        <li>
                                            <a class="active" href="#"><i class="icon-arrow-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
            

            @stop