@extends('backend.layouts.default')
@section('admin_content')

<section id="basic-form-layouts">
 
  

  <div class="row justify-content-md-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header" style="min-width: 77vw;">
          <h4 class="card-title" id="bordered-layout-card-center">Update Brand</h4>
          
        </div>
        <div class="card-body">
          <div class="px-3">
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
            <form action="{{route('brand.update', $brand['id'])}}" method="post" class="form form-horizontal form-bordered">
              {{csrf_field()}}
              <div class="form-body">
              	<input type="hidden" name="_method" value="PATCH">
                <div class="form-group row">
                  <label class="col-md-3 label-control" for="eventRegInput1">Brand Name</label>
                  <div class="col-md-9">
                    <input type="text" id="eventRegInput1" class="form-control" placeholder="enter brand name" name="brand_name" value="{{$brand->brand_name}}">
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