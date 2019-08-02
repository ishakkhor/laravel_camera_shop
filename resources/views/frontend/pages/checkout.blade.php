@extends('frontend.pages.layout')

@section('content')

@include('frontend.layouts.header')


        <form action="{{action('OrderController@store')}}" method="post">
         <!-- shopping-cart-area start -->
        <div class="checkout-area pt-95 pb-70">
            <div class="container">
                <h3 class="page-title">checkout</h3>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="checkout-wrapper">
                            <div id="faq" class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title"><span>1</span> <a data-toggle="collapse" data-parent="#faq" href="#payment-1">Checkout method</a></h5>
                                    </div>
                                    <div id="payment-1" class="panel-collapse collapse show">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="checkout-register">
                                                        <h5 class="checkout-sub-title">great an account</h5>
                                                        <p>Please enter your email address to create an account</p>
                                                        <form>
                                                            <label> Email Address </label>
                                                            <input type="email" name="email">
                                                            <button class="checkout-btn" type="submit">Great An Account</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="checkout-login">
                                                        <h5 class="checkout-sub-title">login</h5>
                                                        <form>
                                                            <div class="login-form">
                                                                <label> Email Address </label>
                                                                <input type="email" name="email">
                                                            </div>
                                                            <div class="login-form">
                                                                <label> Password </label>
                                                                <input type="email" name="email">
                                                            </div>
                                                        </form>
                                                        <div class="login-forget">
                                                            <button class="checkout-btn" type="submit">Login</button>
                                                            <a href="#">Forgot your password?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title"><span>2</span> <a data-toggle="collapse" data-parent="#faq" href="#payment-2">billing information</a></h5>
                                    </div>
                                    <div id="payment-2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="billing-information-wrapper">
                                                <div class="row">

                                                 {{csrf_field()}}



                                       



                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-info">
                                                            <label>Customer Name</label>
                                                            <input type="text" name="customer_name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-info">
                                                            <label>Phone</label>
                                                            <input type="text" name="phone">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-info">
                                                            <label>Email</label>
                                                            <input type="email" name="email">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-select card-mrg">
                                                            <label>Country</label>
                                                            <select name="country">
                                                                <option value="Bangladesh">Bangladesh</option>
                                                                <option value="United State">United State</option>
                                                                <option value="Azerbaijan">Azerbaijan</option>
                                                                <option value="India">India</option>
                                                                <option value="Nepal">Nepal</option>
                                                                
                                                              
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-info">
                                                            <label>city</label>
                                                            <input type="text" name="city">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-info">
                                                            <label>Zip/Postal Code</label>
                                                            <input type="text" name="zip_code">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="billing-info">
                                                            <label>Address</label>
                                                            <input type="text" name="address_line">
                                                        </div>
                                                    </div>

                                                    
                                                    

                                                    <div class="ship-wrapper">
                                                    <div class="single-ship">
                                                        <input type="radio" name="payment_status" value="" checked="">
                                                        <label>Bkash Payment</label>
                                                    </div>                                                  
                                                </div>
                                                    
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="billing-info">
                                                            <label>Trx ID</label>
                                                            <input type="text" name="trx_id">
                                                        </div>
                                                    </div>
                                                    <div class="billing-back-btn">
                                                    
                                                    <div class="billing-btn">
                                                        <button type="submit">Submit</button>
                                                    </div>
                                                </div>

                                     
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title"><span>3</span> <a data-toggle="collapse" data-parent="#faq" href="#payment-6">Order Review</a></h5>
                                    </div>
                                    <div id="payment-6" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="order-review-wrapper">
                                                <div class="order-review">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="width-1">Product Name</th>
                                                                    <th class="width-2">Price</th>
                                                                    <th class="width-3">Qty</th>
                                                                    <th class="width-4">Subtotal</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                        <?php $total = 0 ?>
                        @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <?php $total += $details['price'] * $details['quantity'] ?>
                        @endforeach
                        @endif



                        @if(session('cart'))
                        @foreach(session('cart') as $id => $details)


                                                                <tr>
                                                                    <td>
                                                                        <div class="o-pro-dec">
                                                                            <p>{{$details['name']}}</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="o-pro-price">
                                                                            <p>{{$details['price']}}</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="o-pro-qty">
                                                                            <p>{{$details['quantity']}}</p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="o-pro-subtotal">
                                                                            <p>{{$details['price']}}</p>
                                                                        </div>
                                                                    </td>
                                                                </tr>





                                         <input type="hidden" name="product_id" value="22">
                                        <input type="hidden" name="product_name" value="nikon camera">
                                        <input type="hidden" name="qty" value="2">
                                        <input type="hidden" name="payment_status   " value="1">











                                                                


                    @endforeach
                    @endif
                              


                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <td colspan="3">Subtotal </td>
                                                                    <td colspan="1">{{$details['price']}}</td>
                                                                </tr>
                                                                <tr class="tr-f">
                                                                    <td colspan="3">Shipping & Handling (Flat Rate - Fixed</td>
                                                                    <td colspan="1">$00.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="3">Grand Total</td>
                                                                    <td colspan="1">{{$total}}</td>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                    <div class="billing-back-btn">
                                                        <span>
                                                            Forgot an Item?
                                                            <a href="#"> Edit Your Cart.</a>

                                                        </span>
                                                        <div class="billing-btn">
                                                            <button type="submit">Continue</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="checkout-progress">
                            <h4>Checkout Progress</h4>
                            <ul>
                                <li>Billing Address</li>
                                <li>Shipping Address</li>
                                <li>Shipping Method</li>
                                <li>Payment Method</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 </form>

@include('frontend.layouts.footer')

@endsection
	