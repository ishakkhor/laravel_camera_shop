@extends('backend.layouts.default')
@section('admin_content')


<section id="dom">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header" style="min-width: 77vw;">
          <h4 class="card-title">All Brand</h4>
          <p class="card-text"></p>
        </div>
        <div class="card-content ">
          <div class="card-body card-dashboard table-responsive">
            <table class="table table-striped table-bordered dom-jQuery-events">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Brand Name</th>
                  <th>Action</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach($allbrand as $brand)
                <tr>
                  <td>{{$brand['id']}}</td>
                  <td>{{$brand['brand_name']}}</td>
                  <td>
                      
                    <form action="{{action('BrandController@destroy', $brand['id'])}}" method="post">
                    {{csrf_field()}}
                 
                  
                    <input type="hidden" name="_method" value="DELETE">
                   <a class="btn btn-success" href="{{Route('brand.edit', $brand['id'])}}">Edit</a> |
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