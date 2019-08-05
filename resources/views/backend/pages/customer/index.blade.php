@extends('backend.layouts.default')
@section('admin_content')


<section id="dom">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header" style="min-width: 77vw;">
          <h4 class="card-title">All Customer</h4>
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

                 
                  <th>Customer Name</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Country</th>
                  <th>City</th>
                  <th>Zip Code</th>
                  <th>Address</th>
                  <th>Action</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach($allcustomer as $customer)
                <tr>
                  <td>{{$customer['customer_name']}}</td>
                  <td>{{$customer['phone']}}</td>
                  <td>{{$customer['email']}}</td>
                  <td>{{$customer['country']}}</td>
                  <td>{{$customer['city']}}</td>
                  <td>{{$customer['zip_code']}}</td>
                  <td>{{$customer['address_line']}}</td>
                  
                  <td>
                      
                    <a href="" class="btn btn-success" >Edit</a>
                    <a href="" class="btn btn-warning" >Delete</a>

                    
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