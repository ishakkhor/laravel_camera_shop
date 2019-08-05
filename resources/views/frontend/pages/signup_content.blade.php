
@extends('frontend.pages.signup')
@section('signup_content')


<section id="basic-form-layouts">
 
  

  <div class="row justify-content-md-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header" style="min-width: 77vw; text-align: center;">
          <h4 class="card-title" id="bordered-layout-card-center" >SignUp</h4>
          
        </div>
        <div class="card-body">
          <div class="px-3">

            @if(session()->has('message'))
              <div class="alert alert-success">
                  {{ session()->get('message') }}
              </div>
            @endif

            <form action="{{action('CustomerController@store')}}" method="post" class="form form-horizontal form-bordered">
              {{csrf_field()}}
              <div class="form-body">


                <div class="form-group row">
                  <label class="col-md-3 label-control" for="eventRegInput1">Customer Name</label>
                  <div class="col-md-9">
                    <input type="text" id="eventRegInput1" class="form-control" placeholder="enter customer name" name="customer_name">
                  </div>
                </div>


                <div class="form-group row">
                  <label class="col-md-3 label-control" for="eventRegInput1">Phone</label>
                  <div class="col-md-9">
                    <input type="text" id="eventRegInput1" class="form-control" placeholder="enter customer phone" name="phone">
                  </div>
                </div>



                <div class="form-group row">
                  <label class="col-md-3 label-control" for="eventRegInput1">Email</label>
                  <div class="col-md-9">
                    <input type="email" id="eventRegInput1" class="form-control" placeholder="enter customer email" name="email">
                  </div>
                </div>


                <div class="form-group row">
                  <label class="col-md-3 label-control" for="eventRegInput1">Country</label>
                  <div class="col-md-9">
                    <input type="text" id="eventRegInput1" class="form-control" placeholder="enter your country" name="country">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-md-3 label-control" for="eventRegInput1">City</label>
                  <div class="col-md-9">
                    <input type="text" id="eventRegInput1" class="form-control" placeholder="enter your city" name="city">
                  </div>
                </div>


                <div class="form-group row">
                  <label class="col-md-3 label-control" for="eventRegInput1">Zip Code</label>
                  <div class="col-md-9">
                    <input type="text" id="eventRegInput1" class="form-control" placeholder="enter your zip code" name="zip_code">
                  </div>
                </div>


                <div class="form-group row">
                  <label class="col-md-3 label-control" for="eventRegInput1">Address</label>
                  <div class="col-md-9">
                    <input type="text" id="eventRegInput1" class="form-control" placeholder="enter customer address" name="address_line">
                  </div>
                </div>




              </div>

              <div class="form-actions center">
                <button type="button" class="btn btn-raised btn-warning mr-1">
                  <i class="ft-x"></i> Cancel
                </button>
                <button type="submit" class="btn btn-raised btn-primary">
                  <i class="fa fa-check-square-o"></i> Save
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



@endsection