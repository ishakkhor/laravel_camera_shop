@extends('backend.layouts.default')
@section('admin_content')


<section id="dom">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header" style="min-width: 77vw;">
          <h4 class="card-title">All Product</h4>
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
                  <th>ID</th>
                  <th>Product Name</th>
                 
                  <th>Short Description</th>
                  <th>long Description</th>
                  <th>Price</th>
                  <th>Image</th>
                  <th>Color</th>
                  <th>Status</th>
                  <th>Action</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach($allproduct as $product)
                <tr>
                  <td>{{$product['id']}}</td>
                  <td>{{$product['product_name']}}</td>
                  
                  <td>{{$product['product_short_description']}}</td>
                  <td>{{$product['product_long_description']}}</td>
                  <td>{{$product['product_price']}}</td>
                  <td><img style="height: 60px; width: 60px;" src="{{asset('/images/'.$product['product_image'])}}"></td>
                  <td>{{$product['product_color']}}</td>
                  <td>{{$product['publication_status']}}</td>
                  <td>
                      
                    <form action="{{action('ProductController@destroy', $product['id'])}}" method="post">
                    {{csrf_field()}}
                 
                  
                    <input type="hidden" name="_method" value="DELETE">
                   <a class="btn btn-success" href="{{Route('product.edit', $product['id'])}}">Edit</a> |
                   <input type="submit" class="btn btn-danger" value="Delete">
                   
                  </form>

                    
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