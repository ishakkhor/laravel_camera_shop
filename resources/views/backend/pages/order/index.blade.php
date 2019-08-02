@extends('backend.layouts.default')
@section('admin_content')


<section id="dom">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header" style="min-width: 77vw;">
          <h4 class="card-title">All Order</h4>
          <p class="card-text"></p>
        </div>
        <div class="card-content ">
          <div class="card-body card-dashboard table-responsive">

            @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
            <table class="table table-striped table-bordered dom-jQuery-events">
              <thead>
                <tr>
                  <th>Order</th>
                  <th>Product ID</th>
                  <th>Product Name</th>
                 
                  <th>QTY</th>
                  <th>Trx ID</th>
                  <th>Customer Name</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Country</th>
                  <th>City</th>
                  <th>Zip Code</th>
                  <th>Address</th>
                  <th>Payment Status</th>
                  <th>Action</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach($allorder as $order)
                <tr>
                  <td>{{$order['id']}}</td>
                  <td>{{$order['product_id']}}</td>
                  <td>{{$order['product_name']}}</td>
                  
                  <td>{{$order['qty']}}</td>
                  <td>{{$order['trx_id']}}</td>
                  <td>{{$order['customer_name']}}</td>
                  <td>{{$order['phone']}}</td>
                  <td>{{$order['email']}}</td>
                  <td>{{$order['country']}}</td>
                  <td>{{$order['city']}}</td>
                  <td>{{$order['zip_code']}}</td>
                  <td>{{$order['address_line']}}</td>
                  <td>
                    @if($order['payment_status']==1)
                      
                      <span class="btn btn-success">Complected</span>
                      @else
                      <span class="btn btn-warning">Pending</span>

                    @endif



                  </td>
                  <td>
                      
                    <a href="" class="btn btn-success" >edit</a>

                    
                 </td>
                 
                </tr>
                @endforeach
              </tbody>
             
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection